<?php

class adminBack{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "img";

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$this->conn){
            die("Database Connection Error!");
        }
    }

    function upload_image($data){
        $title = $data['title'];
        $img_name = $_FILES['files']['name'];
        $tmp_name = $_FILES['files']['tmp_name'];
         $size = $_FILES['files']['size'];
         $ext = pathinfo($img_name,PATHINFO_EXTENSION);

         if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {

if ($size <= 2097152) {
$query = "INSERT INTO info(title,img_name ) VALUES('$title','$img_name')";
    if (mysqli_query($this->conn,$query)) {
 move_uploaded_file($tmp_name, 'uploads/'.$img_name);
 $msg = "Your image uploaded successfully.";
 return $msg;

                }
            }
            else
            {
                $msg = "Your image should be Less or equal 2Mb";
                return $msg;
            }
           
         }
         else
         {
            $msg = "Your file is not vailed! Please upload jpg/png";
            return $msg;
         }


    }
    function display_image(){
        $query = "SELECT * FROM info";
        if (mysqli_query($this->conn,$query)) {
            $image_info= mysqli_query($this->conn,$query);
            return $image_info;
        }
    }

}

?>