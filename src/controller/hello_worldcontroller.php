<?php
    namespace Drupal\hello_world\controller;
    use Drupal\Core\Controller\ControllerBase;
    class hello_worldcontroller extends ControllerBase {
        public function message() {
           return [
            '#title'=>'hello_world',
            '#markup' =>'hello world message from coustom module'
        ];
    }
        public function information() {
        
            return[
            '#title'=>'INFORMATION PAGE',
            '#markup'=>'this is information page.'
        ];
    
    }
    public function details() {
        
        return[
        '#title'=>'DETAILS PAGE',
        '#markup'=>'this is details page.'
    ];

}

}
