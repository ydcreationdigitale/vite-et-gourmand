<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['error' => 'Données invalides']);
    exit;
}

$prixBaseMenu = (float)$input['prix_base_min'];
$nbPersonneMin = (int)$input['nb_personne_min'];
$nbPersonnesChoisi = (int)$input['nb_personnes'];
$ville = $input['ville'];
$distanceKm = (float)$input['distance_km'];

// Sécurité : Obligation de commander au moins le minimum du menu
if ($nbPersonnesChoisi < $nbPersonneMin) {
    echo json_encode(['error' => 'Le nombre de personnes est inférieur au minimum requis pour ce menu.']);
    exit;
}

// 1. Calcul de base au prorata par personne
$prixParPersonne = $prixBaseMenu / $nbPersonneMin;
$prixTotalMenu = $prixParPersonne * $nbPersonnesChoisi;

// 2. Réduction de 10% si invités >= min + 5
if ($nbPersonnesChoisi >= ($nbPersonneMin + 5)) {
    $prixTotalMenu = $prixTotalMenu * 0.90;
}

// 3. Frais de livraison (Gratuit à Bordeaux, payant si autre ville : 5€ + 0.59€/km)
$fraisLivraison = 0;
if (strtolower(trim($ville)) !== 'bordeaux') {
    $fraisLivraison = 5 + (0.59 * $distanceKm);
}

echo json_encode([
    'success' => true,
    'prix_menu' => round($prixTotalMenu, 2),
    'frais_livraison' => round($fraisLivraison, 2),
    'total' => round($prixTotalMenu + $fraisLivraison, 2)
]);
