/*
Write a query to get the maximum salary of an employee working as a Programmer
(“IT_PROG”).
*/

SELECT Max(SALARY) FROM employees
WHERE JOB_ID='IT_PROG';
