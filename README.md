# [ gascntrl-laravel-web ]

--- 
#### DOCKER COMPOSE
* Build or rebuild services:
    - ```docker-compose build```
* Create and start containers:
    - ```docker-compose up -d```
* Stop and remove containers, networks:
    - ```docker-compose down```
* More commands:
    - ```docker-compose --help```

---

#### INITIAL CONFIGURATIONS
In your php client:
- ```cd /var/www/html/gascontrol```
- ```composer install```
- ```php artisan key:generate```

_no migrations by now: php artisan migrate:fresh --seed_

---
