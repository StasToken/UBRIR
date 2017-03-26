# UBRIR
Test task for vacancy php - backend developer for the company UBRIR

Author: Borzyh Stanislav Al'bertovich

Email: ff.0xff@yandex.ru

Phone: +79920138439

## Install 

To prepare the script to work you need:

1) git clone: https://github.com/StasToken/UBRIR.git 

2) Import the database to Front end and Back end servers

The database structure can be taken **from statistics_bk.sql** and **statistics_fr.sql** files from the root folder of the project.

3) In the file **./frontend/Config.php** and **./backend/Config.php** set the credentials to the database, just set the variable **$backendHost** which should contain the path to the Back end server and a script which accepts requests

For example:

http://localhost/backend/index.php or http://127.0.0.1/backend/index.php

Please note if Front end and Back end server are located on the same server but different virtual host, check the possibility of access to them, the Front end server need to be placed together with the page, preserving the directory structure.
For simplicity, the test project I have placed all on the same host, just in different folders.

After that you can go to the homepage of the project http://your-host.com/index.html 

On this page you will find a functional test, as well as links to pages safe content database

If you have any questions feel free to ask :-) 
