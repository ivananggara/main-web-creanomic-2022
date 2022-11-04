<?php
$competitions = [
  [
    'title' => 'Business Plan',
    'img' => 'mascot_business_plan.png',
    'desc' => 'Develop a suitable business for Gen-Z by utilizing technological advances in the digital era.'
  ],
  [
    'title' => 'Essay Contest',
    'img' => 'mascot_essay.png',
    'desc' => 'Dampak era digital terhadap perkembangan bisnis.'
  ],
  [
    'title' => 'Design Poster',
    'img' => 'mascot-poster.png',
    'desc' => 'The impact of digital era suitable bussines in digital era.'
  ],
  [
    'title' => 'Photography',
    'img' => 'mascot_foto.png',
    'desc' => 'The challenge of facing epidemic era.'
  ],
  [
    'title' => 'Video Competition',
    'img' => 'mascot_video.png',
    'desc' => 'How to adjust to the new normal era.'
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include("./partials/head.php");?>
<link rel="stylesheet" href="./assets/css/home.css">

<body>
<?php include("./partials/navbar.php");?>
    <section id="hero" class="">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 hero-content my-auto">
                    <h1>creanomic</h1>
                    <h2>2022</h2>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                    <a href="#about">Lets start</a>
                </div>
            </div>
        </div>
    </section>
    <section id=about>
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-12 col-md-12 col-lg-6 about-video">
                        
                    </div>
                    <div class="col-6 col-sm-12 col-md-12 col-lg-6 about-content">
                        <h1>About Us</h1>
                        <p>Creative Economy and Innovation Centre, which well-known as Creanomic, is an annual event which holds by Vocational Education Program, Brawijaya University. The event itself brings up topic about creativity and innovation
                        which maintains the standard economy. <br /><br />Due to corona virus pandemic, the event evolves to adapt the current situation along with bringing new concept this year. Creanomic also brings up new events: Virtual Art
                        Exhibition, Virtual Concert, Webinar, and widen our competitions scope to International level.</p>
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="competition" class="pt-5">
        <div class="container">
            <h1 class="text-center"><b>Competition</b></h1>
            <div class="slider">
                        <div class="owl-carousel">
                            <?php foreach ($competitions as $c) { ?>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4 img-slider">
                                    <img src="./assets/img/<?= $c['img']; ?>" alt="" >
                                </div>
                                <div class="border"></div>
                                <h5 class="mb-0 text-center"><b><?= $c['title']; ?></b></h5>
                                <p class="text-center p-4"><?= $c['desc']; ?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
        </div>
    </section>

    <?php include("./partials/script.php");?>
    <?php include("./partials/footer.php");?>
</body>
</html>