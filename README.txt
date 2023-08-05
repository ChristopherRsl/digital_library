Christopher Russell
russellchristopher002@gmail.com

ACCOUNT:
email : admin@gmail.com  (admin)
password : admin1

email : detik@detik.com (admin)
password : detik1

email : bob@gmail.com  (user)
password : bobbob

Database setup :
start Apache and MySQL in XAMPP or any. Import database_digital_library.sql to database if needed.

Migrations:
run the following line in terminal to create all tables and columns needed.
->php artisan migrate

Seeding:
run the following line in terminal to add data to the tables and columns. Seed will generate 2 admin and 1 user in user table and 10 random books and 3 books with sample cover image and pdf file. 
-> php artisan db:seed

File Upload:
run the following line in terminal to link storage to public. This project will save cover image and pdf file in server's file system.
->php artisan storage:link

Running the App:
run the following line in terminal to deploy 
-> php artisan serve