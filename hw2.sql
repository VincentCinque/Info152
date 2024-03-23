/*************************************************************
 * File name: HW_INFO152/hw2/index.php
 * Purpose: INFO152-HW2, Build and Enhance “Product Discount”
 * Author: Vincent R. Cinque
 * DrexelId: vrc45
 * Complete Date: 2024/03/24
 ************************************************************/

 DROP DATABASE IF EXISTS HW2;
 CREATE DATABASE HW2;
 USE HW2;


 CREATE TABLE Students (
    student_ID  VARCHAR(6)  NOT NULL,
    full_name   VARCHAR(25) NOT NULL,
    age INT(2)  NOT NULL,
    gender  CHAR(1) NOT NULL,
    PRIMARY KEY (student_ID)
);

INSERT INTO Students 
VALUES ('vrc45', 'Vincent Cinque', 30, 'M');

INSERT INTO Students 
VALUES ('ab123', 'Shirly Temple', 23, 'F');

INSERT INTO Students 
VALUES ('ab234', 'Dale Earnhart', 49, 'M');


GRANT SELECT
ON Students
TO usr@localhost
IDENTIFIED BY "vrc45";