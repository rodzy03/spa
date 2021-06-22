## Installation


## Datebase
1. install xammp and open phpmyadmin
2. create database in phpmyadmin
3. import database inside decode_tech/decode_tech.sql
4. edit .env file base on your phpmyadmin credentials if no env file create one.


## Run Project
1. place project in htdocs
2. go to the directory and type the command php artisan serv --host your_ip_address
3. copy the link address e.g example 192.168.100.23:8000/landing-page


## File Locations

1. decode_tech/app/Http/Controllers/AdminController.php
2 .decode_tech/routes/web.php
3. decode_tech/resources/views/landing_page.blade.php
4. decode_tech/resources/views/verify_email.blade.php
5. database is inside folder decode_tech.sql
