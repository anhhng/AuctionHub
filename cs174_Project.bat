rem DB2 DROP DATABASE Auction
rem DB2 CREATE DATABASE Auction

DB2 CONNECT TO Auction
DB2 GRANT DBADM ON DATABASE TO USER DB2ADMIN

DB2 -td"^" -f scripts/create_tables.sql

DB2 -td"^" -f scripts/insert_items.sql
DB2 -td"^" -f scripts/insert_users.sql



