<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematyka</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../splide-2.4.21/dist/css/splide.min.css" />
    <link rel="stylesheet" href="../css/main-style.css" />  
    
    <script src="../splide-2.4.21/dist/js/splide.min.js"></script>

    <?php
        error_reporting(E_ALL^E_NOTICE^E_WARNING);

        $p = $_GET['page'];

        $css = '<link rel="stylesheet" href="../css/'.$p.'.css" />';

        if(isset($css))
            echo $css;
        else
            echo 'error2';
    ?>

</head>
<body>
    <header>
        <nav class="nav">
            <i class="fa-solid fa-bars hamburger"></i>
            <ul class="nav-bar">
                <li class="nav-item page-active"><a href="home-page.php?page=home-page">Strona Główna</a></li>
                <li class="nav-item"><a href="home-page.php?page=famous-math">Znani Matematycy</a> </li>
                <li class="nav-item"><a href="home-page.php?page=curiosites">Ciekawostki</a> </li>
                <li class="nav-item"><a href="home-page.php?page=shop">Sklep</a></li>
                <li class="nav-item"><a href="home-page.php?page=movies">Filmy</a></li>
                <li class="nav-item"><a href="home-page.php?page=applications">Aplikacje</a></li>
                <li class="nav-item"><a href="home-page.php?page=contact">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <?php
        error_reporting(E_ALL^E_NOTICE^E_WARNING);
        include('showpage.php');

        $p = $_GET['page'];
        
        PokazPodstrone($p);
    ?>

    <footer class="footer">
        <div class="footer-links">
            <div class="footer-logo"><i class="fa-regular fa-font-awesome"></i></div>
            <ul class="footer-col1">
                <li><a href="home-page.html">Strona Główna</a></li>
                <li><a href="famous-math.html">Znani Matematycy</a></li>
                <li><a href="curiosites.html">Ciekawostki</a></li>
            </ul>
            <ul class="footer-col2">
                <li><a href="shop.html">Sklep</a></li>
                <li><a href="applications.html">Aplikacje</a></li>
                <li><a href="contact.html">Kontakt</a></li>
            </ul>
            <ul class="footer-col3">
                <li><a href="">Eum eligendi</a></li>
                <li><a href="">Vitae nam</a></li>
                <li><a href="">Tempora</a></li>
            </ul>
        </div>

        <div class="footer-socials">
            <div>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-google"></i></a>
            </div>
            <p>Copyright © Tom Hansk All Rights Reserved.</p>
        </div>
    </footer>


    <script src="../js/nav-bar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="../js/auto-type.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/jquery.js" type="text/javascript"></script>

    <?php
        $nr_indeksu = '162603';
        $nrGrupy = '4';

        echo 'Autor: Kacper Wadecki '.$nr_indeksu.' grupa: '.$nrGrupy.'<br/><br/>';
    ?>
</body>
</html>