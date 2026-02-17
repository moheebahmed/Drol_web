<?php
session_start();
include('./inc/function.php');
?>

<!DOCTYPE html>
<html>

<?php headLinks() ?>

<body>
  <div class="hero_area ">
    <?php include 'header.php'; ?>
    <?php
    $slides = [
      ["number" => "01", "title" => "Drool", "subtitle" => "Pet And Animal", "image" => "images/slider-img.png"],
      ["number" => "02", "title" => "Drool", "subtitle" => "Pet And Animal", "image" => "images/slider-img.png"],
      ["number" => "03", "title" => "Drool", "subtitle" => "Pet And Animal", "image" => "images/slider-img.png"],
      ["number" => "04", "title" => "Drool", "subtitle" => "Pet And Animal", "image" => "images/slider-img.png"]
    ];
    ?>

    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php foreach ($slides as $index => $slide) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
          <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
          <?php foreach ($slides as $index => $slide) : ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-md-1">
                    <div class="detail-box">
                      <div class="number">
                        <h5><?php echo $slide['number']; ?></h5>
                      </div>
                      <h1>
                        <?php echo $slide['title']; ?><br>
                        <span><?php echo $slide['subtitle']; ?></span>
                      </h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                      <div class="btn-box">
                        <a href="#" class="btn-1">Read More</a>
                        <a href="#" class="btn-2">Contact Us</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="<?php echo $slide['image']; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>

  <?php
  $heading_img = "images/image_8.png";
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
          <h2> <?php echo $title; ?> </h2>
        </div>
        <p>
          <?php echo $description; ?>
        </p>
        <div class="btn-box">
          <a href="<?php echo $read_more_link; ?>">
            <span>Read More</span>
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
              <h5><?php echo $animal['title']; ?> </h5>
              <p><?php echo $animal['description']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/pet-img.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <img src="images/image_8.png">
              <h2>Caring for your pets</h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
              The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
            </p>
            <div class="btn-box">
              <a href="#">
                <span>Read More</span>
                <img src="images/link-arrow.png">
              </a>
            </div>
          </div>
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
      ["img1" => "images/pet2.png", "img2" => "images/omega.png", "title" => "PET NUTRITIONISTS"],
      ["img1" => "images/pet1.png", "img2" => "images/dog.png", "title" => "STANDARDS"],
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
      ["image" => "images/f1.png", "name" => "Large", "price" => "100"],
      ["image" => "images/f2.png", "name" => "Medium", "price" => "200"],
      ["image" => "images/f3.png", "name" => "small", "price" => "300"],
    ]
  ];
  ?>
  <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <img src="images/image_8.png">
        <h2> <?php echo $why_choose_us['title']; ?> </h2>
        <p> <?php echo $why_choose_us['description']; ?> </p>
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

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container">

        <img src="images/image_8.png">
        <h2><?php echo $dog_food['title']; ?> </h2>
        <p><?php echo $dog_food['description']; ?>>
      </div>
      <div class="food_container">
        <?php foreach ($dog_food['items'] as $item): ?>
          <div class="box">
            <div class="img-box">
              <img src="<?php echo $item['image']; ?>">
            </div>
            <div class="detail-box">
              <h6><?php echo $item['name']; ?> </h6>
              <h3><span>$</span><?php echo $item['price']; ?></h3>
              <a href="#">Buy Now</a>
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

  $customers = [
    ["image" => "images/client.png", "name" => "Jack Mengo", "review" => "It is a long established fact that a reader will be distracted by the readable content."],
    ["image" => "images/client.png", "name" => "Jack Mengo", "review" => "It is a long established fact that a reader will be distracted by the readable content."],
    ["image" => "images/client.png", "name" => "Jack Mengo", "review" => "It is a long established fact that a reader will be distracted by the readable content."],
  ];
  ?>

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/image_8.png">
        <h2>What Says Our Customer</h2>
        <p>It is a long established fact that a reader will be distracted by the</p>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($customers as $index => $customer): ?>
            <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
              <div class="box">
                <div class="img-box">
                  <img src="<?php echo $customer['image']; ?>">
                </div>
                <div class="detail-box">
                  <h4><?php echo $customer['name']; ?></h4>
                  <p><?php echo $customer['review']; ?></p>
                  <img src="images/quote.png">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

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
              <img src="images/image_8.png" alt="">
              <h2><?php echo $contact_heading['title']; ?></h2>
              <p><?php echo $contact_heading['description']; ?></p>
            </div>
            <form action="#">
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
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>