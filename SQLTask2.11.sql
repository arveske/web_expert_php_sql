/*
Write a query to get the average salary for all departments employing more than 10
employees.
*/
SELECT department_id, avg_sal from
(
SELECT department_id, COUNT(*) as emp_num, AVG(salary) as avg_sal FROM employees
GROUP by department_id
) as t
WHERE emp_num > 10;
