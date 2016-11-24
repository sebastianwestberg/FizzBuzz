# FizzBuzz
An implementation of the popular FizzBuzz assignment. I'm utilizing BDD with Behat and a simple testing with PHPUnit. 
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