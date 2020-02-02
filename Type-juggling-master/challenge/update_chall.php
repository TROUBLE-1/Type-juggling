<?php 
   include('update_chall_values.php');
   $addslashes   = 'trim'; 
   
   if (isset($_REQUEST['e'], $_REQUEST['id'], $_REQUEST['m'])) { 
            $id = intval($_REQUEST['id']); 
            $m  = $_REQUEST['m']; 
            $e  = $_REQUEST['e']; 
               
       if(strpos($e, '@') !== false){
   
               if ($date != '') {     
                   $code = substr(md5($e . $date . $id), 0, 10); 
                            if ($code == $m) { 
                                 echo "<center style='color:blue'><h3>Email address has been updated<h3>";
                                 $emailid = 'dsf';
                                 echo "<script>document.getElementById('emailid').innerHTML = 'Id: $e';</script>";
                                       
                                    exit; 
                            } else { 
                                    echo "<center style='color:red'><h3>wrong code<h3>";
                              } 
                    }
           
       }else {
           echo "<center style='color:red'><h3>Bad email id!<h3>";
       }
       
   }
   ?>