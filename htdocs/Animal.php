<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/15/2019
 * Time: 10:11 AM
 */

require_once ('utils.php');

interface iViewTemplate {
    const ENDTAG = "<br><hr><br>";
    public function renderView();
}

interface iLikesTemplate {
    public function showLikes();
}

abstract class Animal
{
    static private $count = 0;
    private $Type;
//    private $Name;

    /**
     * Animal constructor.
     * @param $Type
     */
    public function __construct($Type)
    {
        Animal::$count++;
        $this->Type = $Type;
    }

    public static function renderCount() {
        echo "Our animal count: " . Animal::$count . "<br>";
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }
    public function renderType() {
        echo "My animal is of type:" . $this->Type . "<br>";
    }

}

class Cat extends Animal implements iViewTemplate,iLikesTemplate
{
    use serverUtils;
    private $likesmice = true;

    /**
     * Cat constructor.
     * @param bool $likesmice
     */
    public function __construct($likesmice)
    {
        parent::__construct("Cat");
        $this->likesmice = $likesmice;
    }

    /**
     * @return bool
     */
    public function isLikesmice()
    {
        return $this->likesmice;
    }

    /**
     * @param bool $likesmice
     */
    public function setLikesmice($likesmice)
    {
        $this->likesmice = $likesmice;
    }


    public function miau() {
        echo "Miau!<br>";
    }

    public function renderView() {
        echo "This cat is a lover of mice" . $this->likesmice . iViewTemplate::ENDTAG;
    }

    public function showLikes()
    {
        // TODO: Implement showLikes() method.
    }
}

class Dog extends Animal implements iViewTemplate {
    private $hatescats = true;

    /**
     * Dog constructor.
     * @param bool $hatescats
     */
    public function __construct($hatescats)
    {
        Animal::__construct("Dog");
        $this->hatescats = $hatescats;
    }

    public function renderView() {
        if ($this->hatescats) {
            echo "This dog hates cats:<br>";
        } else {
            echo "This dog loves cats: <br>";
        }

    }

}