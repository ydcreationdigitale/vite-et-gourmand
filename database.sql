CREATE DATABASE IF NOT EXISTS vite_et_gourmand;
USE vite_et_gourmand;

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    gsm VARCHAR(15) NOT NULL,
    adresse_postale TEXT NOT NULL,
    role ENUM('utilisateur', 'employe', 'administrateur') DEFAULT 'utilisateur'
);

CREATE TABLE menus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    theme ENUM('Noel', 'Paques', 'classique', 'evenement') NOT NULL,
    regime ENUM('vegetarien', 'vegan', 'classique') NOT NULL,
    nb_personne_min INT NOT NULL,
    prix_base_min DOUBLE NOT NULL,
    conditions TEXT,
    stock_disponible INT NOT NULL
);

-- Injection complète de 9 menus pour tester les filtres au centime près
TRUNCATE TABLE menus;
INSERT INTO menus (titre, description, theme, regime, nb_personne_min, prix_base_min, stock_disponible) 
VALUES 
('Menu de Noël Tradition', 'Une délicieuse dinde aux marrons et bûche traditionnelle.', 'Noel', 'classique', 5, 150.00, 10),
('Buffet de Pâques Pascal', 'Gigot d\'agneau rôti et ses petits légumes printaniers.', 'Paques', 'classique', 6, 210.00, 15),
('Le Printemps Végétarien', 'Menu 100% végétarien avec produits frais du marché bordelais.', 'evenement', 'vegetarien', 4, 120.00, 8),
('Festin Vegan d\'Automne', 'Une déclinaison gourmande autour des courges et champignons.', 'classique', 'vegan', 5, 160.00, 5),
('Cocktail Événementiel Éco', 'Idéal petits budgets. Assortiment de pièces salées et sucrées.', 'evenement', 'classique', 10, 99.00, 20),
('Prestige de Pâques', 'Menu gastronomique haut de gamme autour du chocolat et de l\'agneau.', 'Paques', 'classique', 6, 350.00, 5),
('Buffet de Noël Végétarien', 'Une alternative festive et gourmande sans viande ni poisson.', 'Noel', 'vegetarien', 4, 180.00, 12),
('Le Saveurs Vertes (Cru & Vegan)', 'Menu gastronomique 100% végétal et local pour les passionnés.', 'classique', 'vegan', 2, 85.00, 15),
('Grand Banquet d\'Affaires', 'Idéal pour les grands groupes. Service complet haut de gamme.', 'evenement', 'classique', 15, 600.00, 3);
