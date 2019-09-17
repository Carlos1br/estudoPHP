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
        function linha($semana){
            $linha = '<tr>';
            for($i = 0; $i <= 6; $i++){
                if(array_key_exists($i, $semana)){
                    $linha .= "<td>{$semana[$i]}</td>";
                }else{
                    $linha .= "<td></td>";
                }
            }
            $linha .= '</tr>';

            return $linha;
        }
    ?>

    <?php 
        function calendario(){
            $calendario = '';
            $dia = 1;
            $semana = [];

            while ($dia <= 31){
                array_push($semana, $dia);

                if(count($semana) == 7){
                    $calendario .= linha($semana);
                    $semana = [];
                }
                $dia++;
            }
            $calendario.=linha($semana);

            return $calendario;
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
            <?php echo calendario(); ?>
        </tr>
    </table>
</body>
</html>