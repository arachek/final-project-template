<?php
namespace app\controllers;


$conn = new PDO("mysql:host='local host'; dbname=finalProject", 'root','root');
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
class signUpController extends Controller
{
    public function signUP()
    {
        if(isset($_POST['save-contact']))
        {
            print_r($_POST);
            $sql = "INSERT INTO contacts(name, phone, email) VALUES('".$_POST['name']."', '".$_POST['phone']."','".$_POST['email']."')";
            $conn -> query($sql);
        }

    }
}
