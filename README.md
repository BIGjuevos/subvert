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
* Ability to work contextually within a branch through directory structure.
* Other cool things.

installation
============
* Clone to ~/subvert
* Add ~/subvert/bin to your $PATH
* Copy ~/subvert/config.sample.php to ~/bin/config.php
* Make sure ~/subvert/bin/* are u+x
* Read and Update config.php
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
* checkout: checks out the repositories as configured
* commit: commits to all repositories in the current branch
* f: general search utility - basically colored recursive grep command
* merge: merge code between two branches (remote->local) or (local->local) based on several possible conditions
* resync: sync local subvert database with remote log
* st: gets the status of the current repo in the current working directory
* swap: switch local testing web path to another checkout branch
* up: updates repos to latest and will resync the database as well

Other Tools:
* swap: update symbolic links for a local web host to point to repository for testing.
* f: a grep search shortcut command.  Ignores subversion repositories and returns color coded results with lines per file.

notes
=====
Works best in a bash linux environment.  Not tested in anything else.

These are the tools I use at work to make my life easier with subversion.  I hope they can maybe help you as well.

license
=======
Creative Commons - Attribution-ShareAlike 3.0 Unported  (CC BY-SA 3.0)

http://creativecommons.org/licenses/by-sa/3.0/
