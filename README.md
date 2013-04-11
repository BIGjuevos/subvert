subvert
=======
Subversion toolkit in PHP to make things easier.

Key Features:
* Multiple nested subversion repositories.
* Working with multiple branches/releases/tags/trunks.
* Matching structures across repositories.
* Fancy color coding.
* Tools that automate tasks like merging, branching, releasing.
* Fancier log tracking and searching.
* Comment based merging, for commits with ticket numbers.
* Get the status of all repos from any where within a working copy.
* Other tools for localized testing.
* Other cool things.

installation
============
* Clone to ~/subvert
* Add ~/subvert/bin to your $PATH
* Copy ~/subvert/config.sample.php to ~/bin/config.php
* Make sure ~/subvert/bin/* are u+x
* Make sure that $repoPath exists and is writable by your user.
* Make sure your username
* Enjoy!

requirements
============
Software
* PHP 5.x

PHP Modules
* php-svn
* php-sqlite3

commands
========
Subversion Tools:
* checkout: checks out the requested path
* st: gets the status of the current repo in the current working directory.

Other Tools:
* swap: update symbolic links for a local web host to point to repository for testing

notes
=====
Works best in a bash linux environment.  Not tested in anything else.

These are the tools I use at work to make my life easier with subversion.  I hope they can maybe help you as well.
