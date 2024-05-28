<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TROUPE</title>
    <link rel="stylesheet" href="../CASCAVEL/cascavel.css" />
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>
    <section class="navbar">
        <a href="../../php/pos.php">
        <i class="fa-sharp fa-solid fa-arrow-left-long fa-2xs"></i>
        </a>
        <p>|</p>
        <marquee behavior="infinite" direction="">SAFF & CO.  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; TROUPE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; SAFF & CO. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A SYMPHONY OF SENSE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TROUPE</marquee>
    </section>

    <div class="min-content">
        <div class="fadein">
            <img id="f4" src="../../img/TROUPE/TROUPE-01.5885b973.webp" style="width: 65vh; height: 65vh;" />
            <img id="f3" src="../../img/TROUPE/TROUPE-02.51a4ae6c.webp" style="width: 65vh; height: 65vh;" />
            <img id="f2" src="../../img/TROUPE/TROUPE-03.08007d5b.webp" style="width: 65vh; height: 65vh;" />
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
                      &emsp;TROUPE our fragrance with its ethereal floral and fruity blend. With musky patchouli as the base note, TROUPE is serene and sweet, yet classy enough to steal the attention of the people around you.       
                    </p>
                  </article>

                  <article id="item2" class="tab-content">
                    <p>
                        &emsp;With Citrus and Pear on the top layer.
                        <br>
                        Rose, Orang Blossom, and Freesia for the middle.
                        <br>
                        And also the Pathouli, Musk and Amber for the dry down note.
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
                                        <text>Sweet</text>
                                    </div>
                                    <div class="box c2">
                                        <text>Rose</text>
                                    </div>
                                    <div class="box c3">
                                        <text>Fruity</text>
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
        <p>Consteletion Of Sense</p>
       </div>
       <div class="col">
        <h3>Address <div class="underline"><span></span></div></h3>
        <p>SMKN 1 CIREBON</p>
        <p>Jl. Perjuangan, Karyamulya</p>
        <p>Cirebon, Indoneisa</p>
        <p class="email-id">saffandco@gmail.com</p>
        <h4>+62-85455676809</h4>
       </div>
       <div class="col">
        <h3>Social Media<div class="underline"><span></span></div></h3>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest"></i>
        </div>
       </div>
    </div>
    <hr>
    <p class="copyright">Yen & Khal 2024</p>
  </footer>

  <style>

body {
  background: linear-gradient(225deg, #8accff 0%, #ffabe9 100%) 
}

.c1 {
    background-color: #c277ad;
    border: 1px solid #c277ad;
}

.c2 {
    background-color: rgb(277, 137, 277);
    border: 1px solid rgb(277, 137, 277);
}

.c3 {
    background-color: rgb(213, 105, 59);
    border: 1px solid rgb(213, 105, 59);
}

    footer {
    width: 100%;
    position: relative;
    bottom: 0;
    background: black;
    color: #fff;
    padding: 50px 100px 20px;
    border-top-left-radius: 125px;
    font-size: 13px;
    line-height: 20px;
    margin-top: 32vh;

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

.col:nth-child(2), .col:nth-child(3){
  flex-basis: 15%;
}

.logo {
    width: 10rem;
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

.social-icon .fab {
  
  height: 40px;
  border-radius: 30%;
  line-height: 40px;
  font-size: 20px;
  color: #fff;
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

@media (max-width: 700px){
  footer{
    bottom: unset;
  }

  .col {
    flex-basis: 100%;
    
  }

  .col:nth-child(2), .col:nth-child(3) {
    flex-basis: 100%;
  }
}
  </style>
</body>
</html>