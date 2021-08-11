CREATE TABLE car_employees
(
	Employee_id int PRIMARY KEY IDENTITY(100,1),
	EmployeeName varchar(20) NOT NULL,
	Email varchar(30) NOT NULL,
	MobileNo numeric(10) NOT NULL,
	EmployeeAddress varchar(200) NOT NULL,
	Bdate date NOT NULL,
	Salary int NOT NULL
	
)

CREATE TABLE inventory
(
	CarId int PRIMARY KEY IDENTITY(1,1),
	CarModel varchar(20) NOT NULL,
	Price int NOT NULL
)

CREATE TABLE sales
(
	SalesId int PRIMARY KEY IDENTITY(1,1),
	Employee_id int FOREIGN KEY REFERENCES car_employees(Employee_id),
	CarId int FOREIGN KEY REFERENCES inventory(CarId),
)
CREATE TABLE commission
(
	CommissionId int PRIMARY KEY IDENTITY(1,1),
	Employee_id int FOREIGN KEY REFERENCES car_employees(Employee_id),
	Commission_Percentage varchar(4)
)