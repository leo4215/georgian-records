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
        <!-- Section with a background color and reviews -->
        <section style="background-color: #e3cdbd; padding: 120px 0 60px 0;">
            <!-- Review container 1 -->
            <div class="review-container">
                <img src="imgs/quote.svg" alt="quote mark" height="40">
                <p>I'm blown away by the quality of the turntable I received from Georgian Records! The sound is incredibly crisp, and it brings out the nuances of my vinyl collection like never before. Definitely recommend!</p>
                <img src="imgs/5-stars.svg" alt="rating" height="20">
                <h3>Joanna M.</h3>
            </div>
            <!-- Review container 2 -->
            <div class="review-container">
                <img src="imgs/quote.svg" alt="quote mark" height="40">
                <p>Georgian Records delivered my order promptly, and the turntable is fantastic. The setup was a breeze, and I'm already enjoying the vintage vibes with modern convenience. Four stars only because the packaging could have been sturdier.</p>
                <img src="imgs/4-stars.svg" alt="rating" height="20">
                <h3>Mike S.</h3>
            </div>
            <!-- Review container 3 -->
            <div class="review-container">
                <img src="imgs/quote.svg" alt="quote mark" height="40">
                <p>What a gem of a find! I'm new to vinyl, but the team at Georgian Records provided excellent customer support and helped me choose the perfect turntable for my needs. The warm sound and elegant design have me hooked!</p>
                <img src="imgs/5-stars.svg" alt="rating" height="20">
                <h3>Emily R.</h3>
            </div>
            <!-- Review container 4 -->
            <div class="review-container">
                <img src="imgs/quote.svg" alt="quote mark" height="40">
                <p>Georgian Records is a real game-changer for vinyl enthusiasts like me! The product quality is exceptional, and it's evident that the team behind this company is truly passionate about music. 10/10 would recommend!</p>
                <img src="imgs/5-stars.svg" alt="rating" height="20">
                <h3>Michael B.</h3>
            </div>
            <!-- Review container 5 -->
            <div class="review-container">
                <img src="imgs/quote.svg" alt="quote mark" height="40">
                <p>As a music producer, I was searching for a high-fidelity turntable, and Georgian Records delivered! The sound reproduction is accurate, and I appreciate the durability of the build. Fantastic purchase!</p>
                <img src="imgs/4-stars.svg" alt="rating" height="20">
                <h3>Sophia K.</h3>
            </div>
        </section>
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
