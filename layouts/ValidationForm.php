<?php

namespace ValidationForm\Controllers;

use MapasCulturais\App;
use MapasCulturais\i;

$route = App:: i()->createUrl('ValidationForm', 'doc', ['id'=> $entity->id]);
?>
<!--botão de Avaliar-->
    <a class="btn btn-default download"  ng-click="editbox.open('documental-options', $event)" rel = "noopener noreferrer">Avaliar ANS </a>
    <!-- Formulário -->
    <edit-box id="documental-options"  position ="top" title="<?php i :: esc_attr_e('ANS')?> "cancel-label="Cancelar" close-on-cancel="true">
        <form class="form-documental-options"action="<?= $route ?>" method="POST">
            <label for="from">Dividir as inscrições para os avaliadores do edital de forma igualitária ?</label>
                <select name = 'tipoEdital' id = 'tipoEdital' >
                    <option value="documental" selected>Sim, aceito a divisão igualitária! </option>
                    <option value="documental">Não, aceito!</option>
                </select>
            <button lass="btn btn-default download" type='submit'>Distribuir</button>
        </form>
    </edit-box>