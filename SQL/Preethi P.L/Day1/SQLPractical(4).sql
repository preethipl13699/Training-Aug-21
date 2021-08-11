USE sqltraining
CREATE TABLE department
(
	DepartmentId int PRIMARY KEY IDENTITY(01,1),
	DepartmentName varchar(20) NOT NULL
)
SELECT * FROM department
INSERT INTO department VALUES('PHP'),('Dotnet'),('Android')

USE sqltraining
CREATE TABLE employees 
(
	 Employee_Id int PRIMARY KEY IDENTITY(100,1), 
	 FirstName varchar(10) NOT NULL, 
	 LastName varchar(10) NOT NULL, 
	 Email varchar(30) NOT NULL, 
	 PhoneNumber numeric(10) NOT NULL, 
	 Hire_Date date NOT NULL, 
	 JobId int FOREIGN KEY REFERENCES jobs(JobId), 
	 Salary int NOT NULL, 
	 Commission int, 
	 Manager_Id int NOT NULL,
	 DepartmentId int FOREIGN KEY REFERENCES department(DepartmentId)
)
SELECT * FROM employees
INSERT INTO employees VALUES('Rita','Shah','ritashah@gmail.com',9685078456,'01-01-2000',1,10000,2000,12,2)
INSERT INTO employees VALUES('Rita','Shah','ritashah@gmail.com',9685078456,'01-01-2000',5,10000,2000,12,7)