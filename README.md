

## Requirements
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- GD PHP Extension
- Imagick PHP Extension 

***Note:***
Improper permission on `storage` & `public` folder will lead to server & application errors

##  Installation
1. Clone to your server root `git clone https://github.com/abdullahkaamil/gym `
> For faster updates and bleeding edge features, or if you want to help test the next version, use the `develop` branch instead of the `master` branch.
2. Run `composer install` to install all dependencies
3. Create `.env` in application root 
```cp .env.example .env```
4. Update database details and optional sentry DNS in `.env`
5. Run `php artisan key:generate` to generate key
6. Run `php artisan migrate --seed` to install the database & required data
7. Add cron entry for scheduled task to update status for various modules (subscription expiration etc)
```
* * * * * cd /path-to-gymie && php artisan schedule:run >> /dev/null 2>&1
```
For more info: https://laravel.com/docs/5.7/scheduling#introduction

8. All right sparky! 

use the following credentials to log in
```
email: akaamil@outlook.com
password: password
```

## Troubleshooting

**APP_KEY not getting added to .env**
- Add APP_KEY to .env
- Copy generated key from terminal

**Permission / 500 Internal Server Error**

Change permission on storage & cache
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
``` 

