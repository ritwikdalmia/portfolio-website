<?php



$errors = array();
$sender_id="aqureshi@nitkkr.ac.in";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';

	
    $email_id=$_POST["email_id"];
    $name=$_POST["name"];
    $sender_email_id=$_POST["email_id"];
    $Mno=$_POST["Mno"];
    $message=$_POST["message"];
   

   

    
   
    
    
    
?>
           
                 
        
    <?php
   

   if (empty($errors)) {
        // $exists = false; 
        
           

            
                $sql = "INSERT INTO `portfolio` ( `name`,`email_id`,`Mno`,`message`,`sender_email_id`) VALUES ('$name','$email_id','$Mno','$message','$sender_id')";
                $result = mysqli_query($conn, $sql);
                
                    if($result){



                        $headers = 'From:user@cbpi.in' ."\r\n" .
                        'X-Mailer: PHP/' . phpversion()."\r\n" ;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
    $to = "$sender_id";
    $subject = "New Message";
                        $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                        <html xmlns:v='urn:schemas-microsoft-com:vml'>
                        
                        <head>
                            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                            <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;' />
                            <!--[if !mso]--><!-- -->
                            <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel='stylesheet'>
                            <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet'>
                            <!-- <![endif]-->
                        
                            <title>apply with us</title>
                        
                            <style type='text/css'>
                            /* contact section starts */
                            .contact {
                              background: #e5ecfb;
                              min-height: 60vh;
                            }
                            .contact .container {
                              max-width: 1050px;
                              width: 100%;
                              background: #fff;
                              border-radius: 1.5rem;
                              margin: 2rem 5rem;
                              box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                            }
                            .contact .container .content {
                              display: flex;
                              align-items: center;
                              justify-content: space-between;
                              padding: 2.5rem 2rem;
                            }
                            .contact .content .image-box {
                              max-width: 60%;
                              margin-left: 4rem;
                            }
                            .contact .content .image-box img {
                              width: 100%;
                              height: 40rem;
                              position: relative;
                            }
                            .contact .content form {
                              width: 45%;
                              margin-right: 3.5rem;
                            }
                            form .form-group {
                              display: flex;
                              flex-direction: column;
                              justify-content: center;
                            }
                            .form-group .field {
                              height: 50px;
                              display: flex;
                              position: relative;
                              margin: 1rem;
                              width: 100%;
                            }
                            form i {
                              position: absolute;
                              top: 50%;
                              left: 18px;
                              color: rgb(51, 51, 51);
                              font-size: 17px;
                              pointer-events: none;
                              transform: translateY(-50%);
                            }
                            form .field input,
                            form .message textarea {
                              width: 100%;
                              height: 100%;
                              outline: none;
                              padding: 0 16px 0 48px;
                              font-size: 16px;
                              font-family: 'Poppins', sans-serif;
                              border-radius: 5px;
                              border: 1px solid rgb(51, 51, 51);
                              background: #e5ecfb;
                            }
                            .field input::placeholder,
                            .message textarea::placeholder {
                              color: rgb(51, 51, 51);
                            }
                            .field input:focus,
                            .message textarea:focus {
                              padding-left: 47px;
                              border: 2px solid rgb(115, 3, 167);
                            }
                            .field input:focus ~ i,
                            .message textarea:focus ~ i {
                              color: rgb(115, 3, 167);
                            }
                            form .message {
                              position: relative;
                              margin: 1rem;
                              width: 100%;
                            }
                            form .message i {
                              top: 25px;
                              font-size: 20px;
                              left: 15px;
                            }
                            form .message textarea {
                              min-height: 130px;
                              max-height: 230px;
                              max-width: 100%;
                              min-width: 100%;
                              padding: 12px 20px 0 48px;
                            }
                            form .message textarea::-webkit-scrollbar {
                              width: 0px;
                            }
                            form .button-area {
                              display: flex;
                              float: right;
                              flex-direction: row-reverse;
                            }
                            .button-area button {
                              color: #fff;
                              border: none;
                              outline: none;
                              font-size: 1.8rem;
                              cursor: pointer;
                              border-radius: 5px;
                              padding: 13px 25px;
                              background: #2506ad;
                              box-shadow: 0px 5px 10px rgba(48, 68, 247, 0.6);
                              transition: 0.3s ease;
                              font-family: 'Nunito', sans-serif;
                            }
                            .button-area button:hover {
                              background: #421cecf5;
                            }
                            .button-area span {
                              font-size: 17px;
                              padding: 1rem;
                              display: none;
                            }
                            .button-area button i {
                              position: relative;
                              top: 6px;
                              left: 2px;
                              font-size: 1.5rem;
                              transition: 0.3s;
                              color: #fff;
                            }
                            .button-area button:hover i {
                              left: 8px;
                            }
                            </style>
                            <!-- [if gte mso 9]><style type=”text/css”>
                                body {
                                font-family: arial, sans-serif!important;
                                }
                                </style>
                            <![endif]-->
                        </head>
                        
                        
                        <body class='respond' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
                        <section class='contact' id='contact'>
  
                        <h2 class='heading'><i class='fas fa-headset'></i> Get in <span>Touch</span></h2>
                      
                        <div class='container'>
                          <div class='content'>
                            <div class='image-box'>
                              <img draggable='false' src='https://ritwik.cbpi.in/assets/images/contact1.png' alt=''>
                            </div>
                          <form id='contact-form' action='contact_submit.php' method='POST'>
                            
                            <div class='form-group'>
                              <div class='field'>
                                <input type='text' name='name' placeholder='Name' value=".$name." required>
                                <i class='fas fa-user'></i>
                              </div>
                              <div class='field'>
                                <input type='text' name='email_id' placeholder='Email' value=".$email_id." required>
                                <i class='fas fa-envelope'></i>
                              </div>
                              <div class='field'>
                                <input type='text' name='Mno' placeholder='Phone' value=".$Mno.">
                                <i class='fas fa-phone-alt'></i>
                              </div>
                              <div class='message'>
                              <textarea placeholder='Message' name='message' value=".$message."required></textarea>
                              <i class='fas fa-comment-dots'></i>
                              </div>
                              </div>
                            <div class='button-area'>
                              <button type='submit'>
                                Submit <i class='fa fa-paper-plane'></i></button>
                            </div>
                          </form>
                        </div>
                        </div>
                      </section>
                        </body>
                        
                        </html>";
                        
                        
    
    
    
    
                        if (mail($to,$subject,$message,$headers,$additional_parameters)){
                          //echo "Your Mail is sent successfully.";
                         
                          header('location:index.html');
                        }
                        else{
                          //echo "Your Mail is not sent. Try Again.";
                          $errors['mail'] = "mail not send";
                        }
                        //     $slowAlert1=false;
                        //     $showError1 = false;
                        // }

                   
            }
        }
          
            
           
     
        }
       
    


    
?>
