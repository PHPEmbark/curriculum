# Section 4 - Organization and Projects

## Lesson 1 - File Layout and Organization

## Practical Application

We've learned about practial considerations when deciding how to organize a PHP application.  We've learned that there is a folder structure that most projects follow.
We've learned how separating our code up into areas helps make it easier to add new features, and we've learned that keeping things out of our docroot is important.

We're going to create a new directory for our journal application with a fresh layout.  We'll move all the pieces we've written in our other sections into our
new directory and we'll also incorporate bootstrap to make our site look nice.

## Steps to Take

1. Create a new directory to hold our journal application
2. Create a directory structure with a public directory, src directory, data directory, and config directory

### Data directory

This is where we'll store our sqlite database, and our schema.sql file that we built up in previous sections

1. Move the journal.sqlite file into the /data directory
2. Move the schema.sql file into the /data directory

### Config directory

This is where we'll store configuration information for our application

1. Create an empty config.php file in the /config directory
2. Make the config file return an empty array

### Public directory

This is where our web facing files go

1. Move our form related php files from section 2 into /public
2. Move our database php files from section 3 into /public
3. Grab the minimal bootstrap installation files from bootstrap.com or the downloaded package and place them in your public directory - we'll use these later to make our site look nice
4. Create an "index.php" file and fetch your configuration file with it

### Src directory

We're going to reorganize not only our files, but also pull pieces out of our code to make it easier to work with
The src directory will be the place where we end up storing our classes that do work

1. Create a 'Journal' directory
2. Move our 'Autoloader' class from our exercises into the Journal directory
3. Put the Autoloader in the Journal namespace
4. include and register it in your index.php