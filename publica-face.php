<?php
/**
 * Created by PhpStorm.
 * User: tarsio
 * Date: 19/02/17
 * Time: 04:15
 */
    require_once 'app/Config.php';
    /*
    $Login = $fb->getRedirectLoginHelper();
    //var_dump($Login);
    $permissions = ['email', 'publish_actions'];//Dados que o usuário vai informar

    $post = [
    "message" => "Comece hoje mesmo a fazer integração com facebook em seu site Vlw",
    "picture" => "http://globoesporte.globo.com/platb/files/166/2013/04/Hulk1.jpg",
    ];

    $enviar_post = $fb->post('/me/feed', $post);
    $response = $enviar_post->getGraphNode()->asArray();*/

$request = new FacebookRequest(
    $session,
    'POST',
    '/me/feed',
    array (
        'message' => 'This is a test message developers facebook',
    )
);
$response = $request->execute();
$graphObject = $response->getGraphObject();