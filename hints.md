## web application :

* Job finder is a web application based on CakePHP :

1-go to link : https://cakephp.org/
2-HTML KickStart : http://www.99lime.com/

# HTML TEMPLATE : 
=> use the kickstar make the content 
=> CSS 

# Creating the database : 

==> PHP My ADMIN => jobs.sql
insertion => snippets.sql

# installation cakephp :

clone this ==> git clone -b 2.x git://github.com/cakephp/cakephp.git

app/config/core.php ==> configuration

configure the databse.php

installation of debug.kit in githiub : https://github.com/cakephp/debug_kit/tree/2.2


in the plugin folder we install the debug kit 

in the file bootstrap we must enable the debugkit

## Creating the job controller and link it to the view :

==>go to the routes.php and configure it 

==>now in the controller folder create our first controller called : JobsController.php and create and index.ctp in the views folder

## layout and elements :

=> create a default.ctp in layouts 

=> make it dynamic using elemnt folder : search.ctp

=> jobs listing in index.ctp 

## browse controller and View : 

=> foreach in the index.ctp in the job view to grab dynamic content from the table jobs

=> create an association with type and job in order to get plein temp freelance or interim with color ( go to the modal and create a file JoB.php
)

=> create the browse method in jobcontroller and create the view for it

## search and filter : 

Move the search into the individual views just in index.ctp and browse.ctp

=> make the search dynamic

=> in the browse function in the controller we will check for the post

filter the keyword , the state , the category

==> single listen on read more : in jobController we will add a view function 
