-- db2 -td"^" -f create.sql

DROP TABLE items^
DROP TABLE users^
DROP TABLE bids^

CREATE TABLE items	(	
				id	INT NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 100, INCREMENT BY 1, NO CACHE), 
				name	VARCHAR(20) NOT NULL,
                description	VARCHAR(256) NOT NULL,	
				post_price INT,
				post_date date NOT NULL WITH DEFAULT CURRENT DATE,
				post_time time NOT NULL WITH DEFAULT CURRENT TIME,
				end_date date,
				image CLOB(5242880),
				condition CHAR(10),
				poster_email VARCHAR(50),
				winner_email VARCHAR(25),
				PRIMARY KEY (id) 
                    
					)^
			 
CREATE TABLE users	(
				first_name VARCHAR(30),
				last_name VARCHAR(30),
				email VARCHAR(50) NOT NULL,
				password VARCHAR(20) NOT NULL,
				is_seller CHAR(1) CHECK ( is_seller IN ( 'T' , 'F' ) )
				
					)^

CREATE TABLE bids	(

						item_id INT ,
						number_of_bids INT,
						highest_bid_amount INT,
						highest_bidder VARCHAR (50),
						poster_email VARCHAR (50),
						FOREIGN KEY (item_id) REFERENCES items (id) ON DELETE CASCADE
						)^

CREATE TRIGGER sync 
AFTER INSERT ON items

REFERENCING NEW AS newrow
FOR EACH ROW
MODE DB2SQL

BEGIN ATOMIC
	INSERT INTO bids (item_id,number_of_bids,highest_bid_amount,poster_email) VALUES (newrow.id,0,newrow.post_price,newrow.poster_email);
END^						