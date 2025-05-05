<h1>Ajouter un employé</h1>
<form action="index.php?action=create" method="POST">
    <label>Nom : <input type="text" name="nom" required></label><br>
    <label>Prénom : <input type="text" name="prenom" required></label><br>
    <label>Poste : <input type="text" name="poste" required></label><br>
    <label>Email : <input type="email" name="email" required></label><br><br>

    <h3>Mode de travail</h3>
    <label>Type :
        <select name="type" required>
            <option value="présentiel">Présentiel</option>
            <option value="télétravail">Télétravail</option>
        </select>
    </label><br>
    <label>Jour : <input type="text" name="jour" required></label><br><br>

    <button type="submit">Enregistrer</button>
</form>
