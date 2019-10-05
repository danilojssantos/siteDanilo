<?php

namespace App\adms\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class EditarUsuario
{

    private $Dados;
    private $DadosId;

    public function editUsuario($DadosId = null)
    {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $this->DadosId = (int) $DadosId;
        if (!empty($this->DadosId)) {
            $this->editUsuarioPriv();
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Usuário não encontrado!</div>";
            $UrlDestino = URLADM . 'usuarios/listar';
            header("Location: $UrlDestino");
        }
    }

    private function editUsuarioPriv()
    {
        if (!empty($this->Dados['EditUsuario'])) {
            unset($this->Dados['EditUsuario']);
            $this->Dados['imagem_nova'] = ($_FILES['imagem_nova'] ? $_FILES['imagem_nova'] : null);
            $editarUsuario = new \App\adms\Models\AdmsEditarUsuario();
            $editarUsuario->altUsuario($this->Dados);
            if ($editarUsuario->getResultado()) {
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário editado com sucesso!</div>";
                $UrlDestino = URLADM . 'ver-usuario/ver-usuario/' . $this->Dados['id'];
                header("Location: $UrlDestino");
            } else {
                $this->Dados['form'] = $this->Dados;
                $listarMenu = new \App\adms\Models\AdmsMenu();
                $this->Dados['menu'] = $listarMenu->itemMenu();
                $carregarView = new \Core\ConfigView("adms/Views/usuario/editarUsuario", $this->Dados);
                $carregarView->renderizar();
            }
        } else {
            $verUsuario = new \App\adms\Models\AdmsEditarUsuario();
            $this->Dados['form'] = $verUsuario->verUsuario($this->DadosId);
            //$this->Dados['form'] = $this->DadosId;
            $listarMenu = new \App\adms\Models\AdmsMenu();
            $this->Dados['menu'] = $listarMenu->itemMenu();
            $carregarView = new \Core\ConfigView("adms/Views/usuario/editarUsuario", $this->Dados);
            $carregarView->renderizar();
        }
    }

}
