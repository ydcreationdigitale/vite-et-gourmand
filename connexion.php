<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Vite & Gourmand</title>
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

    <main class="container" style="max-width: 450px; margin: 60px auto; padding: 20px;">
        <div class="filter-bar" style="background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.03);">
            <h1 style="text-align: center; font-size: 1.8rem; margin-top: 0; margin-bottom: 25px; color: #222;">Espace Connexion</h1>
            
            <form style="display: flex; flex-direction: column; gap: 20px;">
                <div class="filter-group" style="display: flex; flex-direction: column; gap: 5px;">
                    <label style="font-weight: 600; color: #555;">Identifiant (Adresse e-mail) :</label>
                    <input type="email" placeholder="Ex: client@exemple.com" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div class="filter-group" style="display: flex; flex-direction: column; gap: 5px;">
                    <label style="font-weight: 600; color: #555;">Mot de passe :</label>
                    <input type="password" placeholder="••••••••" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <small style="color: #777; font-size: 0.75rem; margin-top: 3px; line-height: 1.3;">Norme sécurité CNIL : Minimum 10 caractères, incluant une majuscule, une minuscule, un chiffre et un caractère spécial.</small>
                </div>

                <button type="submit" class="btn-filter" style="width: 100%; padding: 12px; font-weight: bold; cursor: pointer; margin-top: 5px;">Se connecter</button>
                <div style="text-align: center; margin-top: 5px;">
                    <a href="#" style="color: #e67e22; font-size: 0.85rem; text-decoration: none; font-weight: 600;">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Vite & Gourmand. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
