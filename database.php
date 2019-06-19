<?php
     class database{
         public  function connection()
        {
            return mysqli_connect("localhost","root","","com_db");
        }
     }
?>