# Local environment
This local environment includes database, app and server services

The main idea is to unify our development environment.

It is tested on Mac, and theoretically can work on Windows (may need some tweaks).


## Requirement
1. docker for mac / docker tool box for windows

1. Accessibility of our git repos https://github.com/jtlimson/laravel8-socialite-authentication/

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

### Initialize

`docker-compose up -d`

### Stop

`docker-compose down`
