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

/* public/index.html.twig */
class __TwigTemplate_40cc221f5e99195e79145771705774fdd31467565950c6d80209ce801a3027a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Espaces public";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<div class=\"container\">
    ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" id=\"card_principal_2\">
                    <div class=\"card-body\" >
                        Espace publique <img src=\"img/leo.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        <br>
                        <h5><img src=\"img/lion.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;<img src=\"img/aries.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/taurus.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/capricorn.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/scorpion.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/law.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" ></h5>

                        <p class=\"card-text\">Vos signes astrologiques affichent tous les jours <br><b style=\"color: #994d00\">MAKE THIS DAY, GREAT !</b> <br> L'espace est équipé de :
                            <br>
                            <img src=\"img/router.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/apple.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/imprimante.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;&nbsp;
                            <img src=\"img/monitor.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >
                        </p>
                        <p class=\"card-text\">Identifiez-vous afin de reserver une table du zodiaque.
                        </p>
                        <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary\" id=\"btn\">Connectez-vous</a>
                        <br>
                        <br>
                        <a href=\"";
            // line 31
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
                                <img src=\"img/great.jpeg\" class=\"d-block w-100\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"card-header text-center\" id=\"card-reser\">
        Découvrez nos espaces public
    </div>
    <br>
        <div class=\"row flex text-center\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePublique"]) || array_key_exists("SallePublique", $context) ? $context["SallePublique"] : (function () { throw new RuntimeError('Variable "SallePublique" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePubliques"]) {
                // line 54
                echo "                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "titre", [], "any", false, false, false, 57), "html", null, true);
                echo "</h5>
                            <p>Il reste ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "place", [], "any", false, false, false, 58), "html", null, true);
                echo " sur cette table.</p>
                            <p>La réservation de la place est valable toute la journée.</p>
                            <p>Le prix est de ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "prix", [], "any", false, false, false, 60), "html", null, true);
                echo " € sur cette table.</p>

                        </div>
                    </div>
                    <br>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePubliques'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        </div>
        ";
        } else {
            // line 69
            echo "            <div class=\"card-header text-center\" id=\"card-reser\">
                Retrouvez vos espaces public
            </div>
            <br>
            <div class=\"row flex text-center\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePublique"]) || array_key_exists("SallePublique", $context) ? $context["SallePublique"] : (function () { throw new RuntimeError('Variable "SallePublique" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePubliques"]) {
                // line 75
                echo "                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "titre", [], "any", false, false, false, 78), "html", null, true);
                echo "</h5>
                                <p>Il reste ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "place", [], "any", false, false, false, 79), "html", null, true);
                echo " sur cette table.</p>
                                <p>Le prix est de ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePubliques"], "prix", [], "any", false, false, false, 80), "html", null, true);
                echo " sur cette table.</p>
                                <a href=\"";
                // line 81
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                echo "\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                            </div>
                        </div>
                        <br>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePubliques'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </div>
    ";
        }
        // line 89
        echo "
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 89,  221 => 87,  209 => 81,  205 => 80,  201 => 79,  197 => 78,  192 => 75,  188 => 74,  181 => 69,  177 => 67,  164 => 60,  159 => 58,  155 => 57,  150 => 54,  146 => 53,  121 => 31,  115 => 28,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espaces public{% endblock %}

{% block body %}
<br>
<div class=\"container\">
    {% if not app.user %}
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" id=\"card_principal_2\">
                    <div class=\"card-body\" >
                        Espace publique <img src=\"img/leo.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                        <br>
                        <h5><img src=\"img/lion.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;<img src=\"img/aries.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/taurus.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/capricorn.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/scorpion.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" >&nbsp;&nbsp;<img src=\"img/law.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\" ></h5>

                        <p class=\"card-text\">Vos signes astrologiques affichent tous les jours <br><b style=\"color: #994d00\">MAKE THIS DAY, GREAT !</b> <br> L'espace est équipé de :
                            <br>
                            <img src=\"img/router.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/apple.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
                            <img src=\"img/imprimante.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;&nbsp;
                            <img src=\"img/monitor.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >
                        </p>
                        <p class=\"card-text\">Identifiez-vous afin de reserver une table du zodiaque.
                        </p>
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
                                <img src=\"img/great.jpeg\" class=\"d-block w-100\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"card-header text-center\" id=\"card-reser\">
        Découvrez nos espaces public
    </div>
    <br>
        <div class=\"row flex text-center\">
            {% for SallePubliques in SallePublique %}
                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5>{{ SallePubliques.titre }}</h5>
                            <p>Il reste {{ SallePubliques.place }} sur cette table.</p>
                            <p>La réservation de la place est valable toute la journée.</p>
                            <p>Le prix est de {{ SallePubliques.prix }} € sur cette table.</p>

                        </div>
                    </div>
                    <br>
                </div>
            {% endfor %}
        </div>
        {% else %}
            <div class=\"card-header text-center\" id=\"card-reser\">
                Retrouvez vos espaces public
            </div>
            <br>
            <div class=\"row flex text-center\">
                {% for SallePubliques in SallePublique %}
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5>{{ SallePubliques.titre }}</h5>
                                <p>Il reste {{ SallePubliques.place }} sur cette table.</p>
                                <p>Le prix est de {{ SallePubliques.prix }} sur cette table.</p>
                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                            </div>
                        </div>
                        <br>
                    </div>
                {% endfor %}
            </div>
    {% endif %}

    <br>
{% endblock %}
", "public/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/public/index.html.twig");
    }
}
