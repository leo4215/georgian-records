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
        <!-- Section with two columns -->
        <section class="two-rows-sec" style="background-color: #4b4f6c;">
            <div class="full-width">
                <!-- Text block with heading and paragraphs -->
                <div class="text-block" style="color: #e3cdbd;">
                    <h2>How does<br>it work?</h2>
                    <p>The process of playing a record involves placing the vinyl disc on the platter and gently lowering the tonearm onto the record. As the record spins, the stylus (needle) follows the grooves on the record, converting the physical variations in the grooves into electrical signals. These electrical signals are then amplified and sent to the speakers, producing the music or sound for us to enjoy.</p>
                    <p>The intricacy and precision of the mechanical components in a record player are essential in faithfully reproducing the audio stored on vinyl records and delivering a rich and warm listening experience.</p>
                </div>
                <!-- Image -->
                <div class="details-section-1-img">
                </div>
            </div>
        </section>
        <!-- Video container with autoplaying muted video -->
        <div class="video-container">
            <video style="width: 100%; height: 100%;" autoplay muted>
                <source src="imgs/353240769.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Section with a background color -->
        <section style="background-color: #e3cdbd;">
            <div style="display: inline; color: #1b2132;">
                <h2 style="text-align: center; margin-top: 0; padding-top: 64px;">How to use it?</h2>
                <p style="text-align: center;">Using a record player may seem a bit intimidating if you're new to vinyl, but fear not! Follow these step-by-step instructions to enjoy your Record Player Pro with ease:</p>
            </div>
            <div style="width: 100%; display: inline-block;">
                <!-- Steps in rows -->
                <div class="steps-row">
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items">
                        <h3>1. Setting up the Record Player Pro</h3>
                        <p>Find a stable and level surface to place the record player.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items" style="background-color: #4b4f6c;">
                        <h3>2. Connect the speakers</h3>
                        <p>If you have external speakers, connect them to the designated audio output on the record player. Some record players may require additional amplification or a phono preamp to connect to external speakers.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items">
                        <h3>3. Power on</h3>
                        <p>Turn on the Record Player Pro using the power switch, usually located on the front or side.</p>
                    </div>
                </div>
                <div class="steps-row">
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items" style="background-color: #4b4f6c;">
                        <h3>4. Lift the dust cover</h3>
                        <p>Lift the hinged dust cover and set it aside to expose the turntable.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items">
                        <h3>5. Place the vinyl record</h3>
                        <p>Select the vinyl record you want to play.</p>
                        <p>Carefully remove the record from its sleeve, holding it by the edges to avoid fingerprints and smudges.</p>
                        <p>Place the vinyl record on the center spindle of the turntable.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items" style="background-color: #4b4f6c;">
                        <h3>6. Set the speed</h3>
                        <p>Determine the correct speed for your vinyl record (usually indicated on the record label).</p>
                        <p>Adjust the speed selector on the turntable to match the record's speed (33 1/3, 45, and 78 RPM).</p>
                    </div>
                </div>
                <div class="steps-row">
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items">
                        <h3>7. Balance the tonearm</h3>
                        <p>Lift the tonearm gently and move it to its resting position.</p>
                        <p>Adjust the tonearm's counterweight until the tonearm floats parallel to the turntable.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items" style="background-color: #4b4f6c;">
                        <h3>8. Lower the stylus (needle)</h3>
                        <p>Carefully move the tonearm over the vinyl record's outer groove.</p>
                        <p>Slowly lower the stylus (needle) onto the record, being gentle to prevent damage.</p>
                    </div>
                    <!-- Step item with heading and paragraph -->
                    <div class="steps-items">
                        <h3>9. Enjoy the music!</h3>
                        <p>The vinyl record will start playing, and you'll hear the sound through the external speakers.</p>
                        <p>To stop playback, lift the tonearm and return it to its resting position.</p>
                        <p>Lower the dust cover back over the turntable to protect it when not in use.</p>
                    </div>
                </div>
            </div>
            <!-- Additional info section -->
            <div style="padding-bottom: 32px">
                <div>
                    <img src="imgs/at-lp5x_05.png" alt="" style="width: 400px; height: 200px; object-fit: cover;">
                </div>
                <div>
                    <h2>Additional info:<br>Handling and maintenance</h2>
                    <ul style="padding-left: 0;">
                        <li>Always handle vinyl records by the edges to avoid touching the grooves.</li>
                        <li>Keep the turntable and stylus clean to ensure optimal performance and longevity.</li>
                        <li>Store your vinyl records in their sleeves and in a cool, dry place away from direct sunlight.</li>
                    </ul>
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
