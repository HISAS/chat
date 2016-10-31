<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'mypage'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        return false;
    }

    public function beforeFilter() {
        $this->Auth->allow('view');
    }
}
