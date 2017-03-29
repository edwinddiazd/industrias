<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Permission;

use App\Role;

class RolesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:dios');
        $this->middleware('permission:manage-users-roles-and-permissions');
    }
    public function getIndex(Request $request)
    {
        $roles = Role::with('perms')->get();
        return view('roles.index', ['roles' => $roles]);
    }

    public function getCreate()
    {
        return view('roles.create');
    }

    public function postCreate(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description
        ]);
        return redirect()->to('admin/roles/index');
    }

    public function getUpdate($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.update', ['role' => $role]);
    }

    public function postUpdate(Request $request)
    {
        $role = Role::findOrFail($request->get('id'));
        $role->name = $request->get('name');
        $role->display_name = $request->get('display_name');
        $role->description = $request->get('description');
        $role->save();
        return redirect();
    }

    public function getDelete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect();
    }

    public function getAttach(Request $request)
    {
        $role = Role::where('id', '=', $request->id)->with('perms')->first();
        $permissions_id = $role->perms->pluck('id')->toArray();
        $permissionsNotAttached = Permission::whereNotIn('id', $permissions_id)->get();
        return view('roles.attach', compact('role', 'permissionsNotAttached'));
    }

    public function postAttach(Request $request)
    {
        $role = Role::findOrFail($request->id);
        $permission = Permission::findOrFail($request->permission);
        $role->attachPermission($permission);
        return redirect();
    }

    public function getDetach(Request $request)
    {
        $role = Role::findOrFail($request->role_id);
        $permission = Permission::findOrFail($request->permission_id);
        $role->detachPermission($permission);
        return redirect()->to('/admin/roles/index');

    }












    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
