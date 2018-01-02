<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 02-Jan-18
 * Time: 11:05 AM
 */

namespace App\classes;


class Student
{
    function saveStudentInfo($data){
        $link = mysqli_connect('localhost','root', '', 'ahashan');
        $sql = "INSERT INTO students (name, email, mobile) VALUES('$data[name]', '$data[email]', '$data[mobile]')";

       if(mysqli_query($link, $sql)){
           $massage = "Student info save successfully!";
           return $massage;
       } else{
           die('Query problem'.mysql_error($link));
       }
    }

    function getAllStudentInfo(){
        $link = mysqli_connect('localhost','root', '', 'ahashan');
        $sql = "SELECT * FROM students";
        if(mysqli_query($link, $sql)){
            $query_result = mysqli_query($link, $sql);
            return $query_result;
        } else{
            die('Query problem'.mysql_error($link));
        }
    }
}