<!DOCTYPE html>
<html>
<head>
    <title>Liste des employés</title>
</head>
<body>
    <h1>Employés</h1>
    <a href="index.php?action=create_form"><button>Ajouter un employé</button></a>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Poste</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($employes as $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['nom']) ?></td>
            <td><?= htmlspecialchars($e['prenom']) ?></td>
            <td><?= htmlspecialchars($e['poste']) ?></td>
            <td><?= htmlspecialchars($e['email']) ?></td>
            <td>
                <a href="index.php?action=show&id=<?= $e['id'] ?>">Voir</a> |
                <a href="index.php?action=delete&id=<?= $e['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>