<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Menus - Vite & Gourmand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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

    <main class="container menus-page">
        <h1>Découvrez tous nos menus</h1>

        <!-- Barre de filtres prête à l'emploi -->
        <aside class="filter-bar">
            <h3>Filtrer nos menus</h3>
            <form class="filter-form">
                <div class="filter-group">
                    <label for="max-price">Prix max :</label>
                    <input type="range" id="max-price" min="20" max="60" value="50" oninput="this.nextElementSibling.value = this.value + ' €'">
                    <output>50 €</output>
                </div>

                <div class="filter-group">
                    <label for="price-range">Fourchette de prix :</label>
                    <select id="price-range">
                        <option value="">Tous les prix</option>
                        <option value="eco">Moins de 30 €</option>
                        <option value="mid">30 € - 40 €</option>
                        <option value="high">Plus de 40 €</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="theme-filter">Thème :</label>
                    <select id="theme-filter">
                        <option value="">Tous les thèmes</option>
                        <option value="français">Français</option>
                        <option value="leger">Moderne & Léger</option>
                        <option value="prestige">Prestige</option>
                        <option value="tradition">Traditionnel</option>
                        <option value="noel">Fêtes de fin d'année</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="diet-filter">Régime :</label>
                    <select id="diet-filter">
                        <option value="">Tous les régimes</option>
                        <option value="omnivore">Omnivore</option>
                        <option value="vegetarien">Végétarien</option>
                        <option value="vegan">Végan</option>
                        <option value="halal">Halal</option>
                        <option value="fete">De fête</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="guests-filter">Personnes min :</label>
                    <input type="number" id="guests-filter" min="1" max="10" placeholder="Ex: 2">
                </div>

                <button type="submit" class="btn-filter">Appliquer les filtres</button>
            </form>
        </aside>
        
        <!-- Grille des 6 Menus -->
        <div class="menus-grid">
            <!-- 1. Traditionnel -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=600&q=80" alt="Menu Traditionnel">
                <div class="menu-content">
                    <h3>Menu Traditionnel</h3>
                    <p class="prix">35,00 €</p>
                    <p class="infos"><span>Omnivore</span> • <span>Français</span></p>
                    <p class="desc-court">Un voyage au cœur du terroir avec des produits frais, locaux et de saison.</p>
                    <a href="detailmenu.html?id=1" class="btn-detail">Voir le détail</a>
                </div>
            </div>

            <!-- 2. Végétarien -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Menu Végétarien">
                <div class="menu-content">
                    <h3>Menu Végétarien Fraîcheur</h3>
                    <p class="prix">29,00 €</p>
                    <p class="infos"><span>Végétarien</span> • <span>Moderne & Léger</span></p>
                    <p class="desc-court">Une explosion de saveurs végétales, colorées et vitaminées.</p>
                    <a href="detailmenu.html?id=2" class="btn-detail">Voir le détail</a>
                </div>
            </div>

            <!-- 3. Festif -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Menu Festif">
                <div class="menu-content">
                    <h3>Menu Festif & Gourmand</h3>
                    <p class="prix">45,00 €</p>
                    <p class="infos"><span>De fête</span> • <span>Prestige</span></p>
                    <p class="desc-court">Idéal pour vos grands évènements, mariages ou repas de famille.</p>
                    <a href="detailmenu.html?id=3" class="btn-detail">Voir le détail</a>
                </div>
            </div>

            <!-- 4. Végan -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=600&q=80" alt="Menu Végan">
                <div class="menu-content">
                    <h3>Menu Végan Douceur</h3>
                    <p class="prix">31,00 €</p>
                    <p class="infos"><span>Végan</span> • <span>100% Végétal</span></p>
                    <p class="desc-court">Une cuisine éthique et inventive, mariant graines anciennes et légumes de saison.</p>
                    <a href="detailmenu.html?id=4" class="btn-detail">Voir le détail</a>
                </div>
            </div>

            <!-- 5. Halal -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=600&q=80" alt="Menu Halal">
                <div class="menu-content">
                    <h3>Menu Orient Saveurs (Halal)</h3>
                    <p class="prix">36,00 €</p>
                    <p class="infos"><span>Halal</span> • <span>Épicé & Raffiné</span></p>
                    <p class="desc-court">Des viandes certifiées halal sublimées par des épices douces et des accompagnements orientaux.</p>
                    <a href="detailmenu.html?id=5" class="btn-detail">Voir le détail</a>
                </div>
            </div>

            <!-- 6. Noël -->
            <div class="menu-card">
                <img src="https://images.unsplash.com/photo-1543353071-873f17a7a088?auto=format&fit=crop&w=600&q=80" alt="Menu de Noël">
                <div class="menu-content">
                    <h3>Menu Magie de Noël</h3>
                    <p class="prix">52,00 €</p>
                    <p class="infos"><span>De fête</span> • <span>Fêtes de fin d'année</span></p>
                    <p class="desc-court">Foie gras, volaille aux marrons et bûche de fête pour illuminer vos réveillons.</p>
                    <a href="detailmenu.html?id=6" class="btn-detail">Voir le détail</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Vite & Gourmand. Tous droits réservés.</p>
        </div>
    </footer>

 <script>
    document.addEventListener("DOMContentLoaded", () => {
        filtrerLesMenus();

        document.querySelector('.filter-form').addEventListener('submit', (e) => {
            e.preventDefault();
            filtrerLesMenus();
        });
    });

    function filtrerLesMenus() {
        const prixRange = document.getElementById('price-range').value;
        const theme = document.getElementById('theme-filter').value;
        const regime = document.getElementById('diet-filter').value;
        const persMin = document.getElementById('guests-filter').value;

        let url = `get-menus.php?theme=${theme}&regime=${regime}&pers_min=${persMin}`;
        
        if(prixRange === 'eco') url += '&prix_max=30';
        if(prixRange === 'mid') url += '&prix_min=30&prix_max=40';
        if(prixRange === 'high') url += '&prix_min=40';

        fetch(url)
        .then(response => response.json())
        .then(menus => {
            const grille = document.querySelector('.menus-grid');
            grille.innerHTML = menus.length === 0 ? "<p class='text-center w-100'>Aucun menu ne correspond à vos filtres.</p>" : "";

            menus.forEach(menu => {
                grille.innerHTML += `
                    <div class="menu-card">
                        <img src="${menu.image_url || 'https://unsplash.com'}" alt="${menu.titre}">
                        <div class="menu-content">
                            <h3>${menu.titre}</h3>
                            <p class="prix">${menu.prix_base_min ? menu.prix_base_min.toFixed(2) : menu.prix.toFixed(2)} €</p>
                            <p class="infos"><span>${menu.regime}</span> • <span>${menu.theme}</span></p>
                            <p class="desc-court">${menu.description || ''}</p>
                            <a href="detailmenu.php?id=${menu.id}" class="btn-detail">Voir le détail</a>
                        </div>
                    </div>`;
            });
        });
    }
    </script>

</body>
</html>

</body>
</html>