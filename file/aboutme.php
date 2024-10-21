<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link rel="shortcut icon" href="./assets/images/animation.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="preload" as="image" href="../image/hero-banner.jpg">
  <link rel="preload" as="image" href="../image/Blog.svg">

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
            
        <h2 class="h2 section-title" data-reveal="top" data-reveal-delay="0.5s">About Me</h2>

        <p class="section-text"data-reveal="top" data-reveal-delay="0.5s">
        Let me introduce myself, my name is I Gusti Ngurah Ruby Mahendradana, I was born and raised on the island of Bali, Indonesia. 
        I am the first child of 3 siblings and I am 22 years old. Currently, I am a student at a campus called ITB STIKOM BALI and have taken 6 semesters. 
        I have several goals such as becoming a hacker, back-end developer, streamer and editor. 
        However, having these goals makes me even more enthusiastic about studying fields of science that are related to my goals, coupled with my love of technology, it makes me more familiar with the latest technologies. 
        My love for technology started when I was 13 years old, because at that time I really liked dissecting computers.
        My future target is to get a master's degree, because I want one day to be able to hold and be entrusted with holding a position in an organization, be it a startup or government.
        And I also have several social media such as Instagram, LinkedIn, Facebook, etc. Which can help me to get and search for information
        </p>
        <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
              <a href="#education" class="btn btn-primary">My Education</a>
          
              <a href="#certificate" class="btn btn-secondary">My Certificate of Expertise</a>
            </div>
         
        </div>
      </section>


      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="education">
        <div class="container">

          <div class="wrapper">

            <div data-reveal="left">
              <h2 class="h2 section-title" ">My Education</h2>

            </div>

            

          </div>

          <ul class="grid-list">
          <li data-reveal="bottom">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/sd.png" width="52" height="52" loading="lazy" alt="web design icon">
                </div>

                <h3 class="h4 card-title"> Elementary School</h3>
                <h5>Sekolah Dasar Saraswati</h5>
                <h5>2009 - 2015</h5>
                <br>

                <p class="card-text">
                  <a href="http://sdsaraswatitabanan.sch.id/">see more>></a>
                </p>

              </div>
            </li>
            <li data-reveal="bottom">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/smp2.png" width="52" height="52" loading="lazy" alt="web design icon">
                </div>

                <h3 class="h4 card-title">Junior High School</h3>
                <h5>Sekolah Menengah Pertama Negeri 2 Tabanan</h5>
                <h5>2015 - 2018</h5>
                <br>

                <p class="card-text">
                  <a href="https://smpn2tabanan.sch.id/index.php">see more>></a>
                </p>
              </div>
            </li>
           
            <li data-reveal="bottom" data-reveal-delay="0.25s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/logoSMK2.png" width="52" height="52" loading="lazy" alt="mobile design icon">
                </div>

                <h3 class="h4 card-title">Vocational School</h3>
                <h5>Sekolah Menengah Kejuruan Negeri 2 Tabanan</h5>
                <h5>2018 - 2021</h5>
                <br>
                <p class="card-text">
                  <a href="https://smkn2tabanan.sch.id/">see more>></a>
                </p>

              </div>
            </li>

            <li data-reveal="bottom" data-reveal-delay="0.5s">
              <div class="about-card">

                <div class="card-icon">
                  <img src="../image/ITB-RESMI-1024x1024.png" width="52" height="52" loading="lazy"
                    alt="web development icon">
                </div>

                <h3 class="h4 card-title">College</h3>
                <h5>Institut Teknologi dan Bisnis STIKOM Bali</h5>
                <h5>2021 - Present</h5>
                <br>
                <p class="card-text">
                  <a href="https://stikom-bali.ac.id/">see more>></a>
                </p>

              </div>
            </li>

          </ul>
        </div>
      </section>




      <section class="section project" aria-labelledby="project-label" id="certificate">
        <div class="container">

          <div class="title-wrapper" data-reveal="top">

            <div>
              <h2 class="h2 section-title" id="project-label">My Certificate of Expertise</h2>

              <p class="section-text">
              Meanwhile, I have several expertise certificates such as :
              </p>
            </div>
            

          </div>

          <ul class="grid-list">

            <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Multimedia Design</p>

                  <h3 class="h3 card-title">Junior Multimedia Designer</h3>

                  <p class="card-text">
                  I got this certificate when I was still in vocational high school, this certificate is in the multimedia field and is valid for 3 years
                  </p>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="../image/multimedia.jpg" width="650" height="370" loading="lazy" alt="Multimedia"
                    class="w-100">
                </figure>

              </div>
            </li>

            <li>
              <div class="project-card project-card-2" style="background-color: #f1f5fd">

                <div class="card-content" data-reveal="right">

                  <p class=" card-tag" style="color: #3f78e0">Networking</p>

                  <h3 class="h3 card-title">Network Administrator</h3>

                  <p class="card-text">
                  I got this certificate when I was in college, this certificate is in the networking field and is valid for 3 years
                  </p>

                </div>

                <figure class="card-banner" data-reveal="left">
                  <img src="../image/network.jpg" width="600" height="367" loading="lazy" alt="Web Design"
                    class="w-100">
                </figure>

              </div>
            </li>

          </ul>
       
        </div>
    
      </section>
     
      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <div class="title-wrapper" data-reveal="top">

            <div>
              <h2 class="h2 section-title" id="project-label">My Certificate of Achievement</h2>

              <p class="section-text">
              Apart from skill certificates, I also have Achievement certificates such as :
              </p>
            </div>
            

          </div>

          <ul class="grid-list">

            <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Certificate of Achievement</p>

                  <h3 class="h3 card-title">Microsoft Office</h3>

                  <p class="card-text">
                  I got this certificate after successfully archieved all the requirements of following ACTION program
                  </p>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="../image/microsoft.jpg" width="650" height="370" loading="lazy" alt="Multimedia"
                    class="w-100">
                </figure>

              </div>
            </li>

            <li>
              <div class="project-card project-card-2" style="background-color: #f1f5fd">

                <div class="card-content" data-reveal="right">

                  <p class=" card-tag" style="color: #3f78e0">Certificate of Achievement</p>

                  <h3 class="h3 card-title">sub-district level flag raising troops</h3>

                  <p class="card-text">
                  I got this certificate when I became a flag-raising troop on August 17 2018 in Margarana sub-district
                  </p>


                </div>

                <figure class="card-banner" data-reveal="left">
                  <img src="../image/Achievement.jpg" width="600" height="367" loading="lazy" alt="Web Design"
                    class="w-100">
                </figure>

              </div>
            </li>

          </ul>
       
        </div>
    
      </section>
     
      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <div class="title-wrapper" data-reveal="top">

            <div>
              <h2 class="h2 section-title" id="project-label">My Certificate of Internship</h2>

              <p class="section-text">
              Apart from skills certificates, I also have Apprenticeship certificates such as :
              </p>
            </div>
            

          </div>

          <ul class="grid-list">

            <li>
              <div class="project-card project-card-1" style="background-color: #f8f5fb">

                <div class="card-content" data-reveal="left">

                  <p class="card-tag" style="color: #a07cc5">Certificate of Internship</p>

                  <h3 class="h3 card-title">field work practice students</h3>
                    <h5>December 2019 - Mei 2020</h5>
                    <br>
                  <p class="card-text">
                  I got this certificate when I was a vocational high school student, this field work practice was held for 6 months or 1 semester
                  </p>

                </div>

                <figure class="card-banner" data-reveal="right">
                  <img src="../image/internship.jpg" width="650" height="370" loading="lazy" alt="Multimedia"
                    class="w-100">
                </figure>

              </div>
            </li>

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


  
    // Call the function when the page loads
    window.onload = changeText;

    document.addEventListener('DOMContentLoaded', function () {
      var loadingIndicator = document.getElementById('loadingIndicator');
      var mainContent = document.querySelector('main');

      // Show loading indicator
      loadingIndicator.style.display = 'flex';

      // Hide main content
      mainContent.style.display = 'none';

      // Add event listener to all links to handle navigation
      var links = document.querySelectorAll('a');
      links.forEach(function (link) {
        link.addEventListener('click', function (event) {
          // Prevent default navigation behavior
          event.preventDefault();

          // Get the href attribute of the clicked link
          var href = this.getAttribute('href');

          // Show loading indicator
          loadingIndicator.style.display = 'flex';

          // Load the new page after a short delay to allow the loading indicator to be displayed
          setTimeout(function () {
            window.location.href = href;
          }, 500);
        });
      });
    });

    // Hide loading indicator after the new page is fully loaded
    window.addEventListener('load', function () {
      var loadingIndicator = document.getElementById('loadingIndicator');
      var mainContent = document.querySelector('main');

      // Hide loading indicator
      loadingIndicator.style.display = 'none';

      // Show main content
      mainContent.style.display = 'block';
    });


     // Call the function when the page loads
     window.onload = changeText;

document.addEventListener('DOMContentLoaded', function () {
  var loadingIndicator = document.getElementById('loadingIndicator');
  var mainContent = document.querySelector('main');

  // Show loading indicator
  loadingIndicator.style.display = 'flex';

  // Hide main content
  mainContent.style.display = 'none';

  // Add event listener to all links to handle navigation
  var links = document.querySelectorAll('a');
  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      // Prevent default navigation behavior
      event.preventDefault();

      // Get the href attribute of the clicked link
      var href = this.getAttribute('href');

      // Show loading indicator
      loadingIndicator.style.display = 'flex';

      // Load the new page after a short delay to allow the loading indicator to be displayed
      setTimeout(function () {
        window.location.href = href;
      }, 500);
    });
  });
});

// Hide loading indicator after the new page is fully loaded
window.addEventListener('load', function () {
  var loadingIndicator = document.getElementById('loadingIndicator');
  var mainContent = document.querySelector('main');

  // Hide loading indicator
  loadingIndicator.style.display = 'none';

  // Show main content
  mainContent.style.display = 'block';
});
  </script>
  
  
  
  
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  
</body>

</html>
