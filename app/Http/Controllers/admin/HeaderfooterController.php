<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Admin\Headefooter;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HeaderfooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function index()
    {
            $data['footer_data'] = Headefooter::find(1);
            return view('admin.footer_details',$data);
        
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function admin_setting()
    {
        if (Auth()->user()->type == 0) {
            return view('admin.admin_setting');
        }
        if (Auth()->user()->type == 2) {
            return view('vender.admin_setting');
        }
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function footer_post(Request $request)
    {
        if ((Auth()->user()->type == 0) ) {
            $request->validate([
                'fd_about'  => 'required',
                //'email' => 'required|email',
                //'picture'     => 'required | mimes:jpg,jpeg,png',
            ]);
            

            //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ +

                $obj = Headefooter::find(1);
          if($request->hasfile('address_icon'))
            {
                if($obj->fd_address_icon!='' && file_exists(public_path().'/upload/'.$obj->fd_address_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_address_icon);
                }
                $file = $request->file('address_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_address_icon = $filename;
            }
            if($request->hasfile('facebook_icon'))
            {
                if($obj->fd_facebook_icon!='' && file_exists(public_path().'/upload/'.$obj->fd_facebook_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_facebook_icon);
                }
                $file = $request->file('facebook_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_facebook_icon = $filename;
            }
            if($request->hasfile('instagram_icon'))
            {
                if($obj->fd_instagram_icon!='' && file_exists(public_path().'/upload/'.$obj->fd_instagram_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_instagram_icon);
                }
                $file = $request->file('instagram_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_instagram_icon = $filename;
            }
            if($request->hasfile('linkedin_icon'))
            {
                if($obj->fd_linkedin_icon!='' && file_exists(public_path().'/upload/'.$obj->fd_linkedin_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_linkedin_icon);
                }
                $file = $request->file('linkedin_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_linkedin_icon = $filename;
            }
            if($request->hasfile('email_icon'))
            {
                if($obj->fd_email_icon !='' && file_exists(public_path().'/upload/'.$obj->fd_email_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_email_icon);
                }
                $file = $request->file('email_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_email_icon = $filename;
            }
            if($request->hasfile('contact_icon'))
            {
                if($obj->fd_contact_icon!='' && file_exists(public_path().'/upload/'.$obj->fd_contact_icon))
                {
                    unlink(public_path().'/upload/'.$obj->fd_contact_icon);
                }
                $file = $request->file('contact_icon');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_contact_icon = $filename;
            }
            if($request->hasfile('footer_logo'))
            {
                if($obj->fd_footer_logo!='' && file_exists(public_path().'/upload/'.$obj->fd_footer_logo))
                {
                    unlink(public_path().'/upload/'.$obj->fd_footer_logo);
                }
                $file = $request->file('footer_logo');
                $filename = $file->getClientOriginalName();
                $filename = str_replace("&", "", $filename);
                $filename = str_replace(" ", "", $filename);
                $filename = str_replace("-", "", $filename);
                $filename = time().$filename;
                $file->move(public_path().'/upload/', $filename);
                $obj->fd_footer_logo = $filename;
            }
            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
           // $this->compressImage($_FILES['address_icon']['tmp_name'],$destinationPath,50);
            


                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

               
                $obj->fd_about     = $request->fd_about;
                $obj->fd_contact     = $request->fd_contact;
                $obj->fd_email     = $request->fd_email;
                $obj->fd_linkedin     = $request->fd_linkedin;

                 $obj->fd_instagram     = $request->fd_instagram;
                $obj->fd_facebook     = $request->fd_facebook;
                $obj->fd_address_details     = $request->fd_address_details;
                $obj->fd_address_title     = $request->fd_address_title;

                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

                if ($obj->save()) {

                    return redirect()->back()->with('success', 'Data created successfully.');

                } else {

                    return redirect()->back()->with('error', 'Opps!! sorry!! problem occurred.Please try again!');

                }

            
        }
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function update_admin_password(Request $request)
    {
        if ((Auth()->user()->type == 0) || (Auth()->user()->type == 2)) {
            $request->validate([
                'old_password'         => 'required',
                'new_password'         => 'required',
                'confirm_new_password' => 'required|same:new_password',
            ]);
            //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if (Hash::check($request->old_password, Auth()->user()->password)) {
                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                DB::table('users')->where('id', Auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                return redirect()->back()->with('success', 'Password updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Sorry!! password update fail.Old password didnot match.');
            }
        }
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    function compressImage($source, $destination, $quality,$imgx=NULL,$imgy=NULL) {

  $source_properties = getimagesize($source);

  if ($source_properties['mime'] == 'image/jpeg') 
    $image_resource_id = imagecreatefromjpeg($source);

  elseif ($source_properties['mime'] == 'image/gif') 
    $image_resource_id = imagecreatefromgif($source);

  elseif ($source_properties['mime'] == 'image/png') 
    $image_resource_id = imagecreatefrompng($source);

  if($imgx && $imgy){
  $target_layer = $this->fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
    imagejpeg($target_layer, $destination, $quality); 
  }else{
    imagejpeg($image_resource_id, '../storage/app/public/', $quality);
  }
  

}
function fn_resize($image_resource_id,$width,$height) {
$target_width =200;
$target_height =200;
$target_layer=imagecreatetruecolor($target_width,$target_height);
imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
return $target_layer;
}

}
