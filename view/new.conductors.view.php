<!DOCTYPE html>
<html>

<head>
    <title>Add Conductor</title>
</head>

<body>
    <h1>Add New Conductor</h1>
    <form action="<?= URL ?>conductors/addvalid" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <input type="submit" value="Add">
    </form>
</body>

</html>
