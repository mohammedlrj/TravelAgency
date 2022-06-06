<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldCoast</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        <?php 
            include('Assets/css/style.css');
        ?>
    </style>
    <!-- custom css file link  -->
    
    <!-- <link rel="stylesheet" href="Assets/css/style.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="Assets/js/script.js" defer></script>

</head>
<body>
    
<?php 
    include('Src/Pages/header.php');
?>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">follow us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">to the unknown</h3>
    </div>

</section>

<!-- home section ends -->

<!-- booking form section starts  -->

<section class="book-form" id="book-form">

    <form method="get" action="Src/Pages/Traitement/table.php">
        <div class="inputBox">
            <span data-aos="zoom-in" data-aos-delay="300">Flying from</span>
            <input type="text" id="search_term" placeholder="place name" name="from" data-aos="zoom-in" data-aos-delay="300" required>
        </div>
        <div class="inputBox">
            <span data-aos="zoom-in" data-aos-delay="450">Flying to</span>
            <input type="text" id="search_term" placeholder="place name" name="to" data-aos="zoom-in" data-aos-delay="450" required>
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn" name="send1">
    </form>

</section>

<!-- booking form section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="Assets/images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="Assets/images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="Assets/images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="Assets/images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>No matter who you are, or where you are going, our travel brands help every type of traveler not only find the trip that’s right for them, but get the best value every time.</p>
    </div>

</section>

<!-- about section ends -->

<!-- experiences section starts  -->

<section class="blogs" id="experiences">

    <div class="heading">
        <span>travel experiences</span>
        <h1>best offers</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="100">
            <div class="image">
                <img src="Assets/images/exp-1.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp1.php" class="link">Europe Express - $100 off any custom vacation of $5,000 or more!</a>
                <p>Design your own custom vacation to Europe and save $100*! From multi-city to multi-country itineraries, discover what unforgettable experiences await in Europe.</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="200">
            <div class="image">
                <img src="Assets/images/exp-2.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp2.php" class="link">Europe Express - Best of Italy from $1,799*</a>
                <p>Spend 4 nights in Rome, 3 in Florence and 2 in Venice in this Italian adventure complete with private transfers and first-class rail between cities.</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="Assets/images/exp-3.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp3.php" class="link">Europe Express - Irish Adventure from $1,199*</a>
                <p>Plan your fall getaway to Ireland where you can spend 3 nights in Dublin, 3 nights at bed and breakfasts of your choosing, and a stay in an Irish castle! Car rental and daily breakfast included.</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="400">
            <div class="image">
                <img src="Assets/images/exp-4.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp4.php" class="link">Collette Tours - Save $50 on Small Group Explorations Tours</a>
                <p>Save $50 off Collette's Small Group Explorations Tours! Combinable with other offers*</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="500">
            <div class="image">
                <img src="Assets/images/exp-5.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp5.php" class="link">Cruise Norwegian, Get More Free</a>
                <p>Cruise Norwegian, Get More Free. Get 70% off 2nd Guest + Free Air for 2nd Guest + Take ALL Free at Sea Offers</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="Assets/images/exp-6.jpg">
            </div>
            <div class="content">
                <a href="Src/Pages/experiences/exp6.php" class="link">Goway - Sydney and Reef Discovery</a>
                <p>This 7-day Australian vacation takes you to Sydney and the Great Barrier Reef. It features first-class accommodations and a mix of shared and small group tours.</p>
            </div>
        </div>

    </div>

</section>

<!-- experiences section ends -->

<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our destinations</span>
        <h1>make your destination</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="Assets/images/des-1.jpg">
            </div>
            <div class="content">
                <h3>Tokyo</h3>
                <p>Japan</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="Assets/images/des-2.jpg">
            </div>
            <div class="content">
                <h3>Phuket</h3>
                <p>Thailand</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="Assets/images/des-3.jpg">
            </div>
            <div class="content">
                <h3>Maldives</h3>
                <p>Maldives</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="Assets/images/des-4.jpg">
            </div>
            <div class="content">
                <h3>Sydney</h3>
                <p>Australia</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="Assets/images/des-5.jpg">
            </div>
            <div class="content">
                <h3>London</h3>
                <p>United Kingdom</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="Assets/images/des-6.jpg">
            </div>
            <div class="content">
                <h3>Dubai</h3>
                <p>United Arab Emirates</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="Assets/images/des-7.jpg">
            </div>
            <div class="content">
                <h3>Singapore</h3>
                <p>Singapore</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="Assets/images/des-8.jpg">
            </div>
            <div class="content">
                <h3>Rome</h3>
                <p>Italy</p>
                <a href="Src/Pages/destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- destination section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-clock"></i>
            <h3>Save Time</h3>
            <p>You're engaged! Congratulations… what's next? Now you want to plan a destination engagement party, a wedding and a honeymoon. How will you fit it all into an already over scheduled day? We have a specialist ready to work with you to plan and schedule all of your upcoming 'firsts' so that you have the time to enjoy them.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-certificate"></i>
            <h3>Expert Advice</h3>
            <p>Trust the experts, our consultants have the inside scoop and the tools to assist you with all of your needs right up to and including the wedding. Whether it is planning a shower, assisting with bridal registry selections, helping to coordinate arriving guests or making your own travel plans. Our wedding professionals are ready to share their knowledge with you so that every stage of your planning goes smoothly and is 'bride tested'.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-piggy-bank"></i>
            <h3>Save Money</h3>
            <p>It is essential to maximize your time and investment. Wedding costs and all the trimmings add up. You want a personalized experience. We offer a one-of-a-kind service that will provide you with recommendations to help you control costs and manage the overwhelming details when selecting your venue, entertainment, transportation and travel partners.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <div class="heading">
        <span>blogs & posts</span>
        <h1>we untold stories</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="Assets/images/blog-1.jpg">
            </div>
            <div class="content">
                <a href="http://localhost/worldcoast/Src/Pages/blogs.php" class="link">Sustainable Travel: Alignment with the environment</a>
                <p>From transportation and operations to architecture and design, sustainability initiatives within the travel industry can help protect the places we love, while guarding the health of communities,...</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="Assets/images/blog-2.jpg">
            </div>
            <div class="content">
                <a href="http://localhost/worldcoast/Src/Pages/blogs.php" class="link">A Guide to Bleisure Travel Marketing</a>
                <p>Though the term dates back over a decade, bleisure travel or travel combining business and leisure is on the rise as global vaccinations increase and the remote workforce continues to grow.</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="Assets/images/blog-3.jpg">
            </div>
            <div class="content">
                <a href="http://localhost/worldcoast/Src/Pages/blogs.php" class="link">The Top Hotel Trends to Watch in 2022</a>
                <p>As we look towards the future of travel, several hotel trends in 2022 are emerging amongst the industry-wide momentum. Along with industry essentials like contactless technology and travel...</p>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- banner section starts  -->

<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your adventures</span>
        <h3>Let's Explore This World</h3>
        <p>Our mission is to power global travel for everyone, everywhere.</p>
        <a href="#book-form" class="btn">book now</a>
    </div>

</div>

<!-- banner section ends -->

<?php 
    include('Src/Pages/footer.php');
?>

<div class="credit">Copyright &copy; 2022 WorldCoast</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration:400,
        offset:120,
    });

</script>
</body>
</html>