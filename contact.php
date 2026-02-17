<?php
session_start();
include('./inc/function.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php headLinks() ?>


<body>

    <body class="sub_page">
        <div class="hero_area">
            <?php include 'header.php'; ?></div>

        <?php
        $contact_heading = [
            "image" => "images/heading-img.png",
            "title" => "Request A Call Back",
            "description" => "It is a long established fact that a reader will be distracted by the"
        ];

        $google_map_url = "https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Eiffel+Tower+Paris+France";
        ?>

        <section class="contact_section layout_padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <div class="form_container">
                            <div class="heading_container">
                                <img src="<?php echo $contact_heading['image']; ?>">
                                <h2><?php echo $contact_heading['title']; ?></h2>
                                <p><?php echo $contact_heading['description']; ?></p>
                            </div>
                            <form action="">
                                <input type="text" placeholder="Full Name" />
                                <input type="text" placeholder="Phone number" />
                                <input type="email" placeholder="Email" />
                                <input type="text" class="message-box" placeholder="Message" />
                                <button class="d-flex">SEND</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="map_container">
                            <div class="map-responsive">
                                <iframe src="<?php echo $google_map_url; ?>" width="600" height="300" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script>
            function openNav() {
                document.getElementById("myNav").classList.toggle("menu_width")
                document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
            }
        </script>

    </body>

</html>