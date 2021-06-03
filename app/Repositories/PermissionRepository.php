<?php

namespace App\Repositories;

use App\Repositories\RoleRepository;

class RoleRepository extends RoleRepository
{
    public function getModel()
    {
        return new Role();
    }

    public function getRoles()
    {
        return Role::orderBy('updated_at', 'DESC')->paginate();
    }
}