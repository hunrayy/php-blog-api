-- ROLE TABLE 
CREATE TABLE IF NOT EXISTS `roles`(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `position` VARCHAR(50),
    `date` TIMESTAMP DEFAULT CURRENT_TIME 
);


CREATE TABLE IF NOT EXISTS `admins`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `firstname` VARCHAR(100),
    `lastname` VARCHAR(100),
    `email` VARCHAR(100),
    `password` VARCHAR(100),
    `role_id` INT(11),
    `status` TINYINT(0),
    CONSTRAINT role_auth FOREIGN KEY(`role_id`) REFERENCES `roles`(`id`) ON DELETE CASCADE,
    `registered_at` timestamp DEFAULT CURRENT_TIME
);

-- AUTHOR'S TABLE
CREATE TABLE IF NOT EXISTS `authors`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(500),
    `content` LONGTEXT,
    `admin_id` INT,
    CONSTRAINT fk_auth FOREIGN KEY(`admin_id`) REFERENCES `admins`(`id`) ON DELETE CASCADE,
    `registered_at` timestamp DEFAULT CURRENT_TIME
);
-- EDITOR'S TABLE
CREATE TABLE IF NOT EXISTS `editors`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `admin_id` INT,
    `title` VARCHAR(200),
    `content` LONGTEXT,
    `author_id` INT,
    CONSTRAINT edit_auth FOREIGN KEY(`admin_id`) REFERENCES `authors`(`id`) ON DELETE CASCADE,
    `edited_date` timestamp DEFAULT CURRENT_TIME
);

-- PUBLISHER'S TABLE
CREATE TABLE IF NOT EXISTS `publishers`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `admin_id` INT,
    `editor_id` INT,
    `author_id` INT,
    CONSTRAINT pub_auth FOREIGN KEY(`admin_id`) REFERENCES `admins`(`id`) ON DELETE CASCADE,
    CONSTRAINT pub_edit_auth FOREIGN KEY(`editor_id`) REFERENCES `editors`(`id`) ON DELETE CASCADE,
    CONSTRAINT author_auth FOREIGN KEY(`author_id`) REFERENCES `authors`(`id`) ON DELETE CASCADE,
    `publiahed_date` timestamp DEFAULT CURRENT_TIME
);