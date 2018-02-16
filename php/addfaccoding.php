<?php
        $Conn=mysqli_connect('localhost','root','');
        if($Conn)
        {
            echo'not conected to server';
        }
        else
        {
            echo nl2br("\n connected");
         }



    $sql = "CREATE TABLE sem1 (sub VARCHAR(50)";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }else {
            echo  nl2br("\n not inserted");
        }



if(!mysqli_select_db($Conn,'EEE'))
        {
            echo'cant connect to db EEE';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to EEE"); 
        }
        
        $sql = "CREATE TABLE sem1 (sub VARCHAR(50)";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n sem1 inserted");
        }else {
            echo  nl2br("\n not inserted");
        }

    

/*if(!mysqli_select_db($Conn,'ECE'))
        {
            echo'cant connect to db ECE';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to ECE"); 
        }
        $sql = "CREATE TABLE facultyname (HOD FLOAT(5,2))";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }
if(!mysqli_select_db($Conn,'MECH'))
        {
            echo'cant connect to db MECH';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to MECH"); 
        }
        $sql = "CREATE TABLE facultyname (HOD FLOAT(5,2))";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }
if(!mysqli_select_db($Conn,'MCA'))
        {
            echo'cant connect to db MCA';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to MCA"); 
        }
        $sql = "CREATE TABLE facultyname (HOD FLOAT(5,2))";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }
if(!mysqli_select_db($Conn,'CSE'))
        {
            echo'cant connect to db CSE';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to CSE"); 
        }
        $sql = "CREATE TABLE facultyname (HOD FLOAT(5,2))";
        $equ=mysqli_query($Conn,$sql);
        if($equ)
        {
            echo nl2br("\n  inserted");
        }
if(!mysqli_select_db($Conn,'CHEM'))
        {
            echo'cant connect to db CHEM';
            echo nl2br("\n");
        }
        else
        {
            echo nl2br("\n connected to CHEM"); 
        }
        $sql = "CREATE TABLE facultyname (HOD FLOAT(5,2))";
        $equ=mysqli_query($Conn,$sql);

        if($equ)
        {
            echo nl2br("\n  inserted");
        }*/
        ?>

