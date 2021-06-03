<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleRepository extends BaseRepository
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