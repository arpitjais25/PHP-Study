<?php
namespace Oops_in_php\FILE_SuperGloble;
class FileConrtoller{
    public static function form(){
        echo'
        <form action="/arpitPHP/phpstudy/oops_in_php/16_FILE_SuperGloble/formSubmit" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit">
        </form>
        ';
        

    }
    public static function formSubmit(){
        // echo "<pre>_file_superGloble-><br>";
        print_r($_FILES);
        // print_r($_SERVER);
        //// Attribute of file super global------
        echo "image name-";
        print_r($_FILES['image']['name']);
        echo "<br>";
        echo "image full_path -";
        print_r($_FILES['image']['full_path']);
        echo "<br>";
        echo "image type-";
        print_r($_FILES['image']['type']);
        echo "<br>";
        echo "image tmp_name -";
        print_r($_FILES['image']['tmp_name']);
        echo "<br>";
        echo "image size-";
        print_r($_FILES['image']['size']);
        echo "<br>";
        echo "image error-";
        print_r($_FILES['image']['error']);
        echo "<br>";

        //moving in to our folder--
        $filePath= __DIR__.'./FileStorage';
       
        move_uploaded_file($_FILES['image']['tmp_name'],$filePath.'/'.$_FILES['image']['name']);
    }
}