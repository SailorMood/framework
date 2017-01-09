<?php
class Model
{
    public $string;

    public function __construct()
    {
        $this -> string = "Clique-moi, grand fou !";
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
        return "<p><a href='index.php?action=clicked\'>". $this -> model -> string. "</a></p>";
    }
}

class Controller
{
    private $model;

    public function __construct($model)
    {
        $this -> model = $model;
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view -> output();