<?php

	Router::connect('/', array('controller' => 'users', 'action' => 'mypage'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
