<?php

$msg = "";
$msgClass = "";
//check for submission
if(filter_has_var(INPUT_POST,'submit')){
    //get from data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // $phone = htmlspecialchars($_POST['phone']);
    // $subject = htmlspecialchars($_POST['subject']);

    //check if these fields are  NOT empty
  if(!empty($name) && !empty($email) && !empty($message)){//passed
          //chek for valid email
          if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
                          $msg = 'Please, use a valid email';
                          $msgClass = "alert-danger";
          }else{//fpassed
                //main stuff
            $toEmail = "info@cambioscheepvaart.nl";
            $subject = "Contact Request From ".$name;

            // $body = "<h2>Contact Request</h2>
            //          <h4>Name: ".$name." </h4>
            //          <h4>Email: ".$email." </h4>
            //          <h4>Message: ".$message." </h4>";

          $body = "<div style='background:rgb(240,241,243); padding:0px'>
                      <h2 style='background:teal; padding:20px;color:white'>Contact Message From  ".$name."</h2>
                      <div style='padding:0px 40px 50px 30px'>
                        <h4 style='color:teal; font-weight:500;'><span style='color:darkblue; font-weight:bold'>Name:</span> ".$name." </h4>
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Email:</span> ".$email." </h4>                      
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Message:</span> ".$message." </h4>
                      </div>
                  </div>";
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
            $headers .= "From: ".$name."<".$email.">"."\r\n";//additional header

            if(mail($toEmail,$subject,$body,$headers)){//passed
                            $msg = 'Your Message has been received, '.$name.'. We will get back to you shortly';
                            // $msgClass = "alert-success";
                             $msgClass = "alert-custom-success";
            }else{
                            $msg = 'Sorry, Something went wrong';
                            $msgClass = "alert-danger";
            }//end sending if
          }//end if for emptiness
  }else{//failed
        $msg = 'Please, fill in all fields';
        $msgClass = "alert-danger";
  }//end if for emptiness
}// end parent if

/////////heading   /////


	$title = 'Contact Us';
	$page ="contact";
   include "includes/header.php";
?>

 <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb-contact bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">Contact Us</h1>
                        <div class="meta">
                        <a href="index.php" class="prev">Home /</a>
                            <a href="#" class="next">Contact Us</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->

 
   
    <!-- contact form area strt -->
    <div class="rts-contact-page-form-area contact-2 rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                     <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=640&amp;hl=en&amp;q=148 Rue Saint-Honoré, 75001 Paris, France (3rd Floor Apt 54) Numéro Siret :48325210200015 (siège de l'entreprise)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:640px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:640px;}.gmap_iframe {width:600px!important;height:640px!important;}</style></div>
                </div>
                <div class="col-lg-6">
                    <div class="mian-wrapper-form">

                    <?php if($msg != ""):?>
                            <div id="notification" class="notification">
                                    <?php  echo $msg; ?>
                                </div>
                    <?php endif; ?> 


                        <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <span class="pre">Get In Touch</span>
                            <h2 class="title">Let’s Get in Touch</h2>
                        </div>
                    
                        <!-- <form id="contact" action="#" class="appoinment-form mt--40"> -->
                        <form   id="contact"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="appoinment-form mt--40"
                                    novalidate="novalidate" onsubmit="showNotification();">
                            <div class="input-half-wrapper">
                                <div class="single-input">
                                    <!-- <input type="text" placeholder="Your Name" required> -->
                                    <input type="text" placeholder="Your name" id="name" name="name"   value="<?php echo isset($_POST['name']) ? $name: '';?>">
                                </div>
                                <div class="single-input">
                                    <!-- <input type="email" placeholder="Email Address" required> -->
                                    <input type="email" placeholder="Email address" name="email" required  value="<?php echo isset($_POST['email']) ? $email: '';?>">
                                </div>
                            </div>

                            <textarea class="form-control mb--30 mt--25" id="message" name="message" placeholder="Write a message"><?php echo isset($_POST['message']) ? $message: '';?></textarea>
                            <!-- <button type="submit" class="rts-btn btn-primary">SUBMIT MESSAGE</button> -->
                            <input type="submit" class="rts-btn btn-primary" value="Send a Message" name="submit" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->


   <!-- rts contact area start -->
   <div class="rts-contact-area-m rts-section-gap">
        <div class="container">
            <div class="row g-24">
                
            <div class="ag-format-container">
                <div class="ag-courses_box">

                  <div class="ag-courses_item">
                    <div class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        UX/UI Web-Design&#160;+ Mobile Design
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                          04.11.2022
                        </span>
                      </div>
                    </div>
                  </div>
              
                  <div class="ag-courses_item">
                    <div class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        Annual package "Product+UX/UI+Graph designer&#160;2022"
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                          04.11.2022
                        </span>
                      </div>
                    </div>
                  </div>
              
                  <div class="ag-courses_item">
                    <div class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        Graphic Design
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Start:
                        <span class="ag-courses-item_date">
                          04.11.2022
                        </span>
                      </div>
                    </div>
                  </div>
          


                </div>
              </div>

            </div>
        </div>
    </div>
    <!-- rts contact area end -->



<!--=========================footer =============================================-->
 <!-- ----------footer---------------------------------- -->
 <?php
	$page ="contact";
	include "includes/footer.php";
?>
<!-- ---------------end footer ---------------------------- -->

