# IT490

This code will connect the WebServer VM w/Rabbit to the RabbitMQ Server VM, with the code provided.  

All of the .inc [get_host_info.inc, path.inc, rabbitMQLib.inc] files, as well as the .ini[testRabbitMQ.ini] file, go together with tstrb.php to run the RabbitMQ client code that reaches out to the RabbitMQ Server. This was packaged for me in the original git clone of the testRabbitMQ code, I need to test it outside of there to make sure none of the other files are somehow being relied upon. I suspect the rest only pertain to the Server. The .ini file must always be configured to reflect the current IP address of the RabbitServer being used. 

Index.html, login.php, and stylesheet0.css all must go in the /var/www/html/<webdirname> directory. 
