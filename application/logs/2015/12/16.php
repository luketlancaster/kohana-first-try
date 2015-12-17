<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-16 16:00:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/html/kohana-first-try/system/classes/Kohana/View.php:137
2015-12-16 16:00:16 --- DEBUG: #0 /var/www/html/kohana-first-try/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index')
#1 /var/www/html/kohana-first-try/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', NULL)
#2 /var/www/html/kohana-first-try/application/classes/Controller/Welcome.php(7): Kohana_View::factory('index')
#3 /var/www/html/kohana-first-try/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-first-try/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-first-try/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-first-try/system/classes/Kohana/View.php:137