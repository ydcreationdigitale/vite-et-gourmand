<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du Menu - Vite & Gourmand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   !-- Header / Navigation avec Contact et Connexion -->
    <header class="site-header">
        <div class="container header-container">
            <a href="index.html" class="logo">Vite & Gourmand</a>
            <nav class="nav">
                <a href="index.php">Accueil</a>
                <a href="menus.php">Nos Menus</a>                 
                <a href="contact.php">Contact</a>
                <a href="connexion.php" class="btn-connexion">Connexion</a>
            </nav>
        </div>
    </header>

    <main class="container" style="margin-top: 40px; margin-bottom: 60px;">
        <div class="detail-wrapper">
            <div class="detail-image">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80" alt="Menu Traditionnel">
            </div>
            
            <div class="detail-info">
                <h1>Menu Traditionnel</h1>
                <p class="prix">35,00 €</p>
                
                <p style="margin: 15px 0;"><strong>Régime :</strong> Omnivore</p>
                <p style="margin: 15px 0;"><strong>Thème :</strong> Français</p>
                <p style="margin: 15px 0;"><strong>Nombre de personnes minimum :</strong> 2 personnes</p>
                
                <div style="margin-top: 25px;">
                    <h3>Description</h3>
                    <p style="line-height: 1.6; color: #555;">Un voyage au cœur du terroir avec des produits frais, locaux et de saison. Entrée, plat et dessert faits maison préparés avec soin par notre chef.</p>
                </div>

                <div style="margin-top: 35px;">
                    <a href="menus.html" class="btn-secondary">← Retour aux menus</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Vite & Gourmand. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>