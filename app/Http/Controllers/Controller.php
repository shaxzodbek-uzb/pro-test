<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $service;
    protected $serviceClass;
    protected $storeRequestClass;
    protected $updateRequestClass;
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct() {
        $this->service = app($this->serviceClass);
    }
    public function index()
    {
        return $this->service->index();
    }
    public function show($id)
    {
        $item = $this->service->find($id);
        return $item;
    }

    // store
    public function store()
    {
        // validation
        $request = app($this->storeRequestClass);
        $data = $request->validated();
        
        $item = $this->service->store($data);
        
        // response
        return $item;
    }

    // update
    public function update($id)
    {
        // validation
        $request = app($this->updateRequestClass);
        $data = $request->validated();

        $item = $this->service->update($id, $data);
        
        return $item;
    }

    // destroy
    public function destroy($id)
    {
        $this->service->destroy($id);

        return response()->json([
            'success' => true,
            'id' => $id,
        ]);
    }
}
