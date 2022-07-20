# Test assignment for Redberry - Recruitment system

## Stack: Docker, PHP 8.1, PostgreSQL 14, Nginx
## Features:
- [x] Feature/integration tests
- [x] Code coverage: over 80%
- [x] Latest PHP 8.1/Laravel improvements and features
- 

## Start the project:

    docker-compose up -d

## Run the tests:

    docker-compose exec app php artisan test

## Run the code coverage inspection and generate report:

    docker-compose exec app vendor/bin/phpunit --coverage-html reports/coverage
