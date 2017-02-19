<?php
/**
 * Created by PhpStorm.
 * User: tarsio
 * Date: 18/02/17
 * Time: 19:01
 */
    session_start();
    require_once 'Facebook/autoload.php';

    $fb = new Facebook\Facebook([
        'app_id' => '592775230892801',
        'app_secret' => '48e4abc6870094b8b4a26c0bd3c5bd38',
        'default_graph_version' => 'v2.5',
    ]);