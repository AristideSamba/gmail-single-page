<?php

session_start();

include_once './includes/signup.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pwd = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nom && $prenom && $email && $pwd) {

        // Vérifier si l'email existe déjà
        $stmtCheck = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $stmtCheck->execute([':email' => $email]);
        $count = $stmtCheck->fetchColumn();

        if ($count > 0) {
            $error = 'Cet email est déjà enregistré.';
        } else {
            // L'email n'existe pas, procéder à l'insertion
            $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);

            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            setcookie('email', $email, time() + 3600, '/', '', true, true); # one hours

            $stmt = $pdo->prepare('INSERT INTO users (nom, prenom, email, pwd) VALUES (:nom, :prenom, :email, :pwd)');
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':pwd' => $hashedPassword,
            ]);

            header('Location: index.php');
            exit;
        }
    } else {
        $error = 'Champs vides!!';
    }
}
?>