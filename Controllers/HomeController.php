<?php

    namespace Controllers;

    use hooks\MVC\Controller;

    class HomeController extends Controller{


        public function index(){
            return view();
        }

        public function about(){
            return view(DEFAULT_VIEW)->title('About');
        }

        public function square($num){
            return $num * $num;
        }


    }