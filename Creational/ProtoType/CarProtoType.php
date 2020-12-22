<?php


namespace Creational\ProtoType;


abstract  class CarProtoType
{
    protected $model;

    abstract  function __clone();

    private $flag;

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param mixed $flag
     */
    public function setFlag($flag): void
    {
        $this->flag = $flag;
    }

}