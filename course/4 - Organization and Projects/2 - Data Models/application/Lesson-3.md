# Section 4 - Organization and Projects

## Lesson 3 - Views And Templates

## Practical Application

Templating and using the idea of "view" being separated from data and logic will allow us to have a common look and feel
and keep our html isolated from the rest of our application.

## Steps to Take

1. Pull our existing forms into separate html template files
2. Create a common html "base" file so we have a consistent look for all our logic
3. Create a base template class with some helpers
4. Create our template object and allow it to be "injected" into our code

### Pull out existing forms

In section 2 we created some forms that had accompanying validation.  We've already moved the validation in the last lesson.
In this lesson we'll move the html

1. Create an /src/Journal/View/tpl directory, we'll consolidate all our views here
2. Create a users directory inside - here we'll have 2 forms, our login form and our profile edit form
  - copy the html from those two forms
  - change the echos - for example use $this->user->display instead of $user['display']
3. Create a entries directory parallel to users -  here we'll have 3 forms and a list page
 - copy the html for the create, edit, and delete html from create.php, edit.php, and delete.php
 - copy the html for the list.php
 
Make sure all our forms use the database items

### Create our Base HTML

We're going to create a common piece of html to use for all pages, and we'll call a method called "content"
for individual pages to get the data they need

1. create a file in /src/Journal/View/tpl called base.html
2. Copy the basic html format from our "using boostrap" example
3. Where the content should go, add <?php $this->content(); ?>

### Create our base template class

Create a new class in the Journal namespace, put it next to your Db.php file in /src/Journal

1. Base it off of your class for our templates exercise
2. Make sure you can send it a base location for templates, and a name of a default "base" template in the constructor
3. Make sure it has an escapeHtml() method
4. Add a wrapText() method that does a nl2br on data sent to it, this will create nicely formatted posts.  Make sure it ALSO escapes any data
5. Add a "content" method that includes whatever template name is set
6. In your render method, instead of including the passed template, save it for content, and include the base template instead

### Creating and using our template object
1. Add our template settings to config
2. Create a template object in index.php to be used