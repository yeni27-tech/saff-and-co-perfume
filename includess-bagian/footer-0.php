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
        <style>
            /*=============== GOOGLE FONTS ===============*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap');

/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3.5rem;

  /*========== Colors ==========*/
  --hue: 14;
  --first-color: hsl(var(--hue), 91%, 54%);
  --first-color-alt: hsl(var(--hue), 91%, 50%);
  --title-color: hsl(var(--hue), 4%, 100%);
  --text-color: hsl(var(--hue), 4%, 85%);
  --text-color-light: hsl(var(--hue), 4%, 55%);
  --bseller: #000000a5;
  --abseller:rgba(59, 59, 59, 0.639);

  /*character*/
  --enigmatic: #864e87;
  --warm_spicy: #ba5c5b;
  --woody:#795e43;
  --creamy:#ca9775;
  --floral:#a262a3;
  --citrus:rgba(239, 206, 97, 0.667);
  --ambery:rgba(255, 146, 79, 0.863);
  --gourmand:#8c548d;

  /*Green gradient*/
  --body-color: linear-gradient(90deg, #61a5a5 0%, #5E1675 100%);
  --container-color: linear-gradient(136deg, hsl(275, 40%, 26%) 0%, hsl(192, 13%, 16%) 100%);
  
  /*Red gradient*/
  /* --body-color: linear-gradient(90deg, hsl(360, 28%, 40%) 0%, hsl(18, 28%, 40%) 100%);
  --container-color: linear-gradient(136deg, hsl(360, 28%, 35%) 0%, hsl(18, 28%, 35%) 100%); */

  /*Black solid*/
  /* --body-color: hsl(30, 8%, 8%);
  --container-color: hsl(30, 8%, 10%); */

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2rem;
  --h1-font-size: 1.5rem;
  --h2-font-size: 1.25rem;
  --h3-font-size: 1rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;
  --font-black: 900;

  /*========== Margenes Bottom ==========*/
  --mb-0-25: .25rem;
  --mb-0-5: .5rem;
  --mb-0-75: .75rem;
  --mb-1: 1rem;
  --mb-1-5: 1.5rem;
  --mb-2: 2rem;
  --mb-2-5: 2.5rem;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

/* Responsive typography */
@media screen and (min-width: 992px) {
  :root {
    --biggest-font-size: 4rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.5rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  scroll-behavior: smooth;
}

.new__button> a{
  color: white;
  text-decoration: none;
  list-style-type: none;
  display: none;
}

html{
  scroll-behavior: smooth;
}

body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background: var(--body-color);
  color: var(--text-color);
}

h1,h2,h3,h4{
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
}

ul{
  list-style: none;
}

a{
  text-decoration: none;
}

img{
  max-width: 100%;
  height: auto;
}

button,
input{
  border: none;
  outline: none;
}

button{
  cursor: pointer;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}


/*=============== FOOTER ===============*/
.footer{
  position: relative;
  overflow: hidden;
  background-color: black;
}

.footer__img-one,
.footer__img-two{
  position: absolute;
  transition: .3s;
}

.footer__img-one{
  width: 100px;
  top: 6rem;
  right: -2rem;
}

.footer__img-two{
  width: 150px;
  bottom: 4rem;
  right: 4rem;
}

.footer__img-one:hover,
.footer__img-two:hover{
  transform: translateY(-.5rem);
}

.footer__container{
  row-gap: 2rem;
}

.footer__logo{
  display: flex;
  align-items: center;
  column-gap: .5rem;
  margin-bottom: var(--mb-1);
  font-weight: var(--font-medium);
  color: var(--title-color);
}

.footer__logo-img{
  width: 100px;
}

.footer__description{
  margin-bottom: var(--mb-2-5);
}

.footer__social{
  display: flex;
  column-gap: .75rem;
}

.footer__social-link{
  display: inline-flex;
  background: var(--container-color);
  padding: .25rem;
  border-radius: .25rem;
  color: var(--title-color);
  font-size: 1rem;
}

.footer__social-link:hover{
  background: var(--body-color);
}

.footer__title{
  font-size: var(--h3-font-size);
  margin-bottom: var(--mb-1);
}

.footer__links{
  display: grid;
  row-gap: .35rem;
}

.footer__link{
  font-size: var(--small-font-size);
  color: var(--text-color);
  transition: .3s;
}

.footer__link:hover{
  color: var(--title-color);
}

.footer__copy{
  display: block;
  text-align: center;
  font-size: var(--smaller-font-size);
  margin-top: 4.5rem;
}

/*=============== SCROLL UP ===============*/
.scrollup{
  position: fixed;
  background: var(--container-color);
  right: 1rem;
  bottom: -20%;
  display: inline-flex;
  padding: .3rem;
  border-radius: .25rem;
  z-index: var(--z-tooltip);
  opacity: .8;
  transition: .4s;
}

.scrollup__icon{
  font-size: 1.25rem;
  color: var(--title-color);
}

.scrollup:hover{
  background: var(--container-color);
  opacity: 1;
}

/* Show Scroll Up*/
.show-scroll{
  bottom: 3rem;
}

/*=============== SCROLL BAR ===============*/
::-webkit-scrollbar{
  width: 0.6rem;
  background: #413e3e;
}

::-webkit-scrollbar-thumb{
  background: #272525;
  border-radius: .5rem;
}

/*===============  BREAKPOINTS ===============*/
/* For small devices */
@media screen and (max-width: 320px){
  .container{
    margin-left: var(--mb-1);
    margin-right: var(--mb-1);
  }

  .home__img{
    height: 200px;
  }
  .home__buttons{
    flex-direction: column;
    width: max-content;
    row-gap: 1rem;
  }

  .category__container,
  .trick__container{
    grid-template-columns: .8fr;
    justify-content: center;
  }
}

/* For medium devices */
@media screen and (min-width: 576px){
  .about__container{
    grid-template-columns: .8fr;
    justify-content: center;
  }

  .newsletter__container{
    display: grid;
    grid-template-columns: .7fr;
    justify-content: center;
  }
  .newsletter__description{
    padding: 0 3rem;
  }
}

@media screen and (min-width: 767px){
  body{
    margin: 0;
  }

  .section{
    padding: 7rem 0 2rem;
  }

  .nav{
    height: calc(var(--header-height) + 1.5rem);
  }
  .nav__img,
  .nav__close,
  .nav__toggle{
    display: none;
  }
  .nav__list{
    flex-direction: row;
    column-gap: 3rem;
  }
  .nav__link{
    text-transform: initial;
    font-weight: initial;
  }

  .home__content{
    padding: 8rem 0 2rem;
    grid-template-columns: repeat(2, 1fr);
    gap: 4rem;
  }
  .home__img{
    height: 300px;
  }
  .swiper-pagination{
    margin-top: var(--mb-2);
  }

  .category__container{
    grid-template-columns: repeat(3, 200px);
    justify-content: center;
  }

  .about__container{
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }
  .about__title,
  .about__data{
    text-align: initial;
  }
  .about__img{
    width: 250px;
  }

  .trick__container{
    grid-template-columns: repeat(3, 200px);
    justify-content: center;
    gap: 2rem;
  }

  .discount__container{
    grid-template-columns: repeat(2, max-content);
    justify-content: center;
    align-items: center;
    column-gap: 3rem;
    padding: 3rem 0;
    border-radius: 3rem;
  }
  .discount__img{
    width: 350px;
    order: -1;
  }
  .discount__data{
    padding-right: 6rem;
  }

  .newsletter__container{
    grid-template-columns: .5fr;
  }

  .footer__container{
    grid-template-columns: repeat(4, 1fr);
    justify-items: center;
    column-gap: 1rem;
  }
  .footer__img-two{
    right: initial;
    bottom: 0;
    left: 15%;
  }
}

/* For large devices */
@media screen and (min-width: 992px){
  .container{
    margin-left: auto;
    margin-right: auto;
  }

  .section__title{
    font-size: var(--h1-font-size);
    margin-bottom: 3rem;
  }

  .home__content{
    padding-top: 9rem;
    gap: 3rem;
  }
  .home__group{
    padding-top: 0;
  }
  .home__img{
    height: 400px;
    transform: translateY(-3rem);
  }
  .home__indicator{
    top: initial;
    right: initial;
    bottom: 15%;
    left: 45%;
  }
  .home__indicator::after{
    top: 0;
    height: 75px;
  }
  .home__details-img{
    bottom: 0;
    right: 58%;
  }
  .home__title{
    margin-bottom: var(--mb-1-5);
  }
  .home__description{
    margin-bottom: var(--mb-2-5);
    padding-right: 2rem;
  }

  .category__container{
    column-gap: 8rem;
  }
  .category__img{
    width: 200px;
  }

  .about__container{
    column-gap: 7rem;
  }
  .about__img{
    width: 350px;
  }
  .about__description{
    padding-right: 2rem;
  }

  .trick__container{
    gap: 3.5rem;
  }
  .trick__content{
    border-radius: 1.5rem;
  }
  .trick__img{
    width: 110px;
  }
  .trick__title{
    font-size: var(--h3-font-size);
  }

  .discount__container{
    column-gap: 7rem;
  }

  .new__content{
    width: 310px;
    border-radius: 1rem;
    padding: 2rem 0;
  }
  .new__img{
    width: 150px;
  }
  .new__img,
  .new__subtitle{
    margin-bottom: var(--mb-1);
  }
  .new__title{
    font-size: var(--h3-font-size);
  }

  .footer__copy{
    margin-top: 6rem;
  }
}

@media screen and (min-width: 1200px){
  .home__img{
    height: 420px;
  }
  .swiper-pagination{
    margin-top: var(--mb-2-5);
  }
  .footer__img-one{
    width: 120px;
  }
  .footer__img-two{
    width: 180px;
    top: 30%;
    left: -3%;
  }
}

/*=============== KEYFRAMES ===============*/
@keyframes floating {
  0% { transform: translate(0,  0px); }
  50%  { transform: translate(0, 15px); }
  100%   { transform: translate(0, -0px); }   
}

        </style>

        <title>Saff & Co Perfume</title>
    </head>
    <body>

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
                                <a href="./php/discover.php" class="footer__link">Discover</a>
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

                <span class="footer__copy">&#169; Yeni Faturohmah & Khalila Puspita 2024</span>

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