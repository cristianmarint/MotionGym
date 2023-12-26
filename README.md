1. Clone the repo git clone https://github.com/cristianmarint/MotionGym.git
2. cd MotionGym
3. docker-compose up -d
4. composer install 
5. php artisan key:generate 
6. php artisan db:seed
7. php artisan migrate 
8. php artisan voyager:admin admin@motion.gym --create
    admin@motion.gym admin 
[//]: # (7. php artisan storage:link mv public\storage_old\* public\storage)

9. php artisan voyager:admin admin@motion.gym --create
   1. user: admin
   2. password: admin

[//]: # (php artisan voyager:install)
