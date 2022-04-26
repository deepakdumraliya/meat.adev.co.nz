<?php
/**
 * Surface IS_DEBUG_IP for client-sided stuff eg javascript; call this file via AJAX
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/'.'universal.php';

$return = ['result' => IS_DEBUG_IP];

echo json_encode($return);
exit;
