# FizzBuzz
An implementation of the popular FizzBuzz assignment, BDD with Behat. Inspired by the excellent book [Principles of Package Design]("Principles of Package Design")

## Run docker
```
cd docker
docker-compose up -d
```


## Install
```
docker-compose exec php bash
cd ../fizzbuzz
composer install
```

## Run scenario
```
vendor/bin/behat
```