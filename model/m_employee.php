<?php
    //function get data and return and array()

    function m_get_data()
    {
        $query = "select * from employee";
        include_once "conncection.php"; 
        $result = mysqli_query($connection,$query);//run query
        $rows =[];
        if ($result && mysqli_num_rows($result)>0){
            while ($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)) //fetch data into array
            {
                $rows[]=$get_result_to_array;
            }
        }
        return $rows;
    }
    function m_delete_employee(){
        include_once 'conncection.php';
        $id=$_GET['id'];
        $query = "DELETE FROM employee WHERE id='$id'";
        $result= mysqli_query($connection,$query);
        return $result;
    }

    function m_add_employee(){
    include_once "conncection.php";
        if(isset($_POST['btn-user'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
       
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        $query = "INSERT INTO employee(firstname,lastname,title,age,salary) values ('$fname','$lname','$title','$age','$salary')";
       
        $data=mysqli_query($connection,$query);
        if($data){
            header("location:index.php");
        }else{
            echo "can not insert";
        }
         
    }
}

function m_update_employee(){
    include_once "conncection.php";
    $id=$_GET['id'];
    if(isset($_POST['btn-user'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        $query = "UPDATE employee SET firstname='$fname',lastname='$lname',age='$age',salry='$salary' WHERE id='$id";
        $result= mysqli_query($connection,$query);
    }
    return $result;    
}

function  m_employee_detail(){
    include_once "conncection.php";
    $id=$_GET['id'];
    $query="SELECT * FROM employee  where id='$id' "; 
    $result = mysqli_query($connection,$query);
    return $result;
   
}
function validateFromDb(){
    
include "conncection.php";
if(isset($_POST['btn_submit'])){

    $uname = mysqli_real_escape_string($connection,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($connection,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connection,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php?action=view');
        }else{
            header('Location: index.php?action=login');
        }

    }

}

}
function  logoutForm(){
    include_once "conncection.php";
    if(isset($_POST['btn_logout'])){
        session_destroy();
        header('Location: index.php');
    }
}
function  registerFormDb(){
    include_once "connection.php";
    if(isset($_POST['register'])){
        seeion_destroy();
        header('Location:registerForm.php');
    }
}
function formRegister(){
    include_once "conncection.php";
        if(isset($_POST['btn_submit'])){
        $username=$_POST['txt_uname'];
        $password=$_POST['txt_pwd'];
       $query = "INSERT INTO user(username,password) values ('$username','$password')";
       
        $data=mysqli_query($connection,$query);
        if($data){
            header("location:index.php");
        }else{
            echo "can not insert";
        }
         
    }
}


    
    

    