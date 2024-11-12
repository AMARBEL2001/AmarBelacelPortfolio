<?php
session_start(); // Démarrer la session

$tableUsers = [
    "19291" => ["AAA", "Nom utilisateur AAA"],
    "19292" => ["AAA1", "Nom utilisateur AAA1"],
    "19293" => ["AAA2", "Nom utilisateur AAA2"]
];

$error = ''; // Initialisation du message d'erreur

if (isset($_POST['submit'])) {
    $matricule = $_POST['Number'];
    $password = $_POST['password'];

    // Vérification de l'existence du matricule dans $tableUsers
    if (isset($tableUsers[$matricule])) {
        // Vérification du mot de passe
        if ($tableUsers[$matricule][0] === $password) {
            // Création de la session
            $_SESSION['user'] = [
                'matricule' => $matricule,
                'name' => $tableUsers[$matricule][1]
            ];
            
            // Redirection vers la page de destination
            header("Location: cours.php");
            exit(); // Arrêter l'exécution pour éviter les problèmes de redirection
        } else {
            $error = "Mot de passe incorrect. Veuillez réessayer.";
        }
    } else {
        $error = "Matricule non trouvé. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <input type="number" name="Number" placeholder="Matricule" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="submit" name="submit" value="Login">

        <!-- Affichage du message d'erreur -->
        <?php if ($error): ?>
            <div class="error-alert"><?php echo $error; ?></div>
        <?php endif; ?>
    </form>

    <script>
        // Cacher le message d'erreur après 5 secondes
        setTimeout(function() {
            var errorAlert = document.querySelector(".error-alert");
            if (errorAlert) {
                errorAlert.classList.add("fade-out");
            }
        }, 5000);
    </script>
</body>
</html>
