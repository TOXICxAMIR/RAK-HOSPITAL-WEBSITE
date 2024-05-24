<?php

require_once('cons.php');
function get_doc_details(){
	global $conn;
     $sql = "SELECT * FROM doctors";
     $result = mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
     	 $fullname =  $row['fullname'];
       $speciality = $row['speciality'];
       $email = $row['email'];
	     $phone_number = $row['phone_number'];
       $profile = $row['profile'];
      //  $image =   $row['image']; 
	     echo "<tr>

      <td>$id</td>
      <td>$fullname</td>
      <td>$speciality</td>
      <td>$email</td>
      <td>$phone_number</td>
      <td>$profile</td>  
        
    </tr>";
     }
}
   function search_doc_details(){
    global $conn;
    if(isset($_POST['search'])){

    $email = $_POST['search'];
    $sql = "SELECT * FROM doctors WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
      $id=$row['id']; 
      $fullname=$row['fullname'];
      $speciality=$row['speciality'];
      $email=$row['email'];
      $phone_number=$row['phone_number'];
      $profile=$row['profile'];
      // $image=$row['image'];

      echo "<tr>
      <td>$id</td>
      <td>$fullname</td>
      <td>$speciality</td>
      <td>$email</td>
      <td>$phone_number</td>
      <td>$profile</td>
       </tr>";
    }
   
    }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }

    function get_patient_details(){
      global $conn;
         $sql = "SELECT * FROM patient";
         $result = mysqli_query($conn, $sql);
         while ($row=mysqli_fetch_array($result)) {
           $id =  $row['id'];
           $rak_no =  $row['rak_no'];
           $fullname =  $row['fullname'];
           $phone_number = $row['phone_number'];
           $email = $row['email'];
           $address = $row['address'];
           $gender = $row['gender'];
           $password = $row['password'];
          //  $image =   $row['image']; 
           echo "<tr>
    
          <td>$id</td>
          <td>$rak_no</td>
          <td>$fullname</td>
          <td>$phone_number</td>
          <td>$email</td>
          <td>$address</td>
          <td>$gender</td>  
          <td>$password</td>  
            
        </tr>";
         }
    }

    function search_patient_details(){
    global $conn;
    if(isset($_POST['search'])){

    $id = $_POST['search'];
    $sql = "SELECT * FROM report WHERE patient_no = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $patient_no =  $row['patient_no'];
       $doctor_name = $row['doctor_name'];
       $diagnosis = $row['diagnosis'];
       $psyc_status = $row['psyc_status'];
       $chronic_disease = $row['chronic_disease'];
       $medications = $row['medications'];
       $advice = $row['advice'];
       $date = $row['date'];
      

       echo "<tr>
      <td>$id</td>
      <td>$patient_no</td>
      <td>$doctor_name</td>
      <td>$diagnosis</td>
      <td>$psyc_status</td>
      <td>$chronic_disease</td>
      <td>$medications</td>
      <td>$advice</td>
      <td>$date</td>  
    </tr>";
    }
   
    }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }

    function view_appointment(){
  global $conn;
  require('doctorvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
     $sql = "SELECT * FROM appointment WHERE doctor_name  like '%$var1%'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $patient_no =  $row['patient_no'];
       $doctor_speciality =  $row['doctor_speciality'];
       $doctor_name = $row['doctor_name'];
       $appdate = $row['appdate'];
       $apptime = $row['apptime'];
       $symptoms = $row['symptoms'];
       $date_registered = $row['date_registered'];
       echo "<tr>
      
      <td>$id</td>
      <td>$patient_no</td>
      <td>$doctor_speciality</td>  
      <td>$doctor_name</td>
      <td>$appdate</td>
      <td>$apptime</td>
      <td>$symptoms</td>
      <td>$date_registered</td>

    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctorpanel.php', '_self')</script>";
    }
  }

   function view_all_appointment(){
  global $conn;
  //require('doctorvalidate.php');
    // $var1 ='';
     //$var1 = $_SESSION['name'];
     $sql = "SELECT * FROM appointment ";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
     while ($row=mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $patient_no =  $row['patient_no'];
      $doctor_speciality =  $row['doctor_speciality'];
      $doctor_name = $row['doctor_name'];
      $appdate = $row['appdate'];
      $apptime = $row['apptime'];
      $symptoms = $row['symptoms'];
      $date_registered = $row['date_registered'];
       echo "<tr>
      
       <td>$id</td>
       <td>$patient_no</td>
       <td>$doctor_speciality</td>  
       <td>$doctor_name</td>
       <td>$appdate</td>
       <td>$apptime</td>
       <td>$symptoms</td>
       <td>$date_registered</td>
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctorpanel.php', '_self')</script>";
    }
  }

  function patient_appointment(){
    global $conn;
    require('patientvalidate.php');
       $var1 ='';
       $var1 = $_SESSION['id'];
       $sql = "SELECT * FROM appointment WHERE patient_no = '$var1' ";
       $result = mysqli_query($conn, $sql);
       $final = mysqli_num_rows($result);
       if($final > 0){
       while ($row=mysqli_fetch_array($result)) {
        $id =  $row['id'];
        $patient_no =  $row['patient_no'];
        $doctor_speciality =  $row['doctor_speciality'];
        $doctor_name = $row['doctor_name'];
        $appdate = $row['appdate'];
        $apptime = $row['apptime'];
        $symptoms = $row['symptoms'];
        $date_registered = $row['date_registered'];
         echo "<tr>
         
        <form method='post'>
         <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>  </td> 
         <td>$id</td>
         <td>$patient_no</td>
         <td>$doctor_speciality</td>  
         <td>$doctor_name</td>
         <td>$appdate</td> 
         <td>$apptime</td> 
         <td>$symptoms</td> 
         <td>$date_registered</td> 
        <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'>  </td> 
       </form>
      </tr>";
       }
  }else{
        echo "<script>alert('The record cant be found')</script>";
        //echo "<script>window.open('patientpanel.php', '_self')</script>";
      }
    }
  
    function delete_doctor(){
      global $conn;
      // require('doctorvalidate.php');
      $sql = "SELECT * FROM doctors ";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
      while ($row=mysqli_fetch_array($result)) {
          $id=$row['id']; 
          $fullname=$row['fullname'];
          $speciality=$row['speciality'];
          $email=$row['email'];
          $phone_number=$row['phone_number'];
          $profile=$row['profile'];
           echo "<tr>
           
          <form method='post'>
           <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>  </td> 
           <td>$id</td>
           <td>$fullname</td>
           <td>$speciality</td>
           <td>$email</td>
           <td>$phone_number</td>
           <td>$profile</td>
          <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'>  </td> 
         </form>
        </tr>";
         }
    }else{
          echo "<script>alert('The record cant be found')</script>";
          //echo "<script>window.open('patientpanel.php', '_self')</script>";
        }
      }

      function delete_patient(){
        global $conn;
        // require('doctorvalidate.php');
        $sql = "SELECT * FROM patient ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_array($result)) {
            $id=$row['id']; 
            $rak_no=$row['rak_no'];
            $fullname=$row['fullname'];
            $phone_number=$row['phone_number'];
            $email=$row['email'];
            $address=$row['address'];
            $gender=$row['gender'];
             echo "<tr>
             
            <form method='post'>
             <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>  </td> 
             <td>$id</td>
             <td>$rak_no</td>
             <td>$fullname</td>
             <td>$phone_number</td>
             <td>$email</td>
             <td>$address</td>
             <td>$gender</td>
            <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'>  </td> 
           </form>
          </tr>";
           }
      }else{
            echo "<script>alert('The record cant be found')</script>";
            //echo "<script>window.open('patientpanel.php', '_self')</script>";
          }
        }

        function delete_pharmacist(){
          global $conn;
          // require('doctorvalidate.php');
          $sql = "SELECT * FROM pharmacist ";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
          while ($row=mysqli_fetch_array($result)) {
              $id=$row['id']; 
              $fullname=$row['fullname'];
              $phone_number=$row['phone_number'];
              $email=$row['email'];
               echo "<tr>
               
              <form method='post'>
               <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>  </td> 
               <td>$id</td>
               <td>$fullname</td>
               <td>$phone_number</td>
               <td>$email</td>
              <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'>  </td> 
             </form>
            </tr>";
             }
        }else{
              echo "<script>alert('The record cant be found')</script>";
              //echo "<script>window.open('patientpanel.php', '_self')</script>";
            }
          }
    
  function patient_report(){
  global $conn;
  require('patientvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['id'];
     $sql = "SELECT * FROM report WHERE patient_no = '$var1' ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $patient_no =  $row['patient_no'];
       $doctor_name = $row['doctor_name'];
       $diagnosis = $row['diagnosis'];
       $psyc_status = $row['psyc_status'];
       $chronic_disease = $row['chronic_disease'];
       $medications = $row['medications'];
       $advice = $row['advice'];
       $date = $row['date'];
      

       echo "<tr>
      
      <td>$id</td>
      <td>$patient_no</td>
      <td>$doctor_name</td>
      <td>$diagnosis</td>
      <td>$psyc_status</td>
      <td>$chronic_disease</td>
      <td>$medications</td>
      <td>$advice</td>
      <td>$date</td>  
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }

  function doctorpatient_report(){
    global $conn;
    require('doctorvalidate.php');
       $var1 ='';
       $var1 = $_SESSION['name'];
       $sql = "SELECT * FROM report WHERE doctor_name = '$var1' ";
       $result = mysqli_query($conn, $sql);
       $final = mysqli_num_rows($result);
       if($final > 0){
       while ($row=mysqli_fetch_array($result)) {
         $id =  $row['id'];
         $patient_no =  $row['patient_no'];
         $doctor_name = $row['doctor_name'];
         $diagnosis = $row['diagnosis'];
         $psyc_status = $row['psyc_status'];
         $chronic_disease = $row['chronic_disease'];
         $medications = $row['medications'];
         $advice = $row['advice'];
         $date = $row['date'];
        
  
         echo "<tr>
        
        <td>$id</td>
        <td>$patient_no</td>
        <td>$doctor_name</td>
        <td>$diagnosis</td>
        <td>$psyc_status</td>
        <td>$chronic_disease</td>
        <td>$medications</td>
        <td>$advice</td>
        <td>$date</td>  
      </tr>";
       }
  }else{
        echo "<script>alert('The record cant be found')</script>";
        //echo "<script>window.open('patientpanel.php', '_self')</script>";
      }
    }
     
  function view_drug(){
  global $conn;
     $sql = "SELECT * FROM drug ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['name'];
       $barcode = $row['barcode'];
       $insured = $row['insured'];
       $status = $row['status'];
       $price = $row['price'];
       
             
       echo "<tr>
      <form method='post' action='drugupdate.php'>
       <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
      <td><input type='text' name='name' value='$name'  size='7'>  </td>
      <td><input type='number' name='barcode' value='$barcode'  size='5'>  </td>
      <td><input type='text' name='insured' value='$insured'  size='3'>  </td>
      <td><input type='text' name='status' value='$status'  size='8'>  </td>
      <td><input type='number' name='price' value='$price'  size='5'>  </td>
       <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
     </form>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
  
  function view_drug1(){
    global $conn;
       $sql = "SELECT * FROM drug ";
       $result = mysqli_query($conn, $sql);
       $final = mysqli_num_rows($result);
       if($final > 0){
       while ($row=mysqli_fetch_array($result)) {
         $id =  $row['id'];
         $name = $row['name'];
         $barcode = $row['barcode'];
         $insured = $row['insured'];
         $status = $row['status'];
         $price = $row['price'];
         
               
         echo "<tr>
        <form method='post' action='drugupdate.php'>
         <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
        <td><input type='text' name='name' value='$name'  size='7'>  </td>
        <td><input type='number' name='barcode' value='$barcode'  size='5'>  </td>
        <td><input type='text' name='insured' value='$insured'  size='3'>  </td>
        <td><input type='text' name='status' value='$status'  size='8'>  </td>
        <td><input type='number' name='price' value='$price'  size='5'>  </td>
       </form>
               
      </tr>";
       }
  }else{
        echo "<script>alert('The record cant be found')</script>";
        //echo "<script>window.open('patientpanel.php', '_self')</script>";
      }
    }

   function view_order(){
     global $conn;
     $sql = "SELECT * FROM orders ";
     $result = mysqli_query($conn, $sql);
    // $final = mysqli_num_rows($result);
     if($result){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['drug_name'];
       $quantity = $row['quantity'];
       $address = $row['address'];
       $patient = $row['patient'];
       $date = $row['date'];
             
       echo "<tr>
       
      <td>$id</td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>   
      
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  } 
  
  function update_doctor(){
    global $conn;
       $sql = "SELECT * FROM doctors ";
       $result = mysqli_query($conn, $sql);
       $final = mysqli_num_rows($result);
       if($final > 0){
       while ($row=mysqli_fetch_array($result)) {
         $id =  $row['id'];
         $fullname = $row['fullname'];
         $speciality = $row['speciality'];
         $email = $row['email'];
         $phone_number = $row['phone_number'];
         $profile = $row['profile'];
        //  $password = $row['password'];
         
               
         echo "<tr>
        <form method='post' action='doctorupdateadmin.php'>
         <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
        <td><input type='text' name='fullname' value='$fullname'  size='7'>  </td>
        <td><input type='text' name='speciality' value='$speciality'  size='5'>  </td>
        <td><input type='text' name='email' value='$email'  size='3'>  </td>
        <td><input type='text' name='phone_number' value='$phone_number'  size='8'>  </td>
        <td><input type='text' name='profile' value='$profile'  size='5'>  </td>
         <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
       </form>
               
      </tr>";
       }
  }else{
        echo "<script>alert('The record cant be found')</script>";
        //echo "<script>window.open('patientpanel.php', '_self')</script>";
      }
    }

    function update_patient(){
      global $conn;
         $sql = "SELECT * FROM patient ";
         $result = mysqli_query($conn, $sql);
         $final = mysqli_num_rows($result);
         if($final > 0){
         while ($row=mysqli_fetch_array($result)) {
           $id =  $row['id'];
           $rak_no =  $row['rak_no'];
           $fullname = $row['fullname'];
           $phone_number = $row['phone_number'];
           $email = $row['email'];
           $address = $row['address'];
           $gender = $row['gender'];
          //  $password = $row['password'];
           
                 
           echo "<tr>
          <form method='post' action='patientupdateadmin.php'>
           <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
          <td><input type='text' name='rak_no' value='$rak_no' size='3' readonly >  </td>
          <td><input type='text' name='fullname' value='$fullname'  size='7'>  </td>
          <td><input type='text' name='phone_number' value='$phone_number'  size='8'>  </td>
          <td><input type='text' name='email' value='$email'  size='3'>  </td>
          <td><input type='text' name='address' value='$address'  size='8'>  </td>
          <td><input type='text' name='gender' value='$gender'  size='5'>  </td>
           <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
         </form>
                 
        </tr>";
         }
    }else{
          echo "<script>alert('The record cant be found')</script>";
          //echo "<script>window.open('patientpanel.php', '_self')</script>";
        }
      }

      function update_pharmacist(){
        global $conn;
           $sql = "SELECT * FROM pharmacist ";
           $result = mysqli_query($conn, $sql);
           $final = mysqli_num_rows($result);
           if($final > 0){
           while ($row=mysqli_fetch_array($result)) {
             $id =  $row['id'];
             $fullname = $row['fullname'];
             $phone_number = $row['phone_number'];
             $email = $row['email'];
            //  $password = $row['password'];
             
                   
             echo "<tr>
            <form method='post' action='pharmacistupdateadmin.php'>
             <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
            <td><input type='text' name='fullname' value='$fullname'  size='7'>  </td>
            <td><input type='text' name='phone_number' value='$phone_number'  size='8'>  </td>
            <td><input type='text' name='email' value='$email'  size='3'>  </td>
             <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
           </form>
                   
          </tr>";
           }
      }else{
            echo "<script>alert('The record cant be found')</script>";
            //echo "<script>window.open('patientpanel.php', '_self')</script>";
          }
        }

function view_my_order(){
     global $conn;
     require('patientvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['id'];
     $sql = "SELECT * FROM orders WHERE patient = '$var1' ";
     $result = mysqli_query($conn, $sql);
    // $final = mysqli_num_rows($result);
     if($result){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['drug_name'];
       $quantity = $row['quantity'];
       $address = $row['address'];
       $patient = $row['patient'];
       $date = $row['date'];
             
       echo "<tr>
       
      <td>$id</td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>   
      
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }

  function view_profile(){
    global $conn;
    require('pharmacistvalidate.php');
       $var1 ='';
       $var1 = $_SESSION['name'];
       $sql = "SELECT * FROM pharmacist WHERE fullname  like '%$var1%'";
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
         $id =  $row['id'];
         $fullname =  $row['fullname'];
         $phone_number =  $row['phone_number'];
         $email = $row['email'];
         $password = $row['password'];
         echo "<tr>
        
        <td>$id</td>
        <td>$fullname</td>
        <td>$phone_number</td>  
        <td>$email</td>
        <td>$password</td>
  
      </tr>";
       }
  }else{
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('pharmacistpanel.php', '_self')</script>";
      }
    }

  function delete_drug(){
  global $conn;
  $sql = "SELECT * FROM drug";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $pn = $row['name'];
      $date = $row['barcode'];
      $doc = $row['insured'];
      $time = $row['status'];
      $price = $row['price'];
      $qty = $row['quantity'];
      $reg_by = $row['Registered_By'];
      $date = $row['date'];
      echo "<tr>
       
      <form method='post'>
       <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>$id</td> 
      <td>$pn</td>
      <td>$doc</td>
      <td>$date</td>  
      <td>$time</td>
      <td>$price</td>
      <td>$qty</td>
      <td>$reg_by</td>
      <td>$date</td>
      <td><input type='submit' name='delete'  class='btn btn-danger' value='Remove'>  </td> 
     </form>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}
  


    function drug_search(){
  global $conn;
    if(isset($_POST['searchdrug'])){
    $id = $_POST['name'];
    $sql = "SELECT * FROM drug WHERE name LIKE  '%$id%'";
    $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       
       $name = $row['name'];
       $barcode = $row['barcode'];
       $insured = $row['insured'];
       $status = $row['status'];
       $price = $row['price'];
       
             
       echo "<tr>
     
      <td>$name</td>
      <td>$barcode</td>
      <td>$insured</td>
      <td>$status</td>
      <td>$price</td>
      <td><a href='drugorder.php' >Order</a></td>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
      
}



?>
