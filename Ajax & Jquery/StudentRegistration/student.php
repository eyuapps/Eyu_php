<?php
        $stuID =$_POST['stuID'];
        $fname =$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $sex=$_POST['sex'];
        $batch=$_POST['batch'];
        $dept=$_POST['dept'];
        $host="localhost";
        $user="root";
        $password="";
        $database="school of computing DB";
        $conn= new mysqli($host,$user,$password,$database);
        if($conn->connect_error) {
            die("h3 style='color:red'> not connected: . $->sconn_error ."</h3>");
             }
            else {
            echo"<h3 style='color:green;'>connected succeessfully to school of computing DB
        </h3>";
        }
        $conn->close();
      ?>