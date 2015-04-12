<?php
/**
 * Created by PhpStorm.
 * User: Huong
 * Date: 4/12/2015
 * Time: 10:17 AM
 */

class QuestionsController extends AppController {
    var $name = "Questions";
    function addQuestion() {
        if($this->request->is('post')) {
            $this->Topic->create();
            if($this->Topic->save($this->request->data)){
                $this->Session->setFlash('The topic has been created!');
                $this->redirect('index');
            }
        }
    }

    function indexQuestion() {
        $data = $this->Topic->find("all");
        $this->set("topics", $data);
    }
} 