# Section 4 - Organization and Projects

## Lesson 1 - File Layout and Organization

## Practial Application

Most of the items we've learned about don't have a lot of code associated with them.
We've learned concepts of file layout, the imporatnce of keeping stuff out of our docroot, and started on the idea of separating
parts of our code.

But we do have a few concepts we can work on

### Concepts of Dependency Injection

Exercise 1:

1. Create an object that holds three different properties
2. Create one script that stores those properties in an object and passes them in
3. Create one script that stores those properties in an array and passes them in
4. Create one script that stores those values in variables and passes them in
5. What are other ways the data might be stored?
    - Databases
    - Ini Files
    - Json

### Using and Writing Autoloaders

Exercise 2:

1. Write an autoloader class
2. Allow the autoloader class to store a base path where it will look for classes
3. Write a register class that the autoloader can use to put itself on the spl_autoload_register stack
4. Write a load class that replaces backslashes in a name with forward slashes - this will make namespaces act like directory separators