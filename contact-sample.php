<?php

$msg = "";
$msgClass = "";
//check for submission
if(filter_has_var(INPUT_POST,'submit')){
    //get from data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);

    //check if these fields are  NOT empty
  if(!empty($name) && !empty($email) && !empty($message)){//passed
          //chek for valid email
          if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){//failed
                          $msg = 'Please, use a valid email';
                          $msgClass = "alert-danger";
          }else{//fpassed
                //main stuff
            $toEmail = "info@plklena.ru";
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
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Message:</span> ".$phone." </h4>
                        <h4 style='color:teal; font-weight:500'><span style='color:darkblue; font-weight:bold'>Message:</span> ".$subject." </h4>
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
<!-- ----------header ending------------------------------------>

        <!--Page Header Start-->
        <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/my-about/bg.jpg)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact us</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="contact-section-title__title">Feel free to get in touch with experts</h2>
                            </div>
                            <div class="adrr">

                                <div class="col-12">
                                    <div class="wrap">
                                        <div class="wrap-head">
                                            <h4>Russia Terminal Service: </h4>
                                        </div>
                                        <div class="wrap-body">
                                            <div class="normal-x"><i class="fa fa-envelope" aria-hidden="true"></i><p>info@plklena.ru</p></div>
                                            <div class="normal-x"><i class="fa fa-phone" aria-hidden="true"></i><p>+79363003643</p></div>
                                            <div class="normal-x"><span>INN/KPP: </span>  <p>3818048720 / 381801001</p>   </div>
                                            <div class="normal-x"><i class="fa fa-map-marker" aria-hidden="true"></i><p>666785, Irkutsk region, city of Ust-Kut, Vostochnaya industrial zone 1, Russia</p></div>
                                        </div>
                                    </div>
                                    

                                    <div class="wrap">
                                        <div class="wrap-head">
                                            <h4>Houston Terminal Service:</h4>
                                        </div>
                                        <div class="wrap-body">
                                            <div class="normal-x"><i class="fa fa-envelope" aria-hidden="true"></i><p>tx@plklena.ru</p></div>
                                            <div class="normal-x"><i class="fa fa-phone" aria-hidden="true"></i><p>+1 281 5491 943</p></div>
                                            <div class="normal-x"><i class="fa fa-map-marker" aria-hidden="true"></i><p> 10293 Lucore St, Houston, TX 77017, USA</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                                       
                                <?php if($msg != ""):?>
                                    <div class="alert col-md-8 offset-md-2  <?php echo $msgClass; ?>" role="alert" style="background: teal">
                                        <strong style="color:rgba(255,255,255, .8)"><?php  echo $msg; ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                              
                                 <?php endif; ?> 

                                <form id="contacts_form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" id="name" name="name"   value="<?php echo isset($_POST['name']) ? $name: '';?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email" required  value="<?php echo isset($_POST['email']) ? $email: '';?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="phone" value="<?php echo isset($_POST['phone']) ? $phone: '';?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject" value="<?php echo isset($_POST['subject']) ? $subject: '';?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"><?php echo isset($_POST['message']) ? $message: '';?></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <input type="submit" class="thm-btn comment-form__btn" value="Send a Message" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-two">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__two" allowfullscreen></iframe> -->
                <!-- <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=City%20of%20Moscow,%20Shchepkina%20street&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                
                </iframe> -->

                <div class="mapouter"><div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=666785,%20Irkutsk%20region,%20city%20of%20Ust-Kut,%20Vostochnaya%20industrial%20zone%201&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      
        </section>
        <!--Google Map End-->
   

       <!-- <div class="mapouter"><div class="gmap_canvas">
            <iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=City%20of%20Moscow,%20Shchepkina%20street&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

            </iframe>
            <a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1080px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}
        </style></div></div> -->

      
        


<!-- ----------footer---------------------------------- -->
 <?php
	$page ="contact";
	include "includes/footer.php";
?>