<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASCAVEL</title>
    <link rel="stylesheet" href="./cascavel.css" />
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body>
    <section class="navbar">
        
        <i class="fa-sharp fa-solid fa-arrow-left-long fa-2xs" href="#"></i>
        <p>|</p>
        <marquee behavior="infinite" direction="">SAFF & CO.  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; CASCAVEL &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; SAFF & CO. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CASCAVEL</marquee>
    </section>

    <div class="min-content">
        <div class="fadein">
            <img id="f4" src="../../img/CASCAVEL/CASCAVEL-02.7e5cba0c.webp" style="width: 65vh; height: 65vh;" />
            <img id="f3" src="../../img/CASCAVEL/CASCAVEL-03.aa033d97.webp" style="width: 65vh; height: 65vh;" />
            <img id="f2" src="../../img/CASCAVEL/CASCAVEL-01.4dcab07b.webp" style="width: 65vh; height: 65vh;" />
        </div>
    </div>

    <div class="description">

        <div class="des">
            <section class="container">
                <ul class="tabs">
                  <li class="tab-item">
                    <a href="#item1" class="active">About</a>
                  </li>
                  <li class="tab-item">
                    <a href="#item2">Detail</a>
                  </li>
                  <li class="tab-item">
                    <a href="#item3">Notes</a>
                  </li>
                  <li class="tab-item">
                    <a href="#item4">Characters</a>
                  </li>
                </ul>
                <br>
                <hr>
          
                <div class="wrapper_tab-content">
                  <article id="item1" class="tab-content content-visible">
                    <p>
                         &emsp; Cascavel translates the modern-day, day-to-night elegance into a luxurious, warm-spiced floral infusion. We introduced stronger saffron notes in the opening to bring exotic warmth and spice into the fragrance. To balance the rich depth of saffron, we added a delicate blend of sweetness with violet and lily of the valley – a truly dreamy scent made for all genders alike.
                    </p>
                  </article>

                  <article id="item2" class="tab-content">
                    <p>
                        &emsp;With <mark>Saffron</mark>and <mark>Orange Blossom</mark> on top.
                        <br>
                        <mark>Jasmine,  Violet, and Lily</mark> for the middle layer.
                        <br>
                        And also the <mark>Oakmoss and Ambergriss</mark> as the dry down.
                    </p>
                  </article>
                  <article id="item3" class="tab-content">
                    
                    <div class="pi">
                        <p>
                            Size<br>
                            Longevity<br>
                            Sillage<br>
                            Gender<br>
                        </p>

                        <p>
                            30 ml<br>
                            6 Hours<br>
                            Strong<br>
                            Unisex<br>
                        </p>
                    </div>
                  </article>
                  <article id="item4" class="tab-content">
                    
                    <p>
                        <div class="char">
                                <div class="char-list">
                                    <div class="box c1">
                                        <text>Woody</text>
                                    </div>
                                    <div class="box c2">
                                        <text>Warm Spicy</text>
                                    </div>
                                    <div class="box c3">
                                        <text>Aromatic</text>
                                    </div>
                                </div>
                        </div>
                    </p>
                  </article>

                </div>
                <button id="button">
                    <a href="#">BOOK NOW</a>
                </button>
              </section>
          
              <script>
  function getTab(el) {
    const active = document.querySelector(".active");
    const visible = document.querySelector(".content-visible");
    const tabContent = document.getElementById(el.href.split("#")[1]);

    active.classList.toggle("active");
    visible.classList.toggle("content-visible");

    el.classList.add("active");
    tabContent.classList.add("content-visible");
  }

  document.querySelector(".description").addEventListener("click", (e) => {
    if (e.target.matches(".tab-item a")) {
      e.preventDefault(); // Mencegah default behavior (merefresh atau scrolling)

      getTab(e.target);
    }
  });
</script>

                
        </div>
    </div>

    </div>

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
        <link rel="stylesheet" href="../css/styles.css">

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


</body>
</html>