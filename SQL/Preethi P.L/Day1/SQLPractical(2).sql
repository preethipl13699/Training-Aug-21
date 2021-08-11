USE sqltraining
CREATE TABLE jobhistory
(
	EmployeeId int NOT NULL PRIMARY KEY IDENTITY(1,1), 
	StartDate date, 
	End_Date varchar(10), CHECK (End_Date LIKE '[0-9][0-9]/[0-9][0-9]/[0-9][0-9][0-9][0-9]'), 
	Job_Id int NOT NULL, 
	Department_Id int NOT NULL
)

SELECT * FROM jobhistory
INSERT INTO jobhistory VALUES('01-01-1999','01/01/2006',13,04)