<?php
/**
 * Created by PhpStorm.
 * User: Huong
 * Date: 4/12/2015
 * Time: 10:16 AM
 */

class SubjectsController extends AppController{
    var $name = "Subjects";
    public $components = array('Session');
    //Create new Subject
    public function add() {
        if($this->request->is('post')) {
            $this->Subject->create();
            if($this->Subject->save($this->request->data)){
                $this->Session->setFlash('The subject has been created!');
                $this->redirect('index');
            }
        }
    }

    //List all subjects
    public function index() {
        $data = $this->Subject->find("all");
        $this->set("subjects", $data);

    }
} 