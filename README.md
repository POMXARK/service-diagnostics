- docker-compose -p service-diagnostics up -d --build
в терминале докера
- php composer_2.phar dump-autoload
- php artisan config:cache
- php artisan migrate
- chmod -R 777 storage/logs/
- npm run prod
- php artisan websockets:serve

в другом терминале:
- ./fake_client.sh
