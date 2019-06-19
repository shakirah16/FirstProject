 <?php
    class student{
        
         private $name;
         private $username;
        private $age;
         private $password;
        private $cpassword;
        private $email;
         function savetodb($connection)
         {
             $name=$this->name;
              $username=$this->username;
              $age=$this->age;
              $email=$this->email;
              $password=$this->password;
              $cpassword=$this->cpassword;
             $query="INSERT INTO users VALUES(NULL,'$name','$username','$age','$email','$password','$cpassword')";
             mysqli_query($connection,$query);
             echo"data entered sucessfully";
         }
        function setname($name)
        {
            if(empty($name))
            {
                echo "<span class='error'>*name is required </span>"."<br>";
            }
            else
                $this->name=$name;
        }
        function getname()
        {
            return $this->name;
        }
         function setuname($uname)
        {
            if(empty($uname))
            {
                echo "<span class='error'>*username is required</span>"."<br>";
            }
            else
                $this->username=$uname;
        }
        
    
        function getuname()
        {
            return $this->uname;
        }
         function setage($age)
            {
            if(($age)>18)
            
                 $this->age=$age;
             
            else
                echo "<span class='error'>*write valid age </span>"."<br>";
               
        }
        function getage()
        {
            return $this->age;
        }
         function setemail($email)
        {
            if(empty($email))
            
                echo "<span class='error'>*please write ur email</span>"."<br>";
            
             else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                echo "<span class='error'>*invalid email format</span>"."<br>"; 
             
            else
                $this->email=$email;
            
        }
        function getemail()
        {
            return $this->email;
        }
         function setpassword($password)
        {
            if(empty($password))
            {
                echo "<span class='error'>*password is required</span>"."<br>";
            }
            else
                $this->password=$password;
        }
        
    
        function getpassword()
        {
            return $this->password;
        }
         function setcpassword($cpassword)
        {
            if(empty($cpassword))
            
                echo "<span class='error'>*plz confirm password</span>"."<br>";
            
             
             else if($cpassword!=$this->password)
                echo "<span class='error'>*password mismatch</span>"."<br>"; 
             
             
            else
                $this->cpassword=$cpassword;
        }
        
        
    
        function getcpassword()
        {
            return $this->cpassword;
        }
    }
?>