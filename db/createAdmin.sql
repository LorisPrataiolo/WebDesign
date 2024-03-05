DROP USER IF EXISTS 'webDesignAdmin';
CREATE USER IF NOT EXISTS 'webDesignAdmin' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON webDesignDB. * TO 'webDesignAdmin';