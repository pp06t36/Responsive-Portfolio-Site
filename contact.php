<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-z\s]*$/i",$name)) { 
        $entryErr = "Only letters and white space allowed";
    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $entryErr = "Invalid email format";
    }
	$message = test_input($_POST["message"]);
    if (!preg_match("/^[a-z\s]*$/i",$msg)) { 
        $entryErr = "Only letters and white space allowed";
    }

  }

  $customer = [
    'name' => isset($_POST['name']) ? $_POST['name'] : NULL,
    'email' => isset($_POST['email']) ? $_POST['email'] : NULL,
	'message' => isset($_POST['message']) ? $_POST['message'] : NULL,
    'created_at' => date("Y-m-d"), 
];

// Add the recipient email to a variable
$to	= "pporterfm@gmail.com";
			
// Create a subject
$subject = "$name sent a message via your contact form";

// Construct the message
$message .= "Name: $name\r\n";
$message .= "Email: $email\r\n\r\n";
$message .= "Message:\r\n$msg";

$message = wordwrap($message, 72); // Keep the message neat n' tidy

// Set the mail headers into a variable
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: " . $name . " <" . $email . ">\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High\r\n\r\n";

// Send the email!
mail($to, $subject, $message, $headers);

if(!$entryErr) {
    // Connect to database
      try {
          $db = new PDO('mysql:LOCALHOST;dbname=DBNAME', '/', '/!');
  
          
          $db->prepare("
          INSERT INTO contact (name, email, message, created_at) VALUES (:name, :email, :message, :created_at)
          ")->execute($customer);
  
          header("Location: http://localhost:8888/projects/seohyang_site_m2?msg=success"); 
      } catch (PDOException $e) {
          $err = $e->getMessage();
          file_put_contents("error-log.txt", '[' . date("Y-m-d") . '] ' . $err . "\n");
          $errMsg = "Something went wrong.";
          
      }
  }
  // Redirect browser
  if ( isset($entryErr)) header("Location: http://localhost:8888/projects/seohyang_site_m2/contact_me.php?error=$entryErr"); 
  if(isset($errMsg)) header("Location: http://localhost:8888/projects/seohyang_site_m2/contact_me.php?error=$errMsg"); 
  
  
  exit();