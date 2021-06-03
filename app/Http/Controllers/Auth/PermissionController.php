<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PermissionRepository;


class PermissionController extends Controller
{
    private $PermissionRepository;

    public function __construct(PermissionRepository $roleRepository)
    {
        $this->Permission = $permissionRepository;
        $this->middleware('auth');
    }

    public function index($rol)
    {
        $permissions = $this->PermissionRepository->getPermission($rol); //Listo los permissions ordenados por la ultima creación y luego los pagino por 5
        return view('pages.permission', compact('permissions')); //devuelvo los permissions en la variable permissions.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$permissions = Permission::paginate(5);
        return view('admin.modules.roles.create', compact('permissions'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($role)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($role)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($role)
    {
        
    }
}
