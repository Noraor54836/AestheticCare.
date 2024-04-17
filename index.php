<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final project clinic appointment</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>    

<header class="header fixed-top" >

    <div class="container">

        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">Aesthetic<span>Care.</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#Process">Process</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
                <a href="#promotion">promotion</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div class="icons">
                <div id="cart-btn" class="fas fa-shopping-cart"></div>
            </div>
            
            <div id="menu-btn" class="fas fa-bars"></div>

        </div>


    </div>

  


</header>

<section class="home" id="home">

    <div class="container">

    <div class="row min-vh-100 align-items-center">
        <div class="content text-center text-md-left">
            <h3> Let us improve your skin</h3>
            <p> If you have skin condition or skin desease you came
                to the right place let us do it for you.</p>
                <a href="#contact" class="link-btn">make appointment</a>
        </div>
    </div>


    </div>

</section>

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/Lip_Filler_101_-_What_to_Know_About_Lip_Filler.webp" class="d-block w-100" alt="Slide 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Lips filler</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/Post_Inflammatory_erthema_what_it_is_and_how_to_treat_it.webp" class="d-block w-100" alt="Slide 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Post Inflammatory erthema</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/PIH.webp" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Blakness</h3>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>Real Aesthetic for your face</h3>
                <p>Welcome to AestheticCare, where we specialize in providing real aesthetic solutions for your face. Our team of experts is dedicated to enhancing your natural beauty and boosting your confidence through personalized skincare treatments.</p>
                <p>At AestheticCare, we believe in the power of effective skincare treatments to address various concerns, from lip fillers and post-inflammatory erythema to laser treatments and anti-aging solutions. Our commitment is to deliver exceptional results tailored to your unique needs.</p>
                <a href="#contact" class="link-btn">make an appointment</a>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
<div class="container">
<h1 class="heading">Our <span style="color: var(--blue)">Services</span></h1>

<div class="box-container container">

    <div class="box">
        <img src="image/4192598.png" alt="" class="small-image">
        <h3>Alignment Specialist</h3>
        <p>Precise treatments for a balanced appearance.</p>
    </div>

    <div class="box">
        <img src="image/1488085.png" alt="" class="small-image">
        <h3>Acne Specialist</h3>
        <p>Advanced solutions for clearer, healthier skin.</p>
    </div>

    <div class="box">
        <img src="image/500663_searchImg_0_sizeWidth.png" alt="" class="small-image">
        <h3>Laser Treatment</h3>
        <p>Transformative laser therapy for rejuvenated skin.</p>
    </div>

    <div class="box">
        <img src="image/1_Medical-Skin-Care-Treatment_ThermageFLX_528x400.png" alt="" class="small-image">
        <h3>Thermage Treatment</h3>
        <p>Revitalizing skin tightening and contouring.</p>
    </div>

    <div class="box">
        <img src="image/a2-7-1-1024x1024.png" alt="" class="small-image">
        <h3>Anti-Aging Specialist</h3>
        <p>Personalized anti-aging solutions for a youthful look.</p>
    </div>

    <div class="box">
        <img src="image/filler.png" alt="" class="small-image">
        <h3>Filler Specialist</h3>
        <p>Natural-looking enhancement and contouring.</p>
    </div>
    </div>
</div>

</section>


<section class="process" id="Process">

    <h1 class="heading">Our Process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="image/6823128-removebg-preview.png" alt="" class="process-image" style="padding-right: 3rem;">
            <h3>Face Shape Transformation</h3>
            <p>Transform your face with precision and artistry. Our experts use advanced techniques to enhance your natural features, providing a more balanced appearance.</p>
        </div>

        <div class="box">
            <img src="image/24746706_7008405-removebg-preview.png" alt="" width="auto" height="200">
            <h3>Diagnosing Skin Conditions</h3>
            <p>Our specialists use cutting-edge tools to accurately identify and address various skin conditions, prioritizing the health and vitality of your skin.</p>
        </div>

        <div class="box">
            <img src="image/28480873_Tiny_medical_professionals_examining_huge_face_of_woman-removebg-preview.png" alt="" class="process-image" style="padding-right: 1rem;">
            <h3>Youthful Skin Solutions</h3>
            <p>Rediscover radiant, youthful skin with our comprehensive solutions, targeting signs of aging for a more vibrant appearance.</p>
        </div>
    </div>

</section>




<section class="reviews" id="reviews">
<div class="container">
    <h1 class="heading">Happy Clients</h1>
    <div class="box-container container">
        <div class="box">
            <img src="image/analog-portrait-beautiful-woman-posing-artistically-indoors.jpg" alt="Client 1">
            <p>Experience the transformative care provided by Aesthetic Care. Our clients love the results and feel more confident than ever.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Susan Junjjing</h3>
            <span>Satisfied Client</span>
        </div>
        <div class="box">
            <img src="image/beautiful-blonde-woman-posing-with-coffee-cup.jpg" alt="Client 2">
            <p>Join the ranks of our delighted clients who have experienced the exceptional care at Aesthetic Care. Your satisfaction is our priority.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>Charnpat Kaya</h3>
            <span>Satisfied Client</span>
        </div>
        <div class="box">
            <img src="image/close-up-woman-smiling.jpg" alt="Client 3">
            <p>Discover the joy of radiant skin and the satisfaction of our clients who have chosen Aesthetic Care for their beauty needs.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>Sinsan Prasumpon</h3>
            <span>Satisfied Client</span>
        </div>
        </div>
    </div>
</section>


     <section class="contact" id="contact">
     <div class="container">
        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?> 
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment :</span>
            <input type="datetime-local" name="date"  class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>
        </div>
        </section>




        <section class="promotion" id="promotion">
        <div class="container">
        <h1 class="heading">our <span>promotion</span></h1>

        <div class="swiper promotion-slider">

                <div class="swiper-wrapper">
                
                    <div class="swiper-slide box"> 
                        <img src="image/original-1626426900727.png" alt="">
                        <h3>Allergan botox<h3>
                            <div class="price"> $50.99/- - 100.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div> 

                    <div class="swiper-slide box"> 
                        <img src="image/pic11-800x800.png" alt="">
                        <h3>V-beam<h3>
                            <div class="price"> $25.99/- - 80.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fa-regular fa-star"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div> 

                    <div class="swiper-slide box"> 
                        <img src="image/rs1gv5-removebg-preview.png" alt="">
                        <h3>Ulthera<h3>
                            <div class="price"> $150.99/- - 299.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div> 

                    <div class="swiper-slide box"> 
                        <img src="image/RSB_vital_1ml_RGB.png" alt="" class="process-image">
                        <h3>Restylene filler<h3>
                            <div class="price"> $70.99/- - 120.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div> 

                    <div class="swiper-slide box"> 
                        <img src="image/radiesse-product-1.png" alt="" class="process-image">
                        <h3>Radiesse<h3>
                            <div class="price"> $150.99/- - 300.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div> 

                    <div class="swiper-slide box"> 
                        <img src="image/png-clipart-dr-carroll-dermatology-injectable-filler-surgery-wrinkle-refined-aesthetics-skin-design-tattoo-laser-tattoo-removal-surgery-filler-removebg-preview (1).png" alt="">
                        <h3>Juvederm filler<h3>
                            <div class="price"> $80.99/- - 150.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div>

                    <div class="swiper-slide box"> 
                        <img src="image/fm6qg6-removebg-preview.png" alt="">
                        <h3>Xeomin botox<h3>
                            <div class="price"> $100.99/- - 200.99/- </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fa-regular fa-star"></i>
                            </div> 
                            <a href=# class='link-btn'>add to cart</a>
                    </div>

                </div> 
                </div>
        </div> 

        </section>

        <section class="carttab">
            <h1>Shopping cart</h1>
            <div class="listcart">
                <div class="item">
                    <div class="image">
                    <img src="image/original-1626426900727.png" alt="">
                    </div>
                    <div class="name">
                    Allergan botox
                    </div>
                    <div class="total price">
                    50.99$
                    </div>
                    <div class="quantity">
                        <span class="minus"><</span>
                        <span>1</span>
                        <span class="plus">></span>

                    </div>

                </div>

            </div>
            <div class="btn">
                <button class="close">CLOSE</button>
                <button class="checkOut">CHECKOUT</button>
            </div> 




            </section>

    <section class="footer">

             <div class="box-container container">

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <p>+123-456-7890</p>
                    <p>+222-345-2302</p>
                </div>

                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>bangkok, Thailand - 10600</p>
                </div>

                <div class="box">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>10:00am to 10:00pm</p>
                </div>


                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>Sasitsinprasong@gmail.com</p>
                    <p>64130010325@gmail.com</p>
                </div>

             </div>   

             <div class="credit">&copy; created by <?php echo date('Y'); ?> by <a href=index.html><span>Sasit sinprasong</span></div></a>

    </section>           



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>


</body>
</html>