<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/homestyle.css">
    <link rel="icon" href="../images/clown.jpg" type="image/gif" sizes="16x16">
	<title>My Portfolio</title>
</head>
<body>
    <header id="header">
        <nav id="main-nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="google_translate_element"></div>
    </header>

    <div id="welcome">
        Welcome to my portfolio!
    </div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <div class="mySlides fade">
        <img src="../images/dcheroes.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="../images/radiogaga.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="../images/gameworld.jpg" style="width:100%">
        </div>

    </div>
        <br>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>

    <script type="text/javascript">
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        function googleTranslateElementInit() 
        {
         new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>  

    <div id="button"><p><a href="projects.php">Click here</a></p></div>

    <footer><p>&copy 2020</p></footer>

</body>
</html>