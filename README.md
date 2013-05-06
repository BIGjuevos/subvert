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
* checkout: checks out the requested path.
* commit: commits all of the subversion repos at once with the same commit message.
* merge: from from a branch to another branch, local or remote automatically.  Generally used for syncing with another branch.
* resync: syncs the revision database with the remote server.
* st: gets the status of the current repo in the current working directory.
* up: preforms an update on all found checked out copies within the checked out out branch.

Other Tools:
* swap: update symbolic links for a local web host to point to repository for testing.
* f: a grep search shortcut command.  Ignores subversion repositories and returns color coded results with lines per file.

notes
=====
Works best in a bash linux environment.  Not tested in anything else.

These are the tools I use at work to make my life easier with subversion.  I hope they can maybe help you as well.
