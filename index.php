<?php
class Model
{
    public $string;

    public function __construct()
    {
        $this -> string = "Clique-moi, grand fou !";
//        $this -> string2 = "Page 1";
//        $this -> string3 = "Page2";
//        $this -> string4 = "Retour";
    }
}

class View
{
    private $model;
    private $controller;

    public function __construct($controller, $model)
    {
        $this -> controller = $controller;
        $this -> model = $model;
    }

    public function output()
    {
        $url ="<p><a href='index.php?action=clicked'>". $this -> model -> string. "</a></p>";
        return $url;
    }
}

class Controller
{
    private $model;

    public function __construct($model)
    {
        $this -> model = $model;
    }

    public function clicked()
    {
        $this -> model -> string = "Ich bin updat&eacute";
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if(isset($_GET['action']) && !empty($_GET['action'])){
    $controller ->$_GET['action']();
}

echo $view -> output();