<?php

use everest\MVC\View;
use everest\MVC\Redirect;
use everest\MVC\Route;
use everest\Storage\DB;
use everest\HooksApp;
use everest\Utils\Curl;
use everest\DataBase\Statements\DeleteStatement;
use everest\DataBase\Statements\InsertStatement;
use everest\DataBase\Statements\SelectStatement;
use everest\DataBase\Statements\UpdateStatement;
use everest\Form\FormBuilder;
use everest\Media\Image;

function image(string $path, float $width = null, float $height = null) {
    $image = new Image($path);
    return $image->src($width, $height);
}

function view($view = null, $vars = []){
    return new View($view, $vars);
}

function db($dsn = DB_DEFAULT_DSN, $user = DB_DEFAULT_USER, $pass = DB_DEFAULT_PASS) : DB{
    return new DB($dsn, $user, $pass);
}

function component(string $component, array $params = []){
    $component = "ViewComponents\\" . ucfirst($component) . "ViewComponent";
    $viewComponent = new $component;
    call_user_func_array(array($viewComponent, "invoke"), $params);
}

function route() : Route{
    return new Route();
}

function redirect() : Redirect{
    return new Redirect();
}

function print_pre($data){
    echo  "<pre>"; print_r($data); echo  "</pre>";
}

function errorLog($error, $level = 1){
    $refId = HooksApp::log($error , $level);
    if($level >= 1){
        die("We are sorry, but we have some Internal Server Error. If you wish to contact us with this error : <h3>Reference Id : "  . $refId . "</h3>");
    }
}

function formInput(string $name, $type = "text",  $value = null){
    return new FormBuilder($name, $type, $value);
}

function select(string $select = "*") : SelectStatement {
    return new SelectStatement($select);
}

function update(array $items) : UpdateStatement {
    return new UpdateStatement($items);
}

function insert(array $items) : InsertStatement {
    return new InsertStatement($items);
}

function delete(array $parameters = []) : DeleteStatement {
    return new DeleteStatement($parameters);
}

function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle) {
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

function Authenticate(float $level) : bool {
    return false;
}

function IsAuthenticated(float $level) : bool {
    return false;
}

function string($id , $language = "en-us"){
    return $id;
}

function curl(string $url){
    return new Curl($url);
}