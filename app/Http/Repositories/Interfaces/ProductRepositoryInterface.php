<?php

namespace App\Http\Repositories\Interfaces;

interface ProductRepositoryInterface
{
    public function all();

    public function show($id);

    public function delete($id);
}
