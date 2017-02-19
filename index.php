<<<<<<< HEAD
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
=======
<?php include("cabecalho.php") ?>

<?php
/**
 * Created by PhpStorm.
 * User: tarsio
 * Date: 18/02/17
 * Time: 18:58
 */
require_once 'app/Config.php';

    $Login = $fb->getRedirectLoginHelper();
    //var_dump($Login);
    $permissions = ['email'];//Dados que o usuário vai informar

/*
 * VERIFICAÇÃO DE SEÇÃO E VERIFICAÇÃO PRA SABER SE O SDK ESTÁ CERTO, ATUALIZADO
 */
try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $Login->getAccessToken();
    }
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    if (isset($_GET['code'])) {
        header('Location: ./');
    }
    /*INFORMAÇÕES DO USUÁRIO*/
    try {
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
        $profile = $profile_request->getGraphNode()->asArray();
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        header("Location: ./");
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    //var_dump($profile);
    $logoff = filter_input(INPUT_GET, 'sair', FILTER_DEFAULT);
    if (isset($logoff) && $logoff == 'true'):
        session_destroy();
        header("Location: ./");
    endif;
    echo '<a href="?sair=true">Sair</a>';
    //var_dump($_SESSION);
}else {
    $loginUrl = $Login->getLoginUrl('http://localhost/avaliacao-premiada/', $permissions);
    echo '<a href="' . $loginUrl . '">Entrar com facebook</a>';
    echo $accessToken;
    //var_dump($_SESSION);
}
?>
<?php include("rodape.php") ?>
>>>>>>> 965b0df20fa14d0f532f98b3947518c7dc38f870
