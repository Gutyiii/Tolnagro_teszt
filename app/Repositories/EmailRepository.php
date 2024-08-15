<?php

namespace App\Repositories;

use App\Models\Email;

class EmailRepository implements EmailRepositoryInterface
{
    public function getAll()
    {
        return Email::all();
    }

    public function create(array $data)
    {
        return Email::create($data);
    }

    public function delete($id)
    {
        return Email::destroy($id);
    }
}

