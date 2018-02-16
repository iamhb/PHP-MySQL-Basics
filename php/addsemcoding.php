<?php
        $Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
        {
            echo'not conected to server';
        }
        else
        {
            echo nl2br("\n connected");
         }
        if(!mysqli_select_db($Conn,'CHEM'))
        {
            echo'cant connect to db';
        }
        else
        {
            echo nl2br("\n connected to CHEM"); 
        }

         $qname1= "ALTER TABLE sem1 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem1 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem1 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem1 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }

         $qname1= "ALTER TABLE sem2 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem2 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem2 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem2 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem3 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem3 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem3 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem3 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem4 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem4 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem4 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\nsem4 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem5 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem5 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem5 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\nsem5 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem6 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem6 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem6 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem6 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem7 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem7 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem7 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem7 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
        $qname1= "ALTER TABLE sem8 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem8 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem8 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n sem8 altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
         /*  $qname1= "ALTER TABLE sem2 ADD subname VARCHAR(50)";
            $equ1=mysqli_query($Conn,$qname1);

         $qname2= "ALTER TABLE sem2 ADD subcode VARCHAR(9)";
            $equ2=mysqli_query($Conn,$qname2);

        $qname3="ALTER TABLE sem2 DROP sub";
            $equ3=mysqli_query($Conn,$qname3);

            if(($equ1)and($equ2)and($equ3))
            {
                echo nl2br("\n altered");
            }
            else
            {
                echo nl2br("\n not altered");
            }
       
       */




        ?>