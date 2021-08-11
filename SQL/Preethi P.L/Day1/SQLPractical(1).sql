CREATE DATABASE sqltraining
USE sqltraining
CREATE TABLE countries
(
	CountryId int NOT NULL PRIMARY KEY IDENTITY(1,1), 
	CountryName varchar(30) NOT NULL CHECK(CountryName IN('India','Italy','China')),
	RegionId int NOT NULL,
	CONSTRAINT chkid UNIQUE(CountryId,RegionId)
)

SELECT * FROM countries
INSERT INTO countries VALUES('Italy',10)
INSERT INTO countries VALUES('England',11)
INSERT INTO countries VALUES('India',12)
