<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $fillable = ['name'];

    static public function getPermission()
    {
        $getPermission =  Permission::groupBy('groupby')->get();
        // return $getPermission;
        $result = array();
        foreach ($getPermission as $key => $value) {
            $getPermissionGroup = Permission::where('groupby',$value->groupby)->get();
            $data = array();
            $data['id']=$value->id;
            $data['name']=$value->name;
            $group = array();
            foreach ($getPermissionGroup as $key => $valueG) {
                $dataG = array();
                $dataG['id']=$valueG->id;
                $dataG['name']=$valueG->name;
                $group[]=$dataG;
            }
            $data['group']=$group;
            $result[]=$data;
        }
        return $result;
    }

    static public function getPermissionGroup($groupby)
    {
        return Permission::where('groupby',$groupby)->get();
    }

}
