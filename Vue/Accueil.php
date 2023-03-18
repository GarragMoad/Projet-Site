<?php $titre = 'LearnHub - Online Learning '?>
 <?php $CSS = '../Style/Accueil.css '?>
 <?php ob_start(); ?>
<!DOCTYPE html>

<html lang="en">

    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>

        <div class="container" id="container">

            <div class="container-header" id="container-header">
                <div class="container-header-1" id="container-header-1">
                    <div class="container-logo" id="container-logo">
                        <a href="#">
                            <span class="logo" id="logo">LearnHub.</span>
                        </a>
                    </div>
                    <div class="container-sign-up" id="container-sign-up">
                        <span class="sign-up" id="sign-up"><a href="Vue/Vue_Inscription.php">Sign up</a></span>
                        <span class="sign-up-shadow" id="sign-up-shadow"></span>
                    </div>
                </div>
                <div class="container-header-2" id="container-header-2">
                    <a href="#">
                        <div class="container-menu" id="container-menu">
                            <i class="fa-solid fa-bars"></i>
                            <span class="courses" id="courses">Courses</span>
                        </div>
                    </a>
                    <div class="container-instructor" id="container-instructor">
                        <span class="instructor" id="instructor"><a href="#">Become an instructor</a></span>
                    </div>
                    <div class="container-contact-us" id="container-contact-us">
                        <a href="#">
                            <span class="contact-us" id="contact-us">Contact us</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container-center" id="container-center">
                <div class="container-center-1" id="container-center-1">
                    <div class="container-center-left" id="container-center-left">
                        <h1 class="presentation-big" id="presentation-big">The ultimate learning platform for the very begginers.</h1>
                        <p class="presentation-small" id="presentation-small">We believe the world is more beautiful as each person gets more skills and knows how to implement.</p>
                        <a href="#">
                            <span class="get-started" id="get-started">Get Started</span>
                        </a>
                    </div>
                    <div class="container-center-right" id="container-center-right">
                        <img class="image-landing" src="../media/image-landing.svg">
                    </div>
                </div>
                <div class="container-center-2" id="container-center-2">
                    <div class="fresh-graduates" id="fresh-graduates">
                        <span class="number" id="number-1">12k+</span>
                        <p class="number-description" id="number-1-description">Fresh Graduates</p>
                    </div>
                    <div class="years-of-experience" id="years-of-experience">
                        <span class="number" id="number-2">9+</span>
                        <p class="number-description" id="number-2-description">Years of Experience</p>
                    </div>
                    <div class="excellence-awards" id="excellence-awards">
                        <span class="number" id="number-3">356+</span>
                        <p class="number-description" id="number-3-description">Excellence Awards</p>
                    </div>
                    <div class="brand-partners" id="brand-partners">
                        <span class="number" id="number-4">45+</span>
                        <p class="number-description" id="number-4-description">Brand Partners</p>
                    </div>
                </div>
                <div class="container-center-3" id="container-center-3">
                    <div class="container-center-3-title" id="container-center-3-title">
                        <h1 class="title-people-learning" id="title-people-learning">What People are Learning right now</h1>
                    </div>
                    <div class="courses-display" id="courses-display">
                        <a href="#">
                            <div class="js-web-course" id="js-web-course">
                                <img class="course-image" src="../media/javascript.png">
                                <span class="course-title" id="course-title-1">JavaScript for Web Designers and Developers quick</span>
                                <div class="rating-and-price" id="rating-and-price-1">
                                    <span class="rating" id="rating-1">
                                        5.0
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="price" id="price-1">Free</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="english-course" id="english-course">
                                <img class="course-image" src="../media/english.png">
                                <span class="course-title" id="course-title-2">Complete English Course - Beginner to Advanced</span>
                                <div class="rating-and-price" id="rating-and-price-2">
                                    <span class="rating" id="rating-2">
                                        5.0
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="price" id="price-2">$59</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="iphone-shooting-course" id="iphone-shooting-course">
                                <img class="course-image" src="../media/iphone.png">
                                <span class="course-title" id="course-title-3">How to shoot on iPhone - Shooting to Storytelling</span>
                                <div class="rating-and-price" id="rating-and-price-3">
                                    <span class="rating" id="rating-3">
                                        5.0
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="price" id="price-3">$49</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="ui-ux-course" id="ui-ux-course">
                                <img class="course-image" src="../media/ui-ux.png">
                                <span class="course-title" id="course-title-4">UI/UX with Adobe XD: Design & Prototype a Mobile App</span>
                                <div class="rating-and-price" id="rating-and-price-4">
                                    <span class="rating" id="rating-4">
                                        5.0
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="price" id="price-4">$79</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="#">
                        <div class="explore-more" id="explore-more">
                            <span class="explore-more-button" id="explore-more-button">Explore more</span>
                        </div>
                    </a>
                </div>
                <div class="container-center-4" id="container-center-4">
                    <div class="top-categories" id="top-categories">
                        <h1 class="top-categories-title" id="top-categories-title">Top Categories</h1>
                    </div>
                    <div class="categories" id="categories">
                        <a href="#">
                            <div class="development" id="development">Development</div>
                        </a>
                        <a href="#">
                            <div class="languages" id="languages">Languages</div>
                        </a>
                        <a href="#">
                            <div class="design" id="design">Design</div>
                        </a>
                        <a href="#">
                            <div class="health" id="health">Health&Fitness</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-footer" id="container-footer">
                <div class="container-footer-1" id="container-footer-1"></div>
                <div class="container-footer-2" id="container-footer-2"></div>
                <div class="container-footer-3" id="container-footer-3"></div>
            </div>

        </div>


        <script src="https://kit.fontawesome.com/3f4d148255.js" crossorigin="anonymous"></script>
    
    </body>

</html>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Commun.php'; 