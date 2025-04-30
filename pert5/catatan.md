**API**

salin :
db
nginx
php
tempate

setelah itu langsung ke terminal dan lakukan seperti di bawah:

docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
rm -rf * (kalau gagal)
rm -rf .* (kalau gagal)
chown -R www-data:www-data storage/*
edit env :
APP_NAME="PemWeb"
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd


php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 bootstrap/*

abis itu buat:

php artisan make:model Client -ms
php artisan make:model Product -ms
php artisan make:controller Api/ProductApiController
php artisan make:middleware ClientAuth

setelah diubah codingnya semua lanjut ke:
php artisan make:filament-resource Client --generate
php artisan make:filament-resource Product --generate

dan setelah itu baut :
php artisan make:middleware ClientAuth

buak naviacte
buka postman

ketinggalan pa sini eror pas di migration 