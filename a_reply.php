
    <?php
      include('a_header.php');
      include('dbconnect.php');
    ?>
    <section id="main-content">
      <section class="wrapper site-min-height">
            <!-- <div class="page-heading about-heading header-text" style="background-image: url(admin/img/car3.png);"> -->
           <div class="row mt mb">
          <div class="col-lg-12">


              <!-- <img src="image/price.jpg" width="100%" >  -->
             


   <div class="send-message">
      <div class="container">
        <div class="row">
            <div>.</div>
            <div>.</div>
            <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="POST" leftmargin='25%'>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" >
                    <fieldset >
                      
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12" >
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="msg" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>

                </div>
              </form>
              
            </div>
          </div>
          <!-- <div class="col-md-4">
            <img src="car/assets/images/team_01.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">John Doe</h5>
          </div> -->
        </div>
      </div>
    </div>



     <?php
$id=$_GET['id'];
          //echo $id;

if(isset($_POST['msg']))
{
       
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $u="UPDATE contact SET status='1' where email='$id'";
      $q="INSERT INTO reply(senderid,subject, message) VALUES('$id','$subject','$message')";
      echo $q;
      $m=mysql_query($q,$conn);
      $c=mysql_query($u,$conn);
      if($m)
      {
        echo"<script>alert('Message successfully sent');
          location.href='a_complaint.php';
      </script>";
      }
      

}


?>



              
      
      </div>
    </div>

 
       