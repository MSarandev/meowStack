# MeowStack

## Overview
This project is essentially a proof-of-concept thing.
I just really wanted to make a Laravel-ready socket.io application,
which takes server fired events, and displays them.
<br>
Simple stuff

## Purpose 
Erm, yes :D 

## Tech stack
```json
{
    "php": "7.3",
    "laravel": "6.x",
    "maria_db": "10.4",
    "nginx": "1.16"
}
```
All of this goodness, wrapped in a Docker-ready format, so you can 
deploy on the Moon (if you want to)

## Dependencies
The whole thing works based of "open APIs", here's a list that 
I found: https://github.com/public-apis/public-apis

List of currently used APIs:
<br>
(...)
<br>
(...)
<br>
(...)

## Setup
* Get the project (git clone)
* Copy the `.env.example` file into `.env`
* Register the networks:
    * `docker network create meowStack_internal`
    * `docker network create meowStack_external`
* Run `docker-compose up --build`

Go inside the container (app) <br>
`docker-compose exec app bash`

From inside the container:
* `composer install`
* `php artisan key:generate`


Enjoy :)