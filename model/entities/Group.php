<?php
namespace models\entities;

class Group implements \JsonSerializable
{
    
    private string $id;
    private array $lessons;
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Серилизует свойства объекта в JSON
     * @return mixed
     */
    public function jsonSerialize():mixed
    {
        $vars = get_object_vars($this);

        return $vars;
    }
    /**
     * Возвращает номер группы id
     * @return string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of lessons
     * @return array
     */ 
    public function getLessons()
    {
        return $this->lessons;
    }

    /**
     * Set the value of lessons
     *
     * @return  self
     */ 
    public function setLessons($lessons)
    {
        $this->lessons = $lessons;

        return $this;
    }
}