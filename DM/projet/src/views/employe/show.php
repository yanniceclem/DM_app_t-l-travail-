<!DOCTYPE html>
<html>
<head>
    <title>Détail de l'employé</title>
</head>
<body>
    <h1>Détails de l'employé</h1>
    <p><strong>Nom :</strong> <?= htmlspecialchars($employe['nom']) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($employe['prenom']) ?></p>
    <p><strong>Poste :</strong> <?= htmlspecialchars($employe['poste']) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($employe['email']) ?></p>

    <h2>Mode(s) de travail</h2>
    <?php if (!empty($modes)): ?>
        <ul>
            <?php foreach ($modes as $m): ?>
                <li><?= htmlspecialchars($m['jour']) ?> : <?= htmlspecialchars($m['type']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun mode de travail défini.</p>
    <?php endif; ?>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>