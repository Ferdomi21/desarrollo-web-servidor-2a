<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $array1 = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3'
    );

    $array2 = array('value1', 'value2', 'value3');

    print_r($array1);

    print("<br><br>");

    print_r($array2);
    ?>

    <?php
    $array2 = [
        'key1' => 'PS4',
        'key2' => 'PS5',
        'key3' => 'NINTENDO SWITCH',
        'key4' => 'XBOX ONE',
        'key5' => 'XBOX SERIES X'
    ];
    print_r($array2); // Imprime la array
    ?>

    <?php
    $array3 = [
        '53703282F' => 'Victor M',
        '76752427R' => 'Fernando D',
        '85296374E' => 'Paco Porras'
    ];
    print_r($array3);
    ?>
</body>

</html>