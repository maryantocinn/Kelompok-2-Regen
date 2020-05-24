# Airline Ticketing Web Application



## Installation

### Tools needed:
1. Composer
2. Laragon / XAMPP

### Steps :
1. Make a new database using your preferred app with any name
2. Make .env file from .env.example
3. Change DB_DATABASE value to the name of database you've just created
4. Open project folder in VSCODE and run these: 

```bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
5. Open the link provided in terminal

(Optional)
6. Set up mailtrap account to .env to enable reset password feature


## Bugs

-

## Contributing
Billie, Chris Jericho, Dennis, Mario, Maryanto

