<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Music</title>
    <link rel="stylesheet" href="discover.css">
    <link rel="stylesheet" href="discover_threedots.css">
    <link rel="stylesheet" href="media_discover.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>  

      <div class="grid_container">
        <div class="header_container left">
          
<div class="header-left">
                

          <div class="navbar">
              <div class="header-right">
                  <div class="hamburger">
                      <div></div>
                      <div></div>
                      <div></div>
                  </div>
              </div>
              
                  <nav class="home">
                      <ul>
                        
                        <br>
                          <li><a href="#" class="headerIcon"><i class="fa-solid fa-house" style="color: red;"></i> Home</a></li>

                          <li><a href="#" class="headerIcon"><i class="fa-solid fa-magnifying-glass" style="color: red;"></i> Search</a></li>

                          <li><a href="#" class="headerIcon"><i class='fab fa-spotify' style="color: red;"></i> Your Library</a></li>
                          
                          <li><a href="#" class="headerIcon"><i class="fa-solid fa-music" style="color: red;"></i> Create Playlist</a></li>

                          <li><a href="#" class="headerIcon"><i class="fa-solid fa-heart" style="color: red;"></i> Linked Songs</a></li>

                          <li><a href="#" class="headerIcon"><i class="fa-solid fa-podcast" style="color: red;"></i> Your Episodes</a></li>
                      </ul>
                  </nav>
              </div>
          </div>
          <div class="profile_container">
            <a href="profile.php"><h2 class="user" style="
                position: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 200px;
                color: white;
                left: 10px;
                bottom: 10px;
                "><i class="fa-solid fa-user"></i>&nbsp;  &nbsp;
              <?php
                   session_start();
                   if(isset($_SESSION['username']))
                   {
                      echo $_SESSION['username'];
                   }
                   else
                   {
                      echo "Please Login";
                   }
              ?>
          </h2></a>
          </div>
        </div>

        <div class="cards">
          <br>
          <div class="bg_gradiant">


          </div>

           <div class="header">
              <div class="header_premium"><a href="#" class="premium">Explore Premium</a></div>
              <div class="header_premium"><a href="#" class="premium">Visit Github</a></div>
              <button class="mode dmode">Dark </button>
              <button class="mode lmode">Light</button>
            </div>
          <h3 class="good">Good Afternoon</h3>

          <!-- <div class="title">
 <h1>Good Afternoon</h1>
</div> -->

          <div class="daly_container">
            <div class="box"><div class="squre_box"></div><div class="contain">Liked Songs</div></div>
            <div class="box"><div class="squre_box"></div><div class="contain">Daily Mix1</div></div>
            <div class="box"><div class="squre_box"></div><div class="contain">Discover Weekly</div></div>
            <div class="box"><div class="squre_box"></div><div class="contain">Daily Mix 2</div></div>
            <div class="box"><div class="squre_box"></div><div class="contain">Daily Mix 3</div></div>
            <div class="box"><div class="squre_box"></div><div class="contain">Daily Mix 4</div></div>
          </div>

          
          

          <!-- YOUR SHOWS -->
          <br>
          <br>
          <br>
          <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter">TRENDING ALBUMS</h3>
    </div>
  </div>
</div>
          <div class="show_container">
            
            <a href="#">
                <div class="boxShowa">
                <img src="Images\two.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Shershaah</h3>
                <br>
                <p class="aname">Jubin Nautiyal</p>
                </div>
            </a>
           <a href="#">
                <div class="boxShowa">
                <img src="Images\one.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Jaane Jaan</h3>
                <br>
                <p class="aname">Rajendra Krishan</p>
                </div>
           </a>
            <a href="#">
                <div class="boxShowa">
                <img src="Images/twelve.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Article 370</h3>
                <br>
                <p class="aname">Shashwat Sachdev</p>
                </div>
            </a>
            <a href="">
                <div class="boxShowa">
                <img src="Images/four.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Bhediya</h3>
                <br>
                <p class="aname">Arjit Singh | A.R.Rahman</p>
                </div>
            </a>
            <a href="">
                <div class="boxShowa">
                <img src="Images/six.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Kesari</h3>
                <br>
                <p class="aname">Pritram | Arjit Singh</p>
                </div>
            </a>
            <a href="">
                <div class="boxShowa">
                <img src="Images/five.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Sanam</h3>
                <br>
                <p class="aname">Sanam Band</p>
                </div>
            </a>

             <a href="">
                <div class="boxShowa">
                <img src="Images/ten.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Mann Dhaga</h3>
                <br>
                <p class="aname">Amit Trivedi</p>
                </div>
             </a>
             <a href="">
                <div class="boxShowa">
                <img src="Images/thirteen.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">This is me</h3>
                <br>
                <p class="aname">Jennifer Lopez</p>
                </div>
             </a>
             <a href="#">
                  <div class="boxShowa">
                  <img src="Images/sixteen.jpg" alt="" class="imga">
                  <br>
                  <h3 class="mname">Sahibaa</h3>
                  <br>
                  <p class="aname">Pritram</p>
                  </div>
             </a>
             <a href="#">
                  <div class="boxShowa">
                  <img src="Images/nine.jpg" alt="" class="imga">
                  <br>
                  <h3 class="mname">WAR</h3>
                  <br>
                  <p class="aname">Vishal-Shekhar</p>
                  </div>
             </a>
             <a href="#">
                <div class="boxShowa">
                <img src="Images/twenty.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">Saiyyan</h3>
                <br>
                <p class="aname"> Asim Azhar </p>
              </div>
            </a>
             <a href="#">
                <div class="boxShowa">
                <img src="Images/uri.jpg" alt="" class="imga">
                <br>
                <h3 class="mname">URI</h3>
                <br>
                <p class="aname"> Shashwat Sachdev </p>
              </div>
            </a>

          </div>
         


          <!-- YOUR TOP MIX -->
          <br>
          <br>
          <br>
           <h3 class="animate-charcter">TOP ARTISTS</h3>
          <div class="show_container">
            <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a1.jpg" alt="" class="imgb"></a>
              <br>
              <br>
            </div>
            <br>
              <p style="color: white;" class="aName">Arjit Singh</p>
            </div>


             <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a8.jpg" alt="" class="imgb"></a>
              <br>
              
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Alka Yagnik</p>
            </div>
            
            
            <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a3.png" alt="" class="imgb"></a>
              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Sonu Nigam</p>
            </div>
            
             <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a4.jpg" alt=""  class="imgb" ></a>
              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Lata Mangeshkar</p>
            </div>
            
            <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a5.jpg" alt="" class="imgb"></a>
              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Uddit Narayan</p>
            </div>
            
            <div class="boxShowb_catainer">
               <div class="boxShowb">
              <a href=""><img src="Images/a12.jpeg" alt="" class="imgb"></a>

              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Kishor Kumar</p>
            </div>
            
           <div class="boxShowb_catainer">
              <div class="boxShowb">
              <a href=""><img src="Images/a10.jpg" alt="" class="imgb"></a>
              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Vishal Dadlani</p>
            </div>

            <div class="boxShowb_catainer">
                          <div class="boxShowb">
             <a href=""> <img src="Images/a9.png" alt="" class="imgb"></a>
              <br>
              <br>
              
            </div>
            <br>
              <p style="color: white;" class="aName">Shreya Ghosal</p>
            </div>


          </div>



          

      </div>
      </div>
<script>
  hamburger = document.querySelector(".hamburger");
  nav = document.querySelector("nav");
  hamburger.onclick = function() {
      nav.classList.toggle("active");
  }
</script>


<script src="script.js"></script>

</body>
</html>