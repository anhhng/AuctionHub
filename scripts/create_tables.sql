-- db2 -td"^" -f create.sql

DROP TABLE items^
DROP TABLE users^
DROP TABLE bids^

CREATE TABLE items	(	
				id	int NOT NULL GENERATED ALWAYS AS IDENTITY (START WITH 100, INCREMENT BY 1, NO CACHE), 
				name	varchar(20) NOT NULL,
                description	varchar(256) NOT NULL,	
				post_price int,
				post_date date NOT NULL WITH DEFAULT CURRENT DATE,
				post_time time NOT NULL WITH DEFAULT CURRENT TIME,
				end_date date,
				image clob(5242880),
				condition char(10),
				poster_email varchar(50),
				winner_email varchar(25),
				primary key (id) 
                    
					)^
			 
CREATE TABLE users	(
				first_name varchar(30),
				last_name varchar(30),
				email varchar(50) NOT NULL,
				password varchar(20) NOT NULL,
				is_seller char(1) CHECK ( is_seller IN ( 'T' , 'F' ) )
				
					)^

CREATE TABLE bids	(

						item_id int,
						number_of_bids int,
						highest_bid_amount int,
						highest_bidder varchar (50),
						foreign key (item_id) references items (id) 
						)^
