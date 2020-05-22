/*
Write a query to get the average salary for each job ID excluding programmer.,
*/

SELECT JOB_ID, avg(SALARY) FROM employees
WHERE JOB_ID<>'IT_PROG'
GROUP BY JOB_ID;
