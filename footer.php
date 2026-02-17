<?php
$contact_info = [
    "phone" => "+01 1234567890",
    "email" => "demo@gmail.com"
];

$opening_hours = [
    "days" => "Monday to Friday",
    "time" => "07:00 am to 04:00 pm"
];

$social_media = [
    "facebook" => "images/fb.png",
    "twitter" => "images/twitter.png",
    "linkedin" => "images/linkedin.png",
    "instagram" => "images/instagram.png"
];
?>

<section class="info_section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>CONTACT INFO</h5>
                <p><img src="images/call.png" alt="" /> <?php echo $contact_info["phone"]; ?></p>
                <p><img src="images/mail.png" alt="" /> <?php echo $contact_info["email"]; ?></p>
            </div>
            <div class="col-md-3">
                <h5>Opening Hours</h5>
                <p><?php echo $opening_hours["days"] . " - " . $opening_hours["time"]; ?></p>
            </div>
            <div class="col-md-3">
                <h5>Social Media</h5>
                <div class="social_container">
                    <?php foreach ($social_media as $platform => $image): ?>
                        <a href=""><img src="<?php echo $image; ?>" alt="<?php echo ucfirst($platform); ?>" /></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Newsletter</h5>
                <form action="#">
                    <input type="text" placeholder="Enter Your Email" />
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footer_section">
    <p>&copy; 2019 All Rights Reserved. Design by <a href="https://html.design/">Free Html Templates</a></p>
</section>