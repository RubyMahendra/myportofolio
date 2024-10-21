<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="shortcut icon" href="./image/animation.png" type="image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
   

    <main style="display: none;">
    <article>
        <button id="darkModeToggle" class="dark-mode-toggle">
            <ion-icon name="moon"></ion-icon>
        </button>
        <section class="section hero" aria-label="home">
            <div class="container">
                <figure class="hero-banner">
                    <img src="./image/programmer.jpg" width="560" height="540" alt="Julia" class="w-100" data-reveal="top">
                </figure>
                <div class="hero-content">
                    <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
                        I'm Junior Web Developer
                    </h1>
                    <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                        Hi, I'm Ruby, I'm a junior web developer. My dream is to become a back-end developer or cyber security. Currently I am still studying at ITB STIKOM BALI and I am in the 6th semester. I also have expertise in the field of design, especially in the fields of video editing and graphic design.
                    </p>
                    <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
                        <a href="./file/contactme.php" class="btn btn-primary">Contact Me</a>
                        <a href="./file/home2.php" class="btn btn-secondary">My Project</a>
                        <a href="https://drive.google.com/file/d/1UUgmmHYbFHKG78qWQbIltz34WMxMe8m_/view?usp=sharing" download class="btn btn-secondary">Download CV</a>

                    <!-- Ikon media sosial -->
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/ruby-mahendra-dana-1b7b90226?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app&fbclid=PAZXh0bgNhZW0CMTEAAaanqgVF0CGei0-hVATtvEZBzkj819fsYyPenD3tHE2xRls6NE5cSJ7MmBY_aem_Af-b7lUHmcnsY7w6fdD89NMyxE52ZjRW4t42vcF9Lvzn8TE2a2yRx7myJAgEB0BEEM0Q1BA7JXRjfZY-bdR8UvhX&challengeId=AQFmO1TQk7CGmgAAAY-WFH0GsQYSmxnBBNSZ95WFpCI43iYXJJxYqMOlXnF6KwDggx0IyvqRtSfSdGbU1w9givf9iRntCZieQQ&submissionId=eff87305-ca33-d117-8e3a-4c561c32a971&challengeSource=AgE4PFgl_fJeVAAAAY-WFLfQs6UfgdfE-KCvZWM0nVQGnAKjvEPSPVYvni7nVZk&challegeType=AgGgnYTw9VnK-QAAAY-WFLfT0_aLxTXGEZ-5MvMHTQLyf_VwQBI0FCw&memberId=AgH69-U9moE-eQAAAY-WFLfWFXQmG5OWqWoyxfgIiRAXQio&recognizeDevice=AgGqooY3DatdxQAAAY-WFLfZ4vf4l2viPaPjplPL0XfdRdsrG9kL"><ion-icon name="logo-linkedin"></ion-icon></a>
                        <a href="https://www.instagram.com/rubymahendradana?igsh=MWh5anNmYzlscTJjNQ=="><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.facebook.com/ruby.mahendradana?mibextid=kFxxJD"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.youtube.com/channel/UCBKO6cIdeAO5nUAmoiT5xcg"><ion-icon name="logo-youtube"></ion-icon></a>
                        <a href="https://github.com/RubyMahendra"><ion-icon name="logo-github"></ion-icon></a>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>


    <!-- custom js link -->
    <script src="./js/script.js"></script>
    <script>
        // Function to toggle dark mode
        function toggleDarkMode() {
            const body = document.body;
            const darkModeToggle = document.getElementById('darkModeToggle');
            body.classList.toggle('dark-mode');

            // Toggle icon based on dark mode state
            if (body.classList.contains('dark-mode')) {
                darkModeToggle.innerHTML = '<ion-icon name="sunny"></ion-icon>';
            } else {
                darkModeToggle.innerHTML = '<ion-icon name="moon"></ion-icon>';
            }
        }

        // Event listener for dark mode toggle button
        document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

        // Show loading indicator before navigation starts
        document.addEventListener('DOMContentLoaded', function () {
            var loadingIndicator = document.getElementById('loadingIndicator');

            // Hide preloader and show content
            var mainContent = document.querySelector('main');
            mainContent.style.display = 'block';
            loadingIndicator.style.display = 'none';

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
    </script>
    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
