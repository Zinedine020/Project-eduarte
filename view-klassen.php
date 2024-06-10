<?php
include "klassen.php";

$klassenBeheer = new KlassenBeheer();
$klassen = $klassenBeheer->getAlleKlassen();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Klassen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<nav class="navbar">
    <div class="container">
        <a href="view-studenten.php" class="button">Studenten</a>
        <a href="view-klassen.php" class="button">Klassen</a>
    </div>
</nav>

<div class="container"> 
    <h1>Klassen</h1>
    <a href="add-klassen.php" class="btn btn-primary mb-3">Klas Toevoegen</a>
    <table class="table">
        <thead>
            <tr>
                <th>Klas ID</th>
                <th>Klas Naam</th>
                <th>Aantal Leerlingen</th>
                <th>Mentor</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($klassen as $klas): ?>
                <tr>
                    <td><?php echo $klas['klas_id']; ?></td>
                    <td><?php echo $klas['klas_naam']; ?></td>
                    <td><?php echo $klas['aantal_leerlingen']; ?></td>
                    <td><?php echo $klas['Mentor']; ?></td>
                    <td>
                        <a href="edit-klassen.php?id=<?php echo $klas['klas_id']; ?>" class="button">Bewerken</a>
                        <a href="delete-klassen.php?id=<?php echo $klas['klas_id']; ?>" class="button">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
