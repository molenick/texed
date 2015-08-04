About
------------
Text is a simple PHP/MYSQL app that sends out a series of predefined messages
to people who have subscribed to the service.

Installation
------------
1. Create a mysql database for the project.
2. Copy default.settings.php to settings.php and configure.
3. Create an Apache virtualhost (or equivalent) with the docs folder as the webroot.
4. Create a crontab entry to run cron.php as needed. See scripts/crontab for more information.
