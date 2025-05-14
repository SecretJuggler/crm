A lightweight and straightforward Customer Relationship Management (CRM) system built with PHP.

REQUIREMENTS
PHP 8.2 or higher
MySQL
Apache Web Server
Composer

There is a config.php for storing database credentials and mail settings for sending emails. 

Set Up the Web Server

Make sure the project folder is accessible via your local server.

Example for Apache: point a VirtualHost to the project’s public directory.

Create a temp file in the public directory and paste the following script inside it and then run it.
///////////////////////////////////////////////////////////////////////////////////
```php
<?php 
require 'index.php';

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$tableCheck = $db->query("SHOW TABLES LIKE 'notes'");

if ($tableCheck->rowCount() > 0) {
    $output .= 'Notes table already created<br />';
} else {
    $table = "CREATE TABLE `users` (
        `id` int NOT NULL AUTO_INCREMENT,
        `email` varchar(255) DEFAULT NULL,
        `first_name` varchar(100) DEFAULT NULL,
        `last_name` varchar(100) DEFAULT NULL,
        `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `reset_password` tinyint NOT NULL DEFAULT '1',
        PRIMARY KEY (`id`),
        UNIQUE KEY `users_email_IDX` (`email`) USING BTREE
      ) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";
    $db->exec($table);
}

$db->query("INSERT INTO users (first_name, last_name, email, password) VALUES(:first_name, :last_name, :email, :password)", [
    'first_name' => 'admin',
    'last_name' => 'admin',
    'email' => 'admin@admin.com',
    'password' => password_hash('password', PASSWORD_BCRYPT),
]); 

The script will create the users table and an admin user.
You will log into the system with the following credentials
admin@admin.com
password

This will then request you to change your password :)
