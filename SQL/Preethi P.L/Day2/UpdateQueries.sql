

UPDATE Employees SET Email = 'Not Available';

UPDATE Employees SET email='not available',
CommissionPct=0.10;

UPDATE Employees SET email='not available',
CommissionPct=0.10 WHERE DepartmentId=110;

UPDATE Employees SET email='not available' WHERE DepartmentId=80 AND CommissionPct<0.20;

UPDATE Employees SET email='not available' 
WHERE DepartmentId = (SELECT DepartmentId FROM Departments WHERE DepartmentName='Accounting');

UPDATE Employees SET Salary=8000 WHERE EmployeeId=105 AND Salary < 5000

UPDATE Employees SET JobID= 'SH_CLERK' WHERE EmployeeID=118 AND DepartmentID=30 AND NOT JobID LIKE 'SH%';

UPDATE Employees SET Salary=Salary+(Salary*0.25) WHERE DepartmentID=40
UPDATE Employees SET Salary=Salary+(Salary*0.15) WHERE DepartmentID=90
UPDATE Employees SET Salary=Salary+(Salary*0.10) WHERE DepartmentID=110

