<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $fillable = ['module','module_id','path','file','type','user_id','downloads'];

    protected $table = 'attach';


    public function getAttach($module, $module_id = null, $type = null){
        $row = Attach::where('module', $module);
        if(isset($module_id)) $row->where('module_id', $module_id);
        if(isset($type)) $row->where('type', $type);
        return $row->get();
    }
}
