<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){



    }

    public function create(){



    }




    public function update(){



    }

    public function store(Request $request){

        $posts = $request->validated();
        $posts["author_id"] = \auth()->id();
        $posts["updated_at"] = date('Y-m-d H:i:s');
        $insert =  DB::table("posts")->insert($posts);
        if ($insert) {
           $last = DB::getPdo()->lastInsertId();
            echo $last.' başarıyla kaydedildi';
            //return redirect()->route("admin.posts.show", LastInsert::get_id())->with('success', "Tebrikler içerik başarıyla eklendi.");
        }
    }


    public function destroy(){



    }
}
