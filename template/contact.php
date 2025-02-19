<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include 'inc/banniere.php';
    ?>
<?php
    include 'inc/menu.php';
    ?>
    <h1 class="title-main">Contact</h1>
    <main class="body-main">
    <img src="img/contacts.jpg" alt="form-contact" class="contact"/>
    <form class="contact-form">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
    </main>
    
</body>
</html>