# Local environment
This local environment includes database, app and server services

The main idea is to unify our development environment.

It is tested on Mac, and theoretically can work on Windows (may need some tweaks).


## Requirement
1. docker for mac / docker tool box for windows

2. composer

3. Accessibility of our git repos https://github.com/jtlimson/laravel8-socialite-authentication/

## How to use

### Add .env config 

```
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=your_mysql_root_password

GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=

FACEBOOK_APP_SECRET=
FACEBOOK_APP_SECRET=

GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=

```

### Update composer 

`composer install`

### Initialize

`docker-compose up -d`

### Stop

`docker-compose down`

### Usage

| Route                | Social Media                    |
|----------------------|---------------------------------|
|url/login/facebook    | Facebook                        |
|url/login/google      | Google                          |
|url/login/github      | Github                          |
|url/login/twitter     | xx                              |