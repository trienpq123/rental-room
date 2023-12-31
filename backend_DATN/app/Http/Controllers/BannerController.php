<?php

namespace App\Http\Controllers;
use App\Models\banner_configModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    
    public function get_Banner(Request $request)
    {
        $getBanner = banner_configModel::all();
        return response()->json(
            [
                'status' => true,
                'data' => $getBanner
            ]
        );
    }

    public function get_Banner_id(Request $request,$id)
    {
        $getBannerId = banner_configModel::find($id);
        return response()->json(
            [
                'status' => true,
                'data' => $getBannerId
            ]
        );
    }

    public function update_Banner(Request $request,$id){
         $imgbanner = banner_configModel::find($id);
         $get_image_banner = $request->file('banner');
         if ($request->file('banner')) {
             foreach ($request->file('banner') as $img) {
                 $get_name_image_banner = $img->getClientOriginalName();
                 $path = 'uploads/banner/';
                 $name_image_banner = explode('.', $get_name_image_banner);
                 $new_image_banner = $name_image_banner[0] . rand(0, 99);
                 $img->move($path, $new_image_banner.'.'.$name_image_banner[1]);
         
                 if(File::exists($path.$imgbanner->name_banner)){
                    File::delete($path.$imgbanner->name_banner);
                };
                 $imgbanner->link_img_banner = env('APP_URL').'/uploads/banner/'.$new_image_banner.'.'.$name_image_banner[1];
                 $imgbanner->name_banner = $new_image_banner;
                     $imgbanner->save();
                 
             }
             return response()->json(
                [
                    'status' => true,
                    'data' => $imgbanner,
                    
                ]
            );
         }
         return response()->json(
            [
                'status' => false,
                'messages' => 'Cập nhật thất bại',
                'data' => $request->banner
            ]
        );

         
    }
}
