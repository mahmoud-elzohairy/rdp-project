<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\ProductRepositoryInterface;
use App\Product;

class ProductRepository implements ProductRepositoryInterface
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
