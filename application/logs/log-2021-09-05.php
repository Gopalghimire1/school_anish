<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-09-05 09:04:56 --> Config Class Initialized
INFO - 2021-09-05 09:04:56 --> Hooks Class Initialized
DEBUG - 2021-09-05 09:04:56 --> UTF-8 Support Enabled
INFO - 2021-09-05 09:04:56 --> Utf8 Class Initialized
INFO - 2021-09-05 09:04:56 --> URI Class Initialized
INFO - 2021-09-05 09:04:56 --> Router Class Initialized
INFO - 2021-09-05 09:04:56 --> Output Class Initialized
INFO - 2021-09-05 09:04:56 --> Security Class Initialized
DEBUG - 2021-09-05 09:04:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 09:04:56 --> Input Class Initialized
INFO - 2021-09-05 09:04:56 --> Language Class Initialized
INFO - 2021-09-05 09:04:56 --> Loader Class Initialized
INFO - 2021-09-05 09:04:56 --> Helper loaded: url_helper
INFO - 2021-09-05 09:04:56 --> Helper loaded: file_helper
INFO - 2021-09-05 09:04:56 --> Helper loaded: form_helper
INFO - 2021-09-05 09:04:56 --> Helper loaded: security_helper
INFO - 2021-09-05 09:04:56 --> Helper loaded: directory_helper
INFO - 2021-09-05 09:04:56 --> Helper loaded: general_helper
INFO - 2021-09-05 09:04:56 --> Database Driver Class Initialized
INFO - 2021-09-05 09:04:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 09:04:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 09:04:56 --> Pagination Class Initialized
INFO - 2021-09-05 09:04:56 --> XML-RPC Class Initialized
INFO - 2021-09-05 09:04:56 --> Form Validation Class Initialized
INFO - 2021-09-05 09:04:56 --> Upload Class Initialized
INFO - 2021-09-05 09:04:56 --> MY_Model class loaded
INFO - 2021-09-05 09:04:56 --> Model "Application_model" initialized
INFO - 2021-09-05 09:04:56 --> Controller Class Initialized
DEBUG - 2021-09-05 09:04:56 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 09:04:56 --> Helper loaded: inflector_helper
INFO - 2021-09-05 09:04:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 09:04:56 --> Database Driver Class Initialized
ERROR - 2021-09-05 09:04:56 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 09:04:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 09:04:56 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 09:04:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 09:04:56 --> Model "Student_model" initialized
ERROR - 2021-09-05 09:04:56 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 09:04:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 87
INFO - 2021-09-05 09:05:00 --> Config Class Initialized
INFO - 2021-09-05 09:05:00 --> Hooks Class Initialized
DEBUG - 2021-09-05 09:05:00 --> UTF-8 Support Enabled
INFO - 2021-09-05 09:05:00 --> Utf8 Class Initialized
INFO - 2021-09-05 09:05:00 --> URI Class Initialized
INFO - 2021-09-05 09:05:00 --> Router Class Initialized
INFO - 2021-09-05 09:05:00 --> Output Class Initialized
INFO - 2021-09-05 09:05:00 --> Security Class Initialized
DEBUG - 2021-09-05 09:05:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 09:05:00 --> Input Class Initialized
INFO - 2021-09-05 09:05:00 --> Language Class Initialized
INFO - 2021-09-05 09:05:00 --> Loader Class Initialized
INFO - 2021-09-05 09:05:00 --> Helper loaded: url_helper
INFO - 2021-09-05 09:05:00 --> Helper loaded: file_helper
INFO - 2021-09-05 09:05:00 --> Helper loaded: form_helper
INFO - 2021-09-05 09:05:00 --> Helper loaded: security_helper
INFO - 2021-09-05 09:05:00 --> Helper loaded: directory_helper
INFO - 2021-09-05 09:05:00 --> Helper loaded: general_helper
INFO - 2021-09-05 09:05:00 --> Database Driver Class Initialized
INFO - 2021-09-05 09:05:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 09:05:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 09:05:00 --> Pagination Class Initialized
INFO - 2021-09-05 09:05:00 --> XML-RPC Class Initialized
INFO - 2021-09-05 09:05:00 --> Form Validation Class Initialized
INFO - 2021-09-05 09:05:00 --> Upload Class Initialized
INFO - 2021-09-05 09:05:00 --> MY_Model class loaded
INFO - 2021-09-05 09:05:00 --> Model "Application_model" initialized
INFO - 2021-09-05 09:05:00 --> Controller Class Initialized
DEBUG - 2021-09-05 09:05:00 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 09:05:00 --> Helper loaded: inflector_helper
INFO - 2021-09-05 09:05:00 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 09:05:00 --> Database Driver Class Initialized
ERROR - 2021-09-05 09:05:00 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 09:05:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 09:05:00 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 09:05:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 09:05:00 --> Model "Student_model" initialized
ERROR - 2021-09-05 09:05:00 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 09:05:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 87
INFO - 2021-09-05 10:10:00 --> Config Class Initialized
INFO - 2021-09-05 10:10:00 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:10:00 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:10:00 --> Utf8 Class Initialized
INFO - 2021-09-05 10:10:00 --> URI Class Initialized
INFO - 2021-09-05 10:10:00 --> Router Class Initialized
INFO - 2021-09-05 10:10:00 --> Output Class Initialized
INFO - 2021-09-05 10:10:00 --> Security Class Initialized
DEBUG - 2021-09-05 10:10:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:10:00 --> Input Class Initialized
INFO - 2021-09-05 10:10:00 --> Language Class Initialized
INFO - 2021-09-05 10:10:00 --> Loader Class Initialized
INFO - 2021-09-05 10:10:00 --> Helper loaded: url_helper
INFO - 2021-09-05 10:10:00 --> Helper loaded: file_helper
INFO - 2021-09-05 10:10:00 --> Helper loaded: form_helper
INFO - 2021-09-05 10:10:00 --> Helper loaded: security_helper
INFO - 2021-09-05 10:10:00 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:10:00 --> Helper loaded: general_helper
INFO - 2021-09-05 10:10:01 --> Database Driver Class Initialized
INFO - 2021-09-05 10:10:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:10:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:10:01 --> Pagination Class Initialized
INFO - 2021-09-05 10:10:01 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:10:01 --> Form Validation Class Initialized
INFO - 2021-09-05 10:10:01 --> Upload Class Initialized
INFO - 2021-09-05 10:10:01 --> MY_Model class loaded
INFO - 2021-09-05 10:10:01 --> Model "Application_model" initialized
INFO - 2021-09-05 10:10:01 --> Controller Class Initialized
DEBUG - 2021-09-05 10:10:01 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:10:01 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:10:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:10:01 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:10:01 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:10:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:10:01 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:10:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:10:02 --> Model "Student_model" initialized
INFO - 2021-09-05 10:10:02 --> Final output sent to browser
DEBUG - 2021-09-05 10:10:02 --> Total execution time: 1.9988
INFO - 2021-09-05 10:12:14 --> Config Class Initialized
INFO - 2021-09-05 10:12:14 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:12:14 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:12:14 --> Utf8 Class Initialized
INFO - 2021-09-05 10:12:14 --> URI Class Initialized
INFO - 2021-09-05 10:12:14 --> Router Class Initialized
INFO - 2021-09-05 10:12:14 --> Output Class Initialized
INFO - 2021-09-05 10:12:14 --> Security Class Initialized
DEBUG - 2021-09-05 10:12:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:12:14 --> Input Class Initialized
INFO - 2021-09-05 10:12:14 --> Language Class Initialized
INFO - 2021-09-05 10:12:14 --> Loader Class Initialized
INFO - 2021-09-05 10:12:14 --> Helper loaded: url_helper
INFO - 2021-09-05 10:12:14 --> Helper loaded: file_helper
INFO - 2021-09-05 10:12:14 --> Helper loaded: form_helper
INFO - 2021-09-05 10:12:14 --> Helper loaded: security_helper
INFO - 2021-09-05 10:12:14 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:12:14 --> Helper loaded: general_helper
INFO - 2021-09-05 10:12:14 --> Database Driver Class Initialized
INFO - 2021-09-05 10:12:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:12:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:12:14 --> Pagination Class Initialized
INFO - 2021-09-05 10:12:14 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:12:14 --> Form Validation Class Initialized
INFO - 2021-09-05 10:12:14 --> Upload Class Initialized
INFO - 2021-09-05 10:12:14 --> MY_Model class loaded
INFO - 2021-09-05 10:12:14 --> Model "Application_model" initialized
INFO - 2021-09-05 10:12:14 --> Controller Class Initialized
DEBUG - 2021-09-05 10:12:14 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:12:14 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:12:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:12:14 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:12:14 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:12:14 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:12:14 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:12:14 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:12:14 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:12:14 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:12:14 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 87
INFO - 2021-09-05 10:17:25 --> Config Class Initialized
INFO - 2021-09-05 10:17:25 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:17:25 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:17:25 --> Utf8 Class Initialized
INFO - 2021-09-05 10:17:25 --> URI Class Initialized
INFO - 2021-09-05 10:17:25 --> Router Class Initialized
INFO - 2021-09-05 10:17:25 --> Output Class Initialized
INFO - 2021-09-05 10:17:25 --> Security Class Initialized
DEBUG - 2021-09-05 10:17:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:17:25 --> Input Class Initialized
INFO - 2021-09-05 10:17:25 --> Language Class Initialized
INFO - 2021-09-05 10:17:25 --> Loader Class Initialized
INFO - 2021-09-05 10:17:25 --> Helper loaded: url_helper
INFO - 2021-09-05 10:17:25 --> Helper loaded: file_helper
INFO - 2021-09-05 10:17:25 --> Helper loaded: form_helper
INFO - 2021-09-05 10:17:25 --> Helper loaded: security_helper
INFO - 2021-09-05 10:17:25 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:17:25 --> Helper loaded: general_helper
INFO - 2021-09-05 10:17:26 --> Database Driver Class Initialized
INFO - 2021-09-05 10:17:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:17:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:17:26 --> Pagination Class Initialized
INFO - 2021-09-05 10:17:26 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:17:26 --> Form Validation Class Initialized
INFO - 2021-09-05 10:17:26 --> Upload Class Initialized
INFO - 2021-09-05 10:17:26 --> MY_Model class loaded
INFO - 2021-09-05 10:17:26 --> Model "Application_model" initialized
INFO - 2021-09-05 10:17:26 --> Controller Class Initialized
DEBUG - 2021-09-05 10:17:26 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:17:26 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:17:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:17:26 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:17:26 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:17:26 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:17:26 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:17:26 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:17:26 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:17:26 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:17:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 87
INFO - 2021-09-05 10:18:59 --> Config Class Initialized
INFO - 2021-09-05 10:18:59 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:18:59 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:18:59 --> Utf8 Class Initialized
INFO - 2021-09-05 10:18:59 --> URI Class Initialized
INFO - 2021-09-05 10:18:59 --> Router Class Initialized
INFO - 2021-09-05 10:18:59 --> Output Class Initialized
INFO - 2021-09-05 10:18:59 --> Security Class Initialized
DEBUG - 2021-09-05 10:18:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:18:59 --> Input Class Initialized
INFO - 2021-09-05 10:18:59 --> Language Class Initialized
INFO - 2021-09-05 10:18:59 --> Loader Class Initialized
INFO - 2021-09-05 10:18:59 --> Helper loaded: url_helper
INFO - 2021-09-05 10:18:59 --> Helper loaded: file_helper
INFO - 2021-09-05 10:18:59 --> Helper loaded: form_helper
INFO - 2021-09-05 10:18:59 --> Helper loaded: security_helper
INFO - 2021-09-05 10:18:59 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:18:59 --> Helper loaded: general_helper
INFO - 2021-09-05 10:18:59 --> Database Driver Class Initialized
INFO - 2021-09-05 10:18:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:19:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:19:00 --> Pagination Class Initialized
INFO - 2021-09-05 10:19:00 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:19:00 --> Form Validation Class Initialized
INFO - 2021-09-05 10:19:00 --> Upload Class Initialized
INFO - 2021-09-05 10:19:00 --> MY_Model class loaded
INFO - 2021-09-05 10:19:00 --> Model "Application_model" initialized
INFO - 2021-09-05 10:19:00 --> Controller Class Initialized
DEBUG - 2021-09-05 10:19:00 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:19:00 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:19:00 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:19:00 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:19:00 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:00 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:19:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:19:00 --> Model "Student_model" initialized
INFO - 2021-09-05 10:19:00 --> Final output sent to browser
DEBUG - 2021-09-05 10:19:00 --> Total execution time: 0.1694
INFO - 2021-09-05 10:19:18 --> Config Class Initialized
INFO - 2021-09-05 10:19:18 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:19:18 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:19:18 --> Utf8 Class Initialized
INFO - 2021-09-05 10:19:18 --> URI Class Initialized
INFO - 2021-09-05 10:19:18 --> Router Class Initialized
INFO - 2021-09-05 10:19:18 --> Output Class Initialized
INFO - 2021-09-05 10:19:18 --> Security Class Initialized
DEBUG - 2021-09-05 10:19:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:19:18 --> Input Class Initialized
INFO - 2021-09-05 10:19:18 --> Language Class Initialized
INFO - 2021-09-05 10:19:18 --> Loader Class Initialized
INFO - 2021-09-05 10:19:18 --> Helper loaded: url_helper
INFO - 2021-09-05 10:19:18 --> Helper loaded: file_helper
INFO - 2021-09-05 10:19:18 --> Helper loaded: form_helper
INFO - 2021-09-05 10:19:18 --> Helper loaded: security_helper
INFO - 2021-09-05 10:19:18 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:19:18 --> Helper loaded: general_helper
INFO - 2021-09-05 10:19:18 --> Database Driver Class Initialized
INFO - 2021-09-05 10:19:18 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:19:18 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:19:18 --> Pagination Class Initialized
INFO - 2021-09-05 10:19:18 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:19:18 --> Form Validation Class Initialized
INFO - 2021-09-05 10:19:18 --> Upload Class Initialized
INFO - 2021-09-05 10:19:18 --> MY_Model class loaded
INFO - 2021-09-05 10:19:18 --> Model "Application_model" initialized
INFO - 2021-09-05 10:19:18 --> Controller Class Initialized
DEBUG - 2021-09-05 10:19:18 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:19:18 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:19:18 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:19:18 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:19:18 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:18 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:18 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:19:18 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:19:18 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:19:18 --> Query error: No tables used - Invalid query: SELECT *
INFO - 2021-09-05 10:19:18 --> Final output sent to browser
DEBUG - 2021-09-05 10:19:18 --> Total execution time: 0.1646
INFO - 2021-09-05 10:19:44 --> Config Class Initialized
INFO - 2021-09-05 10:19:44 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:19:44 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:19:44 --> Utf8 Class Initialized
INFO - 2021-09-05 10:19:44 --> URI Class Initialized
INFO - 2021-09-05 10:19:44 --> Router Class Initialized
INFO - 2021-09-05 10:19:44 --> Output Class Initialized
INFO - 2021-09-05 10:19:44 --> Security Class Initialized
DEBUG - 2021-09-05 10:19:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:19:44 --> Input Class Initialized
INFO - 2021-09-05 10:19:44 --> Language Class Initialized
INFO - 2021-09-05 10:19:44 --> Loader Class Initialized
INFO - 2021-09-05 10:19:44 --> Helper loaded: url_helper
INFO - 2021-09-05 10:19:44 --> Helper loaded: file_helper
INFO - 2021-09-05 10:19:44 --> Helper loaded: form_helper
INFO - 2021-09-05 10:19:44 --> Helper loaded: security_helper
INFO - 2021-09-05 10:19:44 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:19:44 --> Helper loaded: general_helper
INFO - 2021-09-05 10:19:44 --> Database Driver Class Initialized
INFO - 2021-09-05 10:19:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:19:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:19:44 --> Pagination Class Initialized
INFO - 2021-09-05 10:19:44 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:19:44 --> Form Validation Class Initialized
INFO - 2021-09-05 10:19:44 --> Upload Class Initialized
INFO - 2021-09-05 10:19:44 --> MY_Model class loaded
INFO - 2021-09-05 10:19:44 --> Model "Application_model" initialized
INFO - 2021-09-05 10:19:44 --> Controller Class Initialized
DEBUG - 2021-09-05 10:19:44 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:19:44 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:19:44 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:19:44 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:19:44 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:44 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:19:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:19:44 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:19:44 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:19:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 87
INFO - 2021-09-05 10:19:55 --> Config Class Initialized
INFO - 2021-09-05 10:19:55 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:19:55 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:19:55 --> Utf8 Class Initialized
INFO - 2021-09-05 10:19:55 --> URI Class Initialized
INFO - 2021-09-05 10:19:55 --> Router Class Initialized
INFO - 2021-09-05 10:19:55 --> Output Class Initialized
INFO - 2021-09-05 10:19:55 --> Security Class Initialized
DEBUG - 2021-09-05 10:19:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:19:55 --> Input Class Initialized
INFO - 2021-09-05 10:19:55 --> Language Class Initialized
INFO - 2021-09-05 10:19:55 --> Loader Class Initialized
INFO - 2021-09-05 10:19:55 --> Helper loaded: url_helper
INFO - 2021-09-05 10:19:55 --> Helper loaded: file_helper
INFO - 2021-09-05 10:19:55 --> Helper loaded: form_helper
INFO - 2021-09-05 10:19:55 --> Helper loaded: security_helper
INFO - 2021-09-05 10:19:55 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:19:55 --> Helper loaded: general_helper
INFO - 2021-09-05 10:19:56 --> Database Driver Class Initialized
INFO - 2021-09-05 10:19:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:19:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:19:56 --> Pagination Class Initialized
INFO - 2021-09-05 10:19:56 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:19:56 --> Form Validation Class Initialized
INFO - 2021-09-05 10:19:56 --> Upload Class Initialized
INFO - 2021-09-05 10:19:56 --> MY_Model class loaded
INFO - 2021-09-05 10:19:56 --> Model "Application_model" initialized
INFO - 2021-09-05 10:19:56 --> Controller Class Initialized
DEBUG - 2021-09-05 10:19:56 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:19:56 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:19:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:19:56 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:19:56 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:19:56 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:19:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:19:56 --> Model "Student_model" initialized
INFO - 2021-09-05 10:19:56 --> Final output sent to browser
DEBUG - 2021-09-05 10:19:56 --> Total execution time: 0.5922
INFO - 2021-09-05 10:21:50 --> Config Class Initialized
INFO - 2021-09-05 10:21:50 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:21:50 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:21:50 --> Utf8 Class Initialized
INFO - 2021-09-05 10:21:50 --> URI Class Initialized
INFO - 2021-09-05 10:21:50 --> Router Class Initialized
INFO - 2021-09-05 10:21:50 --> Output Class Initialized
INFO - 2021-09-05 10:21:50 --> Security Class Initialized
DEBUG - 2021-09-05 10:21:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:21:50 --> Input Class Initialized
INFO - 2021-09-05 10:21:50 --> Language Class Initialized
INFO - 2021-09-05 10:21:50 --> Loader Class Initialized
INFO - 2021-09-05 10:21:50 --> Helper loaded: url_helper
INFO - 2021-09-05 10:21:50 --> Helper loaded: file_helper
INFO - 2021-09-05 10:21:50 --> Helper loaded: form_helper
INFO - 2021-09-05 10:21:50 --> Helper loaded: security_helper
INFO - 2021-09-05 10:21:50 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:21:50 --> Helper loaded: general_helper
INFO - 2021-09-05 10:21:50 --> Database Driver Class Initialized
INFO - 2021-09-05 10:21:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:21:50 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:21:50 --> Pagination Class Initialized
INFO - 2021-09-05 10:21:50 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:21:50 --> Form Validation Class Initialized
INFO - 2021-09-05 10:21:50 --> Upload Class Initialized
INFO - 2021-09-05 10:21:50 --> MY_Model class loaded
INFO - 2021-09-05 10:21:50 --> Model "Application_model" initialized
INFO - 2021-09-05 10:21:50 --> Controller Class Initialized
DEBUG - 2021-09-05 10:21:50 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:21:50 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:21:50 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:21:50 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:21:50 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:21:50 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:21:50 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:21:50 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:21:50 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:21:50 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:21:50 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 93
INFO - 2021-09-05 10:28:38 --> Config Class Initialized
INFO - 2021-09-05 10:28:38 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:28:39 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:28:39 --> Utf8 Class Initialized
INFO - 2021-09-05 10:28:39 --> URI Class Initialized
INFO - 2021-09-05 10:28:39 --> Router Class Initialized
INFO - 2021-09-05 10:28:39 --> Output Class Initialized
INFO - 2021-09-05 10:28:39 --> Security Class Initialized
DEBUG - 2021-09-05 10:28:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:28:39 --> Input Class Initialized
INFO - 2021-09-05 10:28:39 --> Language Class Initialized
INFO - 2021-09-05 10:28:39 --> Loader Class Initialized
INFO - 2021-09-05 10:28:39 --> Helper loaded: url_helper
INFO - 2021-09-05 10:28:39 --> Helper loaded: file_helper
INFO - 2021-09-05 10:28:39 --> Helper loaded: form_helper
INFO - 2021-09-05 10:28:39 --> Helper loaded: security_helper
INFO - 2021-09-05 10:28:39 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:28:39 --> Helper loaded: general_helper
INFO - 2021-09-05 10:28:39 --> Database Driver Class Initialized
INFO - 2021-09-05 10:28:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:28:39 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:28:39 --> Pagination Class Initialized
INFO - 2021-09-05 10:28:39 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:28:39 --> Form Validation Class Initialized
INFO - 2021-09-05 10:28:39 --> Upload Class Initialized
INFO - 2021-09-05 10:28:39 --> MY_Model class loaded
INFO - 2021-09-05 10:28:39 --> Model "Application_model" initialized
INFO - 2021-09-05 10:28:39 --> Controller Class Initialized
DEBUG - 2021-09-05 10:28:39 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:28:39 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:28:39 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:28:39 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:28:39 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:28:39 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:28:39 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:28:39 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:28:39 --> Model "Student_model" initialized
INFO - 2021-09-05 10:28:39 --> Final output sent to browser
DEBUG - 2021-09-05 10:28:39 --> Total execution time: 0.3758
INFO - 2021-09-05 10:31:28 --> Config Class Initialized
INFO - 2021-09-05 10:31:28 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:31:28 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:31:28 --> Utf8 Class Initialized
INFO - 2021-09-05 10:31:28 --> URI Class Initialized
INFO - 2021-09-05 10:31:28 --> Router Class Initialized
INFO - 2021-09-05 10:31:28 --> Output Class Initialized
INFO - 2021-09-05 10:31:28 --> Security Class Initialized
DEBUG - 2021-09-05 10:31:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:31:28 --> Input Class Initialized
INFO - 2021-09-05 10:31:28 --> Language Class Initialized
INFO - 2021-09-05 10:31:28 --> Loader Class Initialized
INFO - 2021-09-05 10:31:28 --> Helper loaded: url_helper
INFO - 2021-09-05 10:31:28 --> Helper loaded: file_helper
INFO - 2021-09-05 10:31:28 --> Helper loaded: form_helper
INFO - 2021-09-05 10:31:28 --> Helper loaded: security_helper
INFO - 2021-09-05 10:31:28 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:31:28 --> Helper loaded: general_helper
INFO - 2021-09-05 10:31:28 --> Database Driver Class Initialized
INFO - 2021-09-05 10:31:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:31:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:31:28 --> Pagination Class Initialized
INFO - 2021-09-05 10:31:28 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:31:28 --> Form Validation Class Initialized
INFO - 2021-09-05 10:31:28 --> Upload Class Initialized
INFO - 2021-09-05 10:31:28 --> MY_Model class loaded
INFO - 2021-09-05 10:31:28 --> Model "Application_model" initialized
INFO - 2021-09-05 10:31:28 --> Controller Class Initialized
DEBUG - 2021-09-05 10:31:28 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:31:28 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:31:28 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:31:28 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:31:28 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:31:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:31:28 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:31:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:31:28 --> Model "Student_model" initialized
INFO - 2021-09-05 10:31:28 --> Final output sent to browser
DEBUG - 2021-09-05 10:31:28 --> Total execution time: 0.2003
INFO - 2021-09-05 10:32:01 --> Config Class Initialized
INFO - 2021-09-05 10:32:01 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:32:01 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:32:01 --> Utf8 Class Initialized
INFO - 2021-09-05 10:32:01 --> URI Class Initialized
INFO - 2021-09-05 10:32:01 --> Router Class Initialized
INFO - 2021-09-05 10:32:01 --> Output Class Initialized
INFO - 2021-09-05 10:32:01 --> Security Class Initialized
DEBUG - 2021-09-05 10:32:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:32:01 --> Input Class Initialized
INFO - 2021-09-05 10:32:01 --> Language Class Initialized
INFO - 2021-09-05 10:32:01 --> Loader Class Initialized
INFO - 2021-09-05 10:32:01 --> Helper loaded: url_helper
INFO - 2021-09-05 10:32:01 --> Helper loaded: file_helper
INFO - 2021-09-05 10:32:01 --> Helper loaded: form_helper
INFO - 2021-09-05 10:32:01 --> Helper loaded: security_helper
INFO - 2021-09-05 10:32:01 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:32:01 --> Helper loaded: general_helper
INFO - 2021-09-05 10:32:01 --> Database Driver Class Initialized
INFO - 2021-09-05 10:32:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:32:01 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:32:01 --> Pagination Class Initialized
INFO - 2021-09-05 10:32:01 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:32:01 --> Form Validation Class Initialized
INFO - 2021-09-05 10:32:01 --> Upload Class Initialized
INFO - 2021-09-05 10:32:01 --> MY_Model class loaded
INFO - 2021-09-05 10:32:01 --> Model "Application_model" initialized
INFO - 2021-09-05 10:32:01 --> Controller Class Initialized
DEBUG - 2021-09-05 10:32:01 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:32:01 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:32:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:32:01 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:32:01 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:32:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:32:01 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:32:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:32:01 --> Model "Student_model" initialized
INFO - 2021-09-05 10:32:01 --> Final output sent to browser
DEBUG - 2021-09-05 10:32:01 --> Total execution time: 0.1466
INFO - 2021-09-05 10:32:44 --> Config Class Initialized
INFO - 2021-09-05 10:32:44 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:32:44 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:32:44 --> Utf8 Class Initialized
INFO - 2021-09-05 10:32:44 --> URI Class Initialized
INFO - 2021-09-05 10:32:44 --> Router Class Initialized
INFO - 2021-09-05 10:32:44 --> Output Class Initialized
INFO - 2021-09-05 10:32:44 --> Security Class Initialized
DEBUG - 2021-09-05 10:32:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:32:44 --> Input Class Initialized
INFO - 2021-09-05 10:32:44 --> Language Class Initialized
INFO - 2021-09-05 10:32:44 --> Loader Class Initialized
INFO - 2021-09-05 10:32:44 --> Helper loaded: url_helper
INFO - 2021-09-05 10:32:44 --> Helper loaded: file_helper
INFO - 2021-09-05 10:32:44 --> Helper loaded: form_helper
INFO - 2021-09-05 10:32:44 --> Helper loaded: security_helper
INFO - 2021-09-05 10:32:44 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:32:44 --> Helper loaded: general_helper
INFO - 2021-09-05 10:32:44 --> Database Driver Class Initialized
INFO - 2021-09-05 10:32:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:32:45 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:32:45 --> Pagination Class Initialized
INFO - 2021-09-05 10:32:45 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:32:45 --> Form Validation Class Initialized
INFO - 2021-09-05 10:32:45 --> Upload Class Initialized
INFO - 2021-09-05 10:32:45 --> MY_Model class loaded
INFO - 2021-09-05 10:32:45 --> Model "Application_model" initialized
INFO - 2021-09-05 10:32:45 --> Controller Class Initialized
DEBUG - 2021-09-05 10:32:45 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:32:45 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:32:45 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:32:45 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:32:45 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:32:45 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:32:45 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:32:45 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:32:45 --> Model "Student_model" initialized
INFO - 2021-09-05 10:32:45 --> Final output sent to browser
DEBUG - 2021-09-05 10:32:45 --> Total execution time: 0.2630
INFO - 2021-09-05 10:33:17 --> Config Class Initialized
INFO - 2021-09-05 10:33:17 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:33:17 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:33:17 --> Utf8 Class Initialized
INFO - 2021-09-05 10:33:17 --> URI Class Initialized
INFO - 2021-09-05 10:33:17 --> Router Class Initialized
INFO - 2021-09-05 10:33:17 --> Output Class Initialized
INFO - 2021-09-05 10:33:17 --> Security Class Initialized
DEBUG - 2021-09-05 10:33:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:33:17 --> Input Class Initialized
INFO - 2021-09-05 10:33:17 --> Language Class Initialized
INFO - 2021-09-05 10:33:17 --> Loader Class Initialized
INFO - 2021-09-05 10:33:17 --> Helper loaded: url_helper
INFO - 2021-09-05 10:33:17 --> Helper loaded: file_helper
INFO - 2021-09-05 10:33:17 --> Helper loaded: form_helper
INFO - 2021-09-05 10:33:17 --> Helper loaded: security_helper
INFO - 2021-09-05 10:33:17 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:33:17 --> Helper loaded: general_helper
INFO - 2021-09-05 10:33:17 --> Database Driver Class Initialized
INFO - 2021-09-05 10:33:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:33:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:33:17 --> Pagination Class Initialized
INFO - 2021-09-05 10:33:17 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:33:17 --> Form Validation Class Initialized
INFO - 2021-09-05 10:33:17 --> Upload Class Initialized
INFO - 2021-09-05 10:33:17 --> MY_Model class loaded
INFO - 2021-09-05 10:33:17 --> Model "Application_model" initialized
INFO - 2021-09-05 10:33:17 --> Controller Class Initialized
DEBUG - 2021-09-05 10:33:17 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:33:17 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:33:17 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:33:17 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:33:17 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:33:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:33:17 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:33:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:33:17 --> Model "Student_model" initialized
INFO - 2021-09-05 10:33:17 --> Final output sent to browser
DEBUG - 2021-09-05 10:33:17 --> Total execution time: 0.1622
INFO - 2021-09-05 10:33:35 --> Config Class Initialized
INFO - 2021-09-05 10:33:35 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:33:35 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:33:35 --> Utf8 Class Initialized
INFO - 2021-09-05 10:33:35 --> URI Class Initialized
INFO - 2021-09-05 10:33:35 --> Router Class Initialized
INFO - 2021-09-05 10:33:35 --> Output Class Initialized
INFO - 2021-09-05 10:33:35 --> Security Class Initialized
DEBUG - 2021-09-05 10:33:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:33:35 --> Input Class Initialized
INFO - 2021-09-05 10:33:35 --> Language Class Initialized
INFO - 2021-09-05 10:33:35 --> Loader Class Initialized
INFO - 2021-09-05 10:33:35 --> Helper loaded: url_helper
INFO - 2021-09-05 10:33:35 --> Helper loaded: file_helper
INFO - 2021-09-05 10:33:35 --> Helper loaded: form_helper
INFO - 2021-09-05 10:33:35 --> Helper loaded: security_helper
INFO - 2021-09-05 10:33:35 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:33:35 --> Helper loaded: general_helper
INFO - 2021-09-05 10:33:35 --> Database Driver Class Initialized
INFO - 2021-09-05 10:33:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:33:35 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:33:35 --> Pagination Class Initialized
INFO - 2021-09-05 10:33:35 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:33:35 --> Form Validation Class Initialized
INFO - 2021-09-05 10:33:35 --> Upload Class Initialized
INFO - 2021-09-05 10:33:35 --> MY_Model class loaded
INFO - 2021-09-05 10:33:35 --> Model "Application_model" initialized
INFO - 2021-09-05 10:33:35 --> Controller Class Initialized
DEBUG - 2021-09-05 10:33:35 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:33:35 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:33:35 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:33:35 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:33:35 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:33:35 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:33:35 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:33:35 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:33:35 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:33:35 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:33:35 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 94
INFO - 2021-09-05 10:36:40 --> Config Class Initialized
INFO - 2021-09-05 10:36:40 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:36:40 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:36:40 --> Utf8 Class Initialized
INFO - 2021-09-05 10:36:40 --> URI Class Initialized
INFO - 2021-09-05 10:36:40 --> Router Class Initialized
INFO - 2021-09-05 10:36:40 --> Output Class Initialized
INFO - 2021-09-05 10:36:40 --> Security Class Initialized
DEBUG - 2021-09-05 10:36:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:36:40 --> Input Class Initialized
INFO - 2021-09-05 10:36:40 --> Language Class Initialized
INFO - 2021-09-05 10:36:40 --> Loader Class Initialized
INFO - 2021-09-05 10:36:40 --> Helper loaded: url_helper
INFO - 2021-09-05 10:36:40 --> Helper loaded: file_helper
INFO - 2021-09-05 10:36:40 --> Helper loaded: form_helper
INFO - 2021-09-05 10:36:40 --> Helper loaded: security_helper
INFO - 2021-09-05 10:36:40 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:36:40 --> Helper loaded: general_helper
INFO - 2021-09-05 10:36:40 --> Database Driver Class Initialized
INFO - 2021-09-05 10:36:40 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:36:40 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:36:40 --> Pagination Class Initialized
INFO - 2021-09-05 10:36:40 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:36:40 --> Form Validation Class Initialized
INFO - 2021-09-05 10:36:40 --> Upload Class Initialized
INFO - 2021-09-05 10:36:40 --> MY_Model class loaded
INFO - 2021-09-05 10:36:40 --> Model "Application_model" initialized
INFO - 2021-09-05 10:36:40 --> Controller Class Initialized
DEBUG - 2021-09-05 10:36:40 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:36:40 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:36:40 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:36:40 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:36:40 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:36:40 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:36:40 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:36:40 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:36:40 --> Model "Student_model" initialized
INFO - 2021-09-05 10:36:40 --> Final output sent to browser
DEBUG - 2021-09-05 10:36:40 --> Total execution time: 0.3542
INFO - 2021-09-05 10:37:16 --> Config Class Initialized
INFO - 2021-09-05 10:37:16 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:37:16 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:37:16 --> Utf8 Class Initialized
INFO - 2021-09-05 10:37:16 --> URI Class Initialized
INFO - 2021-09-05 10:37:16 --> Router Class Initialized
INFO - 2021-09-05 10:37:17 --> Output Class Initialized
INFO - 2021-09-05 10:37:17 --> Security Class Initialized
DEBUG - 2021-09-05 10:37:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:37:17 --> Input Class Initialized
INFO - 2021-09-05 10:37:17 --> Language Class Initialized
INFO - 2021-09-05 10:37:17 --> Loader Class Initialized
INFO - 2021-09-05 10:37:17 --> Helper loaded: url_helper
INFO - 2021-09-05 10:37:17 --> Helper loaded: file_helper
INFO - 2021-09-05 10:37:17 --> Helper loaded: form_helper
INFO - 2021-09-05 10:37:17 --> Helper loaded: security_helper
INFO - 2021-09-05 10:37:17 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:37:17 --> Helper loaded: general_helper
INFO - 2021-09-05 10:37:17 --> Database Driver Class Initialized
INFO - 2021-09-05 10:37:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:37:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:37:17 --> Pagination Class Initialized
INFO - 2021-09-05 10:37:17 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:37:17 --> Form Validation Class Initialized
INFO - 2021-09-05 10:37:17 --> Upload Class Initialized
INFO - 2021-09-05 10:37:17 --> MY_Model class loaded
INFO - 2021-09-05 10:37:17 --> Model "Application_model" initialized
INFO - 2021-09-05 10:37:17 --> Controller Class Initialized
DEBUG - 2021-09-05 10:37:17 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:37:17 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:37:17 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:37:17 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:37:17 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:37:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:37:17 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:37:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:37:17 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:37:17 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:37:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 94
INFO - 2021-09-05 10:39:08 --> Config Class Initialized
INFO - 2021-09-05 10:39:08 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:39:08 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:39:08 --> Utf8 Class Initialized
INFO - 2021-09-05 10:39:08 --> URI Class Initialized
INFO - 2021-09-05 10:39:08 --> Router Class Initialized
INFO - 2021-09-05 10:39:08 --> Output Class Initialized
INFO - 2021-09-05 10:39:08 --> Security Class Initialized
DEBUG - 2021-09-05 10:39:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:39:08 --> Input Class Initialized
INFO - 2021-09-05 10:39:08 --> Language Class Initialized
INFO - 2021-09-05 10:39:08 --> Loader Class Initialized
INFO - 2021-09-05 10:39:08 --> Helper loaded: url_helper
INFO - 2021-09-05 10:39:08 --> Helper loaded: file_helper
INFO - 2021-09-05 10:39:08 --> Helper loaded: form_helper
INFO - 2021-09-05 10:39:08 --> Helper loaded: security_helper
INFO - 2021-09-05 10:39:08 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:39:08 --> Helper loaded: general_helper
INFO - 2021-09-05 10:39:08 --> Database Driver Class Initialized
INFO - 2021-09-05 10:39:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:39:08 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:39:08 --> Pagination Class Initialized
INFO - 2021-09-05 10:39:08 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:39:08 --> Form Validation Class Initialized
INFO - 2021-09-05 10:39:08 --> Upload Class Initialized
INFO - 2021-09-05 10:39:08 --> MY_Model class loaded
INFO - 2021-09-05 10:39:08 --> Model "Application_model" initialized
INFO - 2021-09-05 10:39:08 --> Controller Class Initialized
DEBUG - 2021-09-05 10:39:08 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:39:08 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:39:08 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:39:08 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:39:08 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:39:08 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:39:08 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:39:08 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:39:08 --> Model "Student_model" initialized
INFO - 2021-09-05 10:39:08 --> Final output sent to browser
DEBUG - 2021-09-05 10:39:08 --> Total execution time: 0.1407
INFO - 2021-09-05 10:39:42 --> Config Class Initialized
INFO - 2021-09-05 10:39:42 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:39:42 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:39:42 --> Utf8 Class Initialized
INFO - 2021-09-05 10:39:42 --> URI Class Initialized
INFO - 2021-09-05 10:39:42 --> Router Class Initialized
INFO - 2021-09-05 10:39:42 --> Output Class Initialized
INFO - 2021-09-05 10:39:42 --> Security Class Initialized
DEBUG - 2021-09-05 10:39:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:39:42 --> Input Class Initialized
INFO - 2021-09-05 10:39:42 --> Language Class Initialized
INFO - 2021-09-05 10:39:42 --> Loader Class Initialized
INFO - 2021-09-05 10:39:42 --> Helper loaded: url_helper
INFO - 2021-09-05 10:39:42 --> Helper loaded: file_helper
INFO - 2021-09-05 10:39:42 --> Helper loaded: form_helper
INFO - 2021-09-05 10:39:42 --> Helper loaded: security_helper
INFO - 2021-09-05 10:39:42 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:39:42 --> Helper loaded: general_helper
INFO - 2021-09-05 10:39:42 --> Database Driver Class Initialized
INFO - 2021-09-05 10:39:42 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:39:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:39:42 --> Pagination Class Initialized
INFO - 2021-09-05 10:39:42 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:39:42 --> Form Validation Class Initialized
INFO - 2021-09-05 10:39:42 --> Upload Class Initialized
INFO - 2021-09-05 10:39:42 --> MY_Model class loaded
INFO - 2021-09-05 10:39:42 --> Model "Application_model" initialized
INFO - 2021-09-05 10:39:42 --> Controller Class Initialized
DEBUG - 2021-09-05 10:39:42 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:39:42 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:39:42 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:39:42 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:39:42 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:39:42 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:39:42 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:39:42 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:39:42 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:39:42 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:39:42 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 94
INFO - 2021-09-05 10:40:17 --> Config Class Initialized
INFO - 2021-09-05 10:40:17 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:40:17 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:40:17 --> Utf8 Class Initialized
INFO - 2021-09-05 10:40:17 --> URI Class Initialized
INFO - 2021-09-05 10:40:17 --> Router Class Initialized
INFO - 2021-09-05 10:40:17 --> Output Class Initialized
INFO - 2021-09-05 10:40:17 --> Security Class Initialized
DEBUG - 2021-09-05 10:40:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:40:17 --> Input Class Initialized
INFO - 2021-09-05 10:40:17 --> Language Class Initialized
INFO - 2021-09-05 10:40:17 --> Loader Class Initialized
INFO - 2021-09-05 10:40:17 --> Helper loaded: url_helper
INFO - 2021-09-05 10:40:17 --> Helper loaded: file_helper
INFO - 2021-09-05 10:40:17 --> Helper loaded: form_helper
INFO - 2021-09-05 10:40:17 --> Helper loaded: security_helper
INFO - 2021-09-05 10:40:17 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:40:17 --> Helper loaded: general_helper
INFO - 2021-09-05 10:40:17 --> Database Driver Class Initialized
INFO - 2021-09-05 10:40:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:40:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:40:17 --> Pagination Class Initialized
INFO - 2021-09-05 10:40:17 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:40:17 --> Form Validation Class Initialized
INFO - 2021-09-05 10:40:17 --> Upload Class Initialized
INFO - 2021-09-05 10:40:17 --> MY_Model class loaded
INFO - 2021-09-05 10:40:17 --> Model "Application_model" initialized
INFO - 2021-09-05 10:40:17 --> Controller Class Initialized
DEBUG - 2021-09-05 10:40:17 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:40:17 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:40:17 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:40:17 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:40:17 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:40:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:40:17 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:40:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:40:17 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:40:17 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:40:17 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 94
INFO - 2021-09-05 10:42:10 --> Config Class Initialized
INFO - 2021-09-05 10:42:10 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:42:10 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:42:10 --> Utf8 Class Initialized
INFO - 2021-09-05 10:42:10 --> URI Class Initialized
INFO - 2021-09-05 10:42:10 --> Router Class Initialized
INFO - 2021-09-05 10:42:10 --> Output Class Initialized
INFO - 2021-09-05 10:42:10 --> Security Class Initialized
DEBUG - 2021-09-05 10:42:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:42:10 --> Input Class Initialized
INFO - 2021-09-05 10:42:10 --> Language Class Initialized
INFO - 2021-09-05 10:42:10 --> Loader Class Initialized
INFO - 2021-09-05 10:42:10 --> Helper loaded: url_helper
INFO - 2021-09-05 10:42:10 --> Helper loaded: file_helper
INFO - 2021-09-05 10:42:10 --> Helper loaded: form_helper
INFO - 2021-09-05 10:42:10 --> Helper loaded: security_helper
INFO - 2021-09-05 10:42:10 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:42:10 --> Helper loaded: general_helper
INFO - 2021-09-05 10:42:10 --> Database Driver Class Initialized
INFO - 2021-09-05 10:42:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:42:11 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:42:11 --> Pagination Class Initialized
INFO - 2021-09-05 10:42:11 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:42:11 --> Form Validation Class Initialized
INFO - 2021-09-05 10:42:11 --> Upload Class Initialized
INFO - 2021-09-05 10:42:11 --> MY_Model class loaded
INFO - 2021-09-05 10:42:11 --> Model "Application_model" initialized
INFO - 2021-09-05 10:42:11 --> Controller Class Initialized
DEBUG - 2021-09-05 10:42:11 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:42:11 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:42:11 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:42:11 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:42:11 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:42:11 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:42:11 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:42:11 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:42:11 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:42:11 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:42:11 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 94
INFO - 2021-09-05 10:42:31 --> Config Class Initialized
INFO - 2021-09-05 10:42:31 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:42:31 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:42:31 --> Utf8 Class Initialized
INFO - 2021-09-05 10:42:31 --> URI Class Initialized
INFO - 2021-09-05 10:42:31 --> Router Class Initialized
INFO - 2021-09-05 10:42:31 --> Output Class Initialized
INFO - 2021-09-05 10:42:31 --> Security Class Initialized
DEBUG - 2021-09-05 10:42:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:42:31 --> Input Class Initialized
INFO - 2021-09-05 10:42:31 --> Language Class Initialized
INFO - 2021-09-05 10:42:31 --> Loader Class Initialized
INFO - 2021-09-05 10:42:31 --> Helper loaded: url_helper
INFO - 2021-09-05 10:42:31 --> Helper loaded: file_helper
INFO - 2021-09-05 10:42:31 --> Helper loaded: form_helper
INFO - 2021-09-05 10:42:31 --> Helper loaded: security_helper
INFO - 2021-09-05 10:42:31 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:42:31 --> Helper loaded: general_helper
INFO - 2021-09-05 10:42:31 --> Database Driver Class Initialized
INFO - 2021-09-05 10:42:31 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:42:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:42:31 --> Pagination Class Initialized
INFO - 2021-09-05 10:42:31 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:42:31 --> Form Validation Class Initialized
INFO - 2021-09-05 10:42:31 --> Upload Class Initialized
INFO - 2021-09-05 10:42:31 --> MY_Model class loaded
INFO - 2021-09-05 10:42:31 --> Model "Application_model" initialized
INFO - 2021-09-05 10:42:31 --> Controller Class Initialized
DEBUG - 2021-09-05 10:42:31 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:42:31 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:42:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:42:31 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:42:31 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:42:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:42:31 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:42:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:42:31 --> Model "Student_model" initialized
INFO - 2021-09-05 10:42:31 --> Final output sent to browser
DEBUG - 2021-09-05 10:42:31 --> Total execution time: 0.1557
INFO - 2021-09-05 10:43:22 --> Config Class Initialized
INFO - 2021-09-05 10:43:22 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:43:22 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:43:22 --> Utf8 Class Initialized
INFO - 2021-09-05 10:43:22 --> URI Class Initialized
INFO - 2021-09-05 10:43:22 --> Router Class Initialized
INFO - 2021-09-05 10:43:22 --> Output Class Initialized
INFO - 2021-09-05 10:43:22 --> Security Class Initialized
DEBUG - 2021-09-05 10:43:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:43:22 --> Input Class Initialized
INFO - 2021-09-05 10:43:22 --> Language Class Initialized
INFO - 2021-09-05 10:43:22 --> Loader Class Initialized
INFO - 2021-09-05 10:43:22 --> Helper loaded: url_helper
INFO - 2021-09-05 10:43:22 --> Helper loaded: file_helper
INFO - 2021-09-05 10:43:22 --> Helper loaded: form_helper
INFO - 2021-09-05 10:43:22 --> Helper loaded: security_helper
INFO - 2021-09-05 10:43:22 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:43:22 --> Helper loaded: general_helper
INFO - 2021-09-05 10:43:22 --> Database Driver Class Initialized
INFO - 2021-09-05 10:43:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:43:22 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:43:22 --> Pagination Class Initialized
INFO - 2021-09-05 10:43:22 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:43:22 --> Form Validation Class Initialized
INFO - 2021-09-05 10:43:22 --> Upload Class Initialized
INFO - 2021-09-05 10:43:22 --> MY_Model class loaded
INFO - 2021-09-05 10:43:22 --> Model "Application_model" initialized
INFO - 2021-09-05 10:43:22 --> Controller Class Initialized
DEBUG - 2021-09-05 10:43:22 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:43:22 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:43:22 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:43:22 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:43:22 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:43:22 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:43:22 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:43:22 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:43:22 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:43:22 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
INFO - 2021-09-05 10:43:22 --> Final output sent to browser
DEBUG - 2021-09-05 10:43:22 --> Total execution time: 0.1634
INFO - 2021-09-05 10:43:44 --> Config Class Initialized
INFO - 2021-09-05 10:43:44 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:43:44 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:43:44 --> Utf8 Class Initialized
INFO - 2021-09-05 10:43:44 --> URI Class Initialized
INFO - 2021-09-05 10:43:44 --> Router Class Initialized
INFO - 2021-09-05 10:43:44 --> Output Class Initialized
INFO - 2021-09-05 10:43:44 --> Security Class Initialized
DEBUG - 2021-09-05 10:43:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:43:44 --> Input Class Initialized
INFO - 2021-09-05 10:43:44 --> Language Class Initialized
INFO - 2021-09-05 10:43:44 --> Loader Class Initialized
INFO - 2021-09-05 10:43:44 --> Helper loaded: url_helper
INFO - 2021-09-05 10:43:44 --> Helper loaded: file_helper
INFO - 2021-09-05 10:43:44 --> Helper loaded: form_helper
INFO - 2021-09-05 10:43:44 --> Helper loaded: security_helper
INFO - 2021-09-05 10:43:44 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:43:44 --> Helper loaded: general_helper
INFO - 2021-09-05 10:43:44 --> Database Driver Class Initialized
INFO - 2021-09-05 10:43:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:43:44 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:43:44 --> Pagination Class Initialized
INFO - 2021-09-05 10:43:44 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:43:44 --> Form Validation Class Initialized
INFO - 2021-09-05 10:43:44 --> Upload Class Initialized
INFO - 2021-09-05 10:43:44 --> MY_Model class loaded
INFO - 2021-09-05 10:43:44 --> Model "Application_model" initialized
INFO - 2021-09-05 10:43:44 --> Controller Class Initialized
DEBUG - 2021-09-05 10:43:44 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:43:44 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:43:44 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:43:44 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:43:44 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:43:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:43:44 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:43:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:43:44 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:43:44 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:43:44 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 93
INFO - 2021-09-05 10:44:28 --> Config Class Initialized
INFO - 2021-09-05 10:44:28 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:44:28 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:44:28 --> Utf8 Class Initialized
INFO - 2021-09-05 10:44:28 --> URI Class Initialized
INFO - 2021-09-05 10:44:28 --> Router Class Initialized
INFO - 2021-09-05 10:44:28 --> Output Class Initialized
INFO - 2021-09-05 10:44:28 --> Security Class Initialized
DEBUG - 2021-09-05 10:44:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:44:28 --> Input Class Initialized
INFO - 2021-09-05 10:44:28 --> Language Class Initialized
INFO - 2021-09-05 10:44:28 --> Loader Class Initialized
INFO - 2021-09-05 10:44:28 --> Helper loaded: url_helper
INFO - 2021-09-05 10:44:28 --> Helper loaded: file_helper
INFO - 2021-09-05 10:44:28 --> Helper loaded: form_helper
INFO - 2021-09-05 10:44:28 --> Helper loaded: security_helper
INFO - 2021-09-05 10:44:28 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:44:28 --> Helper loaded: general_helper
INFO - 2021-09-05 10:44:28 --> Database Driver Class Initialized
INFO - 2021-09-05 10:44:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:44:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:44:28 --> Pagination Class Initialized
INFO - 2021-09-05 10:44:28 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:44:28 --> Form Validation Class Initialized
INFO - 2021-09-05 10:44:28 --> Upload Class Initialized
INFO - 2021-09-05 10:44:28 --> MY_Model class loaded
INFO - 2021-09-05 10:44:28 --> Model "Application_model" initialized
INFO - 2021-09-05 10:44:28 --> Controller Class Initialized
DEBUG - 2021-09-05 10:44:28 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:44:28 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:44:28 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:44:28 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:44:28 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:44:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:44:28 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:44:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:44:28 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:44:28 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:44:28 --> Severity: error --> Exception: Call to a member function num_rows() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 92
INFO - 2021-09-05 10:45:30 --> Config Class Initialized
INFO - 2021-09-05 10:45:30 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:45:30 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:45:30 --> Utf8 Class Initialized
INFO - 2021-09-05 10:45:30 --> URI Class Initialized
INFO - 2021-09-05 10:45:30 --> Router Class Initialized
INFO - 2021-09-05 10:45:30 --> Output Class Initialized
INFO - 2021-09-05 10:45:30 --> Security Class Initialized
DEBUG - 2021-09-05 10:45:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:45:30 --> Input Class Initialized
INFO - 2021-09-05 10:45:30 --> Language Class Initialized
INFO - 2021-09-05 10:45:30 --> Loader Class Initialized
INFO - 2021-09-05 10:45:30 --> Helper loaded: url_helper
INFO - 2021-09-05 10:45:30 --> Helper loaded: file_helper
INFO - 2021-09-05 10:45:30 --> Helper loaded: form_helper
INFO - 2021-09-05 10:45:30 --> Helper loaded: security_helper
INFO - 2021-09-05 10:45:30 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:45:30 --> Helper loaded: general_helper
INFO - 2021-09-05 10:45:30 --> Database Driver Class Initialized
INFO - 2021-09-05 10:45:30 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:45:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:45:30 --> Pagination Class Initialized
INFO - 2021-09-05 10:45:30 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:45:30 --> Form Validation Class Initialized
INFO - 2021-09-05 10:45:30 --> Upload Class Initialized
INFO - 2021-09-05 10:45:30 --> MY_Model class loaded
INFO - 2021-09-05 10:45:30 --> Model "Application_model" initialized
INFO - 2021-09-05 10:45:30 --> Controller Class Initialized
DEBUG - 2021-09-05 10:45:30 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:45:31 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:45:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:45:31 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:45:31 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:45:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:45:31 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:45:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:45:31 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:45:31 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
INFO - 2021-09-05 10:45:31 --> Final output sent to browser
DEBUG - 2021-09-05 10:45:31 --> Total execution time: 0.9267
INFO - 2021-09-05 10:46:17 --> Config Class Initialized
INFO - 2021-09-05 10:46:17 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:46:17 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:46:17 --> Utf8 Class Initialized
INFO - 2021-09-05 10:46:17 --> URI Class Initialized
INFO - 2021-09-05 10:46:17 --> Router Class Initialized
INFO - 2021-09-05 10:46:17 --> Output Class Initialized
INFO - 2021-09-05 10:46:17 --> Security Class Initialized
DEBUG - 2021-09-05 10:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:46:17 --> Input Class Initialized
INFO - 2021-09-05 10:46:17 --> Language Class Initialized
INFO - 2021-09-05 10:46:17 --> Loader Class Initialized
INFO - 2021-09-05 10:46:17 --> Helper loaded: url_helper
INFO - 2021-09-05 10:46:17 --> Helper loaded: file_helper
INFO - 2021-09-05 10:46:17 --> Helper loaded: form_helper
INFO - 2021-09-05 10:46:17 --> Helper loaded: security_helper
INFO - 2021-09-05 10:46:17 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:46:17 --> Helper loaded: general_helper
INFO - 2021-09-05 10:46:17 --> Database Driver Class Initialized
INFO - 2021-09-05 10:46:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:46:17 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:46:17 --> Pagination Class Initialized
INFO - 2021-09-05 10:46:17 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:46:17 --> Form Validation Class Initialized
INFO - 2021-09-05 10:46:17 --> Upload Class Initialized
INFO - 2021-09-05 10:46:17 --> MY_Model class loaded
INFO - 2021-09-05 10:46:17 --> Model "Application_model" initialized
INFO - 2021-09-05 10:46:17 --> Controller Class Initialized
DEBUG - 2021-09-05 10:46:17 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:46:17 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:46:17 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:46:17 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:46:17 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:46:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:46:17 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:46:17 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:46:17 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:46:17 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
INFO - 2021-09-05 10:46:17 --> Final output sent to browser
DEBUG - 2021-09-05 10:46:17 --> Total execution time: 0.1990
INFO - 2021-09-05 10:47:48 --> Config Class Initialized
INFO - 2021-09-05 10:47:48 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:47:48 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:47:48 --> Utf8 Class Initialized
INFO - 2021-09-05 10:47:48 --> URI Class Initialized
INFO - 2021-09-05 10:47:48 --> Router Class Initialized
INFO - 2021-09-05 10:47:48 --> Output Class Initialized
INFO - 2021-09-05 10:47:48 --> Security Class Initialized
DEBUG - 2021-09-05 10:47:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:47:48 --> Input Class Initialized
INFO - 2021-09-05 10:47:48 --> Language Class Initialized
INFO - 2021-09-05 10:47:48 --> Loader Class Initialized
INFO - 2021-09-05 10:47:48 --> Helper loaded: url_helper
INFO - 2021-09-05 10:47:48 --> Helper loaded: file_helper
INFO - 2021-09-05 10:47:48 --> Helper loaded: form_helper
INFO - 2021-09-05 10:47:48 --> Helper loaded: security_helper
INFO - 2021-09-05 10:47:48 --> Helper loaded: directory_helper
ERROR - 2021-09-05 10:47:48 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 91
INFO - 2021-09-05 10:48:00 --> Config Class Initialized
INFO - 2021-09-05 10:48:00 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:48:00 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:48:00 --> Utf8 Class Initialized
INFO - 2021-09-05 10:48:00 --> URI Class Initialized
INFO - 2021-09-05 10:48:00 --> Router Class Initialized
INFO - 2021-09-05 10:48:00 --> Output Class Initialized
INFO - 2021-09-05 10:48:00 --> Security Class Initialized
DEBUG - 2021-09-05 10:48:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:48:00 --> Input Class Initialized
INFO - 2021-09-05 10:48:00 --> Language Class Initialized
INFO - 2021-09-05 10:48:00 --> Loader Class Initialized
INFO - 2021-09-05 10:48:00 --> Helper loaded: url_helper
INFO - 2021-09-05 10:48:00 --> Helper loaded: file_helper
INFO - 2021-09-05 10:48:00 --> Helper loaded: form_helper
INFO - 2021-09-05 10:48:00 --> Helper loaded: security_helper
INFO - 2021-09-05 10:48:00 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:48:00 --> Helper loaded: general_helper
INFO - 2021-09-05 10:48:00 --> Database Driver Class Initialized
INFO - 2021-09-05 10:48:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:48:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:48:00 --> Pagination Class Initialized
INFO - 2021-09-05 10:48:00 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:48:00 --> Form Validation Class Initialized
INFO - 2021-09-05 10:48:00 --> Upload Class Initialized
INFO - 2021-09-05 10:48:01 --> MY_Model class loaded
INFO - 2021-09-05 10:48:01 --> Model "Application_model" initialized
INFO - 2021-09-05 10:48:01 --> Controller Class Initialized
DEBUG - 2021-09-05 10:48:01 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:48:01 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:48:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:48:01 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:48:01 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:48:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:48:01 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:48:01 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:48:01 --> Model "Student_model" initialized
ERROR - 2021-09-05 10:48:01 --> Query error: Column 'session_id' in field list is ambiguous - Invalid query: SELECT `e`.*, `s`.`photo`, CONCAT(s.first_name, " ", s.last_name) as fullname, `s`.`register_no`, `s`.`parent_id`, `s`.`email`, `s`.`blood_group`, `s`.`birthday`, `l`.`active`, `c`.`name` as `class_name`, `se`.`name` as `section_name`, `session_id`
FROM (`enroll` as `e`, `global_settings`)
INNER JOIN `student` as `s` ON `e`.`student_id` = `s`.`id`
INNER JOIN `login_credential` as `l` ON `l`.`user_id` = `s`.`id` and `l`.`role` = 7
LEFT JOIN `class` as `c` ON `e`.`class_id` = `c`.`id`
LEFT JOIN `section` as `se` ON `e`.`section_id`=`se`.`id`
WHERE `e`.`class_id` = ''
AND `e`.`branch_id` = ''
AND `id` = 1
ERROR - 2021-09-05 10:48:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\Users\Gopal Ghimire\Desktop\New folder\school\application\helpers\general_helper.php 91
INFO - 2021-09-05 10:49:09 --> Config Class Initialized
INFO - 2021-09-05 10:49:09 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:49:09 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:49:09 --> Utf8 Class Initialized
INFO - 2021-09-05 10:49:09 --> URI Class Initialized
INFO - 2021-09-05 10:49:09 --> Router Class Initialized
INFO - 2021-09-05 10:49:09 --> Output Class Initialized
INFO - 2021-09-05 10:49:09 --> Security Class Initialized
DEBUG - 2021-09-05 10:49:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:49:09 --> Input Class Initialized
INFO - 2021-09-05 10:49:09 --> Language Class Initialized
INFO - 2021-09-05 10:49:09 --> Loader Class Initialized
INFO - 2021-09-05 10:49:09 --> Helper loaded: url_helper
INFO - 2021-09-05 10:49:09 --> Helper loaded: file_helper
INFO - 2021-09-05 10:49:09 --> Helper loaded: form_helper
INFO - 2021-09-05 10:49:09 --> Helper loaded: security_helper
INFO - 2021-09-05 10:49:09 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:49:09 --> Helper loaded: general_helper
INFO - 2021-09-05 10:49:09 --> Database Driver Class Initialized
INFO - 2021-09-05 10:49:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:49:09 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:49:09 --> Pagination Class Initialized
INFO - 2021-09-05 10:49:09 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:49:09 --> Form Validation Class Initialized
INFO - 2021-09-05 10:49:09 --> Upload Class Initialized
INFO - 2021-09-05 10:49:09 --> MY_Model class loaded
INFO - 2021-09-05 10:49:09 --> Model "Application_model" initialized
INFO - 2021-09-05 10:49:09 --> Controller Class Initialized
DEBUG - 2021-09-05 10:49:09 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:49:09 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:49:09 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:49:09 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:49:09 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:49:09 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:49:09 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:49:09 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:49:09 --> Model "Student_model" initialized
INFO - 2021-09-05 10:49:09 --> Final output sent to browser
DEBUG - 2021-09-05 10:49:09 --> Total execution time: 0.1629
INFO - 2021-09-05 10:50:28 --> Config Class Initialized
INFO - 2021-09-05 10:50:28 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:50:28 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:50:28 --> Utf8 Class Initialized
INFO - 2021-09-05 10:50:28 --> URI Class Initialized
INFO - 2021-09-05 10:50:28 --> Router Class Initialized
INFO - 2021-09-05 10:50:28 --> Output Class Initialized
INFO - 2021-09-05 10:50:28 --> Security Class Initialized
DEBUG - 2021-09-05 10:50:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:50:28 --> Input Class Initialized
INFO - 2021-09-05 10:50:28 --> Language Class Initialized
INFO - 2021-09-05 10:50:28 --> Loader Class Initialized
INFO - 2021-09-05 10:50:28 --> Helper loaded: url_helper
INFO - 2021-09-05 10:50:28 --> Helper loaded: file_helper
INFO - 2021-09-05 10:50:28 --> Helper loaded: form_helper
INFO - 2021-09-05 10:50:28 --> Helper loaded: security_helper
INFO - 2021-09-05 10:50:28 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:50:28 --> Helper loaded: general_helper
INFO - 2021-09-05 10:50:28 --> Database Driver Class Initialized
INFO - 2021-09-05 10:50:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:50:28 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:50:28 --> Pagination Class Initialized
INFO - 2021-09-05 10:50:28 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:50:28 --> Form Validation Class Initialized
INFO - 2021-09-05 10:50:28 --> Upload Class Initialized
INFO - 2021-09-05 10:50:28 --> MY_Model class loaded
INFO - 2021-09-05 10:50:28 --> Model "Application_model" initialized
INFO - 2021-09-05 10:50:28 --> Controller Class Initialized
DEBUG - 2021-09-05 10:50:28 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:50:28 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:50:28 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:50:28 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:50:28 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:50:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:50:28 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:50:28 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:50:28 --> Model "Student_model" initialized
INFO - 2021-09-05 10:50:28 --> Final output sent to browser
DEBUG - 2021-09-05 10:50:28 --> Total execution time: 0.2060
INFO - 2021-09-05 10:52:05 --> Config Class Initialized
INFO - 2021-09-05 10:52:05 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:52:05 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:52:05 --> Utf8 Class Initialized
INFO - 2021-09-05 10:52:05 --> URI Class Initialized
INFO - 2021-09-05 10:52:05 --> Router Class Initialized
INFO - 2021-09-05 10:52:05 --> Output Class Initialized
INFO - 2021-09-05 10:52:05 --> Security Class Initialized
DEBUG - 2021-09-05 10:52:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:52:05 --> Input Class Initialized
INFO - 2021-09-05 10:52:05 --> Language Class Initialized
INFO - 2021-09-05 10:52:05 --> Loader Class Initialized
INFO - 2021-09-05 10:52:05 --> Helper loaded: url_helper
INFO - 2021-09-05 10:52:05 --> Helper loaded: file_helper
INFO - 2021-09-05 10:52:05 --> Helper loaded: form_helper
INFO - 2021-09-05 10:52:05 --> Helper loaded: security_helper
INFO - 2021-09-05 10:52:05 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:52:05 --> Helper loaded: general_helper
INFO - 2021-09-05 10:52:05 --> Database Driver Class Initialized
INFO - 2021-09-05 10:52:05 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:52:05 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:52:05 --> Pagination Class Initialized
INFO - 2021-09-05 10:52:05 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:52:05 --> Form Validation Class Initialized
INFO - 2021-09-05 10:52:05 --> Upload Class Initialized
INFO - 2021-09-05 10:52:05 --> MY_Model class loaded
INFO - 2021-09-05 10:52:05 --> Model "Application_model" initialized
INFO - 2021-09-05 10:52:05 --> Controller Class Initialized
DEBUG - 2021-09-05 10:52:05 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:52:05 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:52:05 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:52:05 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:52:05 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:05 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:05 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:52:05 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:52:05 --> Model "Student_model" initialized
INFO - 2021-09-05 10:52:05 --> Final output sent to browser
DEBUG - 2021-09-05 10:52:05 --> Total execution time: 0.1539
INFO - 2021-09-05 10:52:26 --> Config Class Initialized
INFO - 2021-09-05 10:52:26 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:52:26 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:52:26 --> Utf8 Class Initialized
INFO - 2021-09-05 10:52:26 --> URI Class Initialized
INFO - 2021-09-05 10:52:26 --> Router Class Initialized
INFO - 2021-09-05 10:52:26 --> Output Class Initialized
INFO - 2021-09-05 10:52:26 --> Security Class Initialized
DEBUG - 2021-09-05 10:52:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:52:26 --> Input Class Initialized
INFO - 2021-09-05 10:52:26 --> Language Class Initialized
INFO - 2021-09-05 10:52:26 --> Loader Class Initialized
INFO - 2021-09-05 10:52:26 --> Helper loaded: url_helper
INFO - 2021-09-05 10:52:26 --> Helper loaded: file_helper
INFO - 2021-09-05 10:52:26 --> Helper loaded: form_helper
INFO - 2021-09-05 10:52:26 --> Helper loaded: security_helper
INFO - 2021-09-05 10:52:26 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:52:26 --> Helper loaded: general_helper
INFO - 2021-09-05 10:52:26 --> Database Driver Class Initialized
INFO - 2021-09-05 10:52:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:52:26 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:52:26 --> Pagination Class Initialized
INFO - 2021-09-05 10:52:26 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:52:26 --> Form Validation Class Initialized
INFO - 2021-09-05 10:52:26 --> Upload Class Initialized
INFO - 2021-09-05 10:52:26 --> MY_Model class loaded
INFO - 2021-09-05 10:52:26 --> Model "Application_model" initialized
INFO - 2021-09-05 10:52:26 --> Controller Class Initialized
DEBUG - 2021-09-05 10:52:26 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:52:26 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:52:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:52:26 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:52:26 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:26 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:26 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:52:26 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:52:26 --> Model "Student_model" initialized
INFO - 2021-09-05 10:52:26 --> Final output sent to browser
DEBUG - 2021-09-05 10:52:26 --> Total execution time: 0.1459
INFO - 2021-09-05 10:52:30 --> Config Class Initialized
INFO - 2021-09-05 10:52:30 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:52:30 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:52:30 --> Utf8 Class Initialized
INFO - 2021-09-05 10:52:30 --> URI Class Initialized
INFO - 2021-09-05 10:52:30 --> Router Class Initialized
INFO - 2021-09-05 10:52:30 --> Output Class Initialized
INFO - 2021-09-05 10:52:30 --> Security Class Initialized
DEBUG - 2021-09-05 10:52:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:52:30 --> Input Class Initialized
INFO - 2021-09-05 10:52:30 --> Language Class Initialized
INFO - 2021-09-05 10:52:30 --> Loader Class Initialized
INFO - 2021-09-05 10:52:30 --> Helper loaded: url_helper
INFO - 2021-09-05 10:52:30 --> Helper loaded: file_helper
INFO - 2021-09-05 10:52:30 --> Helper loaded: form_helper
INFO - 2021-09-05 10:52:30 --> Helper loaded: security_helper
INFO - 2021-09-05 10:52:30 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:52:30 --> Helper loaded: general_helper
INFO - 2021-09-05 10:52:30 --> Database Driver Class Initialized
INFO - 2021-09-05 10:52:30 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:52:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:52:30 --> Pagination Class Initialized
INFO - 2021-09-05 10:52:30 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:52:30 --> Form Validation Class Initialized
INFO - 2021-09-05 10:52:30 --> Upload Class Initialized
INFO - 2021-09-05 10:52:30 --> MY_Model class loaded
INFO - 2021-09-05 10:52:30 --> Model "Application_model" initialized
INFO - 2021-09-05 10:52:30 --> Controller Class Initialized
DEBUG - 2021-09-05 10:52:30 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:52:30 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:52:30 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:52:30 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:52:30 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:30 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:30 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:52:30 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:52:30 --> Model "Student_model" initialized
INFO - 2021-09-05 10:52:30 --> Final output sent to browser
DEBUG - 2021-09-05 10:52:30 --> Total execution time: 0.1829
INFO - 2021-09-05 10:52:56 --> Config Class Initialized
INFO - 2021-09-05 10:52:56 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:52:56 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:52:56 --> Utf8 Class Initialized
INFO - 2021-09-05 10:52:56 --> URI Class Initialized
INFO - 2021-09-05 10:52:56 --> Router Class Initialized
INFO - 2021-09-05 10:52:56 --> Output Class Initialized
INFO - 2021-09-05 10:52:56 --> Security Class Initialized
DEBUG - 2021-09-05 10:52:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:52:56 --> Input Class Initialized
INFO - 2021-09-05 10:52:56 --> Language Class Initialized
INFO - 2021-09-05 10:52:56 --> Loader Class Initialized
INFO - 2021-09-05 10:52:56 --> Helper loaded: url_helper
INFO - 2021-09-05 10:52:56 --> Helper loaded: file_helper
INFO - 2021-09-05 10:52:56 --> Helper loaded: form_helper
INFO - 2021-09-05 10:52:56 --> Helper loaded: security_helper
INFO - 2021-09-05 10:52:56 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:52:56 --> Helper loaded: general_helper
INFO - 2021-09-05 10:52:56 --> Database Driver Class Initialized
INFO - 2021-09-05 10:52:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:52:56 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:52:56 --> Pagination Class Initialized
INFO - 2021-09-05 10:52:56 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:52:56 --> Form Validation Class Initialized
INFO - 2021-09-05 10:52:56 --> Upload Class Initialized
INFO - 2021-09-05 10:52:56 --> MY_Model class loaded
INFO - 2021-09-05 10:52:56 --> Model "Application_model" initialized
INFO - 2021-09-05 10:52:56 --> Controller Class Initialized
DEBUG - 2021-09-05 10:52:56 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:52:56 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:52:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:52:56 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:52:56 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:52:56 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:52:56 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:52:56 --> Model "Student_model" initialized
INFO - 2021-09-05 10:52:56 --> Final output sent to browser
DEBUG - 2021-09-05 10:52:56 --> Total execution time: 0.1893
INFO - 2021-09-05 10:54:24 --> Config Class Initialized
INFO - 2021-09-05 10:54:24 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:54:24 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:54:24 --> Utf8 Class Initialized
INFO - 2021-09-05 10:54:24 --> URI Class Initialized
INFO - 2021-09-05 10:54:24 --> Router Class Initialized
INFO - 2021-09-05 10:54:24 --> Output Class Initialized
INFO - 2021-09-05 10:54:24 --> Security Class Initialized
DEBUG - 2021-09-05 10:54:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:54:24 --> Input Class Initialized
INFO - 2021-09-05 10:54:24 --> Language Class Initialized
INFO - 2021-09-05 10:54:24 --> Loader Class Initialized
INFO - 2021-09-05 10:54:24 --> Helper loaded: url_helper
INFO - 2021-09-05 10:54:24 --> Helper loaded: file_helper
INFO - 2021-09-05 10:54:24 --> Helper loaded: form_helper
INFO - 2021-09-05 10:54:24 --> Helper loaded: security_helper
INFO - 2021-09-05 10:54:24 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:54:24 --> Helper loaded: general_helper
INFO - 2021-09-05 10:54:24 --> Database Driver Class Initialized
INFO - 2021-09-05 10:54:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:54:24 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:54:24 --> Pagination Class Initialized
INFO - 2021-09-05 10:54:24 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:54:24 --> Form Validation Class Initialized
INFO - 2021-09-05 10:54:24 --> Upload Class Initialized
INFO - 2021-09-05 10:54:24 --> MY_Model class loaded
INFO - 2021-09-05 10:54:24 --> Model "Application_model" initialized
INFO - 2021-09-05 10:54:24 --> Controller Class Initialized
DEBUG - 2021-09-05 10:54:24 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:54:24 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:54:24 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:54:24 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:54:24 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:54:24 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:54:24 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:54:24 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:54:24 --> Model "Student_model" initialized
INFO - 2021-09-05 10:54:24 --> Final output sent to browser
DEBUG - 2021-09-05 10:54:24 --> Total execution time: 0.2892
INFO - 2021-09-05 10:55:43 --> Config Class Initialized
INFO - 2021-09-05 10:55:43 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:55:43 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:55:43 --> Utf8 Class Initialized
INFO - 2021-09-05 10:55:43 --> URI Class Initialized
INFO - 2021-09-05 10:55:43 --> Router Class Initialized
INFO - 2021-09-05 10:55:43 --> Output Class Initialized
INFO - 2021-09-05 10:55:43 --> Security Class Initialized
DEBUG - 2021-09-05 10:55:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:55:43 --> Input Class Initialized
INFO - 2021-09-05 10:55:43 --> Language Class Initialized
INFO - 2021-09-05 10:55:43 --> Loader Class Initialized
INFO - 2021-09-05 10:55:43 --> Helper loaded: url_helper
INFO - 2021-09-05 10:55:43 --> Helper loaded: file_helper
INFO - 2021-09-05 10:55:43 --> Helper loaded: form_helper
INFO - 2021-09-05 10:55:43 --> Helper loaded: security_helper
INFO - 2021-09-05 10:55:43 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:55:43 --> Helper loaded: general_helper
INFO - 2021-09-05 10:55:43 --> Database Driver Class Initialized
INFO - 2021-09-05 10:55:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:55:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:55:43 --> Pagination Class Initialized
INFO - 2021-09-05 10:55:43 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:55:43 --> Form Validation Class Initialized
INFO - 2021-09-05 10:55:43 --> Upload Class Initialized
INFO - 2021-09-05 10:55:43 --> MY_Model class loaded
INFO - 2021-09-05 10:55:43 --> Model "Application_model" initialized
INFO - 2021-09-05 10:55:43 --> Controller Class Initialized
DEBUG - 2021-09-05 10:55:43 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:55:43 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:55:43 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:55:43 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:55:43 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:55:43 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:55:43 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:55:43 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:55:43 --> Model "Student_model" initialized
INFO - 2021-09-05 10:55:43 --> Final output sent to browser
DEBUG - 2021-09-05 10:55:43 --> Total execution time: 0.1919
INFO - 2021-09-05 10:56:21 --> Config Class Initialized
INFO - 2021-09-05 10:56:21 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:56:21 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:56:21 --> Utf8 Class Initialized
INFO - 2021-09-05 10:56:21 --> URI Class Initialized
INFO - 2021-09-05 10:56:21 --> Router Class Initialized
INFO - 2021-09-05 10:56:21 --> Output Class Initialized
INFO - 2021-09-05 10:56:21 --> Security Class Initialized
DEBUG - 2021-09-05 10:56:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:56:21 --> Input Class Initialized
INFO - 2021-09-05 10:56:21 --> Language Class Initialized
INFO - 2021-09-05 10:56:21 --> Loader Class Initialized
INFO - 2021-09-05 10:56:21 --> Helper loaded: url_helper
INFO - 2021-09-05 10:56:21 --> Helper loaded: file_helper
INFO - 2021-09-05 10:56:21 --> Helper loaded: form_helper
INFO - 2021-09-05 10:56:21 --> Helper loaded: security_helper
INFO - 2021-09-05 10:56:21 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:56:21 --> Helper loaded: general_helper
INFO - 2021-09-05 10:56:21 --> Database Driver Class Initialized
INFO - 2021-09-05 10:56:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:56:21 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:56:21 --> Pagination Class Initialized
INFO - 2021-09-05 10:56:21 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:56:21 --> Form Validation Class Initialized
INFO - 2021-09-05 10:56:21 --> Upload Class Initialized
INFO - 2021-09-05 10:56:21 --> MY_Model class loaded
INFO - 2021-09-05 10:56:21 --> Model "Application_model" initialized
INFO - 2021-09-05 10:56:21 --> Controller Class Initialized
DEBUG - 2021-09-05 10:56:21 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:56:21 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:56:21 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:56:21 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:56:21 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:56:21 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:56:21 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:56:21 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:56:21 --> Model "Student_model" initialized
INFO - 2021-09-05 10:56:21 --> Final output sent to browser
DEBUG - 2021-09-05 10:56:21 --> Total execution time: 0.1669
INFO - 2021-09-05 10:56:30 --> Config Class Initialized
INFO - 2021-09-05 10:56:30 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:56:30 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:56:30 --> Utf8 Class Initialized
INFO - 2021-09-05 10:56:30 --> URI Class Initialized
INFO - 2021-09-05 10:56:30 --> Router Class Initialized
INFO - 2021-09-05 10:56:30 --> Output Class Initialized
INFO - 2021-09-05 10:56:30 --> Security Class Initialized
DEBUG - 2021-09-05 10:56:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:56:30 --> Input Class Initialized
INFO - 2021-09-05 10:56:30 --> Language Class Initialized
INFO - 2021-09-05 10:56:30 --> Loader Class Initialized
INFO - 2021-09-05 10:56:30 --> Helper loaded: url_helper
INFO - 2021-09-05 10:56:30 --> Helper loaded: file_helper
INFO - 2021-09-05 10:56:30 --> Helper loaded: form_helper
INFO - 2021-09-05 10:56:30 --> Helper loaded: security_helper
INFO - 2021-09-05 10:56:30 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:56:30 --> Helper loaded: general_helper
INFO - 2021-09-05 10:56:30 --> Database Driver Class Initialized
INFO - 2021-09-05 10:56:30 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:56:31 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:56:31 --> Pagination Class Initialized
INFO - 2021-09-05 10:56:31 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:56:31 --> Form Validation Class Initialized
INFO - 2021-09-05 10:56:31 --> Upload Class Initialized
INFO - 2021-09-05 10:56:31 --> MY_Model class loaded
INFO - 2021-09-05 10:56:31 --> Model "Application_model" initialized
INFO - 2021-09-05 10:56:31 --> Controller Class Initialized
DEBUG - 2021-09-05 10:56:31 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:56:31 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:56:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:56:31 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:56:31 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:56:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:56:31 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:56:31 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:56:31 --> Model "Student_model" initialized
INFO - 2021-09-05 10:56:31 --> Final output sent to browser
DEBUG - 2021-09-05 10:56:31 --> Total execution time: 0.2116
INFO - 2021-09-05 10:57:13 --> Config Class Initialized
INFO - 2021-09-05 10:57:13 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:57:13 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:57:13 --> Utf8 Class Initialized
INFO - 2021-09-05 10:57:13 --> URI Class Initialized
INFO - 2021-09-05 10:57:13 --> Router Class Initialized
INFO - 2021-09-05 10:57:13 --> Output Class Initialized
INFO - 2021-09-05 10:57:13 --> Security Class Initialized
DEBUG - 2021-09-05 10:57:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:57:13 --> Input Class Initialized
INFO - 2021-09-05 10:57:13 --> Language Class Initialized
INFO - 2021-09-05 10:57:13 --> Loader Class Initialized
INFO - 2021-09-05 10:57:13 --> Helper loaded: url_helper
INFO - 2021-09-05 10:57:13 --> Helper loaded: file_helper
INFO - 2021-09-05 10:57:13 --> Helper loaded: form_helper
INFO - 2021-09-05 10:57:13 --> Helper loaded: security_helper
INFO - 2021-09-05 10:57:13 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:57:13 --> Helper loaded: general_helper
INFO - 2021-09-05 10:57:13 --> Database Driver Class Initialized
INFO - 2021-09-05 10:57:13 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:57:13 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:57:13 --> Pagination Class Initialized
INFO - 2021-09-05 10:57:13 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:57:13 --> Form Validation Class Initialized
INFO - 2021-09-05 10:57:13 --> Upload Class Initialized
INFO - 2021-09-05 10:57:13 --> MY_Model class loaded
INFO - 2021-09-05 10:57:13 --> Model "Application_model" initialized
INFO - 2021-09-05 10:57:13 --> Controller Class Initialized
DEBUG - 2021-09-05 10:57:13 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:57:13 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:57:13 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:57:13 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:57:13 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:57:13 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:57:13 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:57:13 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:57:13 --> Model "Student_model" initialized
INFO - 2021-09-05 10:57:13 --> Final output sent to browser
DEBUG - 2021-09-05 10:57:13 --> Total execution time: 0.1840
INFO - 2021-09-05 10:58:56 --> Config Class Initialized
INFO - 2021-09-05 10:58:56 --> Hooks Class Initialized
DEBUG - 2021-09-05 10:58:56 --> UTF-8 Support Enabled
INFO - 2021-09-05 10:58:56 --> Utf8 Class Initialized
INFO - 2021-09-05 10:58:56 --> URI Class Initialized
INFO - 2021-09-05 10:58:56 --> Router Class Initialized
INFO - 2021-09-05 10:58:56 --> Output Class Initialized
INFO - 2021-09-05 10:58:56 --> Security Class Initialized
DEBUG - 2021-09-05 10:58:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 10:58:56 --> Input Class Initialized
INFO - 2021-09-05 10:58:56 --> Language Class Initialized
INFO - 2021-09-05 10:58:56 --> Loader Class Initialized
INFO - 2021-09-05 10:58:56 --> Helper loaded: url_helper
INFO - 2021-09-05 10:58:56 --> Helper loaded: file_helper
INFO - 2021-09-05 10:58:56 --> Helper loaded: form_helper
INFO - 2021-09-05 10:58:56 --> Helper loaded: security_helper
INFO - 2021-09-05 10:58:56 --> Helper loaded: directory_helper
INFO - 2021-09-05 10:58:56 --> Helper loaded: general_helper
INFO - 2021-09-05 10:58:57 --> Database Driver Class Initialized
INFO - 2021-09-05 10:58:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 10:58:57 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 10:58:57 --> Pagination Class Initialized
INFO - 2021-09-05 10:58:57 --> XML-RPC Class Initialized
INFO - 2021-09-05 10:58:57 --> Form Validation Class Initialized
INFO - 2021-09-05 10:58:57 --> Upload Class Initialized
INFO - 2021-09-05 10:58:57 --> MY_Model class loaded
INFO - 2021-09-05 10:58:57 --> Model "Application_model" initialized
INFO - 2021-09-05 10:58:57 --> Controller Class Initialized
DEBUG - 2021-09-05 10:58:57 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 10:58:57 --> Helper loaded: inflector_helper
INFO - 2021-09-05 10:58:57 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 10:58:57 --> Database Driver Class Initialized
ERROR - 2021-09-05 10:58:57 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:58:57 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 10:58:57 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 10:58:57 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 10:58:57 --> Model "Student_model" initialized
INFO - 2021-09-05 10:58:57 --> Final output sent to browser
DEBUG - 2021-09-05 10:58:57 --> Total execution time: 0.1851
INFO - 2021-09-05 11:01:41 --> Config Class Initialized
INFO - 2021-09-05 11:01:41 --> Hooks Class Initialized
DEBUG - 2021-09-05 11:01:41 --> UTF-8 Support Enabled
INFO - 2021-09-05 11:01:41 --> Utf8 Class Initialized
INFO - 2021-09-05 11:01:41 --> URI Class Initialized
INFO - 2021-09-05 11:01:41 --> Router Class Initialized
INFO - 2021-09-05 11:01:41 --> Output Class Initialized
INFO - 2021-09-05 11:01:41 --> Security Class Initialized
DEBUG - 2021-09-05 11:01:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 11:01:41 --> Input Class Initialized
INFO - 2021-09-05 11:01:41 --> Language Class Initialized
INFO - 2021-09-05 11:01:41 --> Loader Class Initialized
INFO - 2021-09-05 11:01:41 --> Helper loaded: url_helper
INFO - 2021-09-05 11:01:41 --> Helper loaded: file_helper
INFO - 2021-09-05 11:01:41 --> Helper loaded: form_helper
INFO - 2021-09-05 11:01:41 --> Helper loaded: security_helper
INFO - 2021-09-05 11:01:41 --> Helper loaded: directory_helper
INFO - 2021-09-05 11:01:41 --> Helper loaded: general_helper
INFO - 2021-09-05 11:01:41 --> Database Driver Class Initialized
INFO - 2021-09-05 11:01:42 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 11:01:42 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 11:01:42 --> Pagination Class Initialized
INFO - 2021-09-05 11:01:42 --> XML-RPC Class Initialized
INFO - 2021-09-05 11:01:42 --> Form Validation Class Initialized
INFO - 2021-09-05 11:01:42 --> Upload Class Initialized
INFO - 2021-09-05 11:01:42 --> MY_Model class loaded
INFO - 2021-09-05 11:01:42 --> Model "Application_model" initialized
INFO - 2021-09-05 11:01:42 --> Controller Class Initialized
DEBUG - 2021-09-05 11:01:42 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 11:01:42 --> Helper loaded: inflector_helper
INFO - 2021-09-05 11:01:42 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 11:01:42 --> Database Driver Class Initialized
ERROR - 2021-09-05 11:01:42 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:01:42 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:01:42 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 11:01:42 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 11:01:42 --> Model "Student_model" initialized
INFO - 2021-09-05 11:01:42 --> Final output sent to browser
DEBUG - 2021-09-05 11:01:42 --> Total execution time: 0.3089
INFO - 2021-09-05 11:03:58 --> Config Class Initialized
INFO - 2021-09-05 11:03:58 --> Hooks Class Initialized
DEBUG - 2021-09-05 11:03:58 --> UTF-8 Support Enabled
INFO - 2021-09-05 11:03:58 --> Utf8 Class Initialized
INFO - 2021-09-05 11:03:58 --> URI Class Initialized
INFO - 2021-09-05 11:03:58 --> Router Class Initialized
INFO - 2021-09-05 11:03:58 --> Output Class Initialized
INFO - 2021-09-05 11:03:58 --> Security Class Initialized
DEBUG - 2021-09-05 11:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 11:03:58 --> Input Class Initialized
INFO - 2021-09-05 11:03:58 --> Language Class Initialized
INFO - 2021-09-05 11:03:58 --> Loader Class Initialized
INFO - 2021-09-05 11:03:58 --> Helper loaded: url_helper
INFO - 2021-09-05 11:03:58 --> Helper loaded: file_helper
INFO - 2021-09-05 11:03:58 --> Helper loaded: form_helper
INFO - 2021-09-05 11:03:58 --> Helper loaded: security_helper
INFO - 2021-09-05 11:03:58 --> Helper loaded: directory_helper
INFO - 2021-09-05 11:03:58 --> Helper loaded: general_helper
INFO - 2021-09-05 11:03:58 --> Database Driver Class Initialized
INFO - 2021-09-05 11:03:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 11:03:59 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 11:03:59 --> Pagination Class Initialized
INFO - 2021-09-05 11:03:59 --> XML-RPC Class Initialized
INFO - 2021-09-05 11:03:59 --> Form Validation Class Initialized
INFO - 2021-09-05 11:03:59 --> Upload Class Initialized
INFO - 2021-09-05 11:03:59 --> MY_Model class loaded
INFO - 2021-09-05 11:03:59 --> Model "Application_model" initialized
INFO - 2021-09-05 11:03:59 --> Controller Class Initialized
DEBUG - 2021-09-05 11:03:59 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 11:03:59 --> Helper loaded: inflector_helper
INFO - 2021-09-05 11:03:59 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 11:03:59 --> Database Driver Class Initialized
ERROR - 2021-09-05 11:03:59 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:03:59 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:03:59 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 11:03:59 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 11:03:59 --> Model "Student_model" initialized
INFO - 2021-09-05 11:03:59 --> Final output sent to browser
DEBUG - 2021-09-05 11:03:59 --> Total execution time: 0.1970
INFO - 2021-09-05 11:05:02 --> Config Class Initialized
INFO - 2021-09-05 11:05:02 --> Hooks Class Initialized
DEBUG - 2021-09-05 11:05:02 --> UTF-8 Support Enabled
INFO - 2021-09-05 11:05:02 --> Utf8 Class Initialized
INFO - 2021-09-05 11:05:02 --> URI Class Initialized
INFO - 2021-09-05 11:05:02 --> Router Class Initialized
INFO - 2021-09-05 11:05:02 --> Output Class Initialized
INFO - 2021-09-05 11:05:02 --> Security Class Initialized
DEBUG - 2021-09-05 11:05:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 11:05:02 --> Input Class Initialized
INFO - 2021-09-05 11:05:02 --> Language Class Initialized
INFO - 2021-09-05 11:05:02 --> Loader Class Initialized
INFO - 2021-09-05 11:05:02 --> Helper loaded: url_helper
INFO - 2021-09-05 11:05:02 --> Helper loaded: file_helper
INFO - 2021-09-05 11:05:02 --> Helper loaded: form_helper
INFO - 2021-09-05 11:05:02 --> Helper loaded: security_helper
INFO - 2021-09-05 11:05:02 --> Helper loaded: directory_helper
INFO - 2021-09-05 11:05:02 --> Helper loaded: general_helper
INFO - 2021-09-05 11:05:02 --> Database Driver Class Initialized
INFO - 2021-09-05 11:05:02 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 11:05:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 11:05:02 --> Pagination Class Initialized
INFO - 2021-09-05 11:05:02 --> XML-RPC Class Initialized
INFO - 2021-09-05 11:05:02 --> Form Validation Class Initialized
INFO - 2021-09-05 11:05:02 --> Upload Class Initialized
INFO - 2021-09-05 11:05:02 --> MY_Model class loaded
INFO - 2021-09-05 11:05:02 --> Model "Application_model" initialized
INFO - 2021-09-05 11:05:02 --> Controller Class Initialized
DEBUG - 2021-09-05 11:05:02 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 11:05:02 --> Helper loaded: inflector_helper
INFO - 2021-09-05 11:05:02 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 11:05:02 --> Database Driver Class Initialized
ERROR - 2021-09-05 11:05:02 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:05:02 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:05:02 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 11:05:02 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 11:05:02 --> Model "Student_model" initialized
INFO - 2021-09-05 11:05:03 --> Final output sent to browser
DEBUG - 2021-09-05 11:05:03 --> Total execution time: 0.1475
INFO - 2021-09-05 11:06:59 --> Config Class Initialized
INFO - 2021-09-05 11:06:59 --> Hooks Class Initialized
DEBUG - 2021-09-05 11:06:59 --> UTF-8 Support Enabled
INFO - 2021-09-05 11:06:59 --> Utf8 Class Initialized
INFO - 2021-09-05 11:06:59 --> URI Class Initialized
INFO - 2021-09-05 11:06:59 --> Router Class Initialized
INFO - 2021-09-05 11:06:59 --> Output Class Initialized
INFO - 2021-09-05 11:06:59 --> Security Class Initialized
DEBUG - 2021-09-05 11:06:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 11:06:59 --> Input Class Initialized
INFO - 2021-09-05 11:06:59 --> Language Class Initialized
INFO - 2021-09-05 11:06:59 --> Loader Class Initialized
INFO - 2021-09-05 11:06:59 --> Helper loaded: url_helper
INFO - 2021-09-05 11:06:59 --> Helper loaded: file_helper
INFO - 2021-09-05 11:06:59 --> Helper loaded: form_helper
INFO - 2021-09-05 11:06:59 --> Helper loaded: security_helper
INFO - 2021-09-05 11:06:59 --> Helper loaded: directory_helper
INFO - 2021-09-05 11:07:00 --> Helper loaded: general_helper
INFO - 2021-09-05 11:07:00 --> Database Driver Class Initialized
INFO - 2021-09-05 11:07:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 11:07:00 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 11:07:00 --> Pagination Class Initialized
INFO - 2021-09-05 11:07:00 --> XML-RPC Class Initialized
INFO - 2021-09-05 11:07:00 --> Form Validation Class Initialized
INFO - 2021-09-05 11:07:00 --> Upload Class Initialized
INFO - 2021-09-05 11:07:00 --> MY_Model class loaded
INFO - 2021-09-05 11:07:00 --> Model "Application_model" initialized
INFO - 2021-09-05 11:07:00 --> Controller Class Initialized
DEBUG - 2021-09-05 11:07:00 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 11:07:00 --> Helper loaded: inflector_helper
INFO - 2021-09-05 11:07:00 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 11:07:00 --> Database Driver Class Initialized
ERROR - 2021-09-05 11:07:00 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:07:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:07:00 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 11:07:00 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 11:07:00 --> Model "Student_model" initialized
INFO - 2021-09-05 11:07:00 --> Final output sent to browser
DEBUG - 2021-09-05 11:07:00 --> Total execution time: 0.4403
INFO - 2021-09-05 11:08:14 --> Config Class Initialized
INFO - 2021-09-05 11:08:14 --> Hooks Class Initialized
DEBUG - 2021-09-05 11:08:14 --> UTF-8 Support Enabled
INFO - 2021-09-05 11:08:14 --> Utf8 Class Initialized
INFO - 2021-09-05 11:08:14 --> URI Class Initialized
INFO - 2021-09-05 11:08:14 --> Router Class Initialized
INFO - 2021-09-05 11:08:14 --> Output Class Initialized
INFO - 2021-09-05 11:08:14 --> Security Class Initialized
DEBUG - 2021-09-05 11:08:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 11:08:14 --> Input Class Initialized
INFO - 2021-09-05 11:08:14 --> Language Class Initialized
INFO - 2021-09-05 11:08:14 --> Loader Class Initialized
INFO - 2021-09-05 11:08:14 --> Helper loaded: url_helper
INFO - 2021-09-05 11:08:14 --> Helper loaded: file_helper
INFO - 2021-09-05 11:08:14 --> Helper loaded: form_helper
INFO - 2021-09-05 11:08:14 --> Helper loaded: security_helper
INFO - 2021-09-05 11:08:14 --> Helper loaded: directory_helper
INFO - 2021-09-05 11:08:14 --> Helper loaded: general_helper
INFO - 2021-09-05 11:08:14 --> Database Driver Class Initialized
INFO - 2021-09-05 11:08:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 11:08:14 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 11:08:14 --> Pagination Class Initialized
INFO - 2021-09-05 11:08:14 --> XML-RPC Class Initialized
INFO - 2021-09-05 11:08:14 --> Form Validation Class Initialized
INFO - 2021-09-05 11:08:14 --> Upload Class Initialized
INFO - 2021-09-05 11:08:14 --> MY_Model class loaded
INFO - 2021-09-05 11:08:14 --> Model "Application_model" initialized
INFO - 2021-09-05 11:08:14 --> Controller Class Initialized
DEBUG - 2021-09-05 11:08:14 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 11:08:14 --> Helper loaded: inflector_helper
INFO - 2021-09-05 11:08:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 11:08:14 --> Database Driver Class Initialized
ERROR - 2021-09-05 11:08:14 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:08:14 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 11:08:14 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 11:08:14 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 11:08:14 --> Model "Student_model" initialized
INFO - 2021-09-05 11:08:14 --> Final output sent to browser
DEBUG - 2021-09-05 11:08:14 --> Total execution time: 0.1753
INFO - 2021-09-05 13:05:13 --> Config Class Initialized
INFO - 2021-09-05 13:05:13 --> Hooks Class Initialized
DEBUG - 2021-09-05 13:05:14 --> UTF-8 Support Enabled
INFO - 2021-09-05 13:05:14 --> Utf8 Class Initialized
INFO - 2021-09-05 13:05:14 --> URI Class Initialized
INFO - 2021-09-05 13:05:15 --> Router Class Initialized
INFO - 2021-09-05 13:05:15 --> Output Class Initialized
INFO - 2021-09-05 13:05:15 --> Security Class Initialized
DEBUG - 2021-09-05 13:05:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 13:05:15 --> Input Class Initialized
INFO - 2021-09-05 13:05:16 --> Language Class Initialized
INFO - 2021-09-05 13:05:16 --> Loader Class Initialized
INFO - 2021-09-05 13:05:16 --> Helper loaded: url_helper
INFO - 2021-09-05 13:05:16 --> Helper loaded: file_helper
INFO - 2021-09-05 13:05:16 --> Helper loaded: form_helper
INFO - 2021-09-05 13:05:16 --> Helper loaded: security_helper
INFO - 2021-09-05 13:05:16 --> Helper loaded: directory_helper
INFO - 2021-09-05 13:05:16 --> Helper loaded: general_helper
INFO - 2021-09-05 13:05:17 --> Database Driver Class Initialized
INFO - 2021-09-05 13:05:19 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 13:05:19 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 13:05:19 --> Pagination Class Initialized
INFO - 2021-09-05 13:05:19 --> XML-RPC Class Initialized
INFO - 2021-09-05 13:05:19 --> Form Validation Class Initialized
INFO - 2021-09-05 13:05:19 --> Upload Class Initialized
INFO - 2021-09-05 13:05:20 --> MY_Model class loaded
INFO - 2021-09-05 13:05:20 --> Model "Application_model" initialized
INFO - 2021-09-05 13:05:20 --> Controller Class Initialized
DEBUG - 2021-09-05 13:05:20 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 13:05:20 --> Helper loaded: inflector_helper
INFO - 2021-09-05 13:05:20 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 13:05:20 --> Database Driver Class Initialized
ERROR - 2021-09-05 13:05:20 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:05:20 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:05:20 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 13:05:20 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 13:05:20 --> Model "Student_model" initialized
ERROR - 2021-09-05 13:05:20 --> Severity: error --> Exception: Too few arguments to function Student::list_post(), 0 passed in C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php on line 742 and exactly 2 expected C:\Users\Gopal Ghimire\Desktop\New folder\school\application\controllers\api\Student.php 40
INFO - 2021-09-05 13:32:41 --> Config Class Initialized
INFO - 2021-09-05 13:32:41 --> Hooks Class Initialized
DEBUG - 2021-09-05 13:32:41 --> UTF-8 Support Enabled
INFO - 2021-09-05 13:32:41 --> Utf8 Class Initialized
INFO - 2021-09-05 13:32:41 --> URI Class Initialized
INFO - 2021-09-05 13:32:41 --> Router Class Initialized
INFO - 2021-09-05 13:32:41 --> Output Class Initialized
INFO - 2021-09-05 13:32:41 --> Security Class Initialized
DEBUG - 2021-09-05 13:32:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 13:32:41 --> Input Class Initialized
INFO - 2021-09-05 13:32:41 --> Language Class Initialized
INFO - 2021-09-05 13:32:42 --> Loader Class Initialized
INFO - 2021-09-05 13:32:42 --> Helper loaded: url_helper
INFO - 2021-09-05 13:32:42 --> Helper loaded: file_helper
INFO - 2021-09-05 13:32:42 --> Helper loaded: form_helper
INFO - 2021-09-05 13:32:42 --> Helper loaded: security_helper
INFO - 2021-09-05 13:32:42 --> Helper loaded: directory_helper
INFO - 2021-09-05 13:32:42 --> Helper loaded: general_helper
INFO - 2021-09-05 13:32:42 --> Database Driver Class Initialized
INFO - 2021-09-05 13:32:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 13:32:43 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 13:32:43 --> Pagination Class Initialized
INFO - 2021-09-05 13:32:43 --> XML-RPC Class Initialized
INFO - 2021-09-05 13:32:43 --> Form Validation Class Initialized
INFO - 2021-09-05 13:32:43 --> Upload Class Initialized
INFO - 2021-09-05 13:32:44 --> MY_Model class loaded
INFO - 2021-09-05 13:32:44 --> Model "Application_model" initialized
INFO - 2021-09-05 13:32:44 --> Controller Class Initialized
DEBUG - 2021-09-05 13:32:44 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 13:32:44 --> Helper loaded: inflector_helper
INFO - 2021-09-05 13:32:44 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 13:32:44 --> Database Driver Class Initialized
ERROR - 2021-09-05 13:32:44 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:32:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:32:44 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 13:32:44 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 13:32:44 --> Model "Student_model" initialized
ERROR - 2021-09-05 13:32:44 --> Severity: error --> Exception: Too few arguments to function Student::list_post(), 0 passed in C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php on line 742 and exactly 2 expected C:\Users\Gopal Ghimire\Desktop\New folder\school\application\controllers\api\Student.php 40
INFO - 2021-09-05 13:33:42 --> Config Class Initialized
INFO - 2021-09-05 13:33:42 --> Hooks Class Initialized
DEBUG - 2021-09-05 13:33:42 --> UTF-8 Support Enabled
INFO - 2021-09-05 13:33:42 --> Utf8 Class Initialized
INFO - 2021-09-05 13:33:42 --> URI Class Initialized
INFO - 2021-09-05 13:33:43 --> Router Class Initialized
INFO - 2021-09-05 13:33:43 --> Output Class Initialized
INFO - 2021-09-05 13:33:44 --> Security Class Initialized
DEBUG - 2021-09-05 13:33:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 13:33:44 --> Input Class Initialized
INFO - 2021-09-05 13:33:44 --> Language Class Initialized
INFO - 2021-09-05 13:33:49 --> Loader Class Initialized
INFO - 2021-09-05 13:33:49 --> Helper loaded: url_helper
INFO - 2021-09-05 13:33:50 --> Helper loaded: file_helper
INFO - 2021-09-05 13:33:50 --> Helper loaded: form_helper
INFO - 2021-09-05 13:33:50 --> Helper loaded: security_helper
INFO - 2021-09-05 13:33:50 --> Helper loaded: directory_helper
INFO - 2021-09-05 13:33:50 --> Helper loaded: general_helper
INFO - 2021-09-05 13:33:51 --> Database Driver Class Initialized
INFO - 2021-09-05 13:33:51 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 13:33:51 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 13:33:51 --> Pagination Class Initialized
INFO - 2021-09-05 13:33:51 --> XML-RPC Class Initialized
INFO - 2021-09-05 13:33:51 --> Form Validation Class Initialized
INFO - 2021-09-05 13:33:51 --> Upload Class Initialized
INFO - 2021-09-05 13:33:51 --> MY_Model class loaded
INFO - 2021-09-05 13:33:51 --> Model "Application_model" initialized
INFO - 2021-09-05 13:33:52 --> Controller Class Initialized
DEBUG - 2021-09-05 13:33:52 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 13:33:52 --> Helper loaded: inflector_helper
INFO - 2021-09-05 13:33:52 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 13:33:52 --> Database Driver Class Initialized
ERROR - 2021-09-05 13:33:52 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:33:52 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:33:52 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 13:33:52 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 13:33:52 --> Model "Student_model" initialized
ERROR - 2021-09-05 13:33:52 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Student' does not have a method 'index_post' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 742
INFO - 2021-09-05 13:33:52 --> Final output sent to browser
DEBUG - 2021-09-05 13:33:52 --> Total execution time: 10.6640
INFO - 2021-09-05 13:36:00 --> Config Class Initialized
INFO - 2021-09-05 13:36:00 --> Hooks Class Initialized
DEBUG - 2021-09-05 13:36:00 --> UTF-8 Support Enabled
INFO - 2021-09-05 13:36:00 --> Utf8 Class Initialized
INFO - 2021-09-05 13:36:00 --> URI Class Initialized
INFO - 2021-09-05 13:36:01 --> Router Class Initialized
INFO - 2021-09-05 13:36:01 --> Output Class Initialized
INFO - 2021-09-05 13:36:01 --> Security Class Initialized
DEBUG - 2021-09-05 13:36:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-09-05 13:36:01 --> Input Class Initialized
INFO - 2021-09-05 13:36:01 --> Language Class Initialized
INFO - 2021-09-05 13:36:01 --> Loader Class Initialized
INFO - 2021-09-05 13:36:01 --> Helper loaded: url_helper
INFO - 2021-09-05 13:36:01 --> Helper loaded: file_helper
INFO - 2021-09-05 13:36:01 --> Helper loaded: form_helper
INFO - 2021-09-05 13:36:01 --> Helper loaded: security_helper
INFO - 2021-09-05 13:36:01 --> Helper loaded: directory_helper
INFO - 2021-09-05 13:36:01 --> Helper loaded: general_helper
INFO - 2021-09-05 13:36:02 --> Database Driver Class Initialized
INFO - 2021-09-05 13:36:02 --> Session: Class initialized using 'database' driver.
INFO - 2021-09-05 13:36:02 --> Language file loaded: language/english/pagination_lang.php
INFO - 2021-09-05 13:36:02 --> Pagination Class Initialized
INFO - 2021-09-05 13:36:02 --> XML-RPC Class Initialized
INFO - 2021-09-05 13:36:02 --> Form Validation Class Initialized
INFO - 2021-09-05 13:36:02 --> Upload Class Initialized
INFO - 2021-09-05 13:36:03 --> MY_Model class loaded
INFO - 2021-09-05 13:36:03 --> Model "Application_model" initialized
INFO - 2021-09-05 13:36:03 --> Controller Class Initialized
DEBUG - 2021-09-05 13:36:03 --> Config file loaded: C:\Users\Gopal Ghimire\Desktop\New folder\school\application\config/rest.php
INFO - 2021-09-05 13:36:03 --> Helper loaded: inflector_helper
INFO - 2021-09-05 13:36:03 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2021-09-05 13:36:03 --> Database Driver Class Initialized
ERROR - 2021-09-05 13:36:03 --> Severity: Warning --> Illegal string offset 'cookie_secure' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:36:03 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 575
ERROR - 2021-09-05 13:36:03 --> Severity: Warning --> Illegal string offset 'csrf_protection' C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
ERROR - 2021-09-05 13:36:03 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\Users\Gopal Ghimire\Desktop\New folder\school\application\libraries\REST_Controller.php 576
INFO - 2021-09-05 13:36:04 --> Model "Student_model" initialized
INFO - 2021-09-05 13:36:04 --> Final output sent to browser
DEBUG - 2021-09-05 13:36:04 --> Total execution time: 4.0836
