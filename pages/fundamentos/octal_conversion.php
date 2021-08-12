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
    <title>Material de apoio TADS - Conversão Octal</title>
</head>
<body>
    <?php
        include '../../components/default/header.html';
        include '../../components/default/nav.html';
    ?>
    <main>
        <section class="content-container">
            <div class="content-item title"><b>Fundamentos da Computação</b></div>
            <div class="content-item sub-title">Conversão de Bases: Octal</div>
            <div class="content-item octal-binary">
                <p><b>Octal x Binário:</b></p>
                <p>A conversão de octal para binário é feita convertendo dígito a dígito de octal em binário, 
                    da direita para a esquerda. Cada digito é convertido para um grupo de 3 bits, conforme tabela a seguir:</p>
                <img class="content-img img-binary-octal" src="../../img/fundamentos/conversion/binary_octal.jpg">
                <p>Exemplo:</p>
                <p>Para entender esse processo, vamos converter o número 1754<sub>8</sub> para binário:</p>
                <p>Passo a passo – Exemplo:</p>
                <p>1<sub>8</sub> = 001<sub>2</sub><br>
                    7<sub>8</sub> = 111<sub>2</sub><br>
                    5<sub>8</sub> = 101<sub>2</sub><br>
                    4<sub>8</sub> = 100<sub>2</sub></p>
                <p>Resposta: 1754<sub>8</sub> = 001111101100<sub>2</sub></p>
            </div>
            <div class="content-item octal-binary">
                <p><b>Octal x Decimal:</b></p>
                <p>Na conversão de octal para decimal multiplica-se cada dígito por 8 (base do sistema octal) 
                    elevado à sua respectiva posição da direita para esquerda e somam-se os resultados:</p>
                <p>Exemplo:</p>
                <p>Vamos converter o número 123<sub>8</sub> em decimal.</p>
                <p>1*8<sup>2</sup> + 2*8<sup>1</sup> + 3*8<sup>0</sup> =</p>
                    <p>64 + 16 + 3 = 83</p>
                <p>Resposta: 83<sub>10</sub></p>
            </div>
            <div class="content-item octal-hexadecimal">
                <p><b>Octal x Hexadecimal:</b></p>
                <p>Para converter um número octal em hexadecimal primeiro convertemos para binário e depois para hexadecimal.</p>
                <p>Exemplo:</p>
                <p>Passo 1: Vamos converter o número 154<sub>8</sub> para binário.</p>
                <p>1<sub>8</sub> = 001<sub>2</sub><br>
                    5<sub>8</sub> = 101<sub>2</sub><br>
                    4<sub>8</sub> = 100<sub>2</sub></p>
                <p>Resultado: 154<sub>8</sub> = 001101100<sub>2</sub></p>
                <p>Passo 2: Vamos converter o binário obtido para hexadecimal.</p>
                <p>0000<sub>2</sub> = 0<sub>16</sub><br>
                    0110<sub>2</sub> = 6<sub>16</sub><br>
                    1100<sub>2</sub> = C<sub>16</sub></p>
                <p>Resultado: 001101100<sub>2</sub> = 06C<sub>16</sub></p>
                <p>Resposta: 154<sub>8</sub> = 06C<sub>16</sub></p>
            </div>
            <div class="content-item links">
                <p class="mt-5"><b>Fontes:</b></p>
                <p><a href="https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/" target="_blank">https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/</a></p>
                <h5 class="mt-4"><b>Links úteis:</b></h5>
                <p>Octal x Binário:<br>
                    <a href="https://www.youtube.com/watch?v=rq7K2vFir3A" target="_blank">https://www.youtube.com/watch?v=rq7K2vFir3A</a></p>
                <p>Octal x Decimal:<br>
                    <a href="https://www.youtube.com/watch?v=xfI1rs0RWw0" target="_blank">https://www.youtube.com/watch?v=xfI1rs0RWw0</a></p>
            </div>
        </section>
    </main>
    <?php
        include '../../components/default/footer.html';
    ?>
</body>
</html>