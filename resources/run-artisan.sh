cp -r /vendor /code
cd /code
php artisan cache:clear
php artisan config:cache
php artisan view:clear
