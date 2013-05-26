<?php
require_once(dirname(__FILE__).'/../../opsworks.php');
$ow = new OpsWorks();

define('ECCUBE_INSTALL', 'ON');
$lbhosts = $ow->hosts('lb');

define('HTTP_URL', 'http://'.$lbhosts[0].'/');
define('HTTPS_URL', 'http://'.$lbhosts[0].'/');
define('ROOT_URLPATH', '/');
define('DOMAIN_NAME', '');
define('DB_TYPE', 'mysql');
define('DB_USER', $ow->db->username);
define('DB_PASSWORD', $ow->db->password);
define('DB_SERVER', $ow->db->host);
define('DB_NAME', $ow->db->database);
define('DB_PORT', '');
define('ADMIN_DIR', 'admin/');
define('ADMIN_FORCE_SSL', FALSE);
define('ADMIN_ALLOW_HOSTS', 'a:0:{}');
define('AUTH_MAGIC', 'chiostudaimoucloudeadouthefroujaiclounou');
define('PASSWORD_HASH_ALGOS', 'sha256');
define('MAIL_BACKEND', 'mail');
define('SMTP_HOST', '');
define('SMTP_PORT', '');
define('SMTP_USER', '');
define('SMTP_PASSWORD', '');
