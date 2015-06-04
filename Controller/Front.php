<?php
/**
 * Created by PhpStorm.
 * User: yannlescouarnec
 * Date: 04/06/15
 * Time: 16:17
*/

namespace Controller;


use Repository\DataRepository;

class Front
{
    private $routes = [
        'listData' => [ 'c' => 'dataController' , 'm' => 'listAction' ],
    ];

    function __construct(){
        $route = $_REQUEST['p'];
        try{
            $db = new \PDO( 'mysql:dbname=delete-me;host=127.0.0.1' , 'root' , 'root' );
        } catch( \Exception $e ){
            die( $e->getMessage() );
        }
        $dataRepository = new DataRepository( $db );
        $dataController = new DataController( $dataRepository );
        $controllerName = $this->routes[$route]['c'];
        $methodName = $this->routes[$route]['m'];
        $$controllerName->$methodName();
    }
}