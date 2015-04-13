# Section 4 - Organization and Projects

## Lesson 2 - Data Models And Validation

## Practical Application

We've talked about separating our code that talks to our data out from our other code.  We've talked about consolidating our
data from our database into an object, with some rules for what the data should contain.

## Steps to Take

1. Create a basic database class we will inject into our other classes
2. Create two classes to consolidate our communication with the database
3. Create two classes to define what our data should look like

### Base PDO class

Let's create a "base class" for our database connection, that extends the PDO class

1. Create a class that extends PDO in a Journal namespace
    - hint: remember to use any class at the top of your file
2. Allow it to take a $db_path and a $db_file parameters
3. Create the proper string to talk to the database, and store it
4. Make sure you turn exceptions on for pdo
5. Add db_path and db_file into our configuration, create the db class in our index.php using those values

### Database Classes

In section 3 we learned to perform basic sql queries, and we've already created some classes with basic
functionality to insert, update, delete and list entries, edit a user, get a user, and verify a password for a user.

Now we'll change those classes
1. Move Users.php and Entries.php into /src/Journal/Model
2. Add the Journal\Model namespace to both
3. Instead of creating their own connection, allow a Journal\DB instance to be injected

### Data Object

This is the first real code you'll need to write

1. Create a User.php and an Entry.php class in /src/Journal/Model
2. Allow an array to be passed in optionally and use it to set properties in the class
    - this will be helpful when we tie our data in with form submits
3. Create public properties for all our data columns
4. Take the validate edit and validate create functions we wrote with forms, and copy them into these classes
5. Have them use the class properties instead of data in an array to validate the information

### Integrating data objects and the data classes
1. Change the insert and update functions in Entries.php and Users.php to accept either User or Entry classes, instead of arrays use properties to assign values for binding.
2. Use PDO fetchObject with a classname for fetching single items, and use PDO::setFetchMode with object and a classname to make sure you're returning your new data objects