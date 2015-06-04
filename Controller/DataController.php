<?php
/**
 * Created by PhpStorm.
 * User: yannlescouarnec
 * Date: 04/06/15
 * Time: 16:10
*/

namespace Controller;


use Repository\DataRepository;

class DataController
{
    /**
     * @var DataRepository
     */
    private $dataRepository;

    public function __construct( DataRepository $dataRepository )
    {
        $this->dataRepository = $dataRepository;
    }

    public function listAction(){
        $dataCollection = $this->dataRepository->getData();
        include( 'View/listData.php' );
    }
}