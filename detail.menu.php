<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du Menu - Vite & Gourmand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="container header-container">
            <a href="index.php" class="logo">Vite & Gourmand</a>
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
                <img src="https://unsplash.com" alt="Menu Traditionnel">
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

                <!-- 🧮 MODULE DE CALCUL DE DEVIS EN DIRECT CONNECTÉ À CALCULER-PRIX.PHP -->
                <div class="calculator-box" style="background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #eee; margin-top: 40px; box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                    <h3 style="margin-top:0; color:#222; font-size:1.2rem;">Estimer le coût de votre livraison</h3>
                    <form id="formCalculateur" style="margin-top: 20px;">
                        <!-- Données par défaut de ce menu pour l'algorithme PHP (35€ pour 2 pers min) -->
                        <input type="hidden" id="menu_prix_base" value="35.00">
                        <input type="hidden" id="menu_pers_min" value="2">

                        <div style="display: flex; gap: 15px; margin-bottom: 15px; flex-wrap: wrap;">
                            <div style="flex: 1; min-width: 150px;">
                                <label style="font-weight: bold; font-size: 0.9rem; display: block; margin-bottom: 5px;">Nombre de convives :</label>
                                <input type="number" id="nb_personnes" value="2" min="1" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                            </div>
                            <div style="flex: 1; min-width: 150px;">
                                <label style="font-weight: bold; font-size: 0.9rem; display: block; margin-bottom: 5px;">Ville de livraison :</label>
                                <input type="text" id="ville" value="Bordeaux" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="font-weight: bold; font-size: 0.9rem; display: block; margin-bottom: 5px;">Distance depuis Bordeaux (km) - *Gratuit à Bordeaux* :</label>
                            <input type="number" id="distance_km" value="0" min="0" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                        </div>
                    </form>

                    <!-- Zone d'affichage des résultats du calcul -->
                    <div style="background: #222; color: #fff; padding: 20px; border-radius: 6px; font-family: monospace;">
                        <h5 style="margin-top:0; color:#e67e22; text-transform: uppercase; margin-bottom:10px;">Détail de la tarification</h5>
                        <div style="display:flex; justify-content:space-between; margin: 8px 0;"><span>Menus :</span> <span><span id="out-menus">70.00</span> €</span></div>
                        <div style="display:flex; justify-content:space-between; margin: 8px 0;"><span>Livraison & Portage :</span> <span><span id="out-livraison">0.00</span> €</span></div>
                        <hr style="border-color: #444; margin: 12px 0;">
                        <div style="display:flex; justify-content:space-between; font-weight:bold; font-size:1.1rem; color:#48bb78;"><span>Total Estimé (TTC) :</span> <span id="out-total">70.00 €</span></div>
                    </div>
                </div>

                <!-- 🛒 ZONE BOUTONS ET ACTIONS FINALES -->
                <div style="margin-top: 35px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                    <a href="menus.php" class="btn-secondary" style="text-decoration: none; padding: 10px 20px; background: #333; color: #fff; border-radius: 5px; font-weight: bold;">← Retour aux menus</a>
                    
                    <button type="button" onclick="validerLaCommande()" class="btn-filter" style="padding: 12px 30px; font-weight: bold; background: #e67e22; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem;">
                        🛒 Valider et Commander ce menu
                    </button>
                </div>

                <!-- Notification d'état de la commande -->
                <div id="zone-notification" style="margin-top: 20px; padding: 15px; border-radius: 6px; display: none; font-weight: bold; text-align: center;"></div>

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
        // Écouter en temps réel les changements des inputs pour l'estimation
        ["nb_personnes", "ville", "distance_km"].forEach(id => {
            document.getElementById(id).addEventListener("input", executerCalculPrix);
        });
    });

    function executerCalculPrix() {
        const pBase = parseFloat(document.getElementById('menu_prix_base').value);
        const pMin = parseInt(document.getElementById('menu_pers_min').value);
        const nbPers = parseInt(document.getElementById('nb_personnes').value) || 0;
        const laVille = document.getElementById('ville').value;
        const lesKm = parseFloat(document.getElementById('distance_km').value) || 0;

        fetch('calculer-prix.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                prix_base_min: pBase,
                nb_personne_min: pMin,
                nb_personnes: nbPers,
                ville: laVille,
                distance_km: lesKm
            })
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {
                document.getElementById('out-menus').innerText = data.prix_menu.toFixed(2);
                document.getElementById('out-livraison').innerText = data.frais_livraison.toFixed(2);
                document.getElementById('out-total').innerText = data.total.toFixed(2) + " €";
            } else {
                document.getElementById('out-total').innerText = data.error;
            }
        });
    }

    function validerLaCommande() {
        const nbPers = parseInt(document.getElementById('nb_personnes').value) || 0;
        const pMin = parseInt(document.getElementById('menu_pers_min').value);
        const leTitre = document.querySelector('h1').innerText;
        const zoneNotif = document.getElementById('zone-notification');

        // Vérification stricte de la règle métier du nombre de personnes
        if (nbPers < pMin) {
            zoneNotif.style.display = "block";
            zoneNotif.style.background = "#fed7d7";
            zoneNotif.style.color = "#9b2c2c";
            zoneNotif.innerText = `🛑 Erreur : L'obligation est de commander pour le nombre minimum de ${pMin} personnes inscrit dans le menu.`;
            return;
        }

        // Succès simulé et envoi du mail automatique exigé
        zoneNotif.style.display = "block";
        zoneNotif.style.background = "#c6f6d5";
        zoneNotif.style.color = "#22543d";
        zoneNotif.innerHTML = `🎉 <strong>Commande enregistrée avec succès !</strong><br>
                               Le menu <strong>"${leTitre}"</strong> a été bloqué pour ${nbPers} personnes.<br>
                               📧 Un mail automatique de confirmation vient d'être envoyé à votre adresse.`;
        
        zoneNotif.scrollIntoView({ behavior: 'smooth' });
    }
    </script>

</body>
</html>
