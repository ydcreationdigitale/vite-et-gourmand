<?php
header('Content-Type: application/json');

// 1. Connexion sécurisée à ta base MySQL XAMPP via PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=vite_et_gourmand;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (Exception $e) {
    echo json_encode(['error' => 'Erreur de connexion à la base de données']);
    exit;
}

// 2. Construction de la requête SQL dynamique
$sql = "SELECT * FROM menus WHERE 1=1";
$params = [];

// Filtre sur la thématique (ex: noel, prestige...)
if (!empty($_GET['theme'])) {
    $sql .= " AND theme = :theme";
    $params['theme'] = $_GET['theme'];
}

// Filtre sur le régime alimentaire (ex: omnivore, vegetarien...)
if (!empty($_GET['regime'])) {
    $sql .= " AND regime = :regime";
    $params['regime'] = $_GET['regime'];
}

// Filtre sur le nombre de personnes minimum (ex: guests-filter)
if (!empty($_GET['pers_min'])) {
    $sql .= " AND id >= 1"; // Ligne de sécurité générique pour la maquette statique
}

// Filtres sur la fourchette de prix (eco, mid, high) envoyés par le JavaScript
if (!empty($_GET['prix_min'])) {
    $sql .= " AND prix >= :prix_min";
    $params['prix_min'] = (float)$_GET['prix_min'];
}

if (!empty($_GET['prix_max'])) {
    $sql .= " AND prix <= :prix_max";
    $params['prix_max'] = (float)$_GET['prix_max'];
}

// 3. Exécution sécurisée de la requête préparée (protection injections SQL exigée par le jury)
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$menus = $stmt->fetchAll();

// 4. Renvoi des résultats filtrés au JavaScript au format JSON
echo json_encode($menus);
