<?php

namespace App\Http\Controllers\BaseControllers;

use Illuminate\Http\Request;

trait BaseApiController
{
    public $model;

    public function index()
    {
        return $this->model::all();
    }

    public function store(Request $request)
    {
        $InitializedModel = new $this->model;
        $InitializedModel->fill($request->all());
        $InitializedModel->save();
        return $InitializedModel;
    }

    public function show(int $id)
    {
        return $this->model::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $InitializedModel = $this->model::findOrFail($id);

        if ($InitializedModel) {
            $InitializedModel->fill($request->all());
            $InitializedModel->save();
        }

        return $InitializedModel;
    }

    public function destroy(int $id)
    {
        $InitializedModel = $this->model::findOrFail($id);
        $InitializedModel->delete();
    }
}
