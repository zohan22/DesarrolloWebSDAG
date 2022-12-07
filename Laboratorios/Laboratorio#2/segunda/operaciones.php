<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
    class Operaciones
    {   
        public $a;
        public $b;
        public $c;

        function __contruct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        function CalcularSuma(){
            return $this->a + $this->b + $this->c;
        }

        function CalcularMayor(){
            if($this->a > $this->b && $this->a > $this->c){
                return $this->a;
            }else if($this->b > $this->c && $this->b > $this->a){
                return $this->b;
            }else{
                return $this->c;
            }
        }
        
        function MostrarCalculos(){
        ?>
        <table>
            <tr>
                <th>Valor de A</th>
                <th>Valor de B</th>
                <th>Valor de C</th>
            </tr>
            <tr>
                <td><?php echo $this->a; ?></td>
                <td><?php echo $this->b; ?></td>
                <td><?php echo $this->c; ?></td>
            </tr>
            <tr>
                <th>Suma</th>
                <td><?php echo $this->CalcularSuma(); ?></td>
            </tr>
            <tr>
                <th>Mayor</th>
                <td><?php echo $this->CalcularMayor(); ?></td>
            </tr>
        </table>
        <?php
        }
    }
?>
</body>
</html>