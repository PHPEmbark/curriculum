# PHPEmbark

PHPEmbark is an open source, accessible introduction to PHP for beginners.

No previous programming experience for students is required, and the teaching methods may not work as well for those with previous programming experience.

This is not designed for "self" teaching, but around the concept of one or more instructors (either in person or using virtual tools) who are familar with the concepts leading the learning.

## License

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.

## Curriculum

The curriculum is designed around a learning cycle of theory, example, practice, and application.

This means a lesson begins with introduction of a theory, moves on to showing a practical example, the students perform one or more practice exercises, and then the newly aquired knowledge is applied toward building a practical application that can be run by the student.

The sections are structured with "The Lego Rule" in mind - concepts are taught one at a time, and build on each other to expand knowledge, with an absolute minimum of "handwaving" or "magic".

An attempt is made to reduce cognitive load by introducing only one new large skill per section.  This means, for example, that no CLI experience or knowledge is assumed until the second half of the course.  Instead the "refresh your browser" method of viewing output is used, and GUI tools are used for initial database interactions.

## Student Requirements

- A computer running Windows 7 or 8, OS X 10.6 or newer, or a Linux variant (we will assume Ubuntu Desktop for the purposes of this course)
- The ability to navigate the filesystem, including creating and deleting files and folders
- The ability to download and install software on your computer

## Software used

* [PHP 5.6](http://php.net)
    - We'll be using the built-in development HTTP server on port 8080
    - We will use SQLite databases
    - We will use PDO for database communication
* [Komodo Edit](http://komodoide.com/komodo-edit/)
    - Komodo Edit is free, open source code editor that runs on all three platforms we are supporting
    - This exact tool is not a hard requirement, if students already have a text editor or IDE capable of PHP, HTML, and CSS highlighting and preferably with autocomplete for PHP, that known tool can be used instead for file editing.
* A web browser, like Firefox or Google Chrome
* [sqlite browser](http://sqlitebrowser.org/)
 - Free Open source GUI for dealing with sqlite databases that runs on all three platforms we are supporting

## Curriculum Outline

Designed (except for Setup) in blocks of 1.5 to 2 hours, each section adds one
large concept with multiple small lessons. At the end of the 16 hours a student
should be at a level to work on or create basic PHP programs that talk to a
database. The curriculum can be done in one or two day workshops (there is a
natural break after section 4) or over a period of days or weeks online or at
usergroups. Sections attempt to have a natural break at a half-way point for
those restrained to 1 hour time slots.

0. Setup
1. Basic Programming
2. The Internet
3. Data and SQL
4. Organization and Projects
5. CLI Programming
6. Version Control
7. Composer and Libraries
8. Advanced OOP

## Resources

As part of this curriculum, students will be walking through a stepped approach to building a journal application, while learning core concepts of developing with the PHP programming language.

The full source of the journal application is provided at <https://github.com/PHPEmbark/journalapp>. Each branch in the repository represents a different lesson, each one building on the previous lessons.

The curriculum also assumes a basic setup that is similar accross platforms and provides installation tools to achieve this setup.

Students may download binaries for PHP, source code editors, and database tools, as well as zip packages of the journalapp lessons from the [releases page of the PHPEmbark/packages repository][release packages].

- **[Download latest packages][release packages]**


## Setup Concerns

### Windows
All windows software will be available as a portable install - simply drop the zip file in place, extract the contents, open the resulting directory, and double click the included .bat file or the shorcut to the application that you want to run.

Installers will also be available for windows for those wishing permanent installs of the software used, and instructions for downloading, configuring, installing, and running are also available.

## Mac OSX
Easy installers are available for the sofware tools on OSX

Newer versions of the operating system already have the correct PHP version installed.

For older versions upgrades to PHP 5.6 should be done - possibly use http://php-osx.liip.ch ?? still under discussion

## Linux
Because this is a beginner course, most Linux users will need to figure out their own way of setting up an environment, since those users tend to be more advanced.

We will provide instructions for Ubuntu, which tends to be most commonly used for desktop linux systems.

The software chosen is available as .deb packages for Ubuntu and is easy to install.  Up to date PHP versions are readily available for Ubuntu as well, either as stock versions or by using available ppa's - instructions will also be provided for this.

## Teacher and Student Downloads
Eventually we will have ready to go downloads for teachers (training, slides, how to present tips, handouts for printing, and helper notes), and students (examples, exercises, handouts for viewing, ready to run application)


[release packages]: https://github.com/PHPEmbark/packages/releases/latest
