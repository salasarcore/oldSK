<?php
@session_start();
define('DB_NAME', 'scs');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'sou_mendas');
/** MySQL database read only username */
define('DB_USER_READ_ONLY', 'root');
/** MySQL database read only password */
define('DB_PASSWORD_READ_ONLY', 'sou_mendas');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
$table_prefix  = 'sa_';

define('SITE_NAME', 'SALASAR Auction');
define('SH_INC_DIR', 'scs_includes');
define('SITE_URL', 'http://localhost:8080/scs/sk_tutorials');
define('FROM_MAIL', 'soumen@salasarserver.com');
define('FROM_MAIL_PASSWORD', 'Sou_mendas#123');
define('REPLY_MAIL', 'soumen@salasarserver.com');
define('VENDOR_DIR', 'vendor');


?>
