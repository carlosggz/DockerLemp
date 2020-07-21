# Example of docker configuration for LEMP development

Components:
- Mail server, using MailDev
- Database server, using mysql 5
- Web server, using nginx/php-fpm/Laravel (multistage to get the composer dependencies)

The site shows how is the interaction of the web server with the rest of the servers.

## Instructions ##

- Clone the repository
- Go to the initial folder, where is located the .yml file
- Run docker-compose build, to create the containers
- Run docker-compose up -d to run the site. It can take several minutes because it needs to download the composer dependencies
- Open the browser and navigate to the http://localhost:8000

To stop the containers, run docker-compose down.

## Notes ##

The database component, has a folder containing a dump with the initial scripts of the database. The generated schemas, will be stored on the database folder.

The laravel code, contains the needed migrations in case you want to rebuild the database.
