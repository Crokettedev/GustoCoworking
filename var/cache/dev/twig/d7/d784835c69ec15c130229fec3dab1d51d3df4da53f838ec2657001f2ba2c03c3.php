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

/* space_public/index.html.twig */
class __TwigTemplate_ce46661c94bc59a0add9cb90396919843e2c86c8fb5bcc61f45304f73934b2de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "space_public/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "space_public/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "space_public/index.html.twig", 1);
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

        echo "Reservation";
        
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
    <div class=\"container\">
        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Avantages à vous inscire
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">Gusto-Coffee prend soin de vous, start-ups, freelances, entreprises, coworkers,
                                en vous proposant de quoi se restaurer tout au long de la journée.
                                Mais notre attention ne s'arrête pas là, pour vous, nous avons mis en place un service à table pour déguster nos plats préparés sur place. Eh, oui, nos espaces sont aussi chez vous !</p>
                            <div>
                                <a href=\"#\"><img src=\"img/spaghetti.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/diet.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                            <br>
                            <a href=\"#\" class=\"btn btn-primary\" id=\"btn\" data-toggle=\"modal\" data-target=\"#exampleModal\">Voir la carte</a>
                            <br>
                            <br>
                            <p class=\"card-text\">Chez Gusto-Coffee, la fidélité est toujours récompensée, en créant un compte vous accédez à notre programme de fidélité et bénéficier de réduction et des surprises tout au long de l'année.</p>
                            <div>
                                <a href=\"#\"><img src=\"img/giftbox.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                            <br>
                            <a href=\"#\" class=\"btn btn-primary\" id=\"btn\" data-toggle=\"modal\" data-target=\"#exampleModal1\">Programme fidélité</a>
                            <br>
                            <br>
                            <p class=\"card-text\">Profitez d'un réseau de professionnel, avec notre platform de mise en relation entre professionnel. Soyez tous le temps proches de la communauté en téléchargent notre application.<br>
                                Disponible sur android et App Store.</p>
                            <div>
                                <a href=\"#\"><img src=\"img/smartphone.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/Android.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/app-store.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            S'inscrire
                        </div>
                        <div class=\"card-body\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "space_public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}
<br>
<div class=\"container\">
    <div class=\"container\">
        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Avantages à vous inscire
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">Gusto-Coffee prend soin de vous, start-ups, freelances, entreprises, coworkers,
                                en vous proposant de quoi se restaurer tout au long de la journée.
                                Mais notre attention ne s'arrête pas là, pour vous, nous avons mis en place un service à table pour déguster nos plats préparés sur place. Eh, oui, nos espaces sont aussi chez vous !</p>
                            <div>
                                <a href=\"#\"><img src=\"img/spaghetti.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/diet.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                            <br>
                            <a href=\"#\" class=\"btn btn-primary\" id=\"btn\" data-toggle=\"modal\" data-target=\"#exampleModal\">Voir la carte</a>
                            <br>
                            <br>
                            <p class=\"card-text\">Chez Gusto-Coffee, la fidélité est toujours récompensée, en créant un compte vous accédez à notre programme de fidélité et bénéficier de réduction et des surprises tout au long de l'année.</p>
                            <div>
                                <a href=\"#\"><img src=\"img/giftbox.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                            <br>
                            <a href=\"#\" class=\"btn btn-primary\" id=\"btn\" data-toggle=\"modal\" data-target=\"#exampleModal1\">Programme fidélité</a>
                            <br>
                            <br>
                            <p class=\"card-text\">Profitez d'un réseau de professionnel, avec notre platform de mise en relation entre professionnel. Soyez tous le temps proches de la communauté en téléchargent notre application.<br>
                                Disponible sur android et App Store.</p>
                            <div>
                                <a href=\"#\"><img src=\"img/smartphone.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/Android.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                <a href=\"#\"><img src=\"img/app-store.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            S'inscrire
                        </div>
                        <div class=\"card-body\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
", "space_public/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/space_public/index.html.twig");
    }
}
