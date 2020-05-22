/*
Write a query to get the number of employees with the same job.
*/

SELECT SUM(emp_num) FROM
(
SELECT COUNT(*) as emp_num FROM employees
GROUP BY job_id
) AS t
WHERE (emp_num > 1)
;
