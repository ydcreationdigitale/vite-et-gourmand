<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Vite & Gourmand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navigation avec Contact et Connexion -->
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

    <!-- Bannière Hero avec image de fond et texte du traiteur -->
    <section class="hero-banner">
        <div class="hero-content">
            <h1>L'excellence de la table, chez vous</h1>
            <p>Traiteur passionné, nous sublimons vos événements professionnels et familiaux avec des créations culinaires faites maison, élaborées à partir de produits frais et locaux.</p>
            <a href="menus.html" class="btn-primary">Découvrir nos menus</a>
        </div>
    </section>

    <!-- Section Présentation / À propos -->
    <section class="container about-section">
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80" alt="Cuisine du traiteur">
        </div>
        <div class="about-text">
            <h2>Une cuisine authentique et sur-mesure</h2>
            <p>
                Que vous organisiez un cocktail dînatoire, un repas de famille ou un séminaire d'entreprise, Vite & Gourmand vous accompagne de A à Z. Nos chefs mettent tout leur savoir-faire au service de vos papilles pour faire de chaque moment une expérience inoubliable.
            </p>
            <a href="menus.html" class="btn-secondary">Voir toutes nos offres</a>
        </div>
    </section>

    <!-- Section Menus en vedette (quelques menus) -->
    <div class="container menus-section">
        <h2>Nos Menus du moment</h2>
        <div class="menus-grid">
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=600&q=80" alt="Menu Traditionnel">
                <div class="menu-content">
                    <h3>Menu Traditionnel</h3>
                    <p class="prix">35,00 €</p>
                    <p class="infos"><span>Omnivore</span> • <span>Français</span></p>
                    <a href="detailmenu.html?id=1" class="btn-detail">Voir le détail</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Menu Végétarien">
                <div class="menu-content">
                    <h3>Menu Végétarien Fraîcheur</h3>
                    <p class="prix">29,00 €</p>
                    <p class="infos"><span>Végétarien</span> • <span>Moderne & Léger</span></p>
                    <a href="detailmenu.html?id=2" class="btn-detail">Voir le détail</a>
                </div>
            </div>
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=600&q=80" alt="Menu Végan">
                <div class="menu-content">
                    <h3>Menu Végan Douceur</h3>
                    <p class="prix">31,00 €</p>
                    <p class="infos"><span>Végan</span> • <span>100% Végétal</span></p>
                    <a href="detailmenu.html?id=4" class="btn-detail">Voir le détail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Avis Clients -->
    <section class="container testimonials-section">
        <h2>Ce que nos clients disent</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p>"Un vrai régal ! Les portions étaient généreuses et la présentation parfaite. Nos invités ont adoré du début à la fin."</p>
                <p class="author">- Sophie M.</p>
            </div>
            <div class="testimonial-card">
                <p>"Des produits ultra frais, des saveurs au rendez-vous et un service client très à l'écoute. Je recommande les yeux fermés !"</p>
                <p class="author">- Thomas L.</p>
            </div>
        </div>
    </section>

    <!-- Section Horaires -->
    <section class="hours-section">
        <div class="container">
            <h2>Nos Horaires d'ouverture</h2>
            <div class="hours-box">
                <p><strong>Lundi au Vendredi :</strong> 09h00 - 19h00</p>
                <p><strong>Samedi :</strong> 10h00 - 21h00</p>
                <p><strong>Dimanche :</strong> 10h00 - 15h00 (Commandes livrées ou à emporter)</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Vite & Gourmand. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>