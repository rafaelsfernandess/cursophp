<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
        
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">

                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios em PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipo</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Operações Aritiméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafioPrecedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>5. Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>

                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>5. Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=funcoes&file=escopo">Funções & Escopo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos & Retorno</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=desafio_palindromo">Desafio Palindromo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variáveis</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_padrao">Argumentos Padrão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=funcao_anonima">Função Anonima</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=closure_collable">Closure e Collable</a></li>

                    </ul>
                </div>
                
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>