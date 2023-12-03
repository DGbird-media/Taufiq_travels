<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $city = $_POST["city"];
  $travel = $_POST["travel"];
  $date = $_POST["date"];
  $number = $_POST["number"];
  $people = $_POST["people"];
  
  // Change these variables to your own email and desired subject line
  $to = "iamsyedhammid@gmail.com";
  $subject = "New Hotel Request Form";
  
  $email_body = "Name: $name\nEmail: $email\nCity of Residence: $city\nPhone Numer: $number\nTravel Destination: $travel\nDate of Travel: $date\nNo. of People: $people\nVacation Type: $vacation\n";
  
  // Headers to set content type and additional info like From
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  // Sending email
  if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you for contacting us! We will get back to you soon.";
  } else {
    echo "Oops! Something went wrong, please try again later.";
  }
} else {
  echo "There was a problem with your submission, please try again.";
}
?>
