<?php
include 'dbconn.php';
$message = $conn->query("SELECT * FROM contact_us");

?>

<link rel="stylesheet" href="CSSstyle/contact.css"/>
<title>MusicGo</title>
<div class="contact-us">  
  <form id="contact" action="save.php" method="post">
    <h3>Contact Us</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
    </fieldset>
    <fieldset>
      <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
    </fieldset>
    <fieldset>
      <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number">
    </fieldset>
    <fieldset>
      <textarea name="message" placeholder="Type your Message Here...." class="form-control" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" class="form-control" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

  <div class="container">

        <h3 class="text-center"><strong>MESSAGE FEEDBACK</strong></h3>
        <?php while($r = $message->fetch_assoc()):?>
            <div class="comment mt-5 me-4 ms-4" style="background-color: #ffc000; border-radius: 10px;">
                <form>
                    <div class="fill-message ms-5 mb-5 mt-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><i class="fa fa-address-book" aria-hidden="true"></i> Nama : <?=$r["name"]?></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><i class="fa fa-envelope" aria-hidden="true"></i> Email : <?=$r["email"]?></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa fa-commenting" aria-hidden="true"></i> Message : <?=$r["message"]?></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback : <?=$r["feedback"]?></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><?=$r["datetime"]?></label>
                    </div>
                    </div>
                </form>
            </div>
            <?php endwhile ?>
        </div>
  
</div>