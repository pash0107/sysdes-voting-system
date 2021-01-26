<?php

    $voters = new Datavoter();
    if(isset($_GET['q'])){
        $voters->$_GET['q']();
    }
    class Datavoter {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //get all student info
        function getvoter($search){
            $q = "select * from `voters`.`voters` where name like '%$search%' or v_id like '%$search%' or VPN like '%$search%' order by name,v_id,VPN";
            $r = mysql_query($q);
            
            return $r;
        }
        
        //get class by ID
        function getvoterbyname($name){
            $q = "select * from `voters`.`voters` where name=$name";
            $r = mysql_query($q);
            
            return $r;
        }
        //add class
        /*function addstudent(){
            include('../../config.php');
            $studid = $_POST['studid'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            
            $q = "insert into student values('','$studid','$fname','$lname')";
            mysql_query($q);
            header('location:../studentlist.php?r=added');
        }
        
        //update class
        function updatestudent(){
            include('../../config.php');
            $id = $_GET['id'];
            $studid = $_POST['studid'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $q = "update student set studid='$studid', fname='$fname', lname='$lname' where id=$id";
            mysql_query($q);
            header('location:../studentlist.php?r=updated');
        }
        //remove from class
        function removesubject(){
            include('../../config.php');
            $studid = $_GET['studid'];
            $classid = $_GET['classid'];
            mysql_query("delete from studentsubject where studid=$studid and classid=$classid");
            header('location:../studentsubject.php?id='.$studid.'');
        }*/
    }
?>