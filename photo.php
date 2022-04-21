<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/ico" href="favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,300&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Portfolio</title>

</head>

<body>

    <header>
            <a id="header-title" href="index.html">Timothée JACOB</a>
            <h4 id="header-subtitle">Galerie</h4>
            <div id="header-border"></div>
    </header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $("header h4").css('width', $('header a').width() + 170 + 'px');
    </script>


    <div id="navbar">
        <a href="#street">Street Photography</a>
        <a href="#paysage">Paysage</a>
        <a href="#portrait">Portrait</a>
        <a href="#wildlife">Wildlife</a>
        <a href="#packshot">Packshot</a>
        <a href="#food">Food</a>
    </div>

    <button class="back-to-top hidden">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="back-to-top-icon"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M7 11l5-5m0 0l5 5m-5-5v12"
            />
        </svg>
</button>


    <div id="container-list-gallery">

        
        <section id="street">
            <h3 class="gallery_title">Street photography</h3>
            
            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/street/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>

        </section>


        
        <section id="paysage">
            <h3 class="gallery_title">Paysage</h3>

            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/paysage/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>

        </section>


        
        <section id="portrait">
            <h3 class="gallery_title">Portrait</h3>
            
            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/portrait/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>
        </section>


        
        <section id="wildlife">
            <h3 class="gallery_title">Wildlife</h3>
        
            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/wildlife/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>
        </section>

        
        
        <section id="packshot">
            <h3 class="gallery_title">Packshot</h3>
            
            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/packshot/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>
        </section>


        
        <section id="food">
            <h3 class="gallery_title">Food</h3>
            
            <div class="containerPhoto">
                <?php
                    foreach(glob('gallery/food/*.jpg') as $filename){
                        ?>
                            <div>
                                <img loading="lazy" src="<?= $filename ?>">
                            </div>
                        <?php
                    }
                ?>
            </div>
        </section>
        

    </div>


    <footer>
        <div id="footer-text">
            <p>Made by Timothée JACOB</p>
        </div>

        <div id="footer-links">
            <a href="https://www.instagram.com/timothee_jacob/" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com/in/timoth%C3%A9e-jacob-1b6b63192/" target="_blank" class="fa fa-linkedin"></a>
            <a href="https://github.com/TimoJac/portfolio" target="_blank" class="fa fa-github"></a>
        </div>
    </footer>
    



    <script>

        var navbar = document.getElementById("navbar");

        var sticky = navbar.offsetTop;

        window.onscroll = () => {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        } 
    </script>

    <script>
        const showOnPx = 185;
        const backToTopButton = document.querySelector(".back-to-top")

        const scrollContainer = () => {
        return document.documentElement || document.body;
        };

        document.addEventListener("scroll", () => {
        if (scrollContainer().scrollTop > showOnPx) {
            backToTopButton.classList.remove("hidden")
        } else {
            backToTopButton.classList.add("hidden")
        }
        })


        const goToTop = () => {
            document.body.scrollIntoView({
                behavior: "smooth",
            });
        };

        backToTopButton.addEventListener("click", goToTop)
    </script>

    <script>
        $('.containerPhotos div').css('height', $('.containerPhotos div').width() + 'px');

        $(window).resize(function() {
            $('.containerPhotos div').css('height', $('.containerPhotos div').width() + 'px');
        });
    </script>
    


</body>




</html>