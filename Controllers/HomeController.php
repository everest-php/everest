<?php

    namespace Controllers;

    use everest\MVC\Controller;

    class HomeController extends Controller {

        public function index(){
            return view();
        }

        public function about(){
            return view("home/about")->title('About the application');
        }

        public function square($id, $b = 0){
            return $id * $b;
        }

        public function post($id, User $model){
            $model->id = $id;
            return $model;
        }

        public function put($id, User $model){
            $model->id = $id;
            return $this->created($model);
        }

    }


    class User {
        public $id;
        public $name = "Untitled";
        public $email = "user@example.com";
    }
