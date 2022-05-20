<?php
namespace App\Fields\Store;

class NumberField extends Field
{
    public function __construct($name, $type = 'number')
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function fill($item, $data)
    {
        $value = $data[$this->name] * 100;
        // preccess
        $item->{$this->name} = $value;
    }
}