/*
Write a query to get the total salary, maximum, minimum, average salary of
employees (job ID wise), for department ID 90 only.
*/

SELECT sum(SALARY), max(salary), min(salary), AVG(salary) FROM employees
WHERE department_id=90
GROUP by JOB_ID;
