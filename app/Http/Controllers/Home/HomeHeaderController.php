<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeHeader;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeHeaderController extends Controller
{
    public function HomeHeader(){
    $homeheader = HomeHeader::find(1);
        return view('admin.home_header.home_header_all',compact('homeheader'));

    } //End Method

    public function UpdateHeader(Request $request){

        $header_id = $request->id;

        if ($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                        // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image2 = $manager->read($image);

            // resize image proportionally to 300px width
            //$image2->resize(300, 200);

            // resize image proportionally to 300px width
            //$image2->scale(width: 700);


            // save modified image in new format 
            $image2->save('upload/frontend/home/header/'.$name_gen);
            $save_url = 'upload/frontend/home/header/'.$name_gen;

            $homeheader_old_photo = HomeHeader::findOrFail($header_id);
            $img = $homeheader_old_photo->photo;
            unlink($img);


            HomeHeader::findOrFail($header_id)->update([
                'title_welcome' => $request->title_welcome,
                'title_2' => $request->title_2,
                'title_rotate' => $request->title_rotate,
                'long_title' => $request->long_title,
                'button_title' => $request->button_title,
                'photo' => $save_url
           

            ]); 
            $notification = array(
            'message' => 'Home Header Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeHeader::findOrFail($header_id)->update([
                'title_welcome' => $request->title_welcome,
                'title_2' => $request->title_2,
                'title_rotate' => $request->title_rotate,
                'long_title' => $request->long_title,
                'button_title' => $request->button_title,
        

            ]); 
            $notification = array(
            'message' => 'Home Header Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 
}