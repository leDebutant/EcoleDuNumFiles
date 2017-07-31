<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="traductionService" method="post">
        <select name="langue">
            <option value="en_GB">English</option>
            <option value="fr_FR">Français</option>
            <option value="es_ES">Español</option>
        </select>
        <input type="submit" value="Select your language"/>
    </form>

    <h2>
        <?= $translator->translate('alexander_title'); ?>
    </h2>

    <h3>
        <?= $translator->translate('alexander_description'); ?>
    </h3>
</body>
</html>