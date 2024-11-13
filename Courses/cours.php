<?php 
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion si la session n'existe pas
    header("Location: cours1.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Course List</title>
    <link rel="stylesheet" href="style.css"> <!-- Fusionnez vos styles dans un fichier -->
    <link rel="stylesheet" href="cours.css">
</head>

<body>
    <header class="header">
        <h1>Bienvenue , <?php echo htmlspecialchars($_SESSION['user']['name']); ?>!</h1>
        <p> Matricule :  <?php echo htmlspecialchars($_SESSION['user']['matricule']); ?>.</p>
        <a href="logout.php" class="logout-btn">Déconnexion</a>
    </header>

    <main>
        <section class="course-grid">
            <!-- Course 1 -->
            <div class="course-card">
                <h3>Course Structure Machine 1 Français</h3>
                <a href="Cours SM1 Fr.pdf" class="download-btn" target="_blank">Télécharger PDF</a>
            </div>

            <!-- Course 2 -->
            <div class="course-card">
                <h3>Course Structure Machine 1 Anglais</h3>
                <a href="Cours SM1 English.pdf" class="download-btn" target="_blank">Télécharger PDF</a>
            </div>

            <!-- Course 3 -->
            <div class="course-card">
                <h3>TD Structure Machine 1 Anglais</h3>
                <a href="TD SM1 English.pdf" class="download-btn" target="_blank">Télécharger PDF</a>
            </div>

            <!-- Course 4 -->
            <div class="course-card">
                <h3>TD Structure Machine 1 Français</h3>
                <a href="TD SM1 Fr.pdf" class="download-btn" target="_blank">Télécharger PDF</a>
            </div>

            <!-- Course 5 -->
            <div class="course-card">
                <h3>TD Structure Machine 1 Français</h3>
                <a href="TD SM1 Fr.pdf" class="download-btn" target="_blank">Télécharger PDF</a>
            </div>

            <!-- Ajoutez d'autres cours au besoin -->
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

    <script src="cours.js"></script> <!-- S'il y a un script JS -->
</body>

</html>