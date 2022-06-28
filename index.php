<?php 
    $faqs = [
        [
            'question' => 'domanda numero 1',
            'answer' => 'rsposta numero 2'
        ],
        [
            'question' => 'domanda numero 2',
            'answer' => 'rsposta numero 2'
        ],
        [
            'question' => 'domanda numero 3',
            'answer' => 'rsposta numero 3',
            'answernum' => 'risposta numerata'
        ],
        [
            'question' => 'domanda numero 4',
            'answer' => 'rsposta numero 4'
        ],

    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google question</title>
</head>
<body>
    <div><?php 
        foreach($faqs as $faq) { ?>
            <h2><?= $faq['question'] ?></h2> <div><?= $faq['answer'] ?></div>
        <?php 
        } ?>
    </div>
</body>
</html>