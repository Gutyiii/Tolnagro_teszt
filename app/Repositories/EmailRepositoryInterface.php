<?php

namespace App\Repositories;

use App\Models\Email;

interface EmailRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function delete($id);
}

