<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Gallery - Maa Vaishno Jewellers</title>
        <!-- <link rel="shortcut icon" href="assets/logo.png" style="background-color:#666"> -->
  <?php
    include 'head.php';
    ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <div class="container-fluid">
    <?php
    include 'header.php';
    ?>

        <section class="page-heading">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
            <h4>Explore our collection</h4>
        </section>
		
		<section class="gallery container">
            <div class="row heading text-center">
                <p>We offer a wide range of jewelry that has been exclusively designed for your different moods, different occasions and different budgets.</p>
            </div>
            <div class="gallery-contents">
                <div class="gallery-filter-btns">
                    <button class="btn btn-Bhartiya-o active" id="all">All</button>
                    <!-- <button class="btn btn-Bhartiya-o" id="gold">Gold</button> -->
                     <button class="btn btn-Bhartiya-o" id="necklace">Necklace</button>
                    <button class="btn btn-Bhartiya-o" id="antique">Antique</button>
                    <button class="btn btn-Bhartiya-o" id="ear_rings">Ear Rings</button>
                    <button class="btn btn-Bhartiya-o" id="rings">Rings</button>
                    <button class="btn btn-Bhartiya-o" id="bangles">Bangles</button>
                     <button class="btn btn-Bhartiya-o" id="silver">Silver</button>
                </div>
                <div class="row about-jewel-type" id="aboutJewel"></div>
                <div class="row images" id="galleryItems"></div>
            </div>
        </section>

        <?php
    include 'footer.php';
    include 'foot.php';
    ?>
    </div>
</body>


</html>