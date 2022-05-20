<?php
namespace App\Fields\Store;

class Field {
    protected $name;
    protected $type;

    protected $beforeSaveClouser;

    public static function make($name)
    {
        // 
        // $this instance
        // self class
        $class = get_called_class();
        return new $class($name);
    }

    public function beforeSave($callback)
    {
        $this->beforeSaveClouser = $callback;
        return $this;
    }
}