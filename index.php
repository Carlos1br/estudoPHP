<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendário</title>
</head>
<body>
    <?php 
        function linha(){
            return"
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            ";
        }
    ?>

    <h1><?php echo "Calendário"; ?></h1>
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
            <?php echo linha(); ?>
            <?php echo linha(); ?>
            <?php echo linha(); ?>
            <?php echo linha(); ?>
            <?php echo linha(); ?>
        </tr>
    </table>
</body>
</html>