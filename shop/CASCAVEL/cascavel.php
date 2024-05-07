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


</body>
</html>