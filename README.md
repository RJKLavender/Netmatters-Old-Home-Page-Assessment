# Netmatters-Old-Home-Page-Assessment

PHP Setup
When you download the code from the branch PHP Website, It will not work without 1. first setting up a database in your local enviroment.
You will need two tables one for the news section and one for the contact form.
2. Once your database is set up edit the example.env file with the server host IP,Database Name, Port, Database Username and Password. 
Note: If you are doing this locally I reccomend just using the default values of  username = root and leaving the password blank but if you are using this code on a public server then you will want a full username and password instead.
Fill out the fields listed as follows DB_Host is your database's Host IP, DB_PORT is the port of your database, DB_NAME is the name of your database, DB_USER is the username of the user accessing the database and DB_PASS is the password assicated with the user.

Example Fill out for the env file below:

DB_HOST=127.0.0.1 

DB_PORT=8000

DB_NAME=nettmatters

DB_USER=root

DB_PASS=blank


4. rename the example.env file to .env so that the db.php file will be able to read it.
5. Youll need to match the fields mentioned in the news.php and validation.php files sql Queryies or update them with your own named database fields.
6. fill out the news table with some example news articles so they will display on the website when viewed.
7. The website should now be userable for testing purpose or any changes you wish to make.

   Any questions or issues please send me a message and I will get back to you with a soulotion as soon as I can.
