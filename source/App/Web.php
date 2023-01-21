<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Models\Testimonies;
use Source\Models\User;
use Source\Support\Pager;
use Source\Models\Faq\Channel;
use Source\Models\Faq\Question;
use Source\Models\Post;
use Source\Core\Session;

class Web extends Controller {

    public function __construct() {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /*
     * SITES ROUTES
     */

    public function home(): void {
        $head = $this->seo->render(
                "TI NOS NEGÓCIOS - Literalmente Presente!",
                CONF_SITE_DESC,
                url("/home"),
                theme("/assets/images/share.png")
        );

        $testimonials = (new Testimonies())->find()->limit(3)->fetch(true);

        echo $this->view->render("home", [
            "head" => $head,
            "title" => "TI NOS NEGÓCIOS",
            "subtitle" => "Literalmente Presente",
            "video" => "JE84ird5XjQ&t=463s",
            "testimonials" => $testimonials
        ]);
    }

    public function about(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente ",
            CONF_SITE_DESC,
            url("/about"),
            theme("/assets/images/share.png")
        ];
        echo $this->view->render("about-us", [
            "head" => $head
        ]);
    }

    public function webSystem(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente",
            CONF_SITE_DESC,
            url("/web-system"),
            theme("/assets/images/share.png")
        ];

        echo $this->view->render('web-system', [
            "head" => $head,
            "title" => "Sistemas Web",
            "desc" => "Solucionando e atendendo necessidades com operações robustas de forma online."
        ]);
    }

    public function softwareDesktop(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente",
            CONF_SITE_DESC,
            url("/sofware-desktop"),
            theme("/assets/images/share.png")
        ];

        echo $this->view->render('software-desktop', [
            "head" => $head,
            "title" => "Sofwares Desktop",
            "desc" => "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
        ]);
    }

    public function sites(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente",
            CONF_SITE_DESC,
            url("/sites"),
            theme("/assets/images/share.png")
        ];

        echo $this->view->render('sites', [
            "head" => $head,
            "title" => "Criação e edição de sites",
            "desc" => "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
        ]);
    }

    public function mobile(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente",
            CONF_SITE_DESC,
            url("/mobile"),
            theme("/assets/images/share.png")
        ];

        echo $this->view->render('mobile', [
            "head" => $head,
            "title" => "Mobile app",
            "desc" => "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
        ]);
    }

    public function realTimeProject(): void {
        $head = [
            "TI NOS NEGÓCIOS - Literalmente Presente",
            CONF_SITE_DESC,
            url("/mobile"),
            theme("/assets/images/share.png")
        ];
        
        echo $this->view->render('real-time-projects', [
           "head"  => $head,
            "title" => "Acompanhamento em tempo real",
            "desc" => "Acompanhe em rempo real seu projeto, desde a solicitação até a entrega"
        ]);
        
        echo "projeto em tempo real";
    }

    /*
     * BLOG ROUTES
     */

    public function blog() {
        $head = [
            "TI NOS NEGÓCIOS - BLOG",
            CONF_SITE_DESC,
            url("/blog"),
            theme("/assets/images/share.png")
        ];

        $blog = (new Post())->find();
        $pager = new Pager(url("/blog/p/"));
        $pager->pager($blog->count(), 9, ($data['page'] ?? 1));

        echo $this->view->render("blog/index", [
            "head" => $head,
            "title" => "BLOG TNN",
            "desc" => "Encontre dicas, noticias e mais informações que podem ser úteis para seu negócio",
            "blog" => $blog->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    public function blogSearch(array $data): void {

        if (!empty($data['t'])) {
            $search = filter_var($data['t'], FILTER_SANITIZE_STRIPPED);
            redirect("/blog/buscar/{$search}/1");
            return;
        }

        if (empty($data['terms'])) {
            redirect("/blog");
        }

        $search = filter_var($data['terms'], FILTER_SANITIZE_STRIPPED);
        $page = (filter_var($data['page'], FILTER_VALIDATE_INT) >= 1 ? $data['page'] : 1);

        $head = $this->seo->render(
                "Pesquisa por {$search} - " . CONF_SITE_NAME,
                "Confira os resultados de sua pesquisa para {$search}",
                url("/blog/buscar/{$search}/{$page}"),
                theme("/assets/images/share.jpg")
        );

        $blogSearch = (new Post())->find("(title LIKE :s OR subtitle LIKE :s)", "s=%{$search}%");

        $countResults = $blogSearch->count();
        if ($countResults <= 0) {
            echo $this->view->render("blog/index", [
                "head" => $head,
                "title" => "PESQUISA POR:",
                "desc" => "hmm, não tivemos resultados para {$search} tente outros termos"
            ]);
            return;
        }

        $pager = new Pager(url("/blog/buscar/{$search}/"));
        $pager->pager($blogSearch->count(), 9, $page);

        echo $this->view->render("blog/index", [
            "head" => $head,
            "title" => "PESQUISA POR:",
            "desc" => "{$search} ({$countResults}) resultados encontrados",
            "blog" => $blogSearch->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    public function error(array $data): void {
        $error = new \stdClass();
        $error->code = $data['errcode'];
        $error->title = "Ops, conteudo indisponivel :/";
        $error->message = "bla balbablablablablalblaablablablablablab";
        $error->linkTitle = "Continue navegando";
        $error->link = url_back();

        $head = $this->seo->render(
                "{$error->code} | {$error->title}",
                $error->message,
                url_back("ops/{$error->code}"),
                url("/assets/images/shared.jpg"),
                false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }

}
