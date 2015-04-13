# Section 4 - Organization and Projects

## Lesson 3 - Views and Templates

## Practical Application

We've learned how it's useful to keep all of our html in one place, and out of our PHP files.
We've also learned how 

### Writing a Template Class

Exercise 1:

1. Create a template class
2. Make sure it can accept a template location in the constructor
3. Give it a render method that can include a PHP file
4. Remember scope!  The template will have access to everything in the class, and variables in your method! Create an example that echos that information.
5. Create a template file and use your template class to display it twice, with different information

### Escaping is Important!

Exercise 2:

1. Use your template class in another example, this time create a variable with some html inside
2. Create an escapeHtml method that properly escapes output for html
3. Use that inside a template with the same data