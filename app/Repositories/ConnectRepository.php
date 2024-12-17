<?php

namespace App\Repositories;



use App\Models\Connect;

class ConnectRepository
{
    public function storeConnect(array $data): void
    {
        Connect::create($data);
    }

}