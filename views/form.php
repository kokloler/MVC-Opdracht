<?php
include("..//controllers/From.php");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="..//images/form.ico">
    <title>Stel een vraag</title>
    <link rel="stylesheet" type="text/css" href="..//public/stylesheets/faq_form.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
</head>
<body>
    <nav>
        <div class="logo">Gooi het in de bak</div>
        <ul>
            <li class="nav-item">
                <a href="index.php" class="text-link">Terug</a>
                <a href="index.php" class="icon-link"><i class="fas fa-arrow-left"></i></a>
            </li>
        </ul>
    </nav>
    
    <a href="faq_form-dark.php" >
            <img src = "../images/darkmodeicon.ico" class="darkmodeicon" alt="darkmode">
        </a>

    <?php if (isset($message)): ?>
        <div class="notification-container">
            <div id="message" class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>
        </div>
    <?php endif; ?>
    
    <main id="main_reg">
        <h1>Stel een vraag</h1>
        <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="vraag">Vraag:</label>
                <textarea id="vraag" name="vraag" rows="4" required></textarea>

                <input type="submit" value="Verstuur*" id="reg_button">
            </form>
            <p>* Vragen worden binnen 2 werkdagen beantwoord.</p>
        </div>
    </main>

    <footer>
        <div class="footer">&copy; 2023 Afvalrecycling </div>
    </footer>

    <script src="../public/javascripts/faq_form.js"></script>

</body>
</html>
