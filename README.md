## set up
```
docker build -t php-74 .
docker run -it --rm -v "$PWD":/var/www php-74 bash
composer install
```

execute unit test
```
./vendor/bin/phpunit
```