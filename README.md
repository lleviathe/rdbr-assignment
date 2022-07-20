# Test assignment for Redberry - Recruitment system

## Stack: Docker, PHP 8.1, PostgreSQL 14, Nginx

## Features:

- [x] Feature/integration tests
- [x] Code coverage: over 80%
- [x] Latest PHP 8.1/Laravel improvements and features
- [x] Laravel Pint for codestyle fixing and linting
- [x] Application is deployed on Docker Compose, which makes it easy to deploy and run the application
- [x] Comprehensive documentation, which is generated by Scribe automatically (but, of course, you can change it
  manually) including code examples on PHP, JS and Bash, Postman collection and OpenAPI specification
- [x] Isolated application layers with low coupling between them
- [x] Easily extensible and maintainable code with high level of readability and type safety
- [x] Easy to use and intuitive API
- [x] Fast and reliable DBMS - PostgreSQL

## May be improved:

- [ ] Code coverage: over 90%
- [ ] Configure CI/CD pipeline
- [ ] Use DTOs to communicate between layers
- [ ] Implement different Docker deployments for different environments (e.g. production, staging, development) / use
  Kubernetes
- [ ] Use Pest - a nice testing framework for PHP

## Start the project:

    docker-compose up -d

## Run the tests:

    docker-compose exec app php artisan test

## Run the code coverage inspection and generate report:

    docker-compose exec app vendor/bin/phpunit --coverage-html reports/coverage

# Thanks for attention and enjoy reviewing!
