# libune
A simple Integrated Library System (ILS) for low resourses schools in Laravel

## Getting Started
Libune is a web aplication for the management of a school library. The administrators of the library can borrow books to students and teachers of the institution with the help of a mobile device. In addition, book registration can be facilitated with the use of a scanner app and the printing of the necessary codes for the books.

### Objective
The purpose of such aplication is to enable the management of a school library without the need of a computer nor a librarian.

### Instalation
```
git clone https://github.com/josephinedo/libune.git
cd libune
composer install
```
Then we need to configure the database, than means copy the .env_example file into an .env file and put the DB_DATABASE and DB_USERNAME. In our case we do:
```
DB_DATABASE=libune
DB_USERNAME=root
```
Now we can generate the key
```
php artisan key:generate
```
Next we need to do the migration, but before we got to create the database
```
mysql -u root
create databse libune;
exit;
```
Finally we are ready to run our migration along with the seeders.
```
php artisan migrate --seed
```

## Models
In principle there is gonna be three models:
```
Users
Admins
Books
```

## Database
In progress...

## Built With
* [Laravel](https://laravel.com/) - The web framework used

## Authors
* **Abrahan Pinedo** - [josephinedo](https://github.com/josephinedo)

## Acknowledgments
Thanks in advance to Samuel Mercado in the University of Guadalajara for his patiance and useful advices.
