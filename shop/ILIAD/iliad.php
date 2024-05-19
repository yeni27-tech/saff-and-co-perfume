<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILIAD</title>
    <link rel="stylesheet" href="../CASCAVEL/cascavel.css" />
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/c425e24s8.js"></script>
</head>

<body>
    <section class="navbar">
        <a href="../../php/pos.php">
        <i class="fa-sharp fa-solid fa-arrow-left-long fa-2xs"></i>
        </a>
        <p>|</p>
        <marquee behavior="infinite" direction="">SAFF & CO.  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; CASCAVEL &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; SAFF & CO. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CASCAVEL</marquee>
    </section>

    <div class="min-content">
        <div class="fadein">
            <img id="f4" src="../../img/ILIAD/ILIAD-01.6d72b911.webp" style="width: 65vh; height: 65vh;" />
            <img id="f3" src="../../img/ILIAD/ILIAD-02.1248b953.webp" style="width: 65vh; height: 65vh;" />
            <img id="f2" src="../../img/ILIAD/ILIAD-03.724c68df.webp" style="width: 65vh; height: 65vh;" />
        </div>
    </div>

    <div class="description">

        <div class="des">
            <section class="container">
                <ul class="tabs">
                  <li class="tab-item1">
                    <a href="#item1" class="active1">About</a>
                  </li>
                  <li class="tab-item1">
                    <a href="#item2">Detail</a>
                  </li>
                  <li class="tab-item1">
                    <a href="#item3">Notes</a>
                  </li>
                  <li class="tab-item1">
                    <a href="#item4">Characters</a>
                  </li>
                </ul>
                <br>
                <hr>
          
                <div class="wrapper_tab-content">
                  <article id="item1" class="tab-content content-visible">
                    <p>
                      &emsp;ILIAD is an olfactory homage to Homer’s epic poem – a divine scent that transports you to the golden age of heroes. Inspired by the poem's protagonist, ILIAD sings the saga of Achilles in the notes of sun-kissed cashmeran, sensual amber, and sultry florals.                    
                    </p>
                  </article>

                  <article id="item2" class="tab-content">
                    <p>
                        &emsp;With <mark>Pink Peppercorn</mark> <mark>Peony</mark> and <mark>Muguet</mark> on the top layer.
                        <br>
                        <mark>Ylang-ylang,  Iris, and Hedione</mark> for the middle.
                        <br>
                        And also the <mark>Amber</mark> <mark>Cashmeran</mark> and <mark>Amber</mark> for the dry down.
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
                                        <text>Fruity</text>
                                    </div>
                                    <div class="box c2">
                                        <text>Floral</text>
                                    </div>
                                    <div class="box c3">
                                        <text>Creamy</text>
                                    </div>
                                </div>
                        </div>
                    </p>
                  </article>

                </div>
               
              </section>
          
              <script>
  function getTab(el) {
    const active = document.querySelector(".active1");
    const visible = document.querySelector(".content-visible");
    const tabContent = document.getElementById(el.href.split("#")[1]);

    active.classList.toggle("active1");
    visible.classList.toggle("content-visible");

    el.classList.add("active1");
    tabContent.classList.add("content-visible");
  }

  document.querySelector(".description").addEventListener("click", (e) => {
    if (e.target.matches(".tab-item1 a")) {
      e.preventDefault(); // Mencegah default behavior (merefresh atau scrolling)

      getTab(e.target);
    }
  });
</script>

                
        </div>
    </div>

    </div>


  <footer>
    <div class="row">
       <div class="col">
        <img src="../../icon/logo-white.webp" class="logo">
        <p>SAFF & CO.</p>
       </div>
       <div class="col">
        <h3>Office <div class="underline"><span></span></div></h3>
        <p>ITPL Road</p>
        <p>White Field</p>
        <p>kartanaka, PIN 560066, India</p>
        <p class="email-id">khalilapuspita25@gmail.com</p>
        <h4>+62-085759158087</h4>
       </div>
       <div class="col">
        <h3>links  <div class="underline"><span></span></div></h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">services</a></li>
          <li><a href="#">Login</a></li>
        </ul>
       </div>
       <div class="col">
        <h3>news letter <div class="underline"><span></span></div></h3>
        <form>
          <i class="far fa-envelope"></i>
          <input type="email" placeholder="Enter your email id" required></input>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </form>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-pinterest"></i>
        </div>
       </div>
    </div>
    <hr>
    <p class="copyright">Yen & Khal 2024</p>
  </footer>

  <style>
    footer {
    width: 100%;
    position: absolute;
    bottom: 0;
    background: linear-gradient(to right, #00093c, #2d0b00);
    color: #fff;
    padding: 100px 0 30px;
    border-top-left-radius: 125px;
    font-size: 13px;
    line-height: 20px;
}

.row {
    width: 95%;
    display: flex;
    margin: auto;
    align-items: flex-start;
    justify-content: space-between;
}

.col {
    flex-basis: 25%;
    padding: 10px;
}

.col:nth-child(2){
  flex-basis: 15%;
}

.logo {
    width: 80px;
    margin-bottom: 30px;
}

.col h3 {
    width: fit-content;
    margin-bottom: 40px;
    position: relative;

}

.email-id {
    width: fit-content;
    border-bottom: 1px solid #ccc;
    margin: 20px 0;
}

ul li {
    list-style: none;
    margin-bottom: 12px;
}

ul li a {
    text-decoration : none;
    color: #fff;
}

form {
  padding-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  margin-bottom: 50px;
}

form .far {
  font-size: 18px;
  margin-right: 10px;
}

form input {
  width: 100%;
  background: transparent;
  color: #ccc;
  outline: none;
}

form button {
  background: transparent;
  border: 0;
  outline: none;
  cursor: pointer;
}

form button .far {
  font-size: 16px;
  color: #ccc;
}

social-icons .fab {
  width: 10px;
  height: 40px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color: #000;
  background: #fff;
  margin-right: 15px;
  cursor: pointer;
}

hr {
  width: 90%;
  border: 0;
  border-bottom: 1px solid #ccc;
  margin: 20px auto;
}

.copyright {
  text-align: center;
}

.underline {
  width: 100%;
  height: 5px;
  background: #767676;
  border-radius: 3px;
  position: absolute;
  left: 0;
  overflow: hidden;
}

.underline span {
  width: 15%;
  height: 100%;
  background: #fff;
  border-radius: 3px;
  position: absolute;
  top: 0;
  left: 10px;
  animation: moving 2s linear infinite;
}

@keyframes moving {
  0%{
    left: -20%;
  }
  100%{
    left: 100%;
  }
}
  </style>

   
  
</body>
</html>