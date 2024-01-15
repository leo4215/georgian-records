<!-- The DOCTYPE declaration specifies the document type and version of HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information for the document -->
    <meta charset="utf-8">
    <title>Home | Georgian Records</title>
    <!-- Meta information for search engines -->
    <meta name="author" content="Georgian Records, Inc.">
    <meta name="description" content="Georgian Records' Player Promotional Website">
    <!-- Link to the website's favicon -->
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
    <!-- Link to the external stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- The header section of the page -->
    <header>
        <?php
        // Including a PHP file for the global navigation
        include $_SERVER['DOCUMENT_ROOT']."/includes/global-nav.php";
        ?>
    </header>
    <!-- The main content of the page -->
    <main>
        <!-- Banner section for the process form -->
        <div class="banner-process-form">
            <h2 style="margin-top: 0; margin-bottom: 32px; color: #e3cdbd;">Thank you for getting in touch!</h2>
        </div>
        <!-- Section with a background color for displaying form submission details -->
        <div style="background-color: #e3cdbd; padding: 5% 10%;">
            <?php
            /* All form elements must be checked - that required information is present and that all form data
            is in the correct format. Security checks must also be made before database queries are made */

            // Set a variable to capture the first name from the submitted form
            $fname = $_GET['fname'];

            // Set a variable to capture the last name from the submitted form
            $lname = $_GET['lname'];

            // Set a variable to capture the Subject from the submitted form
            $subject = $_GET['subject'];

            // Set a variable to capture the Message from the submitted form
            $message = $_GET['message'];

            // Set a variable to capture the email from the submitted form
            $email = $_GET['email'];

            // Output a friendly message to confirm that everything went well, including the $fname variable in a paragraph
            echo('<p>Thank you, <strong>'.$fname.' '.$lname.'</strong>. Your message has been submitted.</p>');

            // Output the submitted message and subject in a paragraph
            echo('<p>The message you entered is below:<br><strong>'.$subject.': '.$message.'</strong></p>');

            // Output the provided email for contact
            echo('<p>You will receive a reply shortly on the provided email: <strong>'.$email.'</strong></p>');
            ?>
        </div>
    </main>
    <!-- The footer section of the page -->
    <footer>
        <?php
        // Including a PHP file for the footer navigation
        include $_SERVER['DOCUMENT_ROOT']."/includes/footer-nav.php";
        ?>
    </footer>
</body>
</html>
