<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Support\Facades\Auth;////


class AuthorController extends Controller
{
    public function register(Request $request){

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:authors,email",
            "password"=>"required|confirmed"
        ]);

        $author = new Author();
        $author->name = $request->name;
        $author->email = $request->email;
        $author->password = Hash::make($request->password);
        $author->role = "Admin";
        $author->save();

//        return view("RegLog.login");
        return redirect()->route("login");

    }

    public function login(Request $request){
         $loginMe = $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
         //Creat Token

        $user = Author::where("email",$request->email)->first();

        if(Hash::check($request->password,$user->password) and $user->usertype != NULL) {
            if ($user->remember_token == null) {
                $token = $user->createToken("auth_token")->accessToken;
                $token = "Bearer " . $token;
                setcookie("Authorization", $token, time() + (86400 * 4), "/");
                Author::where("email", $request->email)->update(['remember_token' => $token]);
            } else {
                $checkToken = DB::table("oauth_access_tokens")->where("user_id", "=", $user->id)->first();
                $time = explode(" ", $checkToken->expires_at);
                if ($time[0] < date("Y-m-d")) {
                    DB::table("oauth_access_tokens")->where("user_id", "=", $user->id)->delete();
                    $token = $user->createToken("auth_token")->accessToken;
                    $token = "Bearer " . $token;
                    setcookie("Authorization", $token, time() + (86400 * 4), "/");
                    Author::where("email", $request->email)->update(['remember_token' => $token]);
                } else {
                    $token = $user->remember_token;
                    setcookie("Authorization", $token, time() + (86400 * 4), "/");
                }
            }


            return redirect()->route("main");
        }
        else
//            return redirect()->route("login");
            return redirect()->back();




//        return  $request->json([
//            "status"=>1,
//            "message"=>"Seccessfuly",
//            "accessToken"=>$token
//        ]);


    }

    public function mainPage(){
//        $user = Author::where("remember_token",$_COOKIE['Authorization'])->first();
//        return view("admin.index",compact("user"));
        return view("admin.index");
    }

    public function logout(){
        $author  = Author::where("remember_token",$_COOKIE['Authorization'])->first();
        $author->remember_token = "";
        $idAuthor = $author->id;
        $author->save();

        DB::table('oauth_access_tokens')->where('user_id', '=', $idAuthor)->delete();
        unset($_COOKIE['Authorization']);
        setcookie("Authorization",null,-1,"/");
    }

    public function userView(){
                                        //S way 1
//        $allData = Author::all();
//        return view("backend.user.view",compact('allData'));
                                        //E way 1
                                        //S paginate
//        $data['allData'] = Author::latest()->paginate(1);
                                        //E paginate

        $userWorking = DB::table("authors")->where("remember_token","=",$_COOKIE['Authorization'])->first();
                                                                //      != just working id
        $data['allData'] = DB::table("authors")->where("id","!=",$userWorking->id)
            ->where("role","=","Admin")->orWhere("role","Employee")->get();

                                        //S find all data
//        $data['allData'] = Author::all();
                                        //E find all data

        return view("backend.user.view",$data);

    }

    public function userAdd(){
        return view("backend.user.addUser");
    }

    public function userStore(Request $request){

         $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:authors,email",
        ]);

        $user = new Author();
        $code = rand(0000,9999);
        $user->usertype = $request->role;
        $user->role = $request->role;
        $user->name = $_POST["name"];
        $user->email = $_POST["email"];
        $user->password = bcrypt($code);
        $user->code = $code;
        $user->save();


        return $this->userView();


    }

    public function userEdit($id){
        $editeData = Author::find($id);
        return view("backend.user.editeUser",compact("editeData"));

    }

    public function userUpdate(Request $request,$id){

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:authors,email,".$id
        ]);
        $author = Author::find($id);
        if($author->code == null){
            $code = rand(0000,9999);
            $author->code = $code;
        }
        $author->usertype = $request->role;
        $author->name = $request->name;
        $author->email = $request->email;
        $author->save();

        return $this->userView();
    }

    public function userDelete($id){
        $deleteUser = Author::find($id)->delete();
        DB::table("oauth_access_tokens")->where('user_id', '=', $id)->delete();
        return $this->userView();
    }
}
