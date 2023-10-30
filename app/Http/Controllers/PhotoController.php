<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mymodel;
use App\Models\ImageModel;
use App\Models\AboutInfomodel;
use App\Models\AboutSlidermodel;
use App\Models\ServicePricemodel;
use App\Models\ContactFormmodel;
use App\Models\GalleryNameDescmodel;
use App\Models\GalleryImagemodel;





class PhotoController extends Controller
{
    public function index()
    {
        $data['photography']=Mymodel::All();
        $data['images']=ImageModel::All();
        
        
        echo view('user/header');
        echo view('user/index',$data);
        echo view('user/footer');
    }
    public function about()
    {
        $data['about_info']=AboutInfomodel::All();
        $data['about_slider']=AboutSlidermodel::All();

        echo view('user/header');
        echo view('user/about',$data);
        echo view('user/footer');
    }
     public function services()
    {
        $data['about_slider']=AboutSlidermodel::All();
        $data['service_price']=ServicePricemodel::All();

        echo view('user/header');
        echo view('user/services',$data);
        echo view('user/footer');
    }
     public function contact()
    {
        $data['about_info']=AboutInfomodel::All();

        echo view('user/header');
        echo view('user/contact',$data);
        echo view('user/footer');
    }
     public function gallery(Request $request)
    {
        $data['gallery_name_desc']=GalleryNameDescmodel::All();

        $search=$request['search']?? "";

        if($search !="")
        {
            $data['gallery_image']=GalleryImagemodel::where('gallery_image','LIKE',"%$search%")->get();
        }
        else{
        $data['gallery_image']=GalleryImagemodel::All();
        }
          
        echo view('user/header');
        echo view('user/gallery',$data);
        echo view('user/footer');
    }
    public function save_contact()
    {
      print_r($_POST);
       $user=new ContactFormmodel;
         $user->contact_name=$_POST['contact_name'];
         $user->contact_email=$_POST['contact_email'];
         $user->contact_subject=$_POST['contact_subject'];
         $user->contact_message=$_POST['contact_message'];
        $user->save();
      
      
          return redirect('/contact');
    }
    
}
