<?php
// Questions et réponses
$questions = [
    [
        'question' => 'Quelle est la capitale de la France ?',
        'reponses' => ['Paris', 'Lyon', 'Marseille bébé'],
        'answer' => "0"
    ],
    [
        'question' => 'Complétez l’expression : Avoir les yeux plus gros que le ____',
        'reponses' => ['Pied', 'Ventre', 'Nez'],
        'answer' => "1"
    ],
    [
        'question' => 'Que signifie en français le mot « Guten Tag » en allemand, « kalimera » en grec, « buongiorno » en italien ?',
        'reponses' => ['Merci', 'Bonjour', 'Au revoir'],
        'answer' => "1"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questions Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="questions">
    <form method="POST">
        <!-- 

        Afficher la liste des questions

        -->
        <input type="submit" value="Valider">
    </form>
</body>
</html>
