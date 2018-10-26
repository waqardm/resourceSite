<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('manage.permissions.index')->withPermissions($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request == 'basicPermission') {
            $this->validate($request, [
                'name' => 'required|max:255|unique:name',
                'slug' => 'required|max:255|alphadash',
                'description' => 'sometimes|max:255',
            ]);

            $permission = new Permission();
            $permission->name = $request->slug;
            $permission->display_name = $request->name;
            $permission->description = $request->description;
            $permission->save();

             Session::flash('success', 'Permission has been successfully added <i class="far fa-smile"></i>');
            return redirect()->route('permissions.index');

        // } elseif ($request == 'crudPermission') {
        //     $this->validate($request,[
        //         'resource' => 'required|min:3|max:100|alpha',
        //     ]);

        //     $crud = explode('-', $request->crud);
        //     if (cound($crud) > 0) {
        //         foreach ($crud as $x) {
        //             $slug = strtolower($x) . '-' .strtolower($request->resource);
        //             $display_name = ucwords($x . " " . $request->resource);
        //             $description = "Allows a user to " . strtoupper($x) . ' a ' . ucwords($request->resource);

        //             $permission = new Permission();
        //             $permission->name = $slug;
        //             $permission->display_name = $display_name;
        //             $permission->description = $description;
        //             $permission->save();
        //         }
                
        //         Session::flash('success', 'Permission has been successfully added <i class="far fa-smile"></i>');
        //         return redirect()->route('permissions.index');
        //     }

        // } else {
        //     Session::flash('error', 'FAIL');
        //     return redirect()->route('permissions.create')->withInput();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = findOrFail($id);
        return view('manage.permissions.show')->withPermission($permission);
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
