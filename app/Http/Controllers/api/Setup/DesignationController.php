<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function designationView(){

        $data["allData"] = Designation::all();
        return view("backend.setup.designation.viewDesignation",$data);

    }

    public function designationAdd(){

        return view("backend.setup.designation.addDesignation");

    }

    public function storeDesignation(Request $request){

        $request->validate([
            "designationName"=>"required|unique:designations,name"
        ]);

        $class = new Designation();
        $class->name = $request->designationName;
        $class->save();

        return $this->designationView();

    }

    public function designationEdit($id){

        $editDesignation = Designation::find($id);
        return view("backend.setup.designation.editDesignation",compact("editDesignation"));

    }

    public function updateDesignation(Request $request,$id){

        $request->validate([
            "designationName"=>"required|unique:designations,name,".$id
        ]);
        $update = Designation::find($id);
        $update->name = $request->designationName;
        $update->save();

        return $this->designationView();

    }

    public function deleteDesignation($id){

        $deleteDesignation = Designation::find($id)->delete();
        return $this->designationView();

    }
}
