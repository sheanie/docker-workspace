# Docker Workspace and Symfony/Slim workspaces

This docker environment spins up a collection of docker environments to support a LAMP stack for Symfony and Slim framework developments.  

## Installation

You will need docker to spin up the environments:

    ```bash
    $ docker-compose build
    $ docker-compose up -d
    ```
    
Alternatively, put the slim folder onto your virtual host and adjust the settings to get it talking to the database.  

Once running, you will need to do a composer install and setup the database with doctrine.  You can also populate it with some sample data. 

```bash
$ composer install
$ vendor/bin/doctrine orm:schema-tool:create
$ bin/console
```

## HR Application

The initial HR application has been created using the slim framework.  It uses the Twig templating engine and Doctrine ORM.  

Currently, you have a list of organisation and users and their respective view page.  

Frontend has used the Twitter Bootstrap.  

### TODO list

 * User Authentication Service
 * Login/Logout functionality
 * Roles and Permissions
 * My Profile Page
 * Add Organisations
 * Add Users
 * Delete Organisations
 * Delete Users
 * Edit Organisation
 * Edit User
 * Dashboard
 * Logging
 * Add in Datatables javascript library
 * User feedback messages
 
### Testing

There are currently no tests implemented for this project.  The following testing will be implemented:

 * PHPUnit
 * Behat tests
 
### Deployment

This project will be integrated with Travis and deployable  