<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <script src="../../Assets/js/script.js" defer></script>
</head>
<body>
    
<section class="footer">

<div class="box-container">

    <div class="box" data-aos="fade-up" data-aos-delay="150">
        <a href="http://localhost/worldcoast/index.php" class="logo"> <i class="fas fa-plane"></i>WorldCoast </a>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="300">
        <h3>quick links</h3>
        <a href="http://localhost/worldcoast/index.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="http://localhost/worldcoast/index.php#about" class="links"> <i class="fas fa-arrow-right"></i> About </a>
        <a href="http://localhost/worldcoast/index.php#experiences" class="links"> <i class="fas fa-arrow-right"></i> Experiences </a>
        <a href="http://localhost/worldcoast/Src/Pages/destination.php" class="links"> <i class="fas fa-arrow-right"></i> Destination </a>
        <a href="http://localhost/worldcoast/index.php#services" class="links"> <i class="fas fa-arrow-right"></i> Services </a>
        <a href="http://localhost/worldcoast/Src/Pages/blogs.php" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a>
        <a href="http://localhost/worldcoast/index.php#contact" class="links"> <i class="fas fa-arrow-right"></i> Contact us </a>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="450" id="contact">
        <h3>contact info</h3>
        <p> <i class="fas fa-map"></i> oujda, morocco </p>
        <p> <i class="fas fa-phone"></i> +212623869310 </p>
        <p> <i class="fas fa-envelope"></i> username@gmail.com </p>
        <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="600">
        <h3>newsletter</h3>
        <p>Subscribe and receive our news and special offers!</p>
        <form action="http://localhost/worldcoast/Src/Pages/Traitement/newsletter.php" method="post"> 
            <input type="text" placeholder="First name" class="email" id="fname" name="fname" required>
            <input type="text" placeholder="Last name" class="email" id="lname" name="lname" required>
            <input type="email" placeholder="Email address" class="email" id="mail" name="email" required>
            <input type="submit" value="Subscribe" class="btn" name="send2">
        </form>
    </div>

</div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    AOS.init({
        duration:400,
        offset:120,
    });

</script>
</body>
</html>