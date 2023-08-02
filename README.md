# Mitch Designs

## Installation

First, clone this repository, install the dependencies, and setup your .env file.


https://github.com/abdoeltotongy/User-Management-System.git

composer install

cp .env.example .env


 

Then create the necessary database.

create database users




And run the initial migrations  

php artisan migrate


 

## Then Install Fortify


composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"

And Add  App\Providers\FortifyServiceProvider::class
to config app.php

php artisan migrate


 
## Install Mailtrap

create a project in https://mailtrap.io/inboxes

in SMTP Settings choose Laravel +9 

copy Credentials and add to file .env Like  


MAIL_MAILER=smtp

MAIL_HOST=sandbox.smtp.mailtrap.io

MAIL_PORT=587

MAIL_USERNAME=3f671f5ca8e18c

MAIL_PASSWORD=1dd32039955fc6

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS=users@example.com

MAIL_FROM_NAME="Users"
