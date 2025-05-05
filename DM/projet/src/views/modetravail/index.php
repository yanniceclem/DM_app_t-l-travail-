<!DOCTYPE html>
<html>
<head>
    <title>Mode de travail</title>
</head>
<body>
    <h1>Modes de travail</h1>
    <form method="POST" action="index.php?action=add_mode">
        <input type="hidden" name="id_employe" value="<?= $_GET['id'] ?>">
        <label>Type :</label>
        <select name="type">
            <option value="presentiel">Présentiel</option>
            <option value="teletravail">Télétravail</option>
        </select>
        <label>Jour :</label>
        <input type="text" name="jour" required>
        <input type="submit" value="Ajouter">
    </form>

    <table border="1">
        <tr>
            <th>Type</th>
            <th>Jour</th>
            <th>Action</th>
        </tr>
        <?php foreach ($modes as $m): ?>
        <tr>
            <td><?= htmlspecialchars($m['type']) ?></td>
            <td><?= htmlspecialchars($m['jour']) ?></td>
            <td>
                <a href="index.php?action=delete_mode&id_mode=<?= $m['id'] ?>&id=<?= $_GET['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="index.php">Retour à la liste des employés</a></p>
</body>
</html>