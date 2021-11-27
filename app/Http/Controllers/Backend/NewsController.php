<?php

namespace App\Http\Controllers\Backend;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('admin.layouts.news');
    }


    public function news_store(Request $request)
    {


        $request->validate([
            'news_description'=>'required'
        ]);
    try{
              News::create([

                  'news_description'=>$request->news_description,
                  ]);

                  return redirect()->back()->with('success', 'News created successfully');

    }
    catch(\Throwable $throwable){
                  return redirect()-> back();
    }

    }

     public function news_list(){
         $list=News::all();
         return view('admin.layouts.news-list', compact('list'));
     }
}
