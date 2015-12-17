<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-17 12:47:14 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in file:line
2015-12-17 12:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-17 12:50:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in /var/www/html/kohana-first-try/application/classes/Controller/Welcome.php:11
2015-12-17 12:50:32 --- DEBUG: #0 /var/www/html/kohana-first-try/application/classes/Controller/Welcome.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/k...', 11, Array)
#1 /var/www/html/kohana-first-try/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/kohana-first-try/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/kohana-first-try/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/kohana-first-try/application/classes/Controller/Welcome.php:11
2015-12-17 12:52:02 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2015-12-17 12:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-17 12:52:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/index.php [ 44 ] in /var/www/html/kohana-first-try/application/views/index.php:44
2015-12-17 12:52:27 --- DEBUG: #0 /var/www/html/kohana-first-try/application/views/index.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/k...', 44, Array)
#1 /var/www/html/kohana-first-try/system/classes/Kohana/View.php(61): include('/var/www/html/k...')
#2 /var/www/html/kohana-first-try/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/k...', Array)
#3 /var/www/html/kohana-first-try/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/kohana-first-try/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/html/kohana-first-try/application/classes/Controller/Welcome.php(11): Kohana_Response->body(Object(View))
#6 /var/www/html/kohana-first-try/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/html/kohana-first-try/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/kohana-first-try/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/kohana-first-try/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/kohana-first-try/application/views/index.php:44
2015-12-17 12:54:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/Controller/Welcome.php [ 5 ] in file:line
2015-12-17 12:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line