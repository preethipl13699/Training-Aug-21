ALTER TABLE jobhistory ADD CONSTRAINT fk_job_id FOREIGN KEY(JobId) REFERENCES jobs(JobId)  

ALTER TABLE jobhistory DROP CONSTRAINT fk_job_id

ALTER TABLE jobhistory ADD Location varchar(20)

