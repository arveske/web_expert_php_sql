/*
Write a query to get the department ID and the total salary payable in each
department.
*/

SELECT department_id, sum(salary) FROM employees
GROUP BY department_id;
