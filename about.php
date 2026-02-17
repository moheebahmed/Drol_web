<?php
session_start();
include('./inc/function.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php headLinks() ?>


<body class="sub_page">
  <div class="hero_area">
    <?php include 'header.php'; ?></div>
  <?php
  $heading_img = "images/heading-img.png";
  $title = "About Us";
  $description = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,";
  $read_more_link = "#";
  $link_arrow = "images/link-arrow.png";
  ?>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="<?php echo $heading_img; ?>">
          <h2>
            <?php echo $title; ?>
          </h2>
        </div>
        <p>
          <?php echo $description; ?>
        </p>
        <div class="btn-box">
          <a href="<?php echo $read_more_link; ?>">
            <span>
              Read More
            </span>
            <img src="<?php echo $link_arrow; ?>">
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
  $animals = [
    ["image" => "images/dog.jpg", "title" => "Cute Dog", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/bird.jpg", "title" => "Birds", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/fish.jpg", "title" => "Fish", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/cat.jpg", "title" => "Cat Bite", "description" => "It is a long established fact that a reader will be distracted by"],
  ];
  ?>

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <?php foreach ($animals as $index => $animal): ?>
          <div class="box <?php echo ($index % 2 == 0) ? 'b1' : 'b2'; ?>">
            <div class="img-box">
              <img src="<?php echo $animal['image']; ?>">
            </div>
            <div class="detail-box">
              <h5>
                <?php echo $animal['title']; ?>
              </h5>
              <p>
                <?php echo $animal['description']; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php
  $animals = [
    ["image" => "images/dog.jpg", "title" => "Cute Dog", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/bird.jpg", "title" => "Birds", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/fish.jpg", "title" => "Fish", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/cat.jpg", "title" => "Cat Bite", "description" => "It is a long established fact that a reader will be distracted by"],
  ];

  $pet_section = [
    "image" => "images/pet-img.png",
    "heading_img" => "images/heading-img.png",
    "title" => "Caring for your pets",
    "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,",
    "read_more_link" => "#",
    "link_arrow" => "images/link-arrow.png"
  ];

  $animals = [
    ["image" => "images/dog.jpg", "title" => "Cute Dog", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/bird.jpg", "title" => "Birds", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/fish.jpg", "title" => "Fish", "description" => "It is a long established fact that a reader will be distracted by"],
    ["image" => "images/cat.jpg", "title" => "Cat Bite", "description" => "It is a long established fact that a reader will be distracted by"],
  ];

  $pet_section = [
    "image" => "images/pet-img.png",
    "heading_img" => "images/heading-img.png",
    "title" => "Caring for your pets",
    "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,",
    "read_more_link" => "#",
    "link_arrow" => "images/link-arrow.png"
  ];

  $why_choose_us = [
    "heading_img" => "images/heading-img.png",
    "title" => "Why Choose Us",
    "description" => "It is a long established fact that a reader will be distracted by the readable content of a",
    "features" => [
      ["img1" => "images/pet1.png", "img2" => "images/omega.png", "title" => "PET NUTRITIONISTS"],
      ["img1" => "images/pet2.png", "img2" => "images/dog.png", "title" => "STANDARDS"],
      ["img1" => "images/pet2.png", "img2" => "images/shield.png", "title" => "QUALITY & SAFETY"],
    ],
    "read_more_link" => "#",
    "link_arrow" => "images/link-arrow.png"
  ];

  $dog_food = [
    "heading_img" => "images/heading-img.png",
    "title" => "Our Dog Food",
    "description" => "It is a long established fact that a reader will be distracted by the readable content of a",
    "items" => [
      ["image" => "images/f1.png", "name" => "Basic", "price" => "100"],
      ["image" => "images/f2.png", "name" => "Medium", "price" => "200"],
      ["image" => "images/f3.png", "name" => "Standard", "price" => "300"],
    ]
  ];
  ?>
  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="<?php echo $why_choose_us['heading_img']; ?>">
        <h2>
          <?php echo $why_choose_us['title']; ?>
        </h2>
        <p>
          <?php echo $why_choose_us['description']; ?>
        </p>
      </div>
      <div class="us_container">
        <?php foreach ($why_choose_us['features'] as $feature): ?>
          <div class="box">
            <div class="img1-box">
              <img src="<?php echo $feature['img1']; ?>">
            </div>
            <div class="img2-box">
              <img src="<?php echo $feature['img2']; ?>">
            </div>
            <div class="detail-box">
              <h6>
                <?php echo $feature['title']; ?>
              </h6>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="btn-box">
        <a href="<?php echo $why_choose_us['read_more_link']; ?>">
          <span>
            Read More
          </span>
          <img src="<?php echo $why_choose_us['link_arrow']; ?>">
        </a>
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