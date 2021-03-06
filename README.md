# FizzBuzz
[![Build Status](https://travis-ci.org/sebastianwestberg/FizzBuzz.svg?branch=master)](https://travis-ci.org/sebastianwestberg/FizzBuzz)

An implementation of the popular FizzBuzz assignment. Behat was used for BDD. 
Inspired by the excellent book ["Principles of Package Design"](https://leanpub.com/principles-of-package-design).

### Run with docker
```
cd docker
docker-compose up -d
docker-compose exec php bash
cd ../fizzbuzz
```


### Install
```
composer install
```

### Run scenario
```
vendor/bin/behat
```

### Run tests
```
vendor/bin/phpunit tests
```