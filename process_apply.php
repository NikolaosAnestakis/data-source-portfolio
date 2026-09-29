<?php

/*
 * Local development endpoint for testing the Apply form.
 *
 * This file receives POST data submitted from apply.html.
 * It is intended for local development and verification only.
 */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method Not Allowed");
}

header("Content-Type: text/plain; charset=UTF-8");

echo "Application form POST received successfully.\n\n";

echo "Submitted form data:\n";
echo "--------------------\n";

foreach ($_POST as $field => $value) {
    if (is_array($value)) {
        $value = implode(", ", $value);
    }

    echo htmlspecialchars($field, ENT_QUOTES, "UTF-8")
        . ": "
        . htmlspecialchars($value, ENT_QUOTES, "UTF-8")
        . "\n";
}
