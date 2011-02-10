<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'The file \'config.php\' doesn\'t exist or is corrupt. This implies that FluxBB has not yet been installed.',
'Choose install language'		=>	'Choose the install script language',
'Choose install language info'	=>	'The language used for this install script. The default language used for the board itself can be set below.',
'Install language'				=>	'Install language',
'Change language'				=>	'Change language',
'Next'							=>	'Next',
'Already installed'				=>	'It seems like FluxBB is already installed. You should go <a href="index.php">here</a> instead.',
'You are running error'			=>	'You are running %1$s version %2$s. FluxBB %3$s requires at least %1$s %4$s to run properly. You must upgrade your %1$s installation before you can continue.',
'My FluxBB Forum'				=>	'My FluxBB Forum',
'Description'					=>	'Unfortunately no one can be told what FluxBB is - you have to see it for yourself.',
'Username 1'					=>	'Usernames must be at least 2 characters long.',
'Username 2'					=>	'Usernames must not be more than 25 characters long.',
'Username 3'					=>	'The username guest is reserved.',
'Username 4'					=>	'Usernames may not be in the form of an IP address.',
'Username 5'					=>	'Usernames may not contain all the characters \', " and [ or ] at once.',
'Username 6'					=>	'Usernames may not contain any of the text formatting tags (BBCode) that the forum uses.',
'Short password'				=>	'Passwords must be at least 4 characters long.',
'Passwords not match'			=>	'Passwords do not match.',
'Wrong email'					=>	'The administrator email address you entered is invalid.',
'No board title'				=>	'You must enter a board title.',
'Error default language'		=>	'The default language chosen doesn\'t seem to exist.',
'Error default style'			=>	'The default style chosen doesn\'t seem to exist.',
'No DB extensions'				=>	'This PHP environment does not have support for any of the databases that FluxBB supports. PHP needs to have support for either MySQL, PostgreSQL or SQLite in order for FluxBB to be installed.',
'Administrator username'		=>	'Administrator\'s username',
'Administrator password 1'		=>	'Administrator password 1',
'Administrator password 2'		=>	'Administrator password 2',
'Administrator email'			=>	'Administrator\'s email',
'Board title'					=>	'Board title',
'Base URL'						=>	'Base URL',
'Required field'				=>	'is a required field in this form.',
'FluxBB Installation'			=>	'FluxBB Installation',
'Welcome'						=>	'You are about to install FluxBB. In order to install FluxBB, you must complete the form set out below. If you encounter any difficulties with the installation, please refer to the documentation.',
'Install'						=>	'Install FluxBB 1.4',
'Errors'						=>	'The following errors need to be corrected:',
'Database setup'				=>	'Database setup',
'Info 1'						=>	'Please enter the requested information in order to setup your database for FluxBB. You must know all the information asked for before proceeding with the installation.',
'Select database'				=>	'Select your database type',
'Info 2'						=>	'FluxBB currently supports MySQL, PostgreSQL and SQLite. If your database of choice is missing from the drop-down menu below, it means this PHP environment does not have support for that particular database. More information regarding support for particular versions of each database can be found in the FAQ.',
'Dual MySQL'					=>	'FluxBB has detected that your PHP environment supports two different ways of communicating with MySQL. The two options are called standard and improved. If you are uncertain which one to use, start by trying improved and if that fails, try standard.',
'InnoDB'						=>	'FluxBB has detected that your MySQL server might support <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. This would be a good choice if you are planning to run a large forum. If you are uncertain, it is recommended that you do not use InnoDB.',
'Database type'					=>	'Database type',
'Required'						=>	'(Required)',
'Database hostname'				=>	'Enter your database server hostname',
'Info 3'						=>	'The address of the database server (example: localhost, db.myhost.com or 192.168.0.15). You can specify a custom port number if your database doesn\'t run on the default port (example: localhost:3580). For SQLite support, just enter anything or leave it at \'localhost\'.',
'Database server hostname'		=>'Database server hostname',
'Database enter name'			=>	'Enter the name of your database',
'Info 4'						=>	'The name of the database that FluxBB will be installed into. The database must exist. For SQLite, this is the relative path to the database file. If the SQLite database file does not exist, FluxBB will attempt to create it.',
'Database name'					=>	'Database name',
'Database enter informations'	=>	'Enter your database username and password',
'Database username'				=>	'Database username',
'Info 5'						=>	'Enter the username and password with which you connect to the database. Ignore for SQLite.',
'Database password'				=>	'Database password',
'Database enter prefix'			=>	'Enter database table prefix',
'Info 6'						=>	'If you like, you can specify a table prefix. This way you can run multiple copies of FluxBB in the same database (example: foo_).',
'Table prefix'					=>	'Table prefix',
'Administration setup'			=>	'Administration setup',
'Info 7'						=>	'Please enter the requested information in order to setup an administrator for your FluxBB installation.',
'Admin enter username'			=>	'Enter Administrator\'s username',
'Info 8'						=>	'The username of the forum administrator. You can later create more administrators and moderators. Usernames can be between 2 and 25 characters long.',
'Admin enter password'			=>	'Enter and confirm Administrator\'s password',
'Info 9'						=>	'Passwords must be at least 4 characters long. Passwords are case sensitive.',
'Password'						=>	'Password',
'Confirm password'				=>	'Confirm password',
'Admin enter email'				=>	'Enter Administrator\'s email',
'Info 10'						=>	'The email address of the forum administrator.',
'Board setup'					=>	'Board setup',
'Info 11'						=>	'Please enter the requested information in order to setup your FluxBB board.',
'Enter board title'				=>	'Enter your board\'s title',
'Info 12'						=>	'The title of this bulletin board (shown at the top of every page).',
'Enter board description'		=>	'Enter your board\'s description',
'Info 13'						=>	'A short description of this bulletin board (shown at the top of every page). This field may contain HTML.',
'Board description'				=>	'Board description',
'Enter base URL'				=>	'Enter the Base URL of your FluxBB installation',
'Info 14'						=>	'The URL (without trailing slash) of your FluxBB forum (example: http://forum.myhost.com or http://myhost.com/~myuser). This <strong>must</strong> be correct, otherwise, administrators and moderators will not be able to submit any forms. Please note that the preset value below is just an educated guess by FluxBB.',
'Choose the default language'	=>	'Choose the default language',
'Info 15'						=>	'The default language used for guests and users who haven\'t changed from the default in their profile.',
'Default language'				=>	'Default language',
'Choose the default style'		=>	'Choose the default style',
'Info 16'						=>	'The default style used for guests and users who haven\'t changed from the default in their profile.',
'Default style'					=>	'Default style',
'Start install'					=>	'Start install',
'DB type not valid'				=>	'\'%s\' is not a valid database type',
'Table prefix error'			=>	'The table prefix \'%s\' contains illegal characters or is too long. The prefix may contain the letters a to z, any numbers and the underscore character. They must however not start with a number. The maximum length is 40 characters. Please choose a different prefix',
'Prefix reserved'				=>	'The table prefix \'sqlite_\' is reserved for use by the SQLite engine. Please choose a different prefix',
'Existing table error'			=>	'A table called \'%susers\' is already present in the database \'%s\'. This could mean that FluxBB is already installed or that another piece of software is installed and is occupying one or more of the table names FluxBB requires. If you want to install multiple copies of FluxBB in the same database, you must choose a different table prefix',
'InnoDB off'					=>	'InnoDB does not seem to be enabled. Please choose a database layer that does not have InnoDB support, or enable InnoDB on your MySQL server',
'Administrators'				=>	'Administrators',
'Administrator'					=>	'Administrator',
'Moderators'					=>	'Moderators',
'Moderator'						=>	'Moderator',
'Guests'						=>	'Guests',
'Guest'							=>	'Guest',
'New member'					=>	'New member',
'Members'						=>	'Members',
'Member'						=>	'Member',
'Announcement'					=>	'Enter your announcement here.',
'Rules'							=>	'Enter your rules here',
'Maintenance message'			=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.<br />\\n<br />\\n/Administrator',
'Test post'						=>	'Test post',
'Message'						=>	'If you are looking at this (which I guess you are), the install of FluxBB appears to have worked! Now log in and head over to the administration control panel to configure your forum.',
'Test category'					=>	'Test category',
'Test forum'					=>	'Test forum',
'This is just a test forum'		=>	'This is just a test forum',
'Alert cache'					=>	'<strong>The cache directory is currently not writable!</strong> In order for FluxBB to function properly, the directory <em>%s</em> must be writable by PHP. Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert avatar'					=>	'<strong>The avatar directory is currently not writable!</strong> If you want users to be able to upload their own avatar images you must see to it that the directory <em>%s</em> is writable by PHP. You can later choose to save avatar images in a different directory (see Admin/Options). Use chmod to set the appropriate directory permissions. If in doubt, chmod to 0777.',
'Alert upload'					=>	'<strong>File uploads appear to be disallowed on this server!</strong> If you want users to be able to upload their own avatar images you must enable the file_uploads configuration setting in PHP. Once file uploads have been enabled, avatar uploads can be enabled in Administration/Options/Features.',
'FluxBB has been installed'		=>	'FluxBB has been installed. To finalize the installation please follow the instructions below.',
'Final instructions'			=>	'Final instructions',
'Info 17'						=>	'To finalize the installation, you need to click on the button below to download a file called config.php. You then need to upload this file to the root directory of your FluxBB installation.',
'Info 18'						=>	'Once you have uploaded config.php, FluxBB will be fully installed! At that point, you may <a href="index.php">go to the forum index</a>.',
'Download config.php file'		=>	'Download config.php file',
'FluxBB fully installed'		=>	'FluxBB has been fully installed! You may now <a href="index.php">go to the forum index</a>.',

);
