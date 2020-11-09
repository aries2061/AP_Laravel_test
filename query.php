+----------------------+
| Tables_in_university |
+----------------------+
| major                |
| record               |
| student              |
+----------------------+


"student" table
+----+---------+----------+--------------+--------------+
| id | name    | major_id | phonenumber  | address      |
+----+---------+----------+--------------+--------------+
|  1 | Dave    |        4 | 0987654321   | Yangon       |
|  2 | Bob     |        5 | 09899786796  | Mandalay     |
|  3 | Charlie |        4 | 091324343532 | Pyin Oo Lwin |
|  4 | Dave    |        5 | 098786756545 | Yangon       |
|  5 | Emma    |        6 | 0988675655   | Mandalay     |
|  6 | Fred    |        3 | 099786786787 | Mandalay     |
|  7 | Emma    |        1 | 0988675655   | Mandalay     |
|  8 | Emma    |        1 | 0988675655   | Mandalay     |
+----+---------+----------+--------------+--------------+



"major" table
+----+------+
| id | name |
+----+------+
|  1 | ICT  |
|  2 | EcE  |
|  3 | PrE  |
|  4 | AME  |
+----+------+



+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



//CREATING DATABASE
create database university;



//RETRIVING DATABASES
show databases;



//CREATING TABLE
create table student(
    id INT(11) UNSIGNED AUTO_INCREASEMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    major_id INT(11) UNSIGNED NOT NULL DEFAULT '0',
    phonenumber VARCHAR(100) NOT NULLL,
    address TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
);



//RETRIEVING DATA FROM TABLE
select * from student;

select name,address from student;

select DISTINCT(address) from student;

select * from student where name LIKE '%d%';

select * from student where id IN (1,2,5) ORDER BY id DESC;



//JOINING TABLES

select * FROM student 
INNER JOIN major
on student.major_id=major.id ORDER BY student.major_id;

Result =>

+----+---------+----------+--------------+--------------+----+------+
| id | name    | major_id | phonenumber  | address      | id | name |
+----+---------+----------+--------------+--------------+----+------+
|  7 | Emma    |        1 | 0988675655   | Mandalay     |  1 | ICT  |
|  8 | Emma    |        1 | 0988675655   | Mandalay     |  1 | ICT  |
|  6 | Fred    |        3 | 099786786787 | Mandalay     |  3 | PrE  |
|  1 | Dave    |        4 | 0987654321   | Yangon       |  4 | AME  |
|  3 | Charlie |        4 | 091324343532 | Pyin Oo Lwin |  4 | AME  |
+----+---------+----------+--------------+--------------+----+------+