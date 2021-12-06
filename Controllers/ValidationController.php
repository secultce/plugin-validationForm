<?php

namespace ValidationForm\Controllers;

use MapasCulturais\App;
use MapasCulturais\Controller;
use MapasCulturais\i;

class ValidationController extends Controller
{
    public function ValidationForms() 
    {
        $input = $_POST;
        $erro = false;
        $app = App::i();

        $opportunityId = (int) $this->data['id'];
        $inscription = $this->data['publishInscription'];
        $opportunity =  $app->repo("Opportunity")->find($opportunityId);

        // Verifica se o POST tem algum valor
        if ( !isset( $_POST ) || empty( $_POST ) ) {
            $erro = 'Campo Vazio.';
            
        }
        // Verifica se $nome realmente existe e se é um número. 
        // Também verifica se não existe nenhum erro anterior
        if ( ( ! isset( $senha) || ! is_numeric( $senha ) ) && !$erro ) {
            $erro = 'A senha deve ser um valor número.';
        }

        // Verifica se $nome realmente existe e se é uma string. 
        // Também verifica se não existe nenhum erro anterior
        if ( ( ! isset( $name) || ! is_string( $name ) ) && !$erro ) {
            $erro = 'A nome não pode ser um valor número.';
        }
        
    }
}

?>