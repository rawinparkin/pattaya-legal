<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeMessage;
use App\Models\HomeHeader;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeMessageController extends Controller
{
    public function HomeMessage()
    {
        $homemessage = HomeMessage::find(1);
        return view('admin.home_message.home_message_all',compact('homemessage'));
       
    } //End Method

    public function UpdateMessage(Request $request){

        $homemessage = $request->id;

        if ($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

                        // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image2 = $manager->read($image);


            // save modified image in new format 
            $image2->save('upload/frontend/home/message/'.$name_gen);
            $save_url = 'upload/frontend/home/message/'.$name_gen;

            $homemessage_old_photo = HomeMessage::findOrFail($homemessage);
            $img = $homemessage_old_photo->photo;
            unlink($img);

            HomeMessage::findOrFail($homemessage)->update([
                
                'title_booking' => $request->title_booking,
                'title_free' => $request->title_free,
                'admin_address' => $request->admin_address,
                'admin_phone' => $request->admin_phone,
                'admin_email' => $request->admin_email,
                'open_days' => $request->open_days,
                'close_days' => $request->close_days,
                // 'name' => $request->name,
                // 'email' => $request->email,
                // 'subject' => $request->subject,
                // 'message' => $request->message,
                'photo' => $save_url
           

            ]); 
            $notification = array(
            'message' => 'Contact Page Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeMessage::findOrFail($homemessage)->update([
                
                'title_booking' => $request->title_booking,
                'title_free' => $request->title_free,
                'admin_address' => $request->admin_address,
                'admin_phone' => $request->admin_phone,
                'admin_email' => $request->admin_email,
                'open_days' => $request->open_days,
                'close_days' => $request->close_days,
                // 'name' => $request->name,
                // 'email' => $request->email,
                // 'subject' => $request->subject,
                // 'message' => $request->message,

            ]); 
            $notification = array(
            'message' => 'Contact Page Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else
    }

      public function HomeContact()
    {
        $homeheader = HomeHeader::find(1);
        $homecontact = HomeMessage::find(1);
        return view('frontend.contact_page',compact('homecontact','homeheader'));
       
    } //End Method

}