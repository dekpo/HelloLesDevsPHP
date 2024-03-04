<?php
namespace App\Models;

abstract class AbstractTable
{
    protected ?int $id = null;
    protected ?string $className = null;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
        $this->setClassName($this);
    }

    public function setClassName(?object $obj): void
    {
        $this->className = get_class($obj);
    }

    public function getClassName(): ?string
    {
        return $this->className;
    }

    /**
     * @return array of attributes for a model
     */
    public function getAttributes(): ?array
    {
        $attributes = [];
        // We do not want to get id and className
        // for making insert and update SQL queries
        $filter = ['id','className'];
        $class = get_class_vars($this->getClassName());
        foreach($class as $k => $v){
            if (!in_array($k,$filter)) $attributes[$k] = $v;
        }
        return $attributes;
    }
}