<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <?php
    $mainTitle = 'administration de votre site';
    $pageTitle = 'liste des utilisateurs';
    $users = ['JOHN', 'LILI', 'CLEMENCE'];
    ?>

    <h1><?= strtoupper($mainTitle) .PHP_EOL ?></h1>

    <h2><?= ucfirst($pageTitle) .PHP_EOL ?></h2>
    <table>
        <thead>
        <tr>
            <td>Nom</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
            // On parcourt ici notre tableau d'utilisateurs pour les afficher un par un
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?php 
                    echo strtolower($user) .PHP_EOL; 
                    ?></td>
                    <td><a href="#">Supprimer</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <p>Votre site dispose de <?= count($users); ?> utilisateurs</p>
</section>
</body>
</html>