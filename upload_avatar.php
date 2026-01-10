<?php
session_start();
require 'Database.php'; // ton fichier de connexion

$pdo = Database::connect();
// Id de l'utilisateur connecté (par exemple stocké en session)
$userId = $_SESSION['id'] ?? null;
if (!$userId) {
    die('Utilisateur non connecté');
}

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    die('Erreur lors de l\'upload');
}

$file = $_FILES['file'];

// 1. Vérifier la taille (ex : max 2 Mo)
$maxSize = 2 * 1024 * 1024; // 2 Mo
if ($file['size'] > $maxSize) {
    die('Fichier trop volumineux (max 2 Mo)');
}

// 2. Vérifier le type (jpg / png / gif)
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if (!in_array($extension, $allowedExtensions)) {
    die('Format non autorisé');
}

// 3. Générer un nom de fichier unique
$newName = 'avatar_' . $userId . '_' . time() . '.' . $extension;
$uploadDir = __DIR__ . '/uploads/avatars/';
$destPath  = $uploadDir . $newName;

// 4. Déplacer le fichier
if (!move_uploaded_file($file['tmp_name'], $destPath)) {
    die('Erreur lors de l\'enregistrement du fichier');
}

$_SESSION['profile_image'] = $newName;

// 5. Enregistrer le nom dans la base de données
$sql = "UPDATE user SET profile_image = ? WHERE id = ?";
$stmt = $pdo->prepare($sql); // $pdo = ton objet PDO
$stmt->execute([$newName, $userId]);

// 6. Rediriger vers le profil
header('Location: profil.php');
exit;


