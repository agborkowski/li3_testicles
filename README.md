li3_testicles
=============

li3_testicles is a plugin that gives the Lithium test suite some balls. :)

It takes a while to run the entire Lithium test suite, so while I'm hacking
the core I usually prefer to run a smaller set of tests that relate only to
the classes I am modifying. This plugin fixes some of the frustrations I
experienced with the testing interface when using it this way.

The plugin currently adds the following behaviour:

-	Makes the test list column fixed and scrollable
-	Highlights the currently run tests in the test list
-	Automatically scrolls the test list panel to the first test
	that was executed on page load.

Installation
------------

1.	Clone or download the `li3_testicles plugin` into `app/libraries/li3_testicles`.
2.	Add `Libraries::add('li3_testicles')` to `app/config/bootstrap/libraries.php`.
3.	Ensure `app\config\bootstrap\media.php` is require()'d inside `app/config/bootstrap.php`.
4.	View the test suite by visiting `http://url.of.your.app/test` in your browser.
5.	If you can't see the changes for some reason, you might need to delete your
		library and template cache in `app/resources/tmp/cache`.