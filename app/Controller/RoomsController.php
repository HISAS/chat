<?php

App::uses('AppController', 'Controller');

class RoomsController extends AppController {

	public $uses = array('Room', 'User', 'Post');

    public $components = array('RequestHandler');

	public function index() {
        $user = $this->Auth->user();
        $rooms = $this->Room->find('all', array(
            'conditions' => array(
                'OR' => array(
                    'Room.user_id' => $user["id"],
                    'Room.user_id2' => $user["id"]
                )
            ),
            'order' => 'modified DESC'
        ));
        $i = 0;
        foreach($rooms as $room){
            if($room["Room"]["user_id"] == $user["id"]){
                $friend = $this->User->findById($room["Room"]["user_id2"]);
                $friends[$i]["id"] = $friend["User"]["id"];
                $friends[$i]["username"] = $friend["User"]["username"];
                $friends[$i]["modified"] = $room["Room"]["modified"];
                $friends[$i]["room_id"] = $room["Room"]["id"];
                $i = $i + 1;
            } else {
                $friend = $this->User->findById($room["Room"]["user_id"]);
                $friends[$i]["id"] = $friend["User"]["id"];
                $friends[$i]["username"] = $friend["User"]["username"];
                $friends[$i]["modified"] = $room["Room"]["modified"];
                $friends[$i]["room_id"] = $room["Room"]["id"];
                $i = $i + 1;
            }
        }
        $this->set('friends', $friends);
	}

    public function chat($roomId = null){
        $this->layout = "chat";
        $user = $this->Auth->user();
        $room = $this->Room->findById($roomId);
        if($user["id"] == $room["Room"]["user_id"]){
            $receiverId = $room["Room"]["user_id2"];
        } else {
            $receiverId = $room["Room"]["user_id"];
        }
        $posts = $this->Post->find('all', array(
            'conditions' => array(
                'Post.room_id' => $roomId,
                'Post.user_id' => array($user["id"], $receiverId),
            ),
            'order' => 'modified ASC',
            'limit' => 50
        ));
        $receiver = $this->User->findById($receiverId);
        $this->set('posts', $posts);
        $this->set('user', $user);
        $this->set('receiver', $receiver);
        // echo "<pre>";
        // var_dump($posts);exit;
        // echo "</pre>";
    }


    function ajax() {
		$this->autoRender = false;
		if ($this->request->is('ajax')) {
			echo "<pre>";
			var_dump($this->request);exit;
			echo "</pre>";
		}
        if($this->RequestHandler->isAjax()) {
			echo "<pre>";
			var_dump($this->request);exit;
			echo "</pre>";
			$this->autoRender = false;
            // POST情報は$this->params['form']で取得
            $result = $this->params['form']['messeage'];
            // DBに突っ込みます
            $this->Task->id = null;
            $this->data['Task']['title'] = $title;
            $this->Task->save($this->data);
            // 表示用のデータをviewに渡す
            $this->set('t', $title);
        }
		echo "<pre>";
		var_dump('unko');exit;
		echo "</pre>";
    }
}
