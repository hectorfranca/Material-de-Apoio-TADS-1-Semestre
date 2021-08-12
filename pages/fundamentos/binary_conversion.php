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
    <title>Material de apoio TADS - Conversão Binário</title>
</head>
<body>
    <?php
        include '../../components/default/header.html';
        include '../../components/default/nav.html';
    ?>
    <main>
        <section class="content-container">
            <div class="content-item title"><b>Fundamentos da Computação</b></div>
            <div class="content-item sub-title">Conversão de Bases: Binário</div>
            <div class="content-item binary-decimal">
                <p><b>Binário x Decimal:</b></p>
                <p>Na conversão de binário para decimal multiplica-se cada dígito por 2 (base do sistema binário) elevado à 
                    sua respectiva posição da direita para esquerda e somam-se os resultados:</p>
                <p>Exemplo:</p>
                <p>Vamos converter o número binário 11101 para decimal.</p>
                <p>1*2<sup>4</sup> + 1*2<sup>3</sup> + 1*2<sup>2</sup> + 0*2<sup>1</sup> + 1*2<sup>0</sup> = </p>
                <p>16 + 8 + 4 + 0 + 1 = 29</p>
                <p>Resposta: 11101<sub>2</sub> = 29<sub>10</sub></p>
            </div>
            <div class="content-item binary-octal">
                <p><b>Binário x Octal:</b></p>
                <p>A conversão de binário para octal é feita convertendo grupos de 3 bits em binário da direita para 
                    esquerda em sua representação na base octal da tabela a seguir:</p>
                <img class="content-img img-binary-octal" src="../../img/fundamentos/conversion/binary_octal.jpg">
                <p>Exemplo:</p>
                <p>Vamos converter o número binário 11001100 para octal.</p>
                <p>100<sub>2</sub> = 4<sub>8</sub><br>
                    001<sub>2</sub> = 1<sub>8</sub><br>
                    011<sub>2</sub> = 3<sub>8</sub></p>
                <p>Resposta: 11001100<sub>2</sub> = 314<sub>8</sub></p>
                <p>Observação: Note que faltou 1 bit no último grupo (11<sub>2</sub>), nesse caso acrescenta-se um 0 a 
                    esquerda para completar.</p>
            </div>
            <div class="content-item binary-hexadecimal">
                <p><b>Binário x Hexadecimal:</b></p>
                <p>A conversão de binário para hexadecimal é feita convertendo grupos de 4 bits em binário da direita 
                    para esquerda em sua representação na base hexadecimal da tabela a seguir:</p>
                <img class="content-img" src="../../img/fundamentos/conversion/binary_hexadecimal.jpg">
                <p>Exemplo:</p>
                <p>Vamos converter o número binário 1001100 para hexadecimal.</p>
                <p>1100<sub>2</sub> = C<sub>16</sub><br>
                    0100<sub>2</sub> = 4<sub>16</sub></p>
                <p>Resposta: 1001100<sub>2</sub> = 4C<sub>16</sub></p>
            </div>
            <div class="content-item links">
                <h5 class="mt-4"><b>Fontes:</b></h5>
                <p><a href="https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/" target="_blank">https://www.embarcados.com.br/conversao-entre-sistemas-de-numeracao/</a></p>
                <p><a href="https://marco.uminho.pt/~joao/Computacao2/node6.html" target="_blank">https://marco.uminho.pt/~joao/Computacao2/node6.html</a></p>
                <h5 class="mt-4"><b>Links úteis:</b></h5>
                <p>Binário x Decimal:<br>
                    <a href="https://www.youtube.com/watch?v=zToihF2FE9I" target="_blank">https://www.youtube.com/watch?v=zToihF2FE9I</a></p>
                <p>Binário x Decimal:<br>
                    <a href="https://www.youtube.com/watch?v=5-YpON8uliw" target="_blank">https://www.youtube.com/watch?v=5-YpON8uliw</a></p>
                <p>Binário x Octal:<br>
                    <a href="https://www.youtube.com/watch?v=qf5NJmnWqtw" target="_blank">https://www.youtube.com/watch?v=qf5NJmnWqtw</a></p>
                <p>Binário x Hexadecimal:<br>
                    <a href="https://www.youtube.com/watch?v=u2z-iCyLzm4" target="_blank">https://www.youtube.com/watch?v=u2z-iCyLzm4</a></p>
            </div>
        </section>
    </main>
    <?php
        include '../../components/default/footer.html';
    ?>
</body>
</html>