<?php include("cabecalho.php") ?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'Facebook/config.php';
define('FACEBOOK_SDK_V4_SRC_DIR',__DIR__ .'/Facebook/');
require_once __DIR__ .'/Facebook/autoload.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook\Facebook(array(
  'app_id'  => $config['App_ID'],
  'app_secret' => $config['App_Secret'],
    'default_graph_version' => 'v2.4'
));

$helper = $facebook->getRedirectLoginHelper();
$permissions = ['email', 'user_likes','publish_actions','user_managed_groups']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/facebook_post/post.php', $permissions);

echo '<a href="' . $loginUrl . '"><img src="facebook.png"></a>';
?>




<?php include("rodape.php") ?>