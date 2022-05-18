<?php
namespace App\Services;

class Service {

    protected $model;
    protected $modelClass;

    public function __construct() {
        $this->model = new $this->modelClass;
    }

    public function index()
    {
        $items = $this->model->get();
        return $items;
    }

    public function find($id) {
        $item = $this->model->find($id);
        return $item;
    }

    public function store($data)
    {
        // service store
        $item = $this->model->create($data);
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
}