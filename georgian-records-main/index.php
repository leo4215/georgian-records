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
    <!-- JavaScript libraries -->
    <script src="scripts/jquery.js"></script>
    <script src="scripts/javascript.js"></script>
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
        <!-- Banner section with a heading -->
        <section class="banner">
            <div style="height: 100%;">
                <h1 style="color: #e3cdbd; font-size: 72px; text-align: left; letter-spacing: 3px;">High-Fidelity<br>Record Player</h1>
            </div>
        </section>
        <!-- Section with two columns -->
        <section class="two-rows-sec" style="background-color: #e3cdbd;">
            <div>
                <!-- Image and text block -->
                <div><img src="imgs/at-lp5x_03.png" alt="record player" style="position: relative; left: -10%; width: 125%;"></div>
                <div class="text-block">
                    <h2>Introducing Record<br>Player Pro,</h2>
                    <p>the ultimate professional turntable that elevates your vinyl experience to new heights. Impeccable materials ensure stable rotation and accurate tracking, while the belt-drive design offers superior torque for exceptional sound quality. Adjustable speeds (33 1/3, 45, and 78 RPM) faithfully reproduce music, and advanced isolation minimizes unwanted vibrations. Enjoy personalized setups with detachable/upgradable components and premium cartridges (MC or MM) that reveal fine details from your vinyl records. Precise tracking force adjustment protects your vinyl, while electronic speed control ensures consistent playback. With USB connectivity and multiple grounding options, this elegant masterpiece awaits you here, at Georgian Records.</p>
                    <a class="button" href="details.php">DETAILS</a>
                </div>
            </div>
        </section>
        <!-- Section with two columns and a list of features -->
        <section class="two-rows-sec" style="background-color: #4b4f6c;">
            <div class="full-width">
                <!-- Text block with features -->
                <div class="text-block" style="color: #e3cdbd; margin-left: 5%;">
                    <h2>Features</h2>
                    <ul style="padding-left: 0;">
                        <li>High-end components and impeccable materials for stable rotation and accurate tracking.</li>
                        <li>Belt-drive turntable, better torque for improved sound quality.</li>
                        <li>Adjustable speeds (33 1/3, 45, and 78 RPM) for faithful music reproduction.</li>
                        <li>Detachable/upgradable components for personalized setups.</li>
                        <li>Premium cartridges (MC or MM) for extracting fine details from vinyl records.</li>
                        <li>Advanced isolation to minimize unwanted vibrations.</li>
                        <li>Electronic speed control for consistent playback speeds.</li>
                        <li>Pitch control for precise speed adjustments.</li>
                        <li>External power supply for cleaner audio performance.</li>
                        <li>USB connectivity for digitizing vinyl collections.</li>
                        <li>Multiple grounding options for optimal signal purity.</li>
                        <li>Refined aesthetics and craftsmanship for a stunning addition to your setup.</li>
                    </ul>
                </div>
                <!-- Image -->
                <div class="home-section-2-img">
                </div>
            </div>
        </section>
        <!-- Section with milestones -->
        <section class="milestones-section">
            <div>
                <!-- Milestone with icon and count -->
                <div class="milestone">
                    <img src="imgs/vinyl-record-svgrepo-com.svg" alt="Vinyl" width="100">
                    <h2 class="count first-count">13395</h2>
                    <p>Records Played</p>
                </div>
                <!-- Milestone with icon and count -->
                <div class="milestone">
                    <img src="imgs/heart-svgrepo-com.svg" alt="Heart" width="100">
                    <h2 class="count second-count">0</h2>
                    <p>Happy Customers</p>
                </div>
                <!-- Milestone with icon and count -->
                <div class="milestone">
                    <img src="imgs/cup-svgrepo-com.svg" alt="Cup" width="100">
                    <h2 class="count third-count">0</h2>
                    <p>Cups of Coffee</p>
                </div>
            </div>
        </section>
        <!-- Section with two columns -->
        <section class="two-rows-sec" style="background-color: #985d6f;">
            <div>
                <!-- Image and text block -->
                <div><img src="imgs/pngwing.com.png" alt="record player" class="rotate" style="width: 80%;"></div>
                <div class="text-block" style="color: #e3cdbd;">
                    <h2>Why is it good?</h2>
                    <p>Discover the unparalleled performance of Record Player Pro, the best professional record player that takes your vinyl experience to new heights. With high-quality components ensuring stable rotation, accurate tracking, and belt-drive turntable for superior torque delivering impeccable sound quality. Enjoy faithful music reproduction with adjustable speeds (33 1/3, 45, and 78 RPM), while our robust anti-vibration design minimizes interference and resonance for pure sonic bliss.</p>
                    <p>Personalize your setup with detachable/upgradable components, complemented by premium cartridges (MC or MM) that extract fine details from your vinyl records. Precise tracking force adjustment safeguards your vinyl from wear and tear, while isolation feet minimize unwanted vibrations. Experience consistent playback speeds with electronic speed control and cleaner audio performance with an external power supply. Digitize your collection with USB connectivity and ensure optimal signal purity with multiple grounding options.</p>      
                    <p>Exuding elegance and craftsmanship, Record Playing Pro makes a stunning addition to your setup, elevating your listening experience to symphonic levels. Unleash the full potential of your vinyl collection with Record Playing Pro, available exclusively at Georgian Records.</p>
                    <a class="button" href="reviews.php" style="background-color: #e3cdbd; color: #1b2132;">REVIEWS</a>
                </div>
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
