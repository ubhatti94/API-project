My assignment 9 API project is coded in HTML and PHP. In order to run PHP code locally on my computer, I needed 
to install a server on my computer called Xampp. After installing it, in order for the PHP file to run and execute in my
browser I need to start the Apache module on the Xampp server. When I click start I get an error indicating the following:
"4:25:27 PM  [Apache] 	Problem detected!
4:25:27 PM  [Apache] 	Port 80 in use by "Unable to open process" with PID 4!
4:25:27 PM  [Apache] 	Apache WILL NOT start without the configured ports free!
4:25:27 PM  [Apache] 	You need to uninstall/disable/reconfigure the blocking application
4:25:27 PM  [Apache] 	or reconfigure Apache and the Control Panel to listen on a different port".
In order to fix this I did some research and I learned that I must reconfigure the httpd.conf file located in the Apache
settings. Anywhere Port 80 is mentioned I must change it to a different number, I chose port 8080. Also if I wanted to 
store/insert all the data to a database (database comes with the xampp server and can execute MYSQL commands to 
PHPmyAdmin which also comes with xampp) I must reconfigure the my.ini file in the MYSQL settings. I did that even though
I won't be storing this data into a database. Now I start the Apache module and my PHP code runs fine in the browser.

