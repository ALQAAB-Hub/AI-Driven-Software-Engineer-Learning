<?php
// Form submit hone ke baad process karo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $captcha = $_POST['captcha'];

    // Simple captcha: 3 + 4 = 7
    if ($captcha == 7) {
        echo "✅ Hello $name, your form is submitted successfully!";
    } else {
        echo "❌ Wrong captcha, please try again.";
    }
    echo "<br><br><a href='action.php'>Go Back</a>"; // wapas form par jane ke liye link
    exit;
}
?>