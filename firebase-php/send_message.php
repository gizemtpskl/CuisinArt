<?php
include "dbcon.php";
 
// Initialize URL to the variable
$url = $_SERVER['REQUEST_URI'];
     
// Use parse_url() function to parse the URL
// and return an associative array which
// contains its various components
$url_components = parse_url($url);
 
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);

if(isset($_POST['message']))
{
    $message = $_POST['message'];
    $sender = $params['sender'];

    $post_data = [
        'message'=> $message,
        'sender' => $sender,
        'time' => date('jS F Y h:i:s A'),
    ];
    $ref_table = "messages";
    $postRef_result = $database->getReference($ref_table)->push($post_data);
    header("Location: http://localhost/306project/firebase-php/message_client.php");
}
 
exit();

?>