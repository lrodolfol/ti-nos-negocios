<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Core\Session;
use Source\Models\User;
use Source\Models\Auth;

class App extends Controller {

    public function __construct() {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        echo 'ola mundo';
    }

    public function login(array $data) {
        $head = $this->seo->render(
            "Entrar - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/back-log"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("auth", [
            "head" => $head,
            "title" => "Faça seu login",
            "desc" => "você 100% interado do andamento do seu produto"
        ]);
    }

    public function loginPost(array $data) {
        $head = $this->seo->render(
            "Entrar - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/back-log"),
            theme("/assets/images/share.jpg")
        );

        if (!empty($data['csrf'])) {
            $msgError = "";

            if (!csrf_verify($data)) {
                $msgError = "Erro ao enviar, favor use o formulário";
            }

            if (empty($data['email']) || empty($data['password'])) {
                $msgError = "Informe seu email e senha para entrar";
            }

            if(! empty($msgError)) {
                $this->message->error($msgError)->flash();

                echo $this->view->render("auth", [
                    "head" => $head,
                    "title" => "Faça seu login",
                    "desc" => "você 100% interado do andamento do seu produto"
                ]);

                return;
            }

            $save = (isset($data['save']) ? true : false);
            $auth = new Auth();
            $login = $auth->login($data['email'], $data['password'], $save);

            if (!$login) {
                $this->message->error("Credenciais incorretas, tente novamente")->flash();

                echo $this->view->render("auth", [
                    "head" => $head,
                    "title" => "Faça seu login",
                    "desc" => "você 100% interado do andamento do seu produto",
                ]);

                return;
            }

            redirect("/app");
        }
    }
    

    
}
