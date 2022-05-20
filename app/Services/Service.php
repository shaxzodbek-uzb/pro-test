<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Service {
    protected $model;
    protected $modelClass;

    public function __construct() {
        $this->model = new $this->modelClass;
    }

    public function index()
    {
        $items = $this->model::all();
        return $items;
    }

    public function find($id) {
        $item = $this->model->find($id);
        return $item;
    }

    public function store($data)
    {
        // service store
        // $item = $this->model->create($data);
        $item = $this->model;
        $fields = $this->getFields();
        foreach ($fields as $field) {
            $field->fill($item, $data);
        }
        $item->save();
        return $item;
    }

    public function update($id, $data)
    {
        $item = $this->find($id);

        // service update
        $item->update($data);
        return $item;
    }

    public function destroy($id)
    {
        $this->model->find($id)->delete();
    }

    public function getFields()
    {
        return [];
    }
}