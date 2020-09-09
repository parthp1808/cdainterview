<?php

namespace App\Http\Controllers;

use App\Page;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index() {
        $pages = Page::all();
        return view('admin.index',compact('pages'));
    }

    public function edit($page){
        $page_settings = Page::where('name', $page)->first();
        if ($page_settings){
            return view('admin.edit',compact('page_settings'));
        }
        return redirect()->back()->withErrors('No page found');
    }

    public function update(Page $page, Request $request) {

        if($request->image){
            if($page->image){
                Storage::delete($page->image);
            }
            $path = $request->file('image')->store('public/images');
            $page->image = $path;
        }

        $page->content = $request->page_content;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->noindex = $request->noindex;
        $page->save();
        return redirect('/admin');
    }

    public function settings(){
        $settings = Setting::all();
        return view('admin.settings', compact('settings'));
    }

    public function settingsUpdate(Request $request){
        $newsettings = $request->all();
        foreach ($newsettings as $index => $newsetting) {
            $setting = Setting::where('key', $index)->first();
            if($setting){
                $setting->value = $newsetting;
                $setting->save();
            }
        }
        return redirect('/admin');
    }
}

