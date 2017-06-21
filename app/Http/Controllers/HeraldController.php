<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileentry;

use App\Series;

use App\Comment;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Response;

use DB;



class HeraldController extends Controller
{
	 public function __construct()
    {
        //$this->middleware('auth');
    }

	public function index()
    {
    	$messages = Fileentry::all();
        return view('home', ['messages' => $messages]);
    }

    public function messageupload() 
    {
    	$entry = new Fileentry();
        $entry->series_title = Input::get('series_title');
    	$file = Input::file('message');
    	$extension = $file->getClientOriginalExtension();
    	Storage::disk('public')->put($file->getClientOriginalName(), File::get($file));
    	$entry->mime = $file->getClientMimeType();
    	$entry->original_filename = $file->getClientOriginalName();
    	$entry->filename = $file->getClientOriginalName();

    	$entry->save();
    	
    	return redirect('uploadmessage');
    }

    public function addseries(){
        $s = new Series();
        $s->title = Input::get('newseries');
        $s->save();
        return redirect('/uploadmessage');
    }

    public function viewseries() 
    {
        $entry = Series::all();
        return view('allseries', ['entry' => $entry]);
    }

    public function viewmessages($id)
    {
        $s = Series::find($id)->title;
        $messages = Fileentry::where('series_title', $id)->get();
        return view('seriesmessages', ['s'=> $s, 'messages'=> $messages]);
    }

    public function viewsingles()
    {
        $messages = Fileentry::where('series_title', '5')->get();
        return view('singlemessages', ['messages'=> $messages]);
    }

    public function uploadcomment()
    {
        $com = new Comment();
        $com->name = Input::get('name');
        $com->comment = Input::get('comment');
        $com->save();
        return redirect('/singles');  
    }
}
