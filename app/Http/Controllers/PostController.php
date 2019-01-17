<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use app\Post;

class PostController extends Controller
{
  
	public function getPosts()
	{
		$stories 		= $this->getData(1);
		$events 		= $this->getData(2);
		$international 	= $this->getData(3);
		$entertainment 	= $this->getData(4);
		$education 		= $this->getData(5);
		$sport 			= $this->getData(6);
		$activities 	= $this->getData(7);
		$technology 	= $this->getData(8);

 		return view('index', [	'stories' => $stories,
 								'events' => $events,
 								'international' => $international,
 								'entertainment' => $entertainment,
 								'education' => $education,
 								'sport' => $sport,
 								'activities' => $activities,
 								'technology' => $technology
 					]);
	}

    public function getData($id)
    {    	
    	$posts = DB::table('Posts')->where('kindId', $id)->get();    

    	return $posts;
        // return view('index', ['posts' => $posts]);
    }

}
