DB2 DROP DATABASE Auction
DB2 CREATE DATABASE Auction

DB2 CONNECT TO Auction
DB2 GRANT SECADM ON DATABASE TO USER DB2ADMIN

DB2 -td"^" -f scripts/create_tables.sql


DB2 -td"^" -f scripts/insert_items.sql
DB2 -td"^" -f scripts/insert_users.sql
rem DB2 -td"^" -f scripts/insert_bids.sql

DB2 -td"^" -f scripts/insert_items2.sql


