<?php
// Display a pop-up message indicating that the data has been successfully added
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    echo "<script>alert('Bulk email berhasil dikirim!')</script>";
}
?>

<head>
    <link rel="stylesheet" href="../css/contactme.css">
</head>

<body>

<main>

    <article>

        <!-- #CONTACT -->

        <section class="section contact" aria-label="contact">
            <button class="exit-button" onclick="goBack()">X</button> <!-- Tombol Keluar -->
            <div class="container">

                <div class="contact-card">

                    <div class="contact-content" data-reveal="left">

                        <div class="card-icon">
                            <img src="../image/icon-5.svg" width="44" height="44" loading="lazy" alt="envelop icon">
                        </div>

                        <h2 class="h2 section-title">are you interested ?</h2>

                        <p class="section-text">
                        Please email the following form if you want to work with me
                        </p>

                    </div>

                    <?php include '../file/form.php'; ?>

                </div>

            </div>
        </section>

    </article>

</main>

<!-- custom js link -->
<script src="../js/script.js"></script>
<script>
   function goBack() {
        window.location.href = "../index.php"; // Ganti "index.php" dengan alamat halaman indeks yang sesuai
    }
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    // Display a pop-up message indicating that the data has been successfully added
    alert("Pesan anda sudah terkirim !");
    <?php endif; ?>
</script>

<!-- ionicon link -->
<script type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
