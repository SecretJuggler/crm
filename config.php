<?php 

return [
    'database' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'dbname' => 'jobs-crm'
    ],
    'settings' => [
        'folder' => parse_url($_SERVER['REQUEST_URI'])['path']
    ],
    'mail' => [
        'host' => 'sandbox.smtp.mailtrap.io',
        'username' => 'd4d67c8aa8f946',
        'password' => 'f297ec4578abf1',
        'port' => 465,
        'encryption' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
        'from_email' => 'danmcneil2704@gmail.com',
        'from_name' => 'Recruitment CRM',
    ],
    'app' => [
        'url' => 'http://localhost:8888/'
    ]
];