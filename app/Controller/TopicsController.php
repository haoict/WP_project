<?php
/**
 * Created by PhpStorm.
 * User: Huong
 * Date: 4/12/2015
 * Time: 9:41 AM
 */

class TopicsController extends AppController{
    var $name = "Topics";
    public $components = array('Session');
    //Create new topic
    public function add() {
        if($this->request->is('post')) {
            $this->Topic->create();
            if($this->Topic->save($this->request->data)){
                $this->Session->setFlash('The topic has been created!');
                $this->redirect('index');
            }
        }
    }

    //List all topics
    public function index() {
        $data = $this->Topic->find("all");
        $this->set("topics", $data);

    }

} 