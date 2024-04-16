<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="./icon/logo-black.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="./css/styles.css">

        <title>Saff & Co Perfume</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="./icon/logo-white.webp" alt="" class="nav__logo-img" style="width: 2.9rem;">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Best Seller</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Perfume</a>
                        </li>

                        <li class="nav__item">
                            <a href="#new" class="nav__link">New</a>
                        </li>

                        <a href="./php/login.php" class="button button--ghost">shop</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="./img/LAS POZAS/Las Pozas.42b21a94.webp" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Character</h4>
                                        <span class="home__details-subtitle">Enigmatic</span>
                                        <span class="home__details-subtitle">Warm Spicy</span>
                                        <span class="home__details-subtitle">Woody</span>
                                        <span class="home__details-subtitle">Creamy</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 BEST SELLER</h3>
                                    <h1 class="home__title">LAS POZAZ</h1>
                                    <p class="home__description">Rustling wind and singing birds, as i walk through the forest listening to the nature’s song of the Angel’s trumpet. White and hopeful, it breathes. Velvety body of Sumatran benzoin grounded with a humbling blend of cashmeran and sandalwood is serene yet so surreal. Stand still. LAS POZAS knows where you are. You must let it find you.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Learn More</a>
                                        <a href="#" class="button--link button--flex">Next Slide <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 2 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="./img/S.O.T.B/S.O.T.B.ccb7b148.webp" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                       <h4 class="home__details-title">Character</h4>
                                        <span class="home__details-subtitle2">Citrus</span>
                                        <span class="home__details-subtitle2">Floral</span>
                                        <span class="home__details-subtitle2">Creamy</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#2 BEST SELLER</h3>
                                    <h1 class="home__title">S.O.T.B</h1>
                                    <p class="home__description">S. O. T. B captures the perfect summer dream like no other: sun-kissed skin, colorful swimwear, fun pool parties, and a glass of refreshing Summer on the Beach! Designed with an exciting blend of mandarin, sweet floral notes, and rich vanilla musk, this tropical scent will remind you of warm sea breeze, soft sands, and lush palm trees on a hot summer day.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Learn More</a>
                                        <a href="#" class="button--link button--flex">Next Slide <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 3 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="./img/MINOUET/Minouet.07cd336c.webp" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Character</h4>
                                        <span class="home__details-subtitle3">Floral</span>
                                        <span class="home__details-subtitle3">ambery</span>
                                        <span class="home__details-subtitle3">Gourmand</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#3 BEST SELLER</h3>
                                    <h1 class="home__title">MINOUET</h1>
                                    <p class="home__description">Minouet dances to her own tunes, her chapters of wanderlust written among the star-studded sky. Gentle wind carries fragments of her passion, guiding hearts to embrace their worth and explore their imagination.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Book Now</a>
                                        <a href="#" class="button--link button--flex">Track Record <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            
            <!--==================== CATEGORY ====================-->
            <section class="section category">
                <h2 class="section__title">Best Seller <br> Category</h2>

                <div class="category__container container grid">
                    <div class="category__data">
                        <img src="assets/img/category1-img.png" alt="" class="category__img">
                        <h3 class="category__title">LAS POZAZ</h3>
                        <p class="category__description">A person who appreciates the peace and beauty of nature, and has an interest in mysterious and profound things. They may have introspective personalities and appreciate moments when they can connect with nature deeply.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category2-img.png" alt="" class="category__img">
                        <h3 class="category__title">S.O.T.B</h3>
                        <p class="category__description">A person who loves summer excitement and fun. Individuals who are active and love to explore life with a spirit of adventure.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category3-img.png" alt="" class="category__img">
                        <h3 class="category__title">MINOUE</h3>
                        <p class="category__description">Expression of free, adventurous, and inspiring individuals. They express freedom, a spirit of adventure, and exude an aura that motivates others.</p>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h1 class="section__title about__title">Constellation of Senses</h1>
                        <p class="about__description">Didirikan di Jakarta pada tahun 2020, SAFF & Co. membuat wewangian yang beresonansi dengan hati Indonesia yang bersemangat dan semangat yang berkembang. Selami dunia di mana tren kontemporer bertemu dengan aroma abadi, dan biarkan setiap semprotan menyalakan kenangan terbaik Anda.
                        </p>
                        <a href="./html/shop.html" class="button">Shop All</a>
                    </div>

                    <img src="./img/SAFF/SAFF-02.b4c26c01.webp" alt="" class="about__img">
                </div>
            </section>

            <!--==================== TRICK OR TREAT ====================-->
            <section class="section trick" id="trick">
                <h2 class="section__title">TOP 10</h2>

                <div class="trick__container container grid">
                    <div class="trick__content">
                        <img src="./img/CASCAVEL/Cascavel.5f123e66.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Cascavel</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>

                    <div class="trick__content">
                        <img src="./img/CHNO/CHNO.ef39465f.webp" alt="" class="trick__img">
                        <h3 class="trick__title">CHNO</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>

                    <div class="trick__content">
                        <img src="./img/ILIAD/Iliad.77637bcb.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Ilia</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>

                    <div class="trick__content">
                        <img src="./img/LOUI/Loui.b177b50f.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Loui</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>

                    <div class="trick__content">
                        <img src="./img/MALEALI/Maleali.e8c877f4.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Maleali</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>

                    <div class="trick__content">
                        <img src="./img/OMNIA/Omnia.453fb0ae.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Omnia</h3>
                        <span class="trick__subtitle"></span>
                        <span class="trick__price"></span>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOUNT ====================-->
            <section class="section discount">
                <div class="discount__container container grid">
                    <div class="discount__data">
                        <h2 class="discount__title">20% Discount <br> On New Products</h2>
                        <a href="#" class="button">Go to new</a>
                    </div>
                
                    <img src="./img/TROUPE/Troupe.d0bbcf37.webp" alt="" class="discount__img">
                </div>
            </section>

            <!--==================== NEW ARRIVALS ====================-->
            <section class="section new" id="new">
                <h2 class="section__title">New Arrivals</h2>

                <div class="new__container container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <div class="new__content swiper-slide">
                                <div class="new__tag">New</div>
                                <img src="./img/TROUPE/TROUPE-01.5885b973.webp" alt="" class="new__img">
                                <h3 class="new__title">TROUPE</h3>
                            

                            </div>
        
                            <div class="new__content swiper-slide">
                                <div class="new__tag">New</div>
                                <img src="./img/TROUPE/TROUPE-02.51a4ae6c.webp" alt="" class="new__img">
                                <h3 class="new__title">TROUPE</h3>
                                

                            </div>
        
                            <div class="new__content swiper-slide">
                                <div class="new__tag">New</div>
                                <img src="./img/TROUPE/TROUPE-03.08007d5b.webp" alt="" class="new__img">
                                <h3 class="new__title">TROUPE</h3>
                            
                            </div>
        
        
                            <div class="new__content swiper-slide">
                                <div class="new__tag">New</div>
                                <img src="./img/TROUPE/TROUPE-03.08007d5b.webp" alt="" class="new__img">
                                <h3 class="new__title">TROUPE</h3>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="./icon/logo-white.webp" alt="" class="footer__logo-img">
                        </a>

                        <p class="footer__description">Enjoy your life <br> with my fragrance.</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Explore</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="./php/login.php" class="footer__link">Shop All</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Discover</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Shop</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="https://shopee.co.id/shop/267621044?utm_campaign=-&utm_content=----&utm_medium=affiliates&utm_source=an_11043180003&utm_term=aup6jegwv6w9&is_from_login=true" class="footer__link">Shopee</a>
                            </li>
                            <li>
                                <a href="https://www.lazada.co.id/shop/saff-co?path=index.htm&trafficFrom=17449020_310877&laz_trackid=2:mm_288850374_100250779_2059350573:clkgi48qp1hpghsep9qgem&mkttid=clkgi48qp1hpghsep9qgem" class="footer__link">Lazada</a>
                            </li>
                            <li>
                                <a href="https://www.tokopedia.com/saffnco" class="footer__link">Tokopedia</a>
                            </li>
                            <li>
                                <a href="https://www.zalora.co.id/store/saff-co-official-store" class="footer__link">Zalora</a>
                            </li>
                            <li>
                                <a href="https://www.blibli.com/merchant/saff-co-official-store/SAC-70080?_branch_match_id=1265574465198110731&utm_source=Web&utm_medium=Share-Store&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXT8rJBCK9xIICvZzMvGx908CwrEpPw%2BAkxyQA5gm00SMAAAA%3D&pickupPointCode=ALL_LOCATIONS" class="footer__link">Blili</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Our Company</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Yeni Faturohmag & Khalila Puspita 2024</span>

                <img src="assets/img/footer1-img.png" alt="" class="footer__img-one">
                <img src="assets/img/footer2-img.png" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="./js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="./js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="./js/main.js"></script>
    </body>
</html>