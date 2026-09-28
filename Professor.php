<?php

    

    class Professor extends Pessoa {
        private string $especialidade;
        private string $cref;

        public function __construct(string $nome, string $cpf, string $email, string $especialidade, string $cref) {
            parent::__construct($nome, $cpf, $email);

            $this->especialidade = $especialidade;
            $this->cref = $cref;
        }

        public function getEspecialidade(): string {
            return $this->especialidade;
        }

        public function getCref(): string {
            return $this->cref;
        }

        // SOBRESCRITA
        public function exibirDados(): void {
            echo "=== PROFESSOR ===<br>";

            parent::exibirDados();

            echo "Especialidade: " . $this->especialidade . "<br>";

            echo "CREF: " . $this->cref . "<br>";
        }
    }
    ?>
