<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //this function return the view to add a role
    public function form()
    {

        //$modules = DB::table('sys_modules')->select(array('module', 'id'))->where('mdl_id', -1)->where('company_id', session('companyId'))->get();
        $modules = DB::table('sys_modules')->select(array('module', 'id'))->where('mdl_id', -1)->get();
        return view('role.role-add', compact('modules'));
    }

    //this function return child of each module to add role blade
    public function moduleChild(Request $request)
    {
        //$modulesChild = DB::table('sys_modules')->select(array('module', 'id'))->where('mdl_id', $request->id)->where('company_id', session('companyId'))->orderBy('module')->get();
        $modulesChild = DB::table('sys_modules')->select(array('module', 'id'))->where('mdl_id', $request->id)->orderBy('module')->get();
        return $modulesChild;
        //return json_encode(array('data'=>$modulesChild));
    }


    public function moduleChildEdit(Request $request)
    {
        $role = $request->role;
        $row = DB::table('sys_modules')
            ->leftjoin('sys_roles',  function ($join) use ($role) {
                $join->on('sys_modules.id', '=', 'sys_roles.mdl_mdc_id');
                $join->on('sys_roles.name', '=', DB::raw("'$role'"));
            })
            ->select('sys_modules.id', 'sys_modules.module', 'sys_roles.mdl_mdc_id', 'sys_roles.create', 'sys_roles.update', 'sys_roles.delete')
            ->where('sys_modules.mdl_id', $request->id)
            ->orderBy('sys_modules.module')
            ->get();
        return $row;
    }

    //this function display rolelist
    public function index()
    {
        //$roleList = DB::table('sys_roles')->select('id', 'name')->where('company_id', session('companyId'))->get()->unique('name');
        $roleList = DB::table('sys_roles')->select('id', 'name')->get()->unique('name');
        return view('role.role-manage', compact('roleList'));
    }

    //this function remove the role from db
    public function hide($id)
    {

        DB::table('sys_roles')->where('id', '=', $id)->where('company_id', session('companyId'))->delete();
        return redirect('Admin/RoleManagement/List')->with('message', 'Role Deleted Successfully');
    }

    public function edit($id)
    {
        $backURL = url()->current();
        $roleName = DB::table('sys_roles')->select('name')->where('id', $id)->where('company_id', session('companyId'))->first();
        $modules = DB::table('sys_modules')->select(array('module', 'id', 'status'))->where('mdl_id', -1)->get();
        // dd($modules);
        return view('role.role-edit', compact('modules', 'roleName','backURL'));
    }

    public function save(Request $request)
    {
        $controls = $request['control'];
        $uuid = Str::uuid()->toString(); // Initialize the $uuid variable

        if (is_array($controls)) {
            foreach ($controls as $key => $control) {
                $uuid = Str::uuid()->toString();
                $create = $this->setCheckBoxValue($request['create'], $key);
                $update = $this->setCheckBoxValue($request['update'], $key);
                $delete = $this->setCheckBoxValue($request['delete'], $key);
                DB::table('sys_roles')->insert([
                    [
                        'id' => $uuid,
                        'name' => $request->role,
                        'mdl_id' => $request->modules,
                        'mdl_mdc_id' => $control,
                        'create' => $create,
                        'update' => $update,
                        'delete' => $delete,
                        'company_id' => session('companyId'),
                    ],
                ]);
            }
        }


        return redirect()->route('role_list', ['id' => $uuid]);
    }

    public function update(Request $request)
    {
        $uuid = Str::uuid()->toString(); // Initialize the $uuid variable
        //dd($request->input());
        DB::table('sys_roles')->where('name', $request->role)->where('mdl_id', $request->modules)->where('company_id', session('companyId'))->delete();
        $controls = $request['control'];

        if (is_array($controls)) {
            foreach ($controls as $key => $control) {
                $create = $this->setCheckBoxValue($request['create'], $key);
                $update = $this->setCheckBoxValue($request['update'], $key);
                $delete = $this->setCheckBoxValue($request['delete'], $key);
                $uuid = Str::uuid()->toString(32);
                DB::table('sys_roles')
                    ->insert([
                        [
                            'id' => $uuid,
                            'name' => $request->role,
                            'mdl_id' => $request->modules,
                            'mdl_mdc_id' => $control,
                            'create' => $create,
                            'update' => $update,
                            'delete' => $delete,
                            'company_id' => session('companyId'),
                        ],
                    ]);
            }
        }
        if ($request->backURL)
            return redirect($request->backURL);
        else
            return redirect('Admin/RoleManagement/List');
    }

    public function setCheckBoxValue($array, $index)
    {
        if (is_array($array))
            return    array_key_exists($index, $array) ? 'yes' : 'no';
        else
            return 'no';
    }


    public function ModuleGet(Request $request){

       $module = DB::table('sys_modules')->where('mdl_id',$request->module)->get();

       return $module;
    }


    public function routeManagament(){
        $modules = DB::table('sys_modules')
        ->select('sys_modules.*')
        ->where('mdl_id', -1)->get();

        return view('admin.route',compact('modules'));
    }


    public function childRouteManagament($id = null){

        $backURL = url()->previous();
        // dd($backURL);
        $module = DB::table('sys_modules')
        ->select('sys_modules.*')
        ->where('id', $id)->first();
    //dd($moduledetail);

    $moduledetail = DB::table('sys_modules')
        ->select('sys_modules.*')
        ->where('mdl_id', $id)->get();
    // dd($moduledetail);
        return view('admin.childroute',compact('moduledetail','module','backURL'));
    }

    public function childRouteFetch(Request $request){

        $module = DB::table('sys_modules')->where('mdl_id',$request->module)->get();

        return $module;
    }


    public function routestore(Request $request){

        if($request->child_level == '3'){
            $data = [
                'module' => $request->updateChildModule,
                'route' => $request->updateChildRoute,
            ];

            DB::table('sys_modules')->where('id',$request->parent_id)->update($data);
            return redirect($request->backURL);
            exit;
        }else{
            $route = count($request->moduleName);
            for($i = 0; $i < $route; $i++){

               $data[] = [
                'mdl_id' => $request->parent_id,
                'module' => $request->moduleName[$i],
                'status' => 1,
                'route' => $request->moduleRoute[$i],
                'level' => 3,
                'has_child' => 0,
                'company_id' => session('companyId'),
                'created_at' => Carbon::now(),
               ];
            }
            DB::table('sys_modules')->insert($data);
            return redirect()->back();
        }


    }
}
