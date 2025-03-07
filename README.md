# お問い合わせフォーム

## 環境構築

### 1. リポジトリをクローン
```sh
git clone git@github.com:lillian-angelina/contact-form.git
cd ~/coachtech/laravel/confirmation-test

.env (Database)
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

docker-compose up -d --build

docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed

docker-compose.yml
services:
  nginx:
    image: nginx:latest
    container_name: contact_form_nginx
    ports:
      - "8082:80"
    volumes:
      - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
      - ./src:/var/www/
    depends_on:
      - php

  php:
    build: ./docker/php
    container_name: contact_form_php
    volumes:
      - ./src:/var/www/

  mysql:
    image: mysql:8
    container_name: contact_form_db
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: laravel_db
      MYSQL_USER: laravel_user
      MYSQL_PASSWORD: laravel_pass
    ports:
      - "3306:3306"
    volumes:
      - ./docker/mysql_data:/var/lib/mysql
      - ./docker/mysql/my.cnf:/etc/mysql/conf.d/my.cnf

  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    container_name: contact_form_phpmyadmin
    restart: always
    ports:
      - "8081:80"
    environment:
      PMA_ARBITRARY: 1
      PMA_HOST: mysql
      PMA_USER: laravel_user
      PMA_PASSWORD: laravel_pass
    depends_on:
      - mysql

## URL
- 開発環境: http://localhost:8082
- phpMyAdmin: https://localhost:8081
