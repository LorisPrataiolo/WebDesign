DROP USER IF EXISTS 'webDesignAdmin'@'localhost';
CREATE USER IF NOT EXISTS 'webDesignAdmin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON webdesignDB. * TO 'webDesignAdmin'@'localhost';