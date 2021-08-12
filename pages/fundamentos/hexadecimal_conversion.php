<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Material de apoio TADS IFRS - 1º Semestre">
    <meta name="keywords" content="Material de Apoio, Material de Apoio, IF, IFRS, TADS, Análise e Desenvolvimento de Sistemas, Lógica de Programação, Fundamentos da Computação, Matemática Discreta, Estatística">
    <meta name="author" content="Héctor França">
    <link rel="icon" href="http://localhost/site_material_de_apoio_tads/img/default/icon/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/default/reset.css">
    <link rel="stylesheet" href="../../style/default/header.css">
    <link rel="stylesheet" href="../../style/default/nav.css">
    <link rel="stylesheet" href="../../style/default/footer.css">
    <link rel="stylesheet" href="../../style/default/content_container.css">
    <link rel="stylesheet" href="../../style/fundamentos/conversion/content_conversion.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Material de apoio TADS - Conversão Hexadecimal</title>
</head>
<body>
    <?php
        include '../../components/default/header.html';
        include '../../components/default/nav.html';
    ?>
    <main>
        <section class="content-container">
            <div class="content-item title"><b>Fundamentos da Computação</b></div>
            <div class="content-item sub-title">Conversão de Bases: Hexadecimal</div>
            <div class="content-item hexadecimal-binary">
                <p><b>Hexadecimal x Binário:</b></p>
                <p>A conversão de hexadecimal para binário é feita convertendo dígito a dígito. Cada dígito hexadecimal 
                    é convertido para binário, conforme a tabela a seguir:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_hexadecimal_2.jpg"><br>
                <p>Cada dígito hexadecimal é convertido para um número em binário composto por 4 bits. Para exemplificar 
                    esse processo, vamos converter o número AD4516:</p>
                <p>A<sub>16</sub> = 1010<sub>2</sub><br>
                    D<sub>16</sub>= 1101<sub>2</sub><br>
                    4<sub>16</sub> = 0100<sub>2</sub><br>
                    5<sub>16</sub> = 0101<sub>2</sub><br>
                    1<sub>16</sub> = 0001<sub>2</sub><br>
                    6<sub>16</sub> = 0110<sub>2</sub></p>
                <p>Resposta: AD4516<sub>16</sub> = 101011010100010100010110<sub>2</sub></p>
            </div>
            <div class="content-item hexadecimal-decimal">
                <p><b>Hexadecimal x Decimal:</b></p>
                <p>Na conversão de hexadecimal para decimal multiplica-se cada dígito por 16 (base do sistema hexadecimal) 
                    elevado à sua respectiva posição da direita para esquerda e somam-se os resultados:</p>
                <p>Para entender esse processo, vamos converter o número 12C<sub>16</sub> para decimal:</p>
                <p>1*16<sup>2</sup> + 2*16<sup>1</sup> + 12*16<sup>0</sup> =</p>
                <p>256 + 32 + 12 = 300</p>
                <p>Resposta: 12C<sub>16</sub> = 300<sub>10</sub></p>
            </div>
            <div class="content-item hexadecimal-octal">
                <p><b>Hexadecimal x Octal:</b></p>
                <p>Para converter um número hexadecimal em octal primeiro convertemos para binário e depois para octal.</p>
                <p>Exemplo:</p>
                <p>Passo 1: Vamos converter o número 5C2<sub>16</sub> para binário.</p>
                <p>5<sub>16</sub> = 0101<sub>2</sub><br>
                    C<sub>16</sub> = 1100<sub>2</sub><br>
                    2<sub>16</sub> = 0010<sub>2</sub></p>
                <p>Resultado:  5C2<sub>16</sub> = 010111000010<sub>2</sub></p>
                <p>Passo 2: Vamos converter o binário obtido para octal.</p>
                <p>010<sub>2</sub> = 2<sub>8</sub><br>
                    111<sub>2</sub> = 7<sub>8</sub><br>
                    000<sub>2</sub> = 0<sub>8</sub><br>
                    010<sub>2</sub> = 2<sub>8</sub></p>
                <p>Resultado: 010111000010<sub>2</sub> = 2702<sub>8</sub></p>
                <p>Resposta: 5C2<sub>16</sub> = 2702<sub>8</sub></p>
            </div>
            <div class="content-item links">
                <h5 class="mt-4"><b>Fontes:</b></h5>
                <p><a href="https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/" target="_blank">https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/</a></p>
                <h5 class="mt-4"><b>Links úteis:</b></h5>
                <p>Hexadecimal x Binário<br>
                    <a href="https://www.youtube.com/watch?v=1DkNZDrFjEc" target="_blank">https://www.youtube.com/watch?v=1DkNZDrFjEc</a></p>
            </div>
        </section>
    </main>
    <?php
        include '../../components/default/footer.html';
    ?>
</body>
</html>