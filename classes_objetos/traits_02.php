<div class="titulo">Traits #02</div>

<?php
trait validacao{
    public function validarStr($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhorada{
    public function validarStr($str){
        return isset($str) && trim($str);
    }
}

class Usuario{
    use validacao,validacaoMelhorada{
//        validacao::validarStr insteadof validacaoMelhorada;
        validacaoMelhorada::validarStr insteadof validacao;

        validacao::validarStr as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarStr(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));