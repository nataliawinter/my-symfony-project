# My Symfony Project

- I have a friend, who often talked about symfony. Until one day, so curious, I decided to check what the framework was so special. So this is my repository where I'm learning symfony. Thanks @caioguedes

## Steps

`git clone git@github.com:nataliawinter/my-symfony-project.git`

`composer install`

Execute the `php -S 127.0.0.1:8000 -t public` command

Browse to the `http://localhost:8000/` URL.

Quit the server with CTRL-C. Run composer `require server --dev` for a better web server.

## Database Configuration
Modify your `DATABASE_URL` config in `.env`
Configure the driver (mysql) and server_version (5.7) in config/packages/doctrine.yaml

## How to test?
Write test cases in the `tests/` folder
Run `php bin/phpunit`

## Generating Controllers

`php bin/console make:controller BrandNewController`

## More info about Recipes

`https://symfony.com/doc/current/page_creation.html`