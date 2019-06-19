
<html>
         <head>
             <title>welcome to php</title>
         </head>
        <body>
            <div>
 <?php 
       if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        require_once('inc.php');
           require_once('database.php');
          $stud=new student();
         $stud->setname($_POST['name_txt']);
         $stud->setuname($_POST['username_txt']);
         $stud->setpassword($_POST['password_txt']);
         $stud->setcpassword($_POST['cpassword_txt']);
        $stud->setemail($_POST['email_txt']);
        $stud->setage($_POST['age_txt']);
           $db=new database();
           $connections=$db->connection();
           
           $stud->savetodb($connections);
           
        }
?>            
                <form action="" method="POST">
                    <div >
                    <label>Enter ur name</label> 
                        <input type="text" name="name_txt">
                    </div>
                <div>
                    <label>Enter ur username</label> 
                        <input type="text" name="username_txt">
                    </div>
                    
                     <div>
                    <label>Enter ur age</label> 
                        <input type="text" name="age_txt">
                    </div>
                     <div>
                    <label>Enter ur email</label> 
                        <input type="text" name="email_txt">
                    </div>
                <div>
                    <label>Enter ur password</label> 
                        <input type="password" name="password_txt">
                    </div>
                    <div>
                    <label>confirm ur password</label> 
                        <input type="cpassword" name="cpassword_txt">
                    </div>
              
              
                  <div>
                    <label>submit</label> 
                       <input type="submit" name="register">
                    </div>
                </form>
                
            </div>
        </body>
</html>