CREATE TABLE `employees` (
  `EMPLOYEE_ID` decimal(10,0),
  `FIRST_NAME` varchar(20),
  `LAST_NAME` varchar(20),
  `EMAIL` varchar(30),
  `PHONE_NUMBER` varchar(20),
  `HIRE_DATE` date,
  `JOB_ID` varchar(20),
  `SALARY` decimal(10,2),
  `COMMISSION_PCT` decimal(5,2),
  `MANAGER_ID` decimal(10,0),
  `DEPARTMENT_ID` decimal(10,0) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `employees` WRITE;
INSERT INTO `employees` VALUES (100,'Steven','King','SKING','515.123.4567','1987-06-17','AD_PRES',24000.00,0.00,0,90),(101,'Neena','Kochhar','NKOCHHAR','515.123.4568','1987-06-18','AD_VP',17000.00,0.00,100,90),(102,'Lex','De Haan','LDEHAAN','515.123.4569','1987-06-19','AD_VP',17000.00,0.00,100,90),(103,'Alexander','Hunold','AHUNOLD','590.423.4567','1987-06-20','IT_PROG',9000.00,0.00,102,60),(104,'Bruce','Ernst','BERNST','590.423.4568','1987-06-21','IT_PROG',6000.00,0.00,103,60);
UNLOCK TABLES;

CREATE TABLE `departments` (
  `DEPARTMENT_ID` decimal(4,0) ,
  `DEPARTMENT_NAME` varchar(30),
  `MANAGER_ID` decimal(6,0),
  `LOCATION_ID` decimal(4,0) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `departments` WRITE;
INSERT INTO `departments` VALUES (10,'Administration',200,1700),(20,'Marketing',201,1800),(30,'Purchasing',114,1700),(40,'Human Resources',203,2400),(50,'Shipping',121,1500),(60,'IT',103,1400);
UNLOCK TABLES;

UPDATE employees SET salary= CASE department_id 
WHEN 40 THEN salary+(salary*.25) 
WHEN 90 THEN salary+(salary*.15)
WHEN 110 THEN salary+(salary*.10)
ELSE salary
END
WHERE department_id IN (10,20,30,40,50,60,90);
 
 