/*
Write a query to get the difference between the highest and lowest salaries.
*/

SELECT MAX(salary) - MIN(salary) AS difference FROM employees;
