Project 2 - Password Generator

Version 1.2

This is my completed working version of the password generator.
It has 2 php files, index.php and password.php. Index.php is
where the user can input their options for the generator, and
password.php is the actual generator, which takes the options,
generates a password, and writes the password to a Session variable
which index.php can then read and echo to the user.

ChangeLog

1.2:
*Added server side validation and checks for length of string and whether it is a number from 0-9
*Replaced words.csv dictionary. It's now a list of the 17,000 most common words in the (American) English language. 
[Credit to Josh Kaufman at https://github.com/first20hours/google-10000-english for the txt file]

1.1:
*Fixed redirect in password.php
*Fixed the CSS and made the password output box neater
*Fixed bug with 1 or 0 word passwords having a scrollbar
*Fixed mobile view

1.0:
*Added dictionary file and file to array parser
*Added Main CSS file
*Added Comic
*Moved isnumber right below password output
*Added bootstrap class names


liveurl: http://p2.stevengolden.me
screencast demo: http://p2.stevengolden.me/demo.mp4