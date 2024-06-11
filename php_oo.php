<?php 

    class Funcionario
    {
        // Atributos
        public $nome = "Carlos";
        public $telefone = null;
        public $numFilhos = "3";
        
        

        // Metodos
        function resumirCadFunc()
        {
            return "Esse funcionário se chama $this->nome e possue $this->numFilhos filhos";
        }

        function modificarNumFilhos($quant)
        {
            $this->numFilhos = $quant;
        }

    }

    $y = new Funcionario('Esse é um novo resumo do cadastro do funcionário');
    echo $y -> resumirCadFunc();
    $y -> modificarNumFilhos(1);
    echo 'modificando...</br>';
    echo $y -> resumirCadFunc();
?>