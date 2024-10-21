<head>
    <style>
        .btn-secondary{
            margin-top: 50px;
        }
    </style>
</head>
<form action="../koneksi/proses.php" method="post" class="contact-form" data-reveal="right" novalidate>
    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Your Name *" required class="input-field">
        <input type="email" name="email" placeholder="Email Addresses *" required class="input-field">
    </div>
    <br>
    <textarea name="message" placeholder="Message *" required class="input-field"></textarea>
    <button type="submit" name="submit" class="btn btn-secondary">Send message</button>
</form>

