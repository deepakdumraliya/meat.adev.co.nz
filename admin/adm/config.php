<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/site-data.php';

if(!isset($_GET["db"]))
{
	$_GET["db"] = DATABASE;
}

function adminer_object() {
  
  class AdminerSoftware extends Adminer {
    
    function permanentLogin($j = false) {
      // key used for permanent login
      return $_SERVER['SERVER_ADDR'];
    }
    
    function credentials() {
      // server, username and password for connecting to database
      return array(MYSQLHOST, MYSQLUSER, MYSQLPASSWD);
    }
    
    function database() {
      // database name, will be escaped by Adminer
      return DATABASE;
    }
	
	 function login($login, $password) {
      // validate user submitted credentials
      //return ($login == 'ad_dev' && $password == '@Dev_03');
	  return true;
    }
  }
  
  return new AdminerSoftware;
}
