<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class newsController extends Controller
{


	public function index()
	{
        return response()->json(News::all());
	}
	public function dataOrder($dateorder,$titleorder)
	{
		if($dateorder == 0 && $titleorder==0)
		{
		$data = News::orderBy('date','ASC')->orderBy('title','ASC')->get();
		return response()->json($data);
		}
		if($dateorder == 1 && $titleorder==1 )
		{
		$data = News::orderBy('date','DESC')->orderBy('title','DESC')->get();
		return response()->json($data);
		}	

		if($dateorder == 0 && $titleorder==1)
		{
		$data = News::orderBy('date','ASC')->orderBy('title','DESC')->get();
		return response()->json($data);
		}
		if($dateorder == 1 && $titleorder==0 )
		{
		$data = News::orderBy('date','DESC')->orderBy('title','ASC')->get();
		return response()->json($data);
		}
	
	}
	
public function dateOrder($date)
{
	if($date == 0 )
	{	
	$data = News::orderBy('date','ASC')->get();
	return response()->json($data);
	}
	if($date == 1 )
	{	
	$data = News::orderBy('date','DESC')->get();
	return response()->json($data);
	}
}

public function titleOrder($title)
{
	  if($title == 0 )
	   {	
	     $data = News::orderBy('title','ASC')->get();
	     return response()->json($data);
	   }
	  if($title == 1 )
	   {	
	     $data = News::orderBy('title','DESC')->get();
	     return response()->json($data);
	   }
    }

     public function filterdata($date1)
    {
			$date = News::where('date',$date1)->get();
			return response()->json($date);
	}
	
	public function filtertitle($title)
    {
			$date = News::where('title',$title)->get();
			return response()->json($date);
	}
	

}
