<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeService;

class HomeServiceController extends Controller
{
    public function HomeService()
    {
        $homeservice = HomeService::find(1);
        return view('admin.home_service.home_service_all',compact('homeservice'));
        
    } //End Method

    public function UpdateService(Request $request){

        $service_id = $request->id;
        
        HomeService::findOrFail($service_id)->update([

                'title_service' => $request->title_service,
                'title_why' => $request->title_why,
                'short_title' => $request->short_title,
                'button_title' => $request->button_title,
                'title_card_1' => $request->title_card_1,
                'des_1' => $request->des_1,
                'title_card_2' => $request->title_card_2,
                'des_2' => $request->des_2,
                'title_card_3' => $request->title_card_3,
                'des_3' => $request->des_3,

            ]); 
            $notification = array(
            'message' => 'Home Service Updated Successfully', 
            'alert-type' => 'success');

        return redirect()->back()->with($notification);
    }

}