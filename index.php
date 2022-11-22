<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }

        .container {
            background-color: gray;
            width: 400px;
            height: auto;
            margin: 100px auto;
            padding: 20px;
            align-items: baseline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form  method="POST">
            <h1>Exercicio nº 3 </h1>
            <p>Informe o valor do capital em atraso</p>
            <input type="number" name="A" id="A">
            <p>Informe a taxa mensal</p>
            <input type="number" name="B" id="B">
            <p>Informe quantos meses está atrasado</p>
            <input type="number" name="C" id="C"><br><br>
            <input type="submit" name="btngerar" value="calcular"> 
        </form>
        <?php
        $P = 0;
        if(isset($_POST['btngerar'])){
               
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        
            $P =number_format($A +($A*($B/100)*$C),2) ;
           
            echo"<h1> o valor da prestação é:  R$ ".$P."</h1>";
        }
       
        ?>
    </div>
    
</body>

</html>