<?php
session_start();

if ($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if (!$_SESSION['usuario']){
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilo.css">
    </head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>

        </header>
        <nav class="navegacao">
            <span class="usuario">Usuário: <?= $_SESSION['usuario']; ?></span>
            <a href="logout.php">Sair</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01 - Básico </h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=comentario">Comentários</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>Módulo 02 - Tipos</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=int">Tipo inteiro</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=float">Tipo Float</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=operacoes">Operações aritméticas</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio precedência</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=string">Tipo String</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=boolean">Boolean PHP</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Módulo 03 - Variaveis</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=basico">Basico de variaveis</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis Variaveis</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referencia</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Módulo 04 - If Else</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=controle&file=if_else">If Else</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=controle&file=operador_ternario">Operador ternario</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=controle&file=switch">Switch</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Módulo 05 - Array</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=array&file=basico">Array</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=mapa">Mapa</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=desafio_indice">Desafio Indice</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=operacoes">Operações</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=multi">Multidimensionais</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=constantes">Constantes</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=get">GET</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=post">POST</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=array&file=comparacao">Comparação Arrays</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Módulo 06 - Repetição</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=for">Repetições</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=desafio_for">Desafio For</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=foreach">Foreach</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=breakcontinue">Break Continue</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=desafio_impressao">Desafio Impressão</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=whiles">While/Do While</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=repeticao&file=desafio_tabela">Desafio Tabela</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Módulo 07 - Funções</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=escopo">Função Escopo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=argumentos_retorno">Argumentos e retorno</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=palindromo">Desafio Palindromo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=arg_variaveis">Argumentos variaveis</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumento padrao</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=tipos">Tipos</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=anonimas">Função anonima</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=closure">Closure & Callable</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=desafio_recursividade">Desafio recursividade</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Funçao</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=funcoes&file=map_filter">Map/Filter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul-escuro">
                        <h3>Módulo 08 - Paradigma O.O</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=classe">Classe</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=desafio_data">Desafio Data</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor e destrutor</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=static">Static</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=classeabstrata">Classe abstrata</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=desafio_erros">desafio_erros</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=final">Final</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=traits01">traits01</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=traits02">Traits 02</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=metodosMagicos">Metodos Magicos</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=classes_objetos&file=Polimorfismo">Polimorfismo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo roxo-escuro">
                        <h3>Módulo 08 - Includes</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=includes&file=include">Include</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=includes&file=include_funcao">Include Função</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=includes&file=require">Include/Require</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=includes&file=include_return">Include Return</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=includes&file=include_once">Include Once</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo laranja-escuro">
                        <h3>Módulo 09 - Namespace</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=namespace">Namespace</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=sub_namespaces">sub-Namespace</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=use_as">Use/as</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo verde">
                        <h3>Módulo 10 - Tratamento de erro</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try/Catch</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros personalizados</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv">Desafio intdiv</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=tratamento_erro&file=error_handler">Error Handler</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>Módulo 11 - Sessão e cookies</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=sessao_cookie&file=basico_sessao">Sessão e Cookie</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=sessao_cookie&file=gerenciando_sessao">Gerenciando sessão</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Módulo 12 - API</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=API&file=data">API data #01</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=API&file=data2">API data #02</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=API&file=escrever_arquivo">escrever_arquivo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=API&file=lendo_arquivo">lendo_arquivo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=API&file=upload_arquivo">Upload Arquivo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=API&file=download_arquivo">Download Arquivo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Módulo 13 - Formulário</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=formularios&file=formulario">Formulario</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Módulo 14 - MYSQL</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=db&file=cria_banco">Criar Banco</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=criar_tabela">criar_tabela</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=inserir_1">inserir_1</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=consultar">consultar</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=excluir">excluir</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=excluir_2">excluir_2</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=incluir_2">incluir_2</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=alterar">Alterar</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=inserir_pdo">inserir_pdo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=consulta_pdo">consulta_pdo</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=exclusao">Exclusão</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=db&file=alterarpdo">alterarpdo</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>