<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
<header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>índice dos exercícios</h2>
</header>
<nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href="logout.php" class="vermelho">Sair</a>
</nav>
<main class="principal">
    <div class="conteudo">
        <nav class="modulos">
            <div class="modulo azul-escuro">
                <h3>Básico</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                            Olá, PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários - PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                            Desafio 1
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo vermelho">
                <h3>Tipos</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=int">
                            Integração CSS
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=float">
                            Tipo Float
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=arit">
                            Op.Aritméticas
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio Precedência                            </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=string">
                            Tipo String
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_string">
                            Desafio String
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=boleano">
                            Tipo Boleano
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=conversoes">
                            Conversões
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo azul">
                <h3>Variáveis</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=basico">
                            Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                            Desafio Equação
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=interpolacao">
                            Interpolções
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                            Variáveis Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                            Desafio Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                            Valor vs Referência
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=constantes">
                            Constantes
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo roxo">
                <h3>Controle</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=controle&file=if_else">
                            If Else
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=operadores_realacionais">
                            Op. Relacionais
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=op_relacionais_2">
                            Op. Relacionais II
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=desafio_pi">
                            Desafio PI
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=operadores_logicos">
                            Operadores Lógicos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">
                            Desafio Op. Lógicos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=operador_ternario">
                            Operador Ternário
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=switch">
                            Switch
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle&file=desafio_switch">
                            Desafio Switch
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo laranja ">
                <h3>Array</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=array&file=basico">
                            Array
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=mapa">
                            Mapa
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=desafio_index">
                            Desafio Index
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=desafio_meses">
                            Desafio Meses
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=operacoes">
                            Operações
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=desafio_sorteio">
                            Desafio Sorteio
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=multi">
                            Multidimensionais
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=constante">
                            Arrays Constantes
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=get">
                            $_GET
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=post">
                            $_POST
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=array&file=comparacao">
                            Comparação Array
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo verde-escuro ">
                <h3>Módulo 06</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=for">
                            Laço For
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=desafio_for">
                            Desafio For
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=foreach">
                            Foreach
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=continue_break">
                            Break/Continue
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=desafio_impressao">
                            Desafio Impressão
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=while">
                            While/Do While
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=desafio_tabela">
                            Desafio Tabela #01
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=repeticoes&file=desafio_tabela_2">
                            Desafio Tabela #02
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo vermelho-escuro">
                <h3>Funções</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=escopo">
                            Função & Escopo
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=args_retorno">
                            Args & Retorno
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=desafio_palindromo">
                            Desafio Palindromo
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=args_variaveis">
                            Argumentos Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=args_padrao">
                            Argumento Padrão
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=usando_tipos">
                            Usando Tipos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=anonimas">
                            Funções Anônimas
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=closure_callable">
                            Closure & Callable
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=recursividade">
                            Recursividade
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=desafio_recursao">
                            Desafio Recursão
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=retornando_funcao">
                            Retornando Função
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=funcoes&file=map_filter">
                            Map & Filter
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo verde">
                <h3>Paradgma O.O.</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=classe">
                            Primeira Classe
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=desafio_classe">
                            Desafio Classe
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">
                            Construtor & Destrutor
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=heranca">
                            Herança
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=visibilidade">
                            Visibilidade
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=static">
                            Membros Estáticos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=interface">
                            Interface
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=abstract">
                            Classe Abstrata
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=desafio_erros">
                            Desafio Erros
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=final">
                            Modificador Final
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=traits_01">
                            Traits #01
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=traits_02">
                            Traits #02
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=magic_methods">
                            Magic methods
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=classes_objetos&file=polimorfismo">
                            Polimorfismo
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo azul-escuro">
                <h3>Includes</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=includes&file=include">
                            Include
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=includes&file=include_funcao">
                            Include Função
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=includes&file=include_require">
                            Include vs Require
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=includes&file=require_return">
                            Require & Return
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=includes&file=include_once">
                            Include Once
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=includes&file=desafio">
                            Desafio do Módulo
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo vermelho">
                <h3>Namespace</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=namespace&file=basico">
                            Namespace
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=namespace&file=sub_namespaces">
                            Sub-Namespaces
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=namespace&file=use_as">
                            Use/As
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo azul">
                <h3>Tratamento de Erro</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=tratamento_erro&file=try_catch">
                            Try/Catch
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">
                            Erros Personalizados
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">
                            Desafio intdiv
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">
                            Error Handler
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo roxo">
                <h3>Sessão</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=sessao&file=basico_sessao">
                            Sessão
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=sessao&file=gerenciando_sessao">
                            Gerenciando Sessão
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo laranja ">
                <h3>API</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=api&file=datas_01">
                            Datas #01
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=datas_02">
                            Datas #02
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=escrever_arquivo">
                            Escrever Arquivo
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=ler_arquivo">
                            Ler Arquivo
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=upload">
                            Upload
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=download">
                            Download
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=api&file=imagens">
                            Imagens/Desafio
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo verde-escuro ">
                <h3>Formulário</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=formulario&file=formulario2">
                            Formulário
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo vermelho-escuro">
                <h3>Banco de Dados</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=db&file=criar_banco">
                            Criar Banco
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=criar_tabela">
                            Criar Tabela
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=inserir_1">
                            Inserir Registro
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=consultar">
                            Consultar Registro
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=excluir_1">
                            Excluir Registro #01
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=excluir_2">
                            Excluir Registro #02
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=inserir_2">
                            Inserir Registro #02
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=alterar">
                            Alterar Registro
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=inserir_pdo">
                            PDO: Inserir
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=consultar_pdo">
                            PDO: Consultar
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=excluir_pdo">
                            PDO: Exluir
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=db&file=alterar_pdo">
                            PDO: Alterar
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo roxo-escuro">
                <h3>Exercícios Fora do Curso</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=exercicios_fora&file=exercicios_logica">
                            ExercÍcios Lógica
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=exercicios_fora&file=exercicios_if_else">
                            Testes Condicionais exercicios_estrutura_repeticao
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=exercicios_fora&file=exercicios_estrutura_repeticao">
                            Exercícios das Estruturas de Repetição
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=exercicios_fora&file=funcoes">
                            Lista de exercícios de Funções em PHP
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</main>
<footer class="rodape">
    <small>britoRai &copy; <?= date('Y'); ?> </small>
</footer>
</body>
</html>