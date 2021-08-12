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
    <title>Material de apoio TADS - Conversão Decimal</title>
</head>
<body>
    <?php
        include '../../components/default/header.html';
        include '../../components/default/nav.html';
    ?>
    <main>
        <section class="content-container">
            <div class="content-item title"><b>Fundamentos da Computação</b></div>
            <div class="content-item sub-title">Conversão de Bases: Decimal</div>
            <div class="content-item decimal-binary">
                <p><b>Decimal x Binário:</b></p>
                <p>Na conversão de decimal para binário devemos dividir o número sucessivamente por 2 
                    (base do sistema binário). O binário se dará pelo último resultado da divisão agrupado pelo 
                    conjunto de restos das divisões da direita para a esquerda.</p>
                <p>Exemplo 1:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_binary_1.jpg">
                <p>A leitura do binário é feita do último resultado para o primeiro resto. Sendo assim, o resultado da 
                    conversão do número 45 para binário é: 101101.</p>
                <p>Passo a passo – Exemplo 1:</p>
                <p>45/2 = 22; resto = 1<br>
                    22/2 = 11; resto = 0<br>
                    11/2 = 5; resto = 1<br>
                    5/2 = 2; resto = 1<br>
                    2/2 = 1 (último resultado); resto = 0</p>
                <p>Resposta: 45<sub>10</sub>= 101101<sub>2</sub></p>
                <p>Exemplo 2:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_binary_2.jpg"><br>
                <p>Observação - Exemplo 2: O número “0” no começo do binário é descartado, assim tendo por resultado 
                    11001<sub>2</sub> ao invés de 011001<sub>2</sub>.</p>
            </div>
            <div class="content-item decimal-octal">
                <p><b>Decimal x Octal:</b></p>
                <p>Na conversão de decimal para octal devemos dividir o número sucessivamente por 8 (base do sistema octal). 
                    O octal se dará pelo último resultado da divisão agrupado pelo conjunto de restos das divisões da direita 
                    para a esquerda, semelhante a conversão para binário.</p>
                <p>Exemplo 1:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_octal_1.jpg">
                <p>A leitura do octal é feita do último resultado para o primeiro resto. Sendo assim, o resultado 
                    da conversão do número 246 para octal é: 366.</p>
                <p>Passo a passo – Exemplo 1:</p>
                <p>246/8 = 30; resto = 6<br>
                    30/8 = 3 (último resultado); resto = 6</p>
                <p>Resposta: 246<sub>10</sub>= 366<sub>8</sub></p>
                <p>Exemplo 2:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_octal_2.jpg"><br>
                <p>Observação - Exemplo 2: O número “0” no começo do octal é descartado, assim tendo por resultado 331<sub>8</sub>
                    ao invés de 0331<sub>8</sub>, tanto na primeira representação como na segunda.</p>
            </div>
            <div class="content-item decimal-hexadecimal">
                <p><b>Decimal x Hexadecimal:</b></p>
                <p>Na conversão de decimal para hexadecimal devemos dividir o número sucessivamente por 16 
                    (base do sistema hexadecimal). O hexadecimal se dará pelo último resultado da divisão 
                    agrupado pelo conjunto de restos das divisões da direita para a esquerda, semelhante a 
                    conversão para binário.</p>
                <p>Exemplo 1:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_hexadecimal_1.jpg">
                <p>A leitura do hexadecimal é feita do último resultado para o primeiro resto. Após feito a etapa 
                    anterior deve-se considerar cada elemento individualmente, efetuando a conversão para hexadecimal. 
                    Sendo assim, o resultado da conversão do número 438 para octal é 1B6.</p>
                <p>Note que o resto da segunda divisão foi o número 11, onde na tabela a seguir corresponde ao número B em Hexadecimal.</p>
                <img class="content-img" src="../../img/fundamentos/conversion/binary_hexadecimal.jpg">
                <p>Passo a passo – Exemplo 1:</p>
                <p>438/16 = 27; resto = 6<br>
                    27/16 = 1 (último resultado); resto = 11</p>
                <p>11<sub>10</sub> = B<sub>16</sub></p>
                <p>Resposta: 438<sub>10</sub> = 1B6<sub>16</sub></p>
                <p>Exemplo 2:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/decimal_hexadecimal_2.jpg"><br>
                <p>Observação - Exemplo 2: O número “0” no começo do hexadecimal é descartado, assim tendo por 
                    resultado DF<sub>16</sub>, tanto na primeira representação como na segunda.</p>
            </div>
            <div class="content-item links">
                <h5 class="mt-4"><b>Fontes:</b></h5>
                <p><a href="https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/" target="_blank">https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/</a></p>
                <h5 class="mt-4"><b>Links úteis:</b></h5>
                <p>Decimal x Octal:<br>
                    <a href="https://www.youtube.com/watch?v=LjakHZ4s9ZM" target="_blank">https://www.youtube.com/watch?v=LjakHZ4s9ZM</a></p>
                <p>Decimal x Hexadecimal:<br>
                    <a href="https://www.youtube.com/watch?v=w1sczLF47KE" target="_blank">https://www.youtube.com/watch?v=w1sczLF47KE</a></p>
           </div>
        </section>
    </main>
    <?php
        include '../../components/default/footer.html';
    ?>
</body>
</html>