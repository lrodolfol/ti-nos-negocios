<?php

namespace Source\App;

use Source\Core\Controller;

class Error extends Controller {

    public function __construct() {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }
    
    public function problemas($param) : void {
        echo "Estamos enfretando problemas";
    }

    public function error(array $data): void {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "Ops";
                $error->title = "Estamos enfrentando problemas";
                $error->message = "Parece que nosso serviço não está disponivel no momento. Envie um e-mail se for urgente";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                break;
            case "manutencao":
                $error->code = "Ops";
                $error->title = "Nosso sistema está em manutenção. Volte novamente mais tarde";
                $error->message = "Voltamos logo! estamos trabalhando para melhorar nossso conteudo e voce poder controlar melhor suas contas";
                $error->linkTitle = null;
                $error->link = null;
                break;
            default:
                $error->code = $data['errcode'];
                $error->title = "Ops, conteudo indisponivel :/";
                $error->message = "O conteudo solicitado não está disponivel no momento. Tente revalidar sua busca";
                $error->linkTitle = "Continue navegando";
                $error->link = url_back();
                break;
        }

        $head = $this->seo->render(
                "{$error->code} | {$error->code}",
                $error->message,
                url("ops/{$error->code}"),
                url("/assets/images/shared.jpg"),
                false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);        
    }

    
}
