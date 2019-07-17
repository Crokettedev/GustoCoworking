<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* page_principal/index.html.twig */
class __TwigTemplate_c09b258a3ea25eb2ccfca3c2ec05995e4f0f5c0eab7785118ad677ba8d0ce70a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_principal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_principal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_principal/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coworking Gusto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <div class=\"container\">
    ";
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_2\">
                <div class=\"card-body\" >
                    <img src=\"img/Gusto_7.png\" class=\"mr-3\" id=\"img_Gusto7bis\">
                    <br>
                    <h5>Ne passez pas à côté <b style=\"color: #994d00\">de vos espaces de coworking</b></h5>
                    <p class=\"card-text\">Identifiez-vous afin de profiter de notre réseau de professionnel grâce à notre outil créé pour vous la <b style=\"color: #994d00\">teamwork</b> ainsi que de notre délicieu café.
                    </p>
                    <div>
                        <a href=\"#\"><img src=\"img/thumbnail_large.png\" class=\"card-img-top\" id=\"thumbnail\"></a>
                        <a href=\"#\"><img src=\"img/teamwork.png\" class=\"card-img-top\" id=\"thumbnail\"></a>
                    </div>
                    <br>
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary\" id=\"btn\">Connectez-vous</a>
                    <br>
                    <br>
                    <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: black;\">Pas encore de compte ? Inscrivez vous</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"img/screen.jpg\" class=\"d-block w-100\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"img/screen (1).jpg\" class=\"d-block w-100\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"img/screen (2).jpg\" class=\"d-block w-100\">
                        </div>
                    </div>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"fas fa-arrow-alt-circle-right\" id=\"fas\"></i></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Vous êtes plutôt <img src=\"img/bubble-speech.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <h5>Espace public <img src=\"img/leo.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 23px;\" ></h5>
                            <p class=\"card-text\">Êtes vous prêt a travailler avec vos signes astrologique ?</p>
                            <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public");
            echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                            <hr class=\"my-4\">
                            <h5>Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" ></h5>
                            <p class=\"card-text\">Lance Armstrong a mis le pied sur la Lune, à votre tour d'essayer !</p>
                            <a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private");
            echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Gusto services <img src=\"img/add-friend.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <h5>Outils informatique <img src=\"img/ordi.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 23px;\" ></h5>
                            <p class=\"card-text\">Gusto a mis à votre disposition, la possibilité de commander du support informatique. Soyez équipé pour travailler dans les meilleures conditions</p>
                            <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("food");
            echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                            <hr class=\"my-4\">
                            <h5>Restauration <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" ></h5>
                            <p class=\"card-text\"> Gusto, vous accompagne toute au long de la journée avec nos délicieux repas fait maison 100 % produit français et notre magnifique sélection de café</p>
                            <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("food");
            echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_4\">
                <div class=\"card-body\" >
                    <h5>Profitez de nos espaces verts &nbsp;<img src=\"img/arbre.png\" class=\"card-img-top\" id=\"arbre\"></h5>
                    <p class=\"card-text\">Au coeur de la capital parisienne, nous avons installé un espace vert, écologique, respectif de la nature. Soigneusement pensé, parfaitement aménager pour que vous et vos collègues puissent travailler dans de conditions idéales.</p>
                    <div>
                        <a href=\"#\"><img src=\"img/friends.png\" class=\"card-img-top\" alt=\"...\" id=\"friends\"></a>
                        <a href=\"#\"><img src=\"img/toureiffeil.png\" class=\"card-img-top\" id=\"toureiffeil\"></a>
                        <a href=\"#\"><img src=\"img/bureau.png\" class=\"card-img-top\" id=\"bureau\"></a>
                    </div>
                    <br>
                    <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                </div>

            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_5\">
                <div class=\"card\">

                    <div id=\"carouselExampleControls1\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"img/office_green.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/office1.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/office2.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                        </div>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls1\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"fas fa-arrow-alt-circle-right\" id=\"fas\"></i></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 136
            echo "        <div class=\"card text-center\" id=\"card-reser\">
            <div class=\"card-header\" id=\"card-reser\">
                Les news de Gusto-Coffee <img src=\"img/newspaper.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
            </div>
            <div class=\"card-body\">
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["LesNews"]) || array_key_exists("LesNews", $context) ? $context["LesNews"] : (function () { throw new RuntimeError('Variable "LesNews" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
                // line 142
                echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        <img src=\"img/new.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; float: left;\">";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "titre", [], "any", false, false, false, 143), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
            echo "\" class=\"btn btn-primary\" id=\"btn\" >Consulter les news</a>
            </div>
        </div>
    <div class=\"card card-body text-center\" id=\"card-reservation-index\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card\" id=\"card-reser\">
                    <div class=\"card-header\" id=\"card-reser\">
                        Vos dernières commandes <img src=\"img/salad (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                    </div>
                    <div class=\"card-body\">
                        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Consulter</a>

                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card\" id=\"card-reser\">
                    <div class=\"card-header\" id=\"card-reser\">
                        Vos dernières réservations
                    </div>
                    <div class=\"card-body\">
                        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Réserver une place</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class=\"card mb-3 text-center\" id=\"card-reservation-index\">
            <div class=\"collapse\" id=\"collapseExample\">
                <div class=\"card card-body\" id=\"card-reservation-index\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Espace public</h5>
                                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href=\"";
            // line 185
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public");
            echo "\" class=\"btn btn-primary\" id=\"btn\">Réserver ici</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Salons privées</h5>
                                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href=\"";
            // line 194
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private");
            echo "\" class=\"btn btn-primary\" id=\"btn\">Réserver ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Vos derniers messages <img src=\"img/conversation.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["LesNews"]) || array_key_exists("LesNews", $context) ? $context["LesNews"] : (function () { throw new RuntimeError('Variable "LesNews" does not exist.', 211, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
                // line 212
                echo "                                <div class=\"alert alert-info\" role=\"alert\">
                                    <img src=\"img/new.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; float: left;\">";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "titre", [], "any", false, false, false, 213), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
            echo "\" class=\"btn btn-primary\" id=\"btn\" >Consulter les news</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Demandes d'ajout <img src=\"img/add-friend.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Consulter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"portfolio-experiment\">
            <a>
                <span class=\"text\">Hover me</span>
                <span class=\"line -right\"></span>
                <span class=\"line -top\"></span>
                <span class=\"line -left\"></span>
                <span class=\"line -bottom\"></span>
            </a>
        </section>

    ";
        }
        // line 244
        echo "
    <br>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page_principal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 244,  360 => 216,  351 => 213,  348 => 212,  344 => 211,  324 => 194,  312 => 185,  269 => 146,  260 => 143,  257 => 142,  253 => 141,  246 => 136,  211 => 104,  188 => 84,  181 => 80,  166 => 68,  159 => 64,  118 => 26,  112 => 23,  94 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Coworking Gusto{% endblock %}
{% block body %}
    <br>
    <div class=\"container\">
    {% if not app.user %}


    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_2\">
                <div class=\"card-body\" >
                    <img src=\"img/Gusto_7.png\" class=\"mr-3\" id=\"img_Gusto7bis\">
                    <br>
                    <h5>Ne passez pas à côté <b style=\"color: #994d00\">de vos espaces de coworking</b></h5>
                    <p class=\"card-text\">Identifiez-vous afin de profiter de notre réseau de professionnel grâce à notre outil créé pour vous la <b style=\"color: #994d00\">teamwork</b> ainsi que de notre délicieu café.
                    </p>
                    <div>
                        <a href=\"#\"><img src=\"img/thumbnail_large.png\" class=\"card-img-top\" id=\"thumbnail\"></a>
                        <a href=\"#\"><img src=\"img/teamwork.png\" class=\"card-img-top\" id=\"thumbnail\"></a>
                    </div>
                    <br>
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\" id=\"btn\">Connectez-vous</a>
                    <br>
                    <br>
                    <a href=\"{{ path('app_register') }}\" style=\"color: black;\">Pas encore de compte ? Inscrivez vous</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"img/screen.jpg\" class=\"d-block w-100\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"img/screen (1).jpg\" class=\"d-block w-100\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"img/screen (2).jpg\" class=\"d-block w-100\">
                        </div>
                    </div>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"fas fa-arrow-alt-circle-right\" id=\"fas\"></i></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Vous êtes plutôt <img src=\"img/bubble-speech.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <h5>Espace public <img src=\"img/leo.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 23px;\" ></h5>
                            <p class=\"card-text\">Êtes vous prêt a travailler avec vos signes astrologique ?</p>
                            <a href=\"{{ path('public') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                            <hr class=\"my-4\">
                            <h5>Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" ></h5>
                            <p class=\"card-text\">Lance Armstrong a mis le pied sur la Lune, à votre tour d'essayer !</p>
                            <a href=\"{{ path('private') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Gusto services <img src=\"img/add-friend.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <h5>Outils informatique <img src=\"img/ordi.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 23px;\" ></h5>
                            <p class=\"card-text\">Gusto a mis à votre disposition, la possibilité de commander du support informatique. Soyez équipé pour travailler dans les meilleures conditions</p>
                            <a href=\"{{ path('food') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                            <hr class=\"my-4\">
                            <h5>Restauration <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" ></h5>
                            <p class=\"card-text\"> Gusto, vous accompagne toute au long de la journée avec nos délicieux repas fait maison 100 % produit français et notre magnifique sélection de café</p>
                            <a href=\"{{ path('food') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_4\">
                <div class=\"card-body\" >
                    <h5>Profitez de nos espaces verts &nbsp;<img src=\"img/arbre.png\" class=\"card-img-top\" id=\"arbre\"></h5>
                    <p class=\"card-text\">Au coeur de la capital parisienne, nous avons installé un espace vert, écologique, respectif de la nature. Soigneusement pensé, parfaitement aménager pour que vous et vos collègues puissent travailler dans de conditions idéales.</p>
                    <div>
                        <a href=\"#\"><img src=\"img/friends.png\" class=\"card-img-top\" alt=\"...\" id=\"friends\"></a>
                        <a href=\"#\"><img src=\"img/toureiffeil.png\" class=\"card-img-top\" id=\"toureiffeil\"></a>
                        <a href=\"#\"><img src=\"img/bureau.png\" class=\"card-img-top\" id=\"bureau\"></a>
                    </div>
                    <br>
                    <a href=\"{{ path('contact') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
                </div>

            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card text-center\" id=\"card_principal_5\">
                <div class=\"card\">

                    <div id=\"carouselExampleControls1\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"img/office_green.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/office1.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                            <div class=\"carousel-item\">
                                <img src=\"img/office2.jpg\" class=\"d-block w-100\" alt=\"...\">
                            </div>
                        </div>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls1\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"fas fa-arrow-alt-circle-right\" id=\"fas\"></i></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {% else %}
        <div class=\"card text-center\" id=\"card-reser\">
            <div class=\"card-header\" id=\"card-reser\">
                Les news de Gusto-Coffee <img src=\"img/newspaper.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
            </div>
            <div class=\"card-body\">
                {% for News in LesNews %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        <img src=\"img/new.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; float: left;\">{{ News.titre }}
                    </div>
                {% endfor %}
                <a href=\"{{ path('news') }}\" class=\"btn btn-primary\" id=\"btn\" >Consulter les news</a>
            </div>
        </div>
    <div class=\"card card-body text-center\" id=\"card-reservation-index\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card\" id=\"card-reser\">
                    <div class=\"card-header\" id=\"card-reser\">
                        Vos dernières commandes <img src=\"img/salad (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                    </div>
                    <div class=\"card-body\">
                        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Consulter</a>

                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card\" id=\"card-reser\">
                    <div class=\"card-header\" id=\"card-reser\">
                        Vos dernières réservations
                    </div>
                    <div class=\"card-body\">
                        <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Réserver une place</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class=\"card mb-3 text-center\" id=\"card-reservation-index\">
            <div class=\"collapse\" id=\"collapseExample\">
                <div class=\"card card-body\" id=\"card-reservation-index\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Espace public</h5>
                                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href=\"{{ path('public') }}\" class=\"btn btn-primary\" id=\"btn\">Réserver ici</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5>Salons privées</h5>
                                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href=\"{{ path('private') }}\" class=\"btn btn-primary\" id=\"btn\">Réserver ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Vos derniers messages <img src=\"img/conversation.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            {% for News in LesNews %}
                                <div class=\"alert alert-info\" role=\"alert\">
                                    <img src=\"img/new.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; float: left;\">{{ News.titre }}
                                </div>
                            {% endfor %}
                            <a href=\"{{ path('news') }}\" class=\"btn btn-primary\" id=\"btn\" >Consulter les news</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Demandes d'ajout <img src=\"img/add-friend.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        </div>
                        <div class=\"card-body\">
                            <a href=\"#\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" id=\"btn\" aria-controls=\"collapseExample\">Consulter</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"portfolio-experiment\">
            <a>
                <span class=\"text\">Hover me</span>
                <span class=\"line -right\"></span>
                <span class=\"line -top\"></span>
                <span class=\"line -left\"></span>
                <span class=\"line -bottom\"></span>
            </a>
        </section>

    {% endif %}

    <br>



{% endblock %}", "page_principal/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/page_principal/index.html.twig");
    }
}
