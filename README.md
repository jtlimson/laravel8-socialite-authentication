# Local environment
This local environment includes database, app and server services

The main idea is to unify our development environment.

It is tested on Mac, and theoretically can work on Windows (may need some tweaks).


## Requirement
1. docker for mac / docker tool box for windows

2. composer

## How to use

### Add .env config 

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=your_mysql_root_password
```

### Generate artisan key

`php artisan key:generate`

### Initialize

1. On the root folder there a Dockerfile. Initiate build 

`docker build .`

2. Initiate docker-compose

`docker-compose up -d`

### Stop

`docker-compose down`
