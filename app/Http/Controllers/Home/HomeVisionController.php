<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeVision;
use App\Models\HomeHeader;
use App\Models\HomeMessage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeVisionController extends Controller
{
    public function HomeVision()
    {
        $homevision = HomeVision::find(1);
        return view('admin.home_vision.home_vision_all',compact('homevision'));
       
    } //End Method

    public function UpdateVision(Request $request){

        $homevision = $request->id;

        if ($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                        // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image2 = $manager->read($image);


            // save modified image in new format 
            $image2->save('upload/frontend/home/vision/'.$name_gen);
            $save_url = 'upload/frontend/home/vision/'.$name_gen;


            $homevision_old_photo = HomeVision::findOrFail($homevision);
            $img = $homevision_old_photo->photo;
            unlink($img);

            HomeVision::findOrFail($homevision)->update([
                
                'title_welcome' => $request->title_welcome,
                'sub_title' => $request->sub_title,
                'short_title' => $request->short_title,
                'title_card_1' => $request->title_card_1,
                'des_1' => $request->des_1,
                'title_card_2' => $request->title_card_2,
                'des_2' => $request->des_2,
                'title_card_3' => $request->title_card_3,
                'des_3' => $request->des_3,
                'year_exp' => $request->year_exp,
                'exp_title' => $request->exp_title,
                'photo' => $save_url
           

            ]); 
            $notification = array(
            'message' => 'About Updated Page with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeVision::findOrFail($homevision)->update([
                'title_welcome' => $request->title_welcome,
                'sub_title' => $request->sub_title,
                'short_title' => $request->short_title,          
                'title_card_1' => $request->title_card_1,
                'des_1' => $request->des_1,
                'title_card_2' => $request->title_card_2,
                'des_2' => $request->des_2,
                'title_card_3' => $request->title_card_3,
                'des_3' => $request->des_3,
                'year_exp' => $request->year_exp,
                'exp_title' => $request->exp_title,

            ]); 
            $notification = array(
            'message' => 'About Page Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 



       public function HomeAbout()
    {
        $homeheader = HomeHeader::find(1);
        $homevision = HomeVision::find(1);
        $homemessage = HomeMessage::find(1);
        return view('frontend.about_page',compact('homeheader','homevision','homemessage'));
       
    } //End Method
}