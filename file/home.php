<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="shortcut icon" href="../image/animation.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="preload" as="image" href="../image/hero-banner.jpg">
  <link rel="preload" as="image" href="../image/Blog.svg">

  <style>
     .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .popup-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .popup-content img {
            max-width: 100%;
            height: auto;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        /* Scroll-to-top button styles */
        #scrollToTopBtn {
          display: none; /* Initially hidden */
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 99;
          font-size: 16px;
          border: none;
          outline: none;
          background-color: #007bff;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
          box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        #scrollToTopBtn:hover {
          background-color: #0056b3;
        }

  </style>
</head>

<body>


<?php include('header.php'); ?>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">
 
        <figure class="hero-banner">
            <img src="../image/Profile.png"  alt="programmer" class="w-100"
              data-reveal="top">

            
          </figure>
          <div class="hero-content">

            <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
              Welcome to my portofolio website
            </h1>
          
            <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
            Hi, My name is I Gusti Ngurah Ruby Mahendradana, My age is 22 years old and I'm a junior web developer. My dream is to become a Back-End Developer or Cyber Security
            Currently I am still studying at ITB STIKOM BALI and I am in the 6th semester. 
            I also have expertise in the field of design, especially in the fields of video editing and graphic design. <span id="changingText"></span>
            </p>


            <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
              <a href="./aboutme.php" class="btn btn-primary">About Me</a>
              <a href="#projects" class="btn btn-secondary">My Projects</a>
              <a href="./contactme.php" class="btn btn-secondary">Contact Me</a>
            </div>
          </div>
         
        </div>
      </section>


      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about">
        <div class="container">

          <div class="wrapper">

            <div data-reveal="left">
              <h2 class="h2 section-title">My skills?</h2>

              <p class="section-text">
              Some of the skills I have are multimedia and web development skills. 
              The multimedia skills that I fluent are video editing, graphic design. 
              For web development, I fluent several languages such as front-end programming languages and back-end programming languages
              </p>
            </div>

            <ul class="progress-list" data-reveal="right">

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Web Development</p>

                  <span class="span">60 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 60%; background-color: #c7b1dd"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Mobile Development</p>

                  <span class="span">50 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 50%; background-color: #8caeec"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Multimedia</p>

                  <span class="span">50 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 50%; background-color: #b0d4c1"></div>
                </div>

              </li>

              <li class="progress-item">

                <div class="label-wrapper">
                  <p>Networking</p>

                  <span class="span">50 %</span>
                </div>

                <div class="progress">
                  <div class="progress-fill" style="width: 50%; background-color: #e3a6b6"></div>
                </div>

              </li>

            </ul>

          </div>

          <ul class="grid-list">

            <li data-reveal="bottom">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/world-wide-web.png" width="52" height="52" loading="lazy" alt="web design icon">
                </div>

                <h3 class="h4 card-title">Web Developmet</h3>

                <p class="card-text">
                for the web development section, I fluent several languages in several fields, 
                for the front-end development field I fluent the programming languages HTML, CSS, Javascript, React. 
                For the back-end field, I fluent the PHP programming language. 
                For web creation tools, I am fluent in Axure RP, Visual Studio Code, Odoo, Spring Tools, Oracle Java Development
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.25s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/app-development.png" width="52" height="52" loading="lazy" alt="mobile design icon">
                </div>

                <h3 class="h4 card-title">Mobile Development</h3>

                <p class="card-text">
                In making mobile applications, I am fluent in several languages such as Java. In making it, I used the Android Studio application.
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.5s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/video-editing.png" width="52" height="52" loading="lazy"
                    alt="web development icon">
                </div>

                <h3 class="h4 card-title">Multimedia</h3>

                <p class="card-text">
                in multimedia, I am fluent in several things such as graphic design and video editing. 
                In graphic design, I usually use Corel Draw, Canva applications to design or edit photos or create something related to design. 
                For video editing, I usually use the Capcut application, Adobe Premiere Pro. 
                Because I previously came from a vocational high school majoring in multimedia, I know several things about creating animation using the Blender application.
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.75s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/data-structure.png" width="52" height="52" loading="lazy" alt="web seo icon">
                </div>

                <h3 class="h4 card-title">Networking</h3>

                <p class="card-text">
                For networking skills, I am fluent in using the Linux operating system, the Linux OS I use is Ubuntu and Kali Linux. 
                For the network flow creation application, I use the Cisco Packet Tracer application
                </p>

              </div>
            </li>

          </ul>
        </div>
      </section>


      <section class="section project" aria-labelledby="project-label" id="projects">
  <div class="container">
    <div class="title-wrapper" data-reveal="top">
      <div>
        <h2 class="h2 section-title" id="project-label">My Project</h2>
        <p class="section-text">
          Check out some of my latest projects with creative ideas.
        </p>
      </div>
    </div>
      
    <br>
    <!-- First <ul> with first project -->
    <ul class="grid-list">
      <li>
        <div class="project-card project-card-1" style="background-color: #f8f5fb">
          <div class="card-content" data-reveal="left">
            <p class="card-tag" style="color: #a07cc5">Educational Video</p>
            <h3 class="h3 card-title">Nilai-Nilai Luhur Dalam Sumpah Pemuda</h3>
            <p class="card-text">
              This video explains PPKN material entitled Nilai-Nilai Luhur Dalam Sumpah Pemuda. This video was made to convey material to junior high level students.
            </p>
            <a href="#" class="btn-text" style="color: #a07cc5" onclick="openPopup('popup1')">See Project <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>
          </div>
          <figure class="card-banner" data-reveal="right">
            <img src="../image/projectluhur.png" width="650" height="370" loading="lazy" alt="Project Luhur" class="w-100">
          </figure>
        </div>
      </li>

      <!-- First pop-up -->
      <div id="popup1" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup('popup1')">&times;</span>
          <p class="card-tag" style="color: #a07cc5">Educational Video</p>
          <h2>Nilai-Nilai Luhur Dalam Sumpah Pemuda</h2>
          <br>
          <img src="../image/projectluhur.png" alt="Project Luhur">
          <br>
          <p>The video, entitled "Nilai-Nilai Luhur Dalam Sumpah Pemuda", is an educational video made in animated form.</p>
          <br>
          <p>If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1Ff489M8Di9w0M3KM-yJfJ4cOMOMwP1mx/view?usp=sharing" style="color:blue;">see video</a></p>
        </div>
      </div>
    </ul>
      <br>
    <!-- Second <ul> with second project -->
    <ul class="grid-list">
      <li>
        <div class="project-card project-card-1" style="background-color: #f8f5fb">
          <div class="card-content" data-reveal="left">
            <p class="card-tag" style="color: #a07cc5">Educational Video</p>
            <h3 class="h3 card-title">Sumpah Pemuda dan Kontribusi Di Era Reformasi</h3>
            <p class="card-text">
              This video explains PPKN material entitled Sumpah Pemuda dan Kontribusi Di Era Reformasi. This video was made to convey material to junior high level students.
            </p>
            <a href="#" class="btn-text" style="color: #3f78e0" onclick="openPopup('popup2')">See Project <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>
          </div>
          <figure class="card-banner" data-reveal="right">
            <img src="../image/projectsumpahpemuda.png" width="650" height="370" loading="lazy" alt="Project Sumpah Pemuda" class="w-100">
          </figure>
        </div>
      </li>

      <!-- Second pop-up -->
      <div id="popup2" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup('popup2')">&times;</span>
          <p class="card-tag" style="color: #a07cc5">Educational Video</p>
          <h2>Sumpah Pemuda dan Kontribusi Di Era Reformasi</h2>
          <br>
          <img src="../image/projectsumpahpemuda.png" alt="Project Sumpah Pemuda">
          <br>
          <p>The video, entitled "Sumpah Pemuda dan Kontribusi Di Era Reformasi", is an educational video made in animated form.</p>
          <br>
          <p>If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1ssmf_OUN0PCpvsVSrJ57XLLOZx98Xyac/view?usp=sharing" style="color:blue;">see video</a></p>
        </div>
      </div>
    </ul>
      <br>
    <!-- Third <ul> with third project -->
    <ul class="grid-list">
      <li>
        <div class="project-card project-card-1" style="background-color: #f8f5fb">
          <div class="card-content" data-reveal="left">
            <p class="card-tag" style="color: #a07cc5">Educational Video</p>
            <h3 class="h3 card-title">Kebangkitan Nasional dan Sumpah Pemuda</h3>
            <p class="card-text">
              This video explains PPKN material Kebangkitan Nasional dan Sumpah Pemuda. This video was made to convey material to junior high level students.
            </p>
            <a href="#" class="btn-text" style="color: #3f78e0" onclick="openPopup('popup3')">See Project <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>
          </div>
          <figure class="card-banner" data-reveal="right">
            <img src="../image/kebangkitan.png" width="650" height="370" loading="lazy" alt="Kebangkitan Nasional" class="w-100">
          </figure>
        </div>
      </li>

      <!-- Third pop-up -->
      <div id="popup3" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup('popup3')">&times;</span>
          <h2>Kebangkitan Nasional dan Sumpah Pemuda</h2>
          <img src="../image/kebangkitan.png" alt="Kebangkitan Nasional">
          <p>The video, entitled "Kebangkitan Nasional dan Sumpah Pemuda", is an educational video made in animated form.</p>
          <br>
          <p>If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1HbwUDPzi6Uos_T0prXnWibdeYcqeAqkU/view?usp=sharing" style="color:blue;">see video</a></p>
        </div>
      </div>
    </ul>
      <br>
    <!-- Fourth <ul> with fourth project -->
    <ul class="grid-list">
      <li>
        <div class="project-card project-card-1" style="background-color: #f8f5fb">
          <div class="card-content" data-reveal="left">
            <p class="card-tag" style="color: #a07cc5">Final Semester Exam Project</p>
            <h3 class="h3 card-title">Tanpanama Cafe Website</h3>
            <p class="card-text">
              This project was created with the aim of fulfilling my friend's final semester exam requirements. My friend gave me orders to create a website using the HTML and CSS programming languages. javascript and php
            </p>
            <a href="#" class="btn-text" style="color: #3f78e0" onclick="openPopup('popup4')">See Project <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon></a>
          </div>
          <figure class="card-banner" data-reveal="right">
            <img src="../image/project4.png" width="650" height="370" loading="lazy" alt="Tanpa Nama Project" class="w-100">
          </figure>
        </div>
      </li>

      <!-- Fourth pop-up -->
      <div id="popup4" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup('popup4')">&times;</span>
          <h2>Tanpanama Cafe Website</h2>
          <img src="../image/project4.png" alt="Tanpanama Cafe Website">
          <p>The website website entitled "Tanpanama Cafe Website" is a website created to fulfill the requirements of the final semester exam.
          This website belongs to my friend, my friend gave me the task of creating a simple website using the programming languages HTML, CSS, Javascript and PHP.
          This website also has several functions such as logging in, viewing and adding food and beverage products. This website also has 2 roles, namely user and admin.
          </p>
          <br>
          <p>If you are interested in seeing this website, then you can click <a href="https://github.com/RubyMahendra/TanpanamaWebsitePractice" style="color:blue;">see website</a></p>
        </div>
      </div>
    </ul>
  </div>
</section>





      
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

<?php include('footer.php'); ?>



  <!-- 
    - custom js link
  -->
  <script src="../js/script.js"></script>
  <script>
    // Function to change text after a certain delay
    function changeText() {
    // Set initial text
    document.getElementById('changingText').textContent = "Thank you";

    // Set interval to change text every 2 seconds (2000 milliseconds)
    setInterval(() => {
        // Check current text
        var currentText = document.getElementById('changingText').textContent;

        // Change text based on current text
        if (currentText === "Thank you") {
            document.getElementById('changingText').textContent = "and";
        } else if (currentText === "and") {
            document.getElementById('changingText').textContent = "see you";
        } else {
            document.getElementById('changingText').textContent = "Thank you";
        }
    }, 2000);
}


  
   

// Fungsi untuk membuka pop-up
function openPopup(popupId) {
  var popup = document.getElementById(popupId);
  
  // Mengatur popup menjadi terlihat
  popup.style.display = "block";
  // Mengatur posisi popup agar tetap di tengah layar
  popup.style.position = "fixed";
  popup.style.top = "50%";
  popup.style.left = "50%";
  popup.style.transform = "translate(-50%, -50%)";
  // Menambahkan class untuk mengatur z-index jika diperlukan
  popup.classList.add("popup-visible");
  // Mengunci posisi body agar tidak dapat di-scroll
  document.body.style.overflow = "hidden";
}

// Fungsi untuk menutup pop-up
function closePopup(popupId) {
  var popup = document.getElementById(popupId);
  // Menghilangkan pop-up
  popup.style.display = "none";
  // Menghapus class yang mungkin telah ditambahkan
  popup.classList.remove("popup-visible");
  // Mengembalikan posisi body agar dapat di-scroll kembali
  document.body.style.overflow = "auto";
}

// Menutup pop-up ketika pengguna mengklik di luar pop-up
window.onclick = function(event) {
  var popups = document.querySelectorAll('.popup');
  popups.forEach(function(popup) {
    if (event.target == popup) {
      popup.style.display = "none";
      popup.classList.remove("popup-visible");
      document.body.style.overflow = "auto";
    }
  });
};

function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  // Function to toggle the button based on scroll position
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    var scrollToTopButton = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  }

  </script>
  
  
  
  
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Scroll-to-top button -->
<button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">Top</button>

</body>

</html>
