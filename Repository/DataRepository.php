<?php
/**
 * Created by PhpStorm.
 * User: yannlescouarnec
 * Date: 04/06/15
 * Time: 15:58
*/

namespace Repository;


use Entity\Data;

/**
 * Class DataRepository
 * @package Repository
 */
class DataRepository
{
    /**
     * @var \PDO
     */
    private $PDO;

    /**
     * @param \PDO $PDO
     */
    public function __construct( \PDO $PDO )
    {
        $this->PDO = $PDO;
    }

    /**
     * @return array
     */
    public function getData()
    {
        $pdoStmt = $this->PDO->prepare('select * from data');
        $pdoStmt->execute();
        $dataCollection = [];
        while ( $dataObj = $pdoStmt->fetchObject() ){
            $entity = new Data();
            $entity->setIdData( $dataObj->id_data )
                    ->setEnabled( $dataObj->enabled )
                    ->setName( $dataObj->name );
            $dataCollection[] = $entity;
        }
        return $dataCollection;
    }
}