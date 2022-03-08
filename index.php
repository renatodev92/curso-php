<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice de exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo green">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários PHP
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">
                            Desafio
                        </a>
                        </li>
                    </ul>
                </div>

                <div class="modulo red">
                    <h3>Tipos de Dados</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">
                            Tipo Inteiro
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=float">
                            Tipo Float
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">
                            Operações Aritméticas
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio Precedência PHP
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=string">
                            Tipo String
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">
                            Desafio String
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=tipo_boleano">
                            Tipo Boleano
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">
                            Conversões PHP
                        </a>
                        </li>
                    </ul>
                </div>

                <div class="modulo blue">
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">
                            Variaveis
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                            Desafio Equacão
                        </a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicao">
                            Atribuições
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & RENATO.DEV Ano <?= date('Y');?>
    </footer>
</body>

</html>