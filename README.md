# phpcreation-sdk-php
phpcreation-sdk-php

## Installation

Using composer:

```
composer require phpc/phpcreation-sdk-php
```

## Semantic Versioning

Semantic release workflow is configured which follows the commitlint commit message convention. Whenever you want to publish new version of package, manual trigger the workflow from GitHub actions to deploy new version.

## PHPCreation Team section

### Run the setup locally

Use the docker compsoe to run the container

```
$ docker compose up --build
```

Install the dependencies

```
$ ./exec "composer install"
```

### How to Run Tests

In order to execute test cases, you can run the following command

```
$ ./vendor/bin/phpunit tests/
```
