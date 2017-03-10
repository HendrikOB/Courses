<?php

namespace Styde;

class Person
{
  protected $name;

  protected static $database = 'mysql';
  public $table = 'people';

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function name()
  {
    return $this->name;
  }

  public function save()
  {
    echo "<p>Saving {$this->name} in the table " . $this->table . "</p>";
  }

}

$ramon = new Person('Ramon');
$ramon->table = 'personas';
$ramon->save();

$duilio = new Person('Duilio');

$duilio->save();

//Person::$table = 'personas';



echo "<p>{$duilio->name()}</p>";
echo "<p>{$ramon->name()}</p>";
