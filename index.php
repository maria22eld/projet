<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>HomMed</title>
    <link rel="icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs-evCX0sDEn8pGsAYdRGX1mjgozyKiStzwg&usqp=CAU"
        type="image/x-icon">

        
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://kit.fontawesome.com/c1cf00cdc6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="briefDesc.css">

    <link rel="stylesheet" href="souha2.css">

</head>

<body>
    <header>
        <div class="banner">
            <div class="navbar">
                <h2 class="logo">HomMed</h2>
                <ul>
                    <li><a href="index.html">ACCEUIL</a></li>
                    <li><a href="apropos.html">A PROPOS</a></li>
                    <li><a href="services.html">SERVICE</a></li>
                    <li><a href="index.html#footer">CONTACT</a></li>
                </ul>
                <i class="fa-solid fa-bars" style="color: #f5f5f5;" id="burgermenu"></i>
            </div>
            <div class="content">
                <h1 class="animated">VOTRE SANTÉ EST NOTRE PRIORITÉ</h1>

                <p>Vous etes malades...Vous ne pouvez pas se déplacer...HomeMed est à votre disposition!</p>
                <div class="banner_btn">
                    <a href="register.html"><span></span>Registrations</a>
                    <a href="rendez_vous.html"><span></span>Rendez-vous</a></button>
                </div>
            </div>
    </header>
    <main>
         <div> <button id="scrollToTopBtn" onclick="scrollToTop()">  <i class="fa-solid fa-arrow-up" style="color: #000000;"></i></button>
        <div class="souha">
            <div class="title">
                <h1>services</h1>
            </div>
            <div class="container">



                <div class="services_2">
                    <div class="services">
                        <div class="sss">
                        </div>
                        <div class="heart-rate">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="73px"
                                viewBox="0 0 150 73" enable-background="new 0 0 150 73" xml:space="preserve">
                                <polyline fill="none" stroke="#009B9E" stroke-width="3" stroke-miterlimit="10" points="0,45.486 38.514,45.486 44.595,33.324 50.676,45.486 57.771,45.486 62.838,55.622 71.959,9 80.067,
                   63.729 84.122,45.486 97.297,45.486 103.379,40.419 110.473,45.486 150,45.486" />
                            </svg>
                            <!--<svg> element defines the canvas or viewport in which the other SVG elements(<polyline>) are drawn.-->

                            <div class="fade-in"> </div>

                            <div class="fade-out"> </div>
                        </div>

                    </div>
                    <a href="services.html#medical" class="links">
                        <p>Services Medical</p>
                    </a>
                </div>
                </a>


                <div class="services_2">
                    <div class="icons"><i class="fa-solid fa-syringe"></i></div>
                    <a href="services.html#paramedical" class="links">
                        <p>Services Paramedicale</p>
                    </a>
                </div>

            </div>
        </div>
        <div class="yousra">
            <h2 class="briefDescriptionTitle">Dans notre site</h2>
            <div class="briefDescription">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-suitcase-medical"></i></div>
                    <p>
                        tout les services médicaux et paramédicaux sont disponibles</b>
                    </p>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-stethoscope"></i></div>
                    <p>
                        des docteurs et des infirmiers professionnels
                    </p>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-hand-holding-medical"></i></div>
                    <p>
                        service VIP et assistance bénévole
                    </p>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-laptop-file"></i></div>
                    <p>
                        un site convivial et facile à utiliser
                    </p>
                </div>
            </div>
        </div>
        <div class="gs">
            <h2>Nos meilleurs docteur</h2>
            <div class="containerSouha">
                <div class="card" style="--clr:#009688;">
                    <div class="imgBx">
                        <img src="./doctors/doc1.jpeg" alt="doc1">
                    </div>
                    <div class="content">
                        <h2>Doctor1</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio velit maiores commodi et
                            provident
                            unde, vitae assumenda laboriosam, iure quia ex inventore ad, repellat qui quas harum dignissimos
                            optio asperiores.
                        </p>
                        <a href="doctorProfile.html">Consult profile</a>
                    </div>
                </div>
                <div class="card" style="--clr:#ff3e7f;">
                    <div class="imgBx">
                        <img src="./doctors/doc2.jpeg" alt="doc2">
                    </div>
                    <div class="content">
                        <h2>Doctor2</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio velit maiores commodi et
                            provident
                            unde, vitae assumenda laboriosam, iure quia ex inventore ad, repellat qui quas harum dignissimos
                            optio asperiores
    
                        </p>
                        <a href="doctorProfile.html">Consult profile</a>
                    </div>
                </div>
                <div class="card" style="--clr:#03a9f4;">
                    <div class="imgBx">
                        <img src="./doctors/doc3.jpeg" alt="doc3">
                    </div>
                    <div class="content">
                        <h2>Doctor3</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio velit maiores commodi et
                            provident
                            unde, vitae assumenda laboriosam, iure quia ex inventore ad, repellat qui quas harum dignissimos
                            optio asperiores.
                        </p>
                        <a href="doctorProfile.html">Consult profile</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="row">
            <div class="col">
                <div class="logo"><b>HomeMed</b></div>
                <p> Contactez-nous pour des soins de santé de qualité. Nous sommes là pour vous </p>
            </div>
            <div class="col">
                <h3>Contact
                    <div class="underline"><span></span></div>
                </h3>
                <div class="contact"><a href="mailto:contact@ensia.edu.dz" title="Contactez-nous"
                        style="text-decoration: none;"><span style="color: rgb(255, 255, 255);"><i
                                class="fa-regular fa-envelope"></span></i><span style="color: rgb(255, 255, 255);">
                            envoyer nous un email</span></i></a></div>

                <i class="fa-solid fa-mobile"> <i>+213 - 524672488</i></i>
            </div>
            <div class="col">
                <h3>Réseaux Sociaux
                    <div class="underline"><span></span></div>
                </h3>
                <p>Suivez-nous sur les différents réseaux sociaux, toutes les nouvelles y seront publiées.</p>
                <div class="social-icons">
                    <i><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook"></i></a>
                    </i>
                    <i><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </i>
                    <i><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </i>
                    <i><a href="https://telegram.org/dl"><i class="fab fa-telegram"></i></a>
                    </i>
                </div>
            </div>
            <div class="col">
                <h3>Bulletin
                    <div class="underline"><span></span></div>
                </h3>
                <form>
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder=" Indiquez votre adresse E-Mail " required>
                    <button type="submit"><i class="fa-solid fa-arrow-right "></i></button>
                </form>

            </div>
        </div>
        <hr>
        <p class="copyright"> HOMEMED &copy; 2023 - Tous Droits Réservés</p>
    </footer>
            <div class="side-bar">
            <ul>
                <li><a href="index.html">ACCEUIL</a></li>
                <li><a href="apropos.html">A PROPOS</a></li>
                <li><a href="services.html">SERVICE</a></li>
                <li><a href="index.html#footer">CONTACT</a></li>
            </ul>
        </div>
    <script src="briefDesc.js"></script>
    <script src="typing.js"></script>
    <script src="nav.js"></script>
</body>

</html>
