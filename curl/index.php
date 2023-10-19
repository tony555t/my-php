<?php

// Initialize cURL session
$url = 'https://jsonplaceholder.typicode.com/posts';
$resource = curl_init($url);

// Set cURL options
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$result = curl_exec($resource);

// Check for cURL errors
if ($result === false) {
    // An error occurred, use curl_error and curl_errno to get more details
    $error_message = curl_error($resource);
    $error_code = curl_errno($resource);
    
    // Handle the error (you can log it, display a message, etc.)
    echo "cURL Error: $error_message (Error Code: $error_code)";
} else {
    // Request was successful
    echo $result;
}

// Close the cURL session
curl_close($resource);
