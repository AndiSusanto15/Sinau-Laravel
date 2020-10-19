<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return \App\Category::all();
        $daftar_kategori = \App\Category::all();
        return view("kategori.index", [ "daftar_kategori" => $daftar_kategori,
                                        "showSidebar" => "",
                                        "kalimat" => "Selamat datang Andi Susanto",
                                        "vote_status" => 1]);
    }

    public function search(Request $request)
    {
        $keyword = $request->get("name");

        return \App\Category::where("name", "LIKE", "%$keyword%")->get();
    }

    public function delete($id)
    {
        $category = \App\Category::findOrFail($id);

        if(!$category->trashed()){
            $category->delete();
            return "Kategori $category->name berhasil dihapus";
        }
    }

    public function restore($id)
    {
        $category = \App\Category::withTrashed()->findOrFail($id);

        if (!$category->trashed()) {
            return "Kategori tidak perlu direstore";
        }
        return "Kategori $category->name berhasil direstore";
    }

    public function permanentDelete($id)
    {
        $category = \App\Category::withTrashed()->findOrFail($id);
        $category->forceDelete();

        return "Kategori $category->name berhasil dihapus permanent";
    }

}
