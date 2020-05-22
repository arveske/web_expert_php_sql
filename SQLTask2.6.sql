/*
Write a query to find the manager ID and the salary of the lowest-paid employee for
that manager.
*/

SELECT DISTINCT manager_id, MIN(salary) FROM employees
GROUP BY manager_id;
