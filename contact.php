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

    <!-- rts contact area start -->
    <div class="rts-contact-area-m rts-section-gap">
        <div class="container">
            <div class="row g-24">
                
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                       
                        <!-- <div class="contentx">
                            <div class="info">
                                <h5>HEAD OFFICE REGISTRATION</h5>
                                <div class="single-project-details-challenge">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <p class="details">
                                    148 Rue Saint-Honoré, 75001 Paris, France (3rd Floor Apt 54)
                                    Numéro Siret :48325210200015 (siège de l'entreprise)
                                    </p>
                                </div>
                                <div class="single-project-details-challenge">
                                    <div class="icon">
                                        <span class="custom-i">Code NAF/APE:<span>
                                    </div>
                                    <p class="details">
                                    5040Z
                                    </p>
                                </div>
                                <div class="single-project-details-challenge">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <p class="details">
                                    +33 7 56 75 79 27
                                    </p>
                                </div>

                                <div class="single-project-details-challenge">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <p class="details">
                                    info@cambioscheepvaart.nl
                                    </p>
                                </div>
                            </div>
                        </div> -->


                        <div class="big-bg-porduct-details">
                                    <div class="contact-info">
                                    <div class="info-head">
                                        <h5 class="title">HEAD OFFICE REGISTRATION</h5>
                                    </div>
                                    <div class="info-body">
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Address:</span>
                                                <h6 class="name">148 Rue Saint-Honoré, 75001 Paris, France (3rd Floor Apt 54)
                                                    Numéro Siret :48325210200015 (siège de l'entreprise)</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-layer-group"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Code NAF/APE:</span>
                                                <h6 class="name">5040Z</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Information Line:</span>
                                                <h6 class="name">+33 7 56 75 79 27</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Email:</span>
                                                <h6 class="name"> info@cambioscheepvaart.nl</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
                <!-- single contact area end -->

                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="contentx">
                            <div class="big-bg-porduct-details">
                                    <div class="contact-info">
                                    <div class="info-head">
                                        <h5 class="title">ROTTERDAM REGISTRATION OFFICE</h5>
                                    </div>
                                    <div class="info-body">
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Address:</span>
                                                <h6 class="name">Tarbot 115 Ridderkerk 2986 ND Netherlands</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                         <!-- single info -->
                                         <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-layer-group"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>KVK numme:</span>
                                                <h6 class="name">24258521</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-th"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Vestigingsn ummer:</span>
                                                <h6 class="name">000018245730</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Inquiries:</span>
                                                <h6 class="name">+31 6 35 25 03 57</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Email:</span>
                                                <h6 class="name">nl@cambioscheepvaart.nl</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <!-- <div class="thumbnail">
                            <img src="assets/images/contact/03.jpg" alt="">
                        </div> -->
                        
                        <div class="big-bg-porduct-details">
                                    <div class="contact-info">
                                    <div class="info-head">
                                        <h5 class="title">HOUSTON TERMINAL SERVICE ADDRESS</h5>
                                    </div>
                                    <div class="info-body">
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Address:</span>
                                                <h6 class="name">1358 N Witter St, Pasadena, TX 77506, USA</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Inquiries:</span>
                                                <h6 class="name"> +1 (713) 379-7627</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                        <!-- single info -->
                                        <div class="single-info">
                                            <div class="info-ico">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="info-details">
                                                <span>Email:</span>
                                                <h6 class="name"> tx@cambioscheepvaart.nl</h6>
                                            </div>
                                        </div>
                                        <!-- end single info -->
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- rts contact area end -->
   
    <!-- contact form area strt -->
    <div class="rts-contact-page-form-area contact-2 rts-section-gapBottom">
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
                            <!-- <select>
                                <option data-display="Select">Select an option</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                                <option value="3" disabled>A disabled option</option>
                                <option value="4">Potato</option>
                            </select> -->
                            <!-- <div class="input-half-wrapper mt--25 mb--30">
                                <div class="single-input">
                                    <input placeholder="Select Information Line" type="text" name="checkIn" id="Information Linepicker" value="" class="calendar" required>
                                </div>
                                <div class="single-input">
                                    <input type="text" id="timepicker" placeholder="Select Information Line" />
                                </div>
                            </div> -->
                            <!-- <textarea class="form-control mb--30 mt--25" id="message" name="message" placeholder="Your message Here" required=""></textarea> -->
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

<!--=========================footer =============================================-->
 <!-- ----------footer---------------------------------- -->
 <?php
	$page ="contact";
	include "includes/footer.php";
?>
<!-- ---------------end footer ---------------------------- -->

