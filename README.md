## Memulai
1. Instalasi
   
   ```
   git clone https://github.com/arfandi03/laravel-biodata.git
   ```
2. `composer install`
3. `copy .env.example .env`
4. Konfigurasi database
   
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=biodata
    DB_USERNAME=root
    DB_PASSWORD=
   ```
5. `php artisan migrate --seed`
6. `php artisan serve` (http://127.0.0.1:8000)

**Login Admin**
```
Email: admin@app.com
Password: password
```