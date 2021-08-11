USE sqltraining
CREATE TABLE jobs
(
	JobId int PRIMARY KEY IDENTITY(1,1), 
	JobTitle varchar(20) DEFAULT '', 
	MinSalary int DEFAULT 8000,
	MaxSalary int DEFAULT NULL 	
)
SELECT * FROM jobs
INSERT INTO jobs(JobTitle) VALUES('developer')
INSERT INTO jobs(MaxSalary) VALUES(30000)
INSERT INTO jobs(MinSalary) VALUES(9000)