<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fileentry;

use App\Series;

use App\Comment;

use App\Article;

use Carbon\Carbon;

use App\ArticleComment;

use App\Gallery;

use App\Event;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Response;

use Intervention\Image\ImageManagerStatic as Image;

use DB;



class HeraldController extends Controller
{
	 public function __construct()
    {
        
    }

    public function newhome()
    {
        $article = Article::orderBy('created_at', 'desc')->get()->take(3);
        $today = Carbon::now();
        $event = Event::where('date', '>=', $today)->get()->take(3);
        $thisevent =Event::where('date', '>=', $today)->first();
        $entry = Fileentry::orderBy('created_at', 'desc')->get()->take(3);
        return view('newhome', ['article' => $article, 'event'=>$event, 'thisevent'=>$thisevent, 'entry'=>$entry]);
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

    public function showevents()
    {
        return view("events");
    }

    public function addanevent()
    {
        return view('addevent');
    }

    public function saveanevent()
    {
        $event = new Event();
        $event->meetingname = Input::get('meetingname');
        $event->about = Input::get('about');

        $event->date = Input::get('date');
        
        $image = Input::file('image');
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->resize(1117,642)->encode('jpg')->save(public_path('/img/events/'.$filename));
        $event->image = $filename;
        
        $event->save();
        return redirect('addevent');
    }

    public function viewcontact()
    {
        return view('contact');
    }

    public function articleupload() 
    {
        return view('uploadarticle');
    }

    public function uploadarticles()
    {
        $article = new Article();
        $article->title = Input::get('title');
        $article->content = Input::get('content');

        $image = Input::file('image');
        $filename = time().'.'. $image->getClientOriginalExtension();
        Image::make($image)->resize(1117,642)->encode('jpg')->save(public_path('/img/blog/'.$filename));
        $article->image = $filename;

        $article->owner = Input::get('owner');

        $article->save();
        return redirect('/article');
    }

    public function uploadpic()
    {
        return view ('uploadarticle');
    }

    public function savepic()
    {
        $gallery = new Gallery();
        $image = Input::file('image');
        $filename = time().'.'. $image->getClientOriginalExtension(); /*->resize(800,800)*/
        Image::make($image)->encode('jpg')->save(public_path('/img/gallery/'.$filename));
        $gallery->image = $filename;

        $gallery->save();
        return redirect('/article');
    }

    public function showpics()
    {
        $thisgallery = Gallery::all();
        return view('gallery', ['thisgallery' =>$thisgallery]);
    }

    public function deletepic($id)
    {
        $gal = Gallery::find($id);
        $gal->delete();
        return redirect('/gallery');
    }

    public function news()
    {
        return view ('news');
    }

    public function allarticles()
    {
        $art = Article::all();
        return view('articles', ['art' => $art]);
    }

    public function eacharticle($id)
    {
        $arti = Article::find($id);
        $aid = $id;
        $comment = ArticleComment::where('article_id', $id)->get();
        $title = $arti->title;
        return view('fullarticle', ['title'=>$title, 'arti'=>$arti, 'comment'=>$comment, 'aid'=>$aid]);
    }

    public function deletearticle($id)
    {
        $thearticle = Article::find($id);
        $thearticle->delete();
        return redirect('/viewarticles')->with('deleted', 'Article deleted successfully');
    }

    public function commentarticle()
    {
        $thiscom = new ArticleComment();
        $thiscom->name = Input::get('name');
        $thiscom->comment = Input::get('comment');
        $thiscom->article_id = Input::get('article_id');
        $thiscom->save();
        return redirect ('/viewarticle'.Input::get('article_id'));
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
        $sid = $id;
        $comments = Comment::where('message_id', $id)->get();
        $messages = Fileentry::where('series_title', $id)->get();
        return view('seriesmessages', ['s'=> $s, 'messages'=> $messages, 'sid'=>$sid, 'comments'=>$comments]);
    }


    public function viewsingles()
    {
        $messages = Fileentry::where('series_title', '1')->get();
        return view('singlemessages', ['messages'=> $messages]);
    }
    public function viewsinglemsg($id)
    {
        $sing_id = $id;
        $comments = Comment::where('single_id', $id)->get();
        $message = Fileentry::where('id',$id)->first();
        return view('single', ['sing_id'=>$sing_id, 'message'=> $message, 'comments'=>$comments]);
    }

    public function uploadcomment()
    {
        $com = new Comment();
        $com->name = Input::get('name');
        $com->comment = Input::get('comment');
        $com->message_id = Input::get('sid');
        $com->save();
        return redirect('/seriesmessages'.Input::get('sid'));  
    }

    public function uploadsinglecomment()
    {
        $com = new Comment();
        $com->name = Input::get('name');
        $com->comment = Input::get('comment');
        $com->single_id = Input::get('sing_id');
        $com->save();
        return redirect('/singlemessages'.Input::get('sing_id'));  
    }
}
