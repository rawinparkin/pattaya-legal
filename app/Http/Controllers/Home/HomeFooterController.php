<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class HomeFooterController extends Controller
{
    public function HomeFooter()
    {
        $homefooter = Footer::find(1);
        return view('admin.home_footer.home_footer_all',compact('homefooter'));
        
    } //End Method

    public function UpdateFooter(Request $request){

        $footer_id = $request->id;
        
        Footer::findOrFail($footer_id)->update([

                'white_title' => $request->white_title,
                'yellow_title' => $request->yellow_title,
                'short_title' => $request->short_title,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,


                
                'title_2' => $request->title_2,
                'topic_1' => $request->topic_1,
                'topic_2' => $request->topic_2,
                'topic_3' => $request->topic_3,
                'topic_4' => $request->topic_4,
                'topic_5' => $request->topic_5,
                'topic_6' => $request->topic_6,
                'topic_7' => $request->topic_7,
                'topic_8' => $request->topic_8,

                'title_question' => $request->title_question,
                'title_hours' => $request->title_hours,
                'title_open' => $request->title_open,
                'title_close' => $request->title_close,

            ]); 
            $notification = array(
            'message' => 'Footer Updated Successfully', 
            'alert-type' => 'success');

        return redirect()->back()->with($notification);
    }
}