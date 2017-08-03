<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titre en Français</title>
</head>
<body>
    <form>
        <select name="langue">
            <option value="es_ES">Español</option>
            <option value="fr_FR">Français</option>
            <option value="en_GB">English</option>
        </select>
    </form>

    <div><?php $object -> translate('mort_degaulle') ?></div>
    <div>Texte en Français paragraphe 1 bloques indépendant</div>
    <img src="" />
    <div>Texte en Français paragraphe 2</div>
    <img src="" />
    <div>Texte en Français paragraphe 3</div>
</body>
</html>