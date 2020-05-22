/*
Write a query to get the job ID and maximum salary of the employees where
maximum salary is greater than or equal to $4000.
*/
SELECT JOB_ID, MAX_SALARY FROM
(
SELECT JOB_ID, max(salary) as MAX_SALARY FROM employees
GROUP by JOB_ID
) AS t
WHERE MAX_SALARY >= 4000;
