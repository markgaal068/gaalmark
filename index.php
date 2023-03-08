<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaál Márk</title>
    <!--CSS FILEOK-->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image" href="./img/hatterek/logo.png.jpg">
    <!--JS FILEOK-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/27e1855d03.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!--FŐFELE GOMB-->
    <div class="scroll-up-btn">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--NAVIGÁCIÓS SOR-->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">G<span>M.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Főoldal</a></li>
                <li><a href="#services">Szolgáltatások</a></li>
                <li><a href="#about">Rólam</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav> 


    <!--FŐOLDAL-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Üdvözöllek az oldalon, a nevem</div>
                <div class="text-2">Gaál Márk</div>
                <div class="text-3"><span class="typing"></span></div>
                <a href="#about">Bővebben!</a>
            </div>
        </div>
    </section>


    <!--SZOLGÁLTATÁSOK-->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Szolgáltatások</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Development</div>
                        <p>Weboldal készítés <br>Logo tervezése<br>Rendszerkarbantartás</p>
                    </div>    
                </div> 
                <div class="card">
                    <div class="box">
                        <i class="fas fa-calculator"></i>
                        <div class="text">Korrepetáció</div>
                        <p> Matematika <br> Online <br> Középszintű érettségiig</p>
                    </div>    
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-hourglass"></i>
                        <div class="text">Hamarosan</div>
                        <p><small>..hamarosan..</small> <br> <small>..hamarosan..</small> <br> <small>..hamarosan..</small> </p>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <!--ABOUT-->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Rólam</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="./img/profilok/profil1.jpg" alt="Gaál Márk">
                </div>
                <div class="column right">
                    <div class="text">Márk vagyok, egy <span class="typing2"></span></div>
                    <p>Egészen kis korom óta érdeklődtem az informatika, valamint a programozás iránt. Már az elemi iskola során világossá vált számomra, hogy későbbiekben ezzel szeretnék foglalkozni. Első weboldalam Keresztanyám megkeresésére készült, az<a href="www.ekrafoto.com"> ekrafoto.com.</a> Középiskolában szert tehettem programozási illetve gépészeti készségekre is, melyet jelen vállalkozásomban szeretném kamatoztatni.</p>
                    <span><a href="gm_oneletrajz.pdf">Önéletrajzom</a></span>
                </div>
            </div>
        </div>
    </section>


    <!--Kontakt-->

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Kapcsolat</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Így keress:</div>
                    <p>Minden megkeresésre megpróbálok mielőbb válaszolni. Árajánlatot e-mailben lehet kérni.</p>   
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Név</div>
                                <div class="sub-title">Gaál Márk</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Cím</div>
                                <div class="sub-title">Győr, Magyarország</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Telefon</div>
                                <div class="sub-title">+36 30 557 9877</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">E-mail lehetőség:</div>
                    <form action="contact.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Name" placeholder="Név">
                            </div>
                            <div class="field email">
                                <input type="email" name="Email" placeholder="E-mail">
                            </div>
                        </div>   
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Tárgy">
                        </div>
                        <div class="field textarea">
                            <textarea name="Message" cols="30" rows="10" placeholder="Fejtsd ki a kérésed pár szóban.."></textarea>
                        </div>
                        <div class="button">
                            <button class="submit" name="submit">Küldés!</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="footer-content">
            <h3>G<span>M.</span></h3>
            <p>"A kreativitás olyan ötleteket eredményez, amelyek újak neked. Az innováció olyan ötleteket eredményez, amelyek újak az egész világnak." - Tina Seeling</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/mark.gaal.12/"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCA99AYXlBBWI3eIT45ctIVg"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.tiktok.com/@markgaal_"><i class="fab fa-tiktok"></i></a></li>
                <li><a href="https://www.twitch.tv/homersenpai"><i class="fab fa-twitch"></i></a></li>
                <li><a href="https://www.instagram.com/gaal_mark55/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 G<span>M.</span> Oldalt készítette <span><a href="#">Gaál Márk</a></span></p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>


