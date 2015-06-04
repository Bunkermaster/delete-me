<?php
/**
 * Created by PhpStorm.
 * User: yannlescouarnec
 * Date: 04/06/15
 * Time: 15:49
*/

namespace Entity;


/**
 * Class Data
 * @package Entity
 */
class Data
{

    /**
     * @var int
     */
    private $idData;
    /**
     * @var string
     */
    private $name;
    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @return mixed
     */
    public function getIdData()
    {
        return $this->idData;
    }

    /**
     * @param mixed $idData
     * @return Data
     */
    public function setIdData( $idData )
    {
        $this->idData = $idData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Data
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     * @return Data
     */
    public function setEnabled( $enabled )
    {
        $this->enabled = $enabled;
        return $this;
    }
}