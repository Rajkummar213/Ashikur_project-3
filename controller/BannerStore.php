<?php
$heading = $_REQUEST['title'];
$sub_heading = $_REQUEST['sub_heading'];
$cta_btn_one = $_REQUEST['cta_btn_one'];
$cta_btn_one_link = $_REQUEST['cta_btn_one_link'];
$cta_btn_two = $_REQUEST['cta_btn_two'];
$cta_btn_two_link = $_REQUEST['cta_btn_two_link'];
$details =$_REQUEST['details'];
$featured =$_FILES['featured'];
$extension = pathInfo($featured['name'])['extension'] ?? null;
$id = $_REQUEST['id'];
$prevImg = $_REQUEST['prev_img'];
include_once "../database/env.php";
// validotions
$errors = [];
$acceptedExtensions = ['jpg','png'];

if (empty($title)){
    $errors['title'] = 'Title is required';
}

if (empty($sub_heading)){
    $errors['sub_heading'] = 'sub headingis required';
}

if(empty($cta_btn_one) && isset( $cta_btn_one_link)){
    $errors['cta_btn_one'] = 'Button one is required';
}

if(empty($cta_btn_two) && isset( $cta_btn_two_link)){
    $errors['cta_btn_two'] = 'Button two is required';
}


if($featured['size'] == 0 && !$id){
    $errors['featured_image'] = 'featured image is required';
} else if(!in_array($extension, $acceptedExtensions)){
    $errors['featured_image'] = "Accepted types are jpg,png";
} else if(($featured['size'] / 1024) > 500){
     $errors['featured_image'] = "Please add a image under 500kb";
   
}


if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("Location: ../dashboard/banner.php");
} else{
    $path = '../uploads/banner';
    if(!file_exists($path)){
    mkdir($path);
    }
    $isUploaded = false;
    if ($extension){
    // remove old photo
    if(!empty($prevImg) && file_exists("$path/$prevImg")){
        unlink("path/$prevImg");
    }

    $fileName = "Banner-image-" . uniqid() . ".$extension";
    $from = $featured['tmp_name'];
    $to = "$path/$fileName";
    $isUploaded = move_uploaded_file($from, $to);
    } 
    if($isUploaded || $id){
        if (!$id){
       $query = "INSERT INTO banners( heading, sub_heading, datelis, cta_btn_one, cta_btn_one_link, cta_btn_two, cta_btn_two_link, featured) VALUES ('$title','$sub_heading','$datelis','$cta_btn_one','$cta_btn_one_link','$cta_btn_two','$cta_btn_two_link','$fileName',)";
    } else{
        if ($extension){
        $query = "UPDATE banners SET heading='$title',sub_heading='$sub_heading',datelis='$datelis',cta_btn_one='$cta_btn_one',cta_btn_one_link='$cta_btn_one_link',cta_btn_two='$cta_btn_two',cta_btn_two_link='$cta_btn_two_link',featured='$fileName' WHERE id='$id'";
       } else{

     $query = "UPDATE banners SET heading='$title',sub_heading='$sub_heading',datelis='$datelis',cta_btn_one='$cta_btn_one',cta_btn_one_link='$cta_btn_one_link',cta_btn_two='$cta_btn_two',cta_btn_two_link='$cta_btn_two_link', WHERE id='$id'";
       }
    }
        $res = mysqli_query($conn, $query);
        if($res){
            header("Location: ../dashboard/banner.php");
        }


    }

}

