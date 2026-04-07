<?php

// Form Valdiation Code

//using session for easy of refresh usage
session_start(); 
require_once 'db.php';

// Pull errors from session, or default to an empty array
$errors = $_SESSION['form_errors'] ?? [];

// wait for  a request method of POST which indicates that the form has been submit 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //create variables needed for messages 
$errors = [];
$success = "";
$_SESSION['old_input'] = $_POST;

// form field rules 
$rules = [
    'name' => [
        'min_length' => ['value' => 1, 'error_message' => 'Field is empty']
    ], 
    'email' => [
        'min_length' => ['value' => 6, 'error_message' => 'Email is too short must be at least 6 characters long'],
        'pattern'    => ['value' => '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', 'error_message' => 'This is Not a valid email.']
    ],
    'telephone' => [
        'min_length' => ['value' => 4, 'error_message' => 'Telephone is too short must be at least 4 characters long.'],
        'pattern'    => ['value' => '/^[\d\s\(\)\+\-\.]{4,25}$/', 'error_message' => 'This is not a valid telephone number.']
    ],
    'message' => [
        'min_length' => ['value' => 15, 'error_message' => 'Message is too short must be at least 15 characters long.']
    ]
];

// loop through each form field rule and iss if the entry of the form applies as true or false
// this is done for it being filled, minimum length and valid email/phone number
foreach ($rules as $field => $checks) {
    $value = trim($_POST[$field] ?? '');
   
    if (empty($value)) {
        $errors[$field][] = "This field is required.";
        continue; // Skip the rest of the checks for THIS field and move to the next field
    }

    if (isset($checks['min_length'])) {
        if (strlen($value) < $checks['min_length']['value']) {
            $errors[$field][] = $checks['min_length']['error_message'];
        }
    }

    // Check 2: Pattern (Regex)
    if (isset($checks['pattern'])) {
        if (!preg_match($checks['pattern']['value'], $value)) {
            $errors[$field][] = $checks['pattern']['error_message'];
        }
    }
}
//save errors
$_SESSION['form_errors'] = $errors;

// check if errors are empty and if so proceed
if (empty($errors))
    {
        //save values
    $name = trim($_POST['name']);
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $message = trim($_POST['message']);
    $marketing = isset($_POST['marketing_preference']) ? 1 : 0;

    //save to database using a try catch just incase something breaks or connection is lost
    try {
    //Prepare the SQL and give each of the values placeholders
    $sql = "INSERT INTO contactform (`Name`, `Company Name`, `Email`, `Telephone Number`, `Message`, `Marketing Approval`) 
            VALUES (:name, :company, :email, :telephone, :message, :marketing)";
    
    $stmt = $pdo->prepare($sql);

    // Execute with an associative array matching the placeholders
    $stmt->execute([
        ':name'      => $name,
        ':company'   => $company,
        ':email'     => $email,
        ':telephone' => $telephone,
        ':message'   => $message,
        ':marketing' => $marketing
    ]);

    //Get the newly created ID
    $newId = $pdo->lastInsertId(); 
    $success = `Success! New database record has been submitted for record ID: $newId`;
   // echo "Success! New database record has been submitted for record ID: " . $newId; //only used for testing purpose

    // save session value for success message and unset old input data so a new form can be filled out
    $_SESSION['success_status'] = "We have succesfully recieved your message and will be in touch soon.";
    unset($_SESSION['old_input']);

    // redirect back to form
    header("Location: contact.php#contact-form"); 
             exit();

        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    } else  { 
        // if is not empty then save errors and redirect to show them
        $_SESSION['form_errors'] = $errors;
        header("Location: contact.php#contact-form");
        exit();
        
    }
}

