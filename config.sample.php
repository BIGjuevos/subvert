<?php
/**
 * PLEASE READ THIS FILE ALL THE WAY THROUGH, IT'S SHORT TO BE EASY TO READ
 *
 * NOTES:
 * All paths should end with a "/"
 * It is best to make all of your paths absolute
 *
 * Before use please remove the die() statement at the bottom of the file to use.
 */

/**
 * This is your username on the subversion repository.
 * You should already have all of the usernames and passwords sotred in subversion for your repositories.
 * Or have an SSH key established with that host.
 */
$user = "ryan.null";

/**
 * which protocol to cannect with
 * can be any valid protocol your install of subversion supports
 */
$proto = "svn+ssh";

/**
 * Subversion server host name
 */
$server = "bookit-dev.com";

/**
 * remote path to subversion repositories
 */
$remotePath = "/var/svn/projects/";

/**
 * The location where all working diectories should be stored
 *
 * /home/<your username>username/repos is normally a nice idea
 */
$repoPath = "/home/username/repos/";

/**
 * All of your repositores where the key is the part after $remotePath
 * The value of the pair is the storage path relative to $repoPath
 *
 * You can have as many as you want.
 * These all count as one "project"
 * They can be nested/embedded.
 */
$repos = array(
	"repoName" => "path/to/be/stored/relative_to/repoPath",
	"anotherRepo" => "path/relative_to/repoPath",
	"embeddedRepo" => "path/relative_to/repoPath/but/underneath/another/repo",
);

/**
 * if you want to use swap to swtich between checked out branches/releases/tags
 * and trunks dynamically, this should be the web root of your local web server
 */
$webRoot = "/path/to/web/root/";

/**
 * These lines should be removed so all of the tools will work
 */
die("Make sure you completely configure your config.php file");
