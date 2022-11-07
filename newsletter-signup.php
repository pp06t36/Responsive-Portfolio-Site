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
  }

$customer = [
    'name' => isset($name) ? $name : NULL,
    'email' => isset($email) ? $email : NULL,
    'created_at' => date("Y-m-d"), 
];

if(!$entryErr) {
    // Connect to database
      try {
          $db = new PDO('mysql:host=localhost;dbname=DBNAME', '/', '/');
  
          
          $db->prepare("
          INSERT INTO newsletter (name, email, created_at) VALUES (:name, :email, :created_at)
          ")->execute($customer);
  
          header("Location: http://localhost:8888/projects/seohyang_site_m2?msg=success"); 
          exit();

      } catch (PDOException $e) {
          $err = $e->getMessage();
          file_put_contents("error-log.txt", '[' . date("Y-m-d") . '] ' . $err . "\n");
          $errMsg = "Something went wrong.";
          
      }
  }
  // Redirect browser
  if ( isset($entryErr)) header("Location: http://localhost:8888/projects/seohyang_site_m2/index.php?error=$entryErr"); 
  if(isset($errMsg)) header("Location: http://localhost:8888/projects/seohyang_site_m2/index.php?error=$errMsg"); 
  
  
  exit();
  
    