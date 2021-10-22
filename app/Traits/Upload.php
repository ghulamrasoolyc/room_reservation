<?php
namespace App\Traits;

trait Upload
{
    protected function uploadImage($image, $upload_path , $image_name=''){
        if (!file_exists($upload_path)) {
            mkdir($upload_path, 0777, true);
        }
        // dd($image);
        if($image)
        {
            if ($image_name=='') {
                $image_name = rand().'.'.$image->extension();
            }else{
                $image_name = $image_name.'.'.$image->extension();
            }
            $check_move = $image->move($upload_path,$image_name);
            if($check_move){
                return $upload_path.$image_name;
            }else{
                return false;
            }
            
        }else{
            return false;
        }
    }
}