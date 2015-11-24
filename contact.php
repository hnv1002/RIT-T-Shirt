<?php
// check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

// validate form fields
  if($name == '' OR $email == '' OR $message == ''){
    $error_message = "You must specify a value for name, email and message.";
  }

// address field is hidden to prevent bots' spamming, 'normal' customers won't see this field
  if($_POST["address"] != ''){
    $error_message = "Your form submission has a problem.";
  }

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "<br>";
  $email_body = $email_body . "Email: " . $email . "<br>";
  $email_body = $email_body . "Message: " . $message;
  $to = "hnv1002@rit.edu";
  $subject = "New Message from my website";
  $header = "From: ".$name."\n";
  if(!isset($error_message)){
  // send customer form submission to my email
    mail($to,$subject,$email_body,$header);
  // redirect customer to a reponse page after submission
    header("Location: contact.php?status=thanks");
    exit;
  }
}


$pageTitle = "Contact Huy";
$section = "contact";
include("inc/header.php");
?>
<div class="section page">
  <div class="wrapper">
    <h1>Contact</h1>
    <?php if(isset($_GET["status"]) && $_GET["status"] == "thanks"){?>
      <p>Thanks for the email. I&rsquo;ll be in touch shortly!</p>
    <?php }else{ ?>
      <?php if(!isset($error_message)){
              echo "<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>";
            }else{
              echo '<p class="message">'.$error_message."</p>";
            }
      ?>
      <form method="post" action="contact.php">
        <!-- Contact form -->
          <table>
              <tr>
                  <th>
                      <label for="name">Name</label>
                  </th>
                  <td>
                      <input type="text" name="name" id="name">
                  </td>
              </tr>
              <tr>
                  <th>
                      <label for="email">Email</label>
                  </th>
                  <td>
                      <input type="text" name="email" id="email">
                  </td>
              </tr>
              <tr>
                  <th>
                      <label for="message">Message</label>
                  </th>
                  <td>
                      <textarea name="message" id="message"></textarea>
                  </td>
              </tr>
              <!-- hidden field to prevent bots-->
              <tr style="display: none;">
                  <th>
                      <label for="address">Address</label>
                  </th>
                  <td>
                      <input type="text" name="address" id="address">
                      <p>Please leave this field blank.</p>
                  </td>
              </tr>
          </table>
          <input type="submit" value="Send">
      </form>
    <?php } ?>
  </div>
</div>



<?php include("inc/footer.php"); ?>
