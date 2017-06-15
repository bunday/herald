<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileentry;

use App\Series;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Response;



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
    	$theseries = new Series();
    	$theseries->title = Input::get('title');
    	$theseries->save();
    	//$entry = Fileentry::where('series_id', $id)->get();

    	$entry = new Fileentry();
    	$file = Input::file('message');
    	$extension = $file->getClientOriginalExtension();
    	Storage::disk('public')->put($file->getClientOriginalName(), File::get($file));
    	$entry->mime = $file->getClientMimeType();
    	$entry->original_filename = $file->getClientOriginalName();
    	$entry->filename = $file->getClientOriginalName();
    	//$entry->series_id = Input::get('series_id');

    	$entry->save();
    	
    	return redirect('uploadmessage'.Input::get('series_id'));
    }

    public function viewseries() 
    {
    	$series = Series::all();
    	return view('allseries', ['series' => $series]);
    }
}
