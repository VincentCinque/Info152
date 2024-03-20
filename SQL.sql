
-- used to create the table
-- usint INT(), VARCHAR() will define what type of data is going into database
--[CONSTRAINT] is optional can limit if this column has empty value(NOTNULL), provide a primary key(every table must have a primary key must be unique)
-- 
--
CREATE TABLE XXX(
    columnName dataType [CONSTRAINT],
);

-- example *****************************************************************--
-- this table below is saying that it will only allow integers on the first line (up to 11) and can not be empty
-- second line is saying that it will contain a character such as numbers or letters up to 255 characters and can not be empty (NOTNULL)
-- auto increment will automatically ad 1 to the sequential catagory id for example if you have 1, guitars 2, basses, 3, drums and want to add 4, drumsticks then auto incrememnt will do this for you
-- without the need of typing 4 
CREATE TABLE categories(
    categoryID INT(11) NOTNULL AUTO_INCREMENT,
    catagoryName VARCHAR(255)  NOTNULL,
    PRIMARY KEY (categoryID)
);

-- Insert data/ row into table--
--XXX represents table name
-- insert into catagories values (1,'Guitars');
INSERT INTO XXX VALUES (yyy,yyy);
INSERT INTO xxx(xxx,xxx) VALUES (yyy,yyy);

-- to create a database--
database_name;
USE database_name;
CREATE TABLE table_name(
    ...     ...     ...
)

-- to delete database use:
DROP DATABASE IF EXISTS database_name;