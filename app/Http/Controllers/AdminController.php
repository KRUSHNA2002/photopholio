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
use App\Models\Resumemodel;


class AdminController extends Controller
{
    protected function ov($filename, $data = "")
    {
        if($data == "")
        {
            $data=[];
        }

        if(session()->get('mobile'))
        {
            echo view('admin/header');
            echo view("admin/" . $filename, $data);
            echo view('admin/footer');
        }
    }

    public function index()
    {
        
        echo view("/admin/login_page");
        
    }
     public function save_user_resistration()
   {
      $resume=new Resumemodel;

      $resume->name=$_POST['name'];
      $resume->mobile=$_POST['mobile'];
      $resume->password=$_POST['password'];
      $resume->save();

       return redirect('/admin');
   }
   public function save_user_login()
   {
         $cond=['mobile'=>$_POST['mobile'],'password'=>$_POST['password']];
            $data=Resumemodel::where($cond)->get()->toArray();
          
          if(!($data)=="")
          {
            session()->put('mobile',$data[0]['mobile']);
            // session()->put('name',$data['name']);
            session()->put('password',$data[0]['password']);

            return redirect("/admin/home");
           
          }
          else
          {
             return redirect('/admin');

          }
        // echo session::get('name');
        //  print_r(session()->all());
   }
    public function home()
    {
        $data['photography']=Mymodel::All();
        $this->ov('edit_photography',$data);

        //print_r(session()->all());
    }
    public function save_name_title()
    {
        print_r($_POST);
        $user=new Mymodel;
        $user->name=$_POST['name'];
        $user->title=$_POST['title'];
        $user->save();
        return redirect('/admin');

    }
    public function edit_photography()
    {
        $data['photography']=Mymodel::All();
        $this->ov('edit_photography',$data);

    }
    public function save_edited_name_title($id)
    {
        $user=Mymodel::find($id);
        $user->name=$_POST['name'];
        $user->title=$_POST['title'];
        $user->save();

        return redirect('/admin');
    }
    public function upload_photo()
    {
        $data['images']=ImageModel::All();

        $this->ov('upload_photo',$data);
    }
    
    public function save_upload_photo()
    {
    if($_FILES['image']!=""){
        echo $file_name=time().$_FILES['image']['name'];
       move_uploaded_file($_FILES['image']['tmp_name'],"images/".$file_name);
       $_POST['images']=$file_name;

      
       $user=new ImageModel;

       $user->image=$_POST['images'];

       $user->save();

      return redirect("admin/upload_photo");
    }
    }

    public function delete($id)
    {
        ImageModel::find($id)->delete();

        return redirect('/admin/upload_photo');
    }

    public function about()
    {

        $data['about_info']=AboutInfomodel::All();

        $this->ov('edit_about_info',$data);
    }
    public function save_about_info()
    {
    //     if($_FILES['about_image']!=""){
    //     echo $file_name=time().$_FILES['about_image']['name'];
    //    move_uploaded_file($_FILES['about_image']['tmp_name'],"images/".$file_name);
    //    $_POST['about_image']=$file_name;

    //     $user=new AboutInfomodel;
    //     $user->about_name=$_POST['about_name'];
    //     $user->about_title=$_POST['about_title'];
    //     $user->about_dob=$_POST['about_dob'];
    //     $user->about_website=$_POST['about_website'];
    //     $user->about_age=$_POST['about_age'];
    //     $user->about_email=$_POST['about_email'];
    //     $user->about_mobile=$_POST['about_mobile'];
    //     $user->about_city=$_POST['about_city'];
    //     $user->about_image=$_POST['about_image'];
    //     $user->about_desc=$_POST['about_desc'];
    //     $user->save();
    //     return redirect('admin/about');


    // }    
    }
    public function edit_about_info()
    {
        $data['about_info']=AboutInfomodel::All();
        $data['about_slider']=AboutSlidermodel::All();


        $this->ov('edit_about_info',$data);
    }
    public function save_edit_about_info($id)
    {
        if($_FILES['about_image']!=""){
         $file_name=time().$_FILES['about_image']['name'];
       move_uploaded_file($_FILES['about_image']['tmp_name'],"images/".$file_name);
       $_POST['about_image']=$file_name;

          $user=AboutInfomodel::find($id);

        $user->about_name=$_POST['about_name'];
        $user->about_title=$_POST['about_title'];
        $user->about_dob=$_POST['about_dob'];
        $user->about_website=$_POST['about_website'];
        $user->about_age=$_POST['about_age'];
        $user->about_email=$_POST['about_email'];
        $user->about_mobile=$_POST['about_mobile'];
        $user->about_city=$_POST['about_city'];
        $user->about_image=$_POST['about_image'];
        $user->about_desc=$_POST['about_desc'];

        $user->save();

         return redirect('admin/edit_about_info');

    }

    }
    public function about_slider()
    {
         $data['about_slider']=AboutSlidermodel::All();

        $this->ov('about_slider',$data);
    }
    public function save_about_slider()
    {
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);

         if($_FILES['slider_image']!=""){
         echo $file_name=time().$_FILES['slider_image']['name'];
        move_uploaded_file($_FILES['slider_image']['tmp_name'],"images/".$file_name);
        $_POST['slider_image']=$file_name;

         $user=new AboutSlidermodel;
         $user->slider_name=$_POST['slider_name'];
         $user->slider_desc=$_POST['slider_desc'];
         $user->slider_ceo=$_POST['slider_ceo'];
         $user->slider_image=$_POST['slider_image'];
        $user->save();

         return redirect('admin/about_slider');
    }
    }
    public function save_about_slider_delete($id)
    {
         AboutSlidermodel::find($id)->delete();

        return redirect('/admin/about_slider');
    }

    public function service_price()
    {
        $data['service_price']=ServicePricemodel::All();
        $this->ov('service_price',$data);
    }
    public function save_service_price()
    {
        print_r($_POST);
        $user=new ServicePricemodel;
        $user->photo_type=$_POST['photo_type'];
        $user->photo_price=$_POST['photo_price'];
        $user->save();

        return redirect('/admin/service_price');
    }
    public function save_service_price_delete($id)
    {
        ServicePricemodel::find($id)->delete();

        return redirect('/admin/service_price');
    }
    public function contact_form()
    {
        $data['contact_form']=ContactFormmodel::All();
        
        $this->ov("contact_form",$data);

    }
     public function contact_form_delete($id)
    {
        ContactFormmodel::find($id)->delete();
        return redirect('/admin/contact_form');

    }
    public function gallery_name_desc()
    {
        $data['gallery_name_desc']=GalleryNameDescmodel::All();
        $data['gallery_image']=GalleryImagemodel::All();

        $this->ov("edit_gallery_name_desc",$data);
       // $this->ov("upload_gallery_image",$data);


    }
    public function save_gallery_name_desc()
    {
        print_r($_POST);
        // $user=new GalleryNameDescmodel;
        // $user->gallery_name=$_POST['gallery_name'];
        // $user->gallery_desc=$_POST['gallery_desc'];
        // $user->save();
    }
    public function edit_gallery_name_desc()
    {
        $data['gallery_name_desc']=GalleryNameDescmodel::All();

        $this->ov("edit_gallery_name_desc",$data);
    }
   public function update_gallery_name_desc($id)
   {
       $user=GalleryNameDescmodel::find($id);
        $user->gallery_name=$_POST['gallery_name'];
        $user->gallery_desc=$_POST['gallery_desc'];
        $user->save();

        return redirect('/admin/gallery_name_desc');
   }

   public function upload_gallery_image()
   {
        $data['gallery_image']=GalleryImagemodel::All();

        $this->ov("upload_gallery_image",$data);
   }
   public function save_upload_gallery_image()
   {
        if($_FILES['gallery_image']!=""){
        echo $file_name=time().$_FILES['gallery_image']['name'];
        move_uploaded_file($_FILES['gallery_image']['tmp_name'],"images/".$file_name);
        $_POST['gallery_image']=$file_name;

        $user=new GalleryImagemodel;
        $user->gallery_image=$_POST['gallery_image'];
        $user->save();
        return redirect('admin/gallery_name_desc');

   }
   }
   public function delete_upload_gallery_image($id)
   {
         GalleryImagemodel::find($id)->delete();
        return redirect('admin/gallery_name_desc');
         
   }
   public function destroy()
   {
     session()->flush();
     return redirect('/admin');

   }

}
