# Traveladub.com

## Minimum Requirements
1. PHP >= 7.1.3
2. Composer

## Cara menjalankan aplikasi
Clone source codenya dengan perintah
```
git clone https://github.com/pramonoagung/traveladub.git
```

Install package dependency vendor untuk laravel
```
composer install
```

Konfigurasi database
* Buat file `.env` di dalam root directory  
* Copy isi dari file `.env.example` lalu paste di dalam file `.env`
* Isi informasi database : `DB_DATABASE`, `DB_USERNAME` dan `DB_PASSWORD`

Jalankan perintah dibawah untuk menghasilkan key
```
php artisan key:generate
```

Run project
```
php artisan serve
```
