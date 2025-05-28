-- create testing database
CREATE DATABASE IF NOT EXISTS `test_db`;

-- grant all privileges to default user
GRANT ALL PRIVILEGES ON *.* TO 'default'@'%';
