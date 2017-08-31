# Grav Pattern Lab Starter
An example setup for building a Grav CMS site based on a Pattern Lab design system.

## Setup Instructions

1. Run `composer install` and wait a minute.
1. Run `./scripts/serve.sh` or run `docker-compose up` if you're a Docker fan.
2. View the site at [localhost:8000](http://localhost:8000).

## How To Use This

1. Update `composer.json` to point to your project-specific Pattern Lab repo.
2. Look at `scripts/compile.sh` and update as needed for your project-specific Pattern Lab setup.
3. Run `composer install` (which will automatically run `scripts/compile.sh` to compile PL and symlink things into your Grav theme).
4. Adjust the theme templates to match your actual Pattern Lab components.
5. Add some content and profit!