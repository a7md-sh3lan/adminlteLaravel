<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideoStoreRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $created_by_options = [
            [
                "option" => "Barq Admin",
                "value" => "1"
            ],
            [
                "option" => "Barq Video Uploader",
                "value" => "2"
            ],
        ];

        $videos = Video::all();
        return view('admin_template', compact('created_by_options', 'videos'));
    }

   
    // ADD NEW VIDEO AND ITS DETAILS
    public function addVideo(VideoStoreRequest $request) {
        $guessExtension = $request->file('video')->guessExtension();
        $video = new Video;
        $video->video_url = '';
        $video->image_url = '';
        if($request->has('is_send_notification')) {
            $video->is_send_notification = 1;
        }
        $video->keyword = $request->keyword;
        $video->type = $request->type;
        $video->created_by = $request->created_by;
        $video->save();
        if($request->has('video')) {
            $video->video_url = $request->file('video')->storeAs("/videos", 'example_' . $video->id . '.' . $guessExtension, 'public');
        };

        if($request->has('image')) {
            $video->image_url = $request->file('image')->storeAs("/imaes", 'example_' . $video->id . '.' . $guessExtension, 'public');
        };
        $video->save();
        return back();
    }
}
