        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <div class="titulo">Formulário</div>

        <h2><strong>Cadastro</strong></h2>

        <?php
        if(count($_POST) > 0 ) {
            $erros = [];
            //verificar se o parâmetro 'nome' foi passado ou não
            if (!filter_input(INPUT_POST, "nome")) {
                $erros['nome'] = 'O campo nome é obrigatório!';
            }

            //campo n obrigatório, mas vw=erifica se a data possui um formato determinado
            if(filter_input(INPUT_POST, "nascimento")){
                $data = DateTime::createFromFormat(
                        'd/m/Y', $_POST['nascimento']);
                //se a data não estiver setada no formato determinado:
                if(!$data){
                    $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
                }
            }
            //campo obrigatório e verifica se email é válido
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                //se não for um email válido
                $erros['email'] = 'E-mail inválido!';
            }
            //validar url:
            if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
                //se não for uma url válida
                $erros['site'] = 'Site inválido!';
            }
            //colocar o mínimo e o máximo de filhos:
            $filhosConfig = [
                "options" => ["min_range" => 0, "max_range" => 30]
            ];
            //verificar se é um número inteiro e validar se está dentro da regra com o min e max de filhos
            if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT,
                $filhosConfig) && $_POST['filhos'] != 0){
                //Se a quantidade estiver errada
                $erros['filhos'] = 'Quantidade de filhos inválida!';
            }
            //validar casas decimais com 'vírgula'
            $salarioConfig = ['options' => ['decimal' => ',']];
            //verificar se é um número tipo float e se está dentro da regra para colocar números decimais com vírgula
            if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
                //Se não estiver correto
                $erros['salario'] = 'Salário inválido!';
            }
        }

        ?>
        <form action="#" method="post">
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                        id="nome" name="nome" placeholder="Nome"
                        value="<?= $_POST['nome']?>">
                    <div class="invalid-feedback">
                        <?=$erros['nome']?>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="nascimento">Nascimento</label>
                    <input type="text"
                        class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                        id="nascimento" name="nascimento"
                        placeholder="Nascimento"
                        value="<?= $_POST['nascimento']?>">
                    <div class="invalid-feedback">
                        <?=$erros['nascimento']?>
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
                        id="email" name="email" placeholder="E-mail"
                        value="<?= $_POST['email']?>">
                    <div class="invalid-feedback">
                        <?=$erros['email']?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="site">Site</label>
                    <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>"
                        id="site" name="site" placeholder="Site"
                        value="<?= $_POST['site']?>">
                    <div class="invalid-feedback">
                        <?=$erros['site']?>
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="filhos">Quantidade de filhos</label>
                    <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''?>"
                        id="filhos" name="filhos"
                        placeholder="Quantidade de filhos"
                        value="<?= $_POST['filhos']?>">
                    <div class="invalid-feedback">
                        <?=$erros['filhos']?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="salario">Salário</label>
                    <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>"
                        id="salario" name="salario"
                        placeholder="Salário"
                        value="<?= $_POST['salario']?>">
                    <div class="invalid-feedback">
                        <?=$erros['salario']?>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg">Enviar</button>
        </form>
