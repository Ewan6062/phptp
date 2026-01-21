<?php
$url = 'https://bbernede.fr/api/getLesMedecins.php';
$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: Mozilla/5.0\r\n"
    ]
]);

$donnees = file_get_contents($url, false, $context);
$lesMedecins = json_decode($donnees, true);
//var_dump($lesMedecins);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les médecins</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Liste des médecins</h1>
    <?php
    $lesMedecins = ["id" => 1,"nom" => "Javel","prenom" => "Aude","codePostal" => "59370","ville" => "Mons En Baroeul"];
    print_r($lesMedecins);
    ?>
</body>
</html> 
