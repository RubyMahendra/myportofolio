<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home2.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../image/ruby-logo.png" type="image/png">
    <title>Ruby Mahendra Portofolio Website</title>
    <style>
       /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    overflow: hidden;
    z-index: 999;
}

.modal__content {
    background-color: #fff;
    padding: 1rem;
    border-radius: 5px;
    max-width: 500px;
    width: 90%;
    position: relative;
}

.modal__img img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.modal__title {
    font-size: 1.5rem;
    margin-top: 1rem;
    color: #333;
}

.modal__description {
    font-size: 1rem;
    color: #666;
}

.modal__close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 1.5rem;
    cursor: pointer;
}

#scrollToTopBtn {
          display: none; /* Initially hidden */
          position: fixed;
          bottom: 100px;
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
   
<?php include('header.php')?>

    <!-- MAIN -->
    <main class="l-main">
        <!-- HOME -->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I am <span class="home__title-color">I G.N. Ruby <br> Mahendradana</span><br><span id="changingText"></span></h1>
                <a href="#contact" class="button">Contact</a>
            </div>
            <div class="home__social">
                <a href="https://www.linkedin.com/in/ruby-mahendra-dana-1b7b90226?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=PAZXh0bgNhZW0CMTEAAaanqgVF0CGei0-hVATtvEZBzkj819fsYyPenD3tHE2xRls6NE5cSJ7MmBY_aem_Af-b7lUHmcnsY7w6fdD89NMyxE52ZjRW4t42vcF9Lvzn8TE2a2yRx7myJAgEB0BEEM0Q1BA7JXRjfZY-bdR8UvhX&challengeId=AQFmO1TQk7CGmgAAAY-WFH0GsQYSmxnBBNSZ95WFpCI43iYXJJxYqMOlXnF6KwDggx0IyvqRtSfSdGbU1w9givf9iRntCZieQQ&submissionId=eff87305-ca33-d117-8e3a-4c561c32a971&challengeSource=AgE4PFgl_fJeVAAAAY-WFLfQs6UfgdfE-KCvZWM0nVQGnAKjvEPSPVYvni7nVZk&challegeType=AgGgnYTw9VnK-QAAAY-WFLfT0_aLxTXGEZ-5MvMHTQLyf_VwQBI0FCw&memberId=AgH69-U9moE-eQAAAY-WFLfWFXQmG5OWqWoyxfgIiRAXQio&recognizeDevice=AgGqooY3DatdxQAAAY-WFLfZ4vf4l2viPaPjplPL0XfdRdsrG9kL" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/rubymahendradana?igsh=MWh5anNmYzlscTJjNQ==" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://www.facebook.com/ruby.mahendradana?mibextid=kFxxJD" class="home__social-icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.youtube.com/channel/UCBKO6cIdeAO5nUAmoiT5xcg" class="home__social-icon"><i class='bx bxl-youtube' ></i></a>
                <a href="https://github.com/RubyMahendra" class="home__social-icon"><i class='bx bxl-github' ></i></a>
            </div>
            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        <image class="home__blob-img" x="40" y="30" width="1000px" href="../image/profile2.png"/>
                    </g>
                </svg>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about section " id="about">
            <h2 class="section-title">About Me</h2>
            <div class="about__container bd-grid">
                <div>
                    <p class="about__text">Let me introduce myself, my name is I Gusti Ngurah Ruby Mahendradana, I was born and raised on the island of Bali, Indonesia. 
                                            I am the first child of 3 siblings and I am 22 years old. Currently, I am a student at a campus called ITB STIKOM BALI and have taken 6 semesters. 
                                        I have several goals such as becoming a hacker, back-end developer, streamer and editor.  However, having these goals makes me even more enthusiastic about studying fields of science that are related to my goals, 
                                        </p>           
                </div> 
                <div>
                    <p class="about__text"> coupled with my love of technology, it makes me more familiar with the latest technologies. My love for technology started when I was 13 years old, because at that time I really liked dissecting computers. My future target is to get a master's degree, because I want one day to be able to hold and be entrusted with holding a position in an organization, be it a startup or government.
                    And I also have several social media such as Instagram, LinkedIn, Facebook, etc. Which can help me to get and search for information</p> 
                </div>                                  
            </div>
        </section>
       
        
 <!-- Education-->
 <section class="skills section" id="education">
    <h2 class="section-title">My Education</h2>
    <div class="skills__container bd-grid">          
        <div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-school skills__icon'></i>
                    <a href="https://stikom-bali.ac.id/" class="skills__name">Institute Technologies and Business STIKOM Bali</a>
                </div>
                <div><span class="skills__percentage">2021 - now</span></div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-school skills__icon'></i>
                    <a href="https://smkn2tabanan.sch.id/" class="skills__name">State Vocational High School 2 Tabanan</a>
                </div>
                <div><span class="skills__percentage">2018 - 2021</span></div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-school skills__icon'></i>
                    <a href="https://smpn2tabanan.sch.id/index.php" class="skills__name">State Junior High School 2 Tabanan</a>
                </div>
                <div><span class="skills__percentage">2015 - 2018</span></div>
            </div>
            <div class="skills__data">
                <div class="skills__names">
                    <i class='bx bxs-school skills__icon'></i>
                    <a href="http://sdsaraswatitabanan.sch.id/" class="skills__name">Saraswati Tabanan Elementary School</a>
                </div>
                <div><span class="skills__percentage">2009 - 2015</span></div>
            </div>
        </div>
    </div>
</section>
<hr>

        <!-- SKILLS -->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>
            <div class="skills__container bd-grid">          
                <div>
                    <p class="skills__text">I have several skills such as skills in programming languages ​​and multimedia. I acquired these skills after graduating from vocational high school and during college</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">Front-End Development</span>
                        </div>
                        <div class="skills__bar skills__fe"></div>
                        <div><span class="skills__percentage">60%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">Back-End Development</span>
                        </div>
                        <div class="skills__bar skills__be"></div>
                        <div><span class="skills__percentage">80%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">Multimedia</span>
                        </div>
                        <div class="skills__bar skills__mm"></div>
                        <div><span class="skills__percentage">80%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">Networking</span>
                        </div>
                        <div class="skills__bar skills__net"></div>
                        <div><span class="skills__percentage">75%</span></div>
                    </div>
                </div>
                <div><img src="../image/giphy.gif" alt="" class="skills__img"></div>
            </div>
        </section>

        <hr>
<!-- Project -->
<section class="work section" id="work">
    <h2 class="section-title">My Project</h2>
    <div class="work__container bd-grid">
        <a href="#" class="work__img" onclick="openmodal('project1')"><img src="../image/kebangkitan.png" alt=""></a>
        <a href="#" class="work__img" onclick="openmodal('project2')"><img src="../image/projectluhur.png" alt=""></a>
        <a href="#" class="work__img" onclick="openmodal('project3')"><img src="../image/projectsumpahpemuda.png" alt=""></a>
        <a href="#" class="work__img" onclick="openmodal('project4')"><img src="../image/project4.png" alt=""></a>
        <a href="#" class="work__img" onclick="openmodal('project5')"><img src="../image/poster.jpg" alt=""></a>
    </div>
</section>

<!-- Pop up Project 1 -->
<div class="modal" id="project1">
    <div class="modal__content">
        <i class='bx bx-x modal__close' onclick="closemodal('project1')"></i>
        <div class="modal__img">
            <img src="../image/kebangkitan.png" alt="">
        </div>
        <div class="modal__text">
            <h3 class="modal__title">Kebangkitan Nasional dan Sumpah Pemuda</h3>
            <p class="modal__description">This video explains PPKN material Kebangkitan Nasional dan Sumpah Pemuda. This video was made to convey material to junior high level students.
            If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1HbwUDPzi6Uos_T0prXnWibdeYcqeAqkU/view?usp=sharing" style="color:blue;">view</a>
            </p>

        </div>
    </div>
</div>

<!-- Pop up Project 2 -->
<div class="modal" id="project2">
    <div class="modal__content">
        <i class='bx bx-x modal__close' onclick="closemodal('project2')"></i>
        <div class="modal__img">
            <img src="../image/projectluhur.png" alt="">
        </div>
        <div class="modal__text">
            <h3 class="modal__title">Nilai-Nilai Luhur Dalam Sumpah Pemuda</h3>
            <p class="modal__description">The video, entitled "Nilai-Nilai Luhur Dalam Sumpah Pemuda", is an educational video made in animated form.
            If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1Ff489M8Di9w0M3KM-yJfJ4cOMOMwP1mx/view?usp=sharing" style="color:blue;">view</a>
            </p>
        </div>
    </div>
</div>

<!-- Pop up Project 3 -->
<div class="modal" id="project3">
    <div class="modal__content">
        <i class='bx bx-x modal__close' onclick="closemodal('project3')"></i>
        <div class="modal__img">
            <img src="../image/projectsumpahpemuda.png" alt="">
        </div>
        <div class="modal__text">
            <h3 class="modal__title">Sumpah Pemuda dan Kontribusi Di Era Reformasi</h3>
            <p class="modal__description">The video, entitled "Sumpah Pemuda dan Kontribusi Di Era Reformasi", is an educational video made in animated form.
            If you are interested in seeing this video, then you can click <a href="https://drive.google.com/file/d/1ssmf_OUN0PCpvsVSrJ57XLLOZx98Xyac/view?usp=sharing" style="color:blue;">see video</a>
            </p>
        </div>
    </div>
</div>

<!-- Pop up Project 4 -->
<div class="modal" id="project4">
    <div class="modal__content">
        <i class='bx bx-x modal__close' onclick="closemodal('project4')"></i>
        <div class="modal__img">
            <img src="../image/project4.png" alt="">
        </div>
        <div class="modal__text">
            <h3 class="modal__title">Tanpanama Cafe Website</h3>
            <p class="modal__description">The website website entitled "Tanpanama Cafe Website" is a website created to fulfill the requirements of the final semester exam.
          This website belongs to my friend, my friend gave me the task of creating a simple website using the programming languages HTML, CSS, Javascript and PHP.
          This website also has several functions such as logging in, viewing and adding food and beverage products. This website also has 2 roles, namely user and admin.
          If you are interested in seeing this website, then you can click <a href="https://github.com/RubyMahendra/TanpanamaWebsitePractice" style="color:blue;">see website</a>
        </p>
        </div>
    </div>
</div>

<!-- Pop up Project 5 -->
<div class="modal" id="project5">
    <div class="modal__content">
        <i class='bx bx-x modal__close' onclick="closemodal('project5')"></i>
        <div class="modal__img">
            <img src="../image/poster.jpg" alt="">
        </div>
        <div class="modal__text">
            <h3 class="modal__title">Youth Pledge Poster</h3>
            <p class="modal__description">This project was created when I took part in a competition held on campus, namely UKM Multimedia. This poster was inspired by the struggles of young people during the Covid-19 pandemic. This poster was created using the Corel Draw application
                if you are interested in seeing this poster, then you can click <a href="https://drive.google.com/drive/folders/1bwnoF676a4ANO41zFdLn1usp-K4-njGp?usp=sharing">see poster</a>
            </p>
        </div>
    </div>
</div>

        

         <!-- CERTIFICATE -->
         <section class="work section" id="work">
            <h2 class="section-title">My Certificate</h2>
            <div class="work__container bd-grid">
                <a href="" class="work__img"><img src="../image/multimedia.jpg" alt=""></a>
                <a href="" class="work__img"><img src="../image/Achievement.jpg" alt=""></a>
                <a href="" class="work__img"><img src="../image/network.jpg" alt=""></a>
                <a href="" class="work__img"><img src="../image/internship.jpg" alt=""></a>
                <a href="" class="work__img"><img src="../image/microsoft.jpg" alt=""></a>
            </div>
        </section>
        
        <hr>

        <!-- CONTACT -->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact Me </h2>
            <div class="contact__container bd-grid">
                <form action="../koneksi/proses_1.php" method="post" class="contact__form" data-reveal="right" novalidate>
                    <input type="text" placeholder="Name" required class="contact__input" name="name">
                    <input type="email" placeholder="Email" required class="contact__input" name="email">
                    <textarea name="message" id="" cols="0" rows="10" required class="contact__input"></textarea>
                    <input type="submit" name="submit" class="contact__button button">
                </form>
            </div>
        </section>
        <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">Top</button>
    </main>
    
   <?php include('footer.php')?>

    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- MAIN JS -->
    <script src="../js/home2.js"></script>
    <script>
        // Function to change text after a certain delay
        function changeText() {
            // Set initial text
            document.getElementById('changingText').textContent = "Web Developer";

            // Set interval to change text every 2 seconds (2000 milliseconds)
            setInterval(() => {
                // Check current text
                var currentText = document.getElementById('changingText').textContent;

                // Change text based on current text
                // Change text based on current text
                if (currentText === "Web Developer") {
                    document.getElementById('changingText').textContent = "Editor";
                } else {
                    document.getElementById('changingText').textContent = "Web Developer";
                }
            }, 2000);
        } 

        // Call the changeText function when the page loads
        window.onload = changeText;

        // Fungsi untuk membuka pop-up
function openmodal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

// Fungsi untuk menutup pop-up
function closemodal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

// Menutup pop-up ketika pengguna mengklik di luar pop-up
window.onclick = function(event) {
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        if (event.target == modal) {
            modal.style.display = "none";
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
    
</body>
</html>
