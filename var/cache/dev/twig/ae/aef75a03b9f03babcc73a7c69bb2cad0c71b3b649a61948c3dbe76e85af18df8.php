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

/* registration/register.html.twig */
class __TwigTemplate_0c5d48e52f91473566cbe14c1b5c2798623afceead08cb54213ac8b138ffc9d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription";
        
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
        echo "    <br>
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
                                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "firstname", [], "any", false, false, false, 53), 'row');
        echo "
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "lastname", [], "any", false, false, false, 54), 'row');
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'row');
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), 'row');
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "society", [], "any", false, false, false, 57), 'row');
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), 'row');
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "job", [], "any", false, false, false, 59), 'row');
        echo "

                                <button class=\"btn\" id=\"btn\">Envoyer</button>
                                ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"card card-body text-center\" id=\"card-reservation-index\">

                        <div class=\"card\" id=\"card-reser\">
                            <div class=\"card-header\" id=\"card-reser\">
                                La carte &nbsp;<img src=\"img/serving-dish.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\"
                            </div>
                            <div class=\"card-body\">
                                <div>
                                    <a href=\"#\"><img src=\"img/fish-and-chips.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Fish and chips</b><br>Nuggets de de poisson \"Homemade\", servis de base avec frites \"maison\" mais toujours avec la possibilité d'opter pour un autre accompagnement, salade composée ou riz..</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/salad (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Salade composé</b><br>Salade fraichement cueilli, composé d'oeuf, pain en dès et du saumon ou du poulet, tout ceci avec une
                                    sauce vinaigrette venu tout droit d'Italie</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/spaghetti (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Pasta</b><br>Pasta bolognese : ragoût italien de bœuf avec des oignons, du céleri et des carottes dans une sauce italienne maison.</p>
                                <p>Pasta corbonara : Lardons et oignons dans une sauce crémeuse avec un œuf, du fromage italien et du persil.</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/burger (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Burger maison</b><br>Burger, avec une viande 100% Francaise, accompagné de salade, tomate, fromage et oignon ou aucun des quatres.</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/cocktail.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Boissons</b><br>Eau Vittel, Eau cristaline, Cocktail Copa, Cocktaill Gusto, Mojito.</p>
                                <br>
                                <br>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"btn\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"exampleModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"card card-body text-center\" id=\"card-reservation-index\">

                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Programme de fidélité &nbsp;<img src=\"img/giftbox.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\">

                            <div class=\"card-body\">
                                <div>
                                    <a href=\"#\"><img src=\"img/card.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>La carte membre permet de cumuler des points, avoir une priorité sur les salons privées au moments de la réservation
                                        . Offres et avantages.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 7 jours cumulées, obtenez une journée gratuite et un cocktaill offert.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 30 jours cumulées, obtenez 2 journée gratuite, un repas de votre choix et un cocktaill offert.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 60 jours cumulées, obtenez une 5 journée gratuite, un repas de votre choix et un cocktaill offert et la possibilité de venir avec
                                        deux collegues a vous qui ne paieront pas.</b></p>
                                <br>
                                <br>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"btn\">Fermer</button>
                                </div>
                            </div>
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  164 => 59,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

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
                                {{ form_start(registrationForm) }}
                                {{ form_row(registrationForm.firstname) }}
                                {{ form_row(registrationForm.lastname) }}
                                {{ form_row(registrationForm.email) }}
                                {{ form_row(registrationForm.plainPassword) }}
                                {{ form_row(registrationForm.society) }}
                                {{ form_row(registrationForm.phone) }}
                                {{ form_row(registrationForm.job) }}

                                <button class=\"btn\" id=\"btn\">Envoyer</button>
                                {{ form_end(registrationForm) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"card card-body text-center\" id=\"card-reservation-index\">

                        <div class=\"card\" id=\"card-reser\">
                            <div class=\"card-header\" id=\"card-reser\">
                                La carte &nbsp;<img src=\"img/serving-dish.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\"
                            </div>
                            <div class=\"card-body\">
                                <div>
                                    <a href=\"#\"><img src=\"img/fish-and-chips.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Fish and chips</b><br>Nuggets de de poisson \"Homemade\", servis de base avec frites \"maison\" mais toujours avec la possibilité d'opter pour un autre accompagnement, salade composée ou riz..</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/salad (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Salade composé</b><br>Salade fraichement cueilli, composé d'oeuf, pain en dès et du saumon ou du poulet, tout ceci avec une
                                    sauce vinaigrette venu tout droit d'Italie</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/spaghetti (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Pasta</b><br>Pasta bolognese : ragoût italien de bœuf avec des oignons, du céleri et des carottes dans une sauce italienne maison.</p>
                                <p>Pasta corbonara : Lardons et oignons dans une sauce crémeuse avec un œuf, du fromage italien et du persil.</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/burger (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Burger maison</b><br>Burger, avec une viande 100% Francaise, accompagné de salade, tomate, fromage et oignon ou aucun des quatres.</p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/cocktail.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Boissons</b><br>Eau Vittel, Eau cristaline, Cocktail Copa, Cocktaill Gusto, Mojito.</p>
                                <br>
                                <br>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"btn\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"exampleModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"card card-body text-center\" id=\"card-reservation-index\">

                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Programme de fidélité &nbsp;<img src=\"img/giftbox.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\">

                            <div class=\"card-body\">
                                <div>
                                    <a href=\"#\"><img src=\"img/card.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>La carte membre permet de cumuler des points, avoir une priorité sur les salons privées au moments de la réservation
                                        . Offres et avantages.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 7 jours cumulées, obtenez une journée gratuite et un cocktaill offert.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 30 jours cumulées, obtenez 2 journée gratuite, un repas de votre choix et un cocktaill offert.</b></p>
                                <br>
                                <br>

                                <div>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                    <a href=\"#\"><img src=\"img/respect.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\"></a>
                                </div>
                                <p class=\"card-text\"><b>Au bout de 60 jours cumulées, obtenez une 5 journée gratuite, un repas de votre choix et un cocktaill offert et la possibilité de venir avec
                                        deux collegues a vous qui ne paieront pas.</b></p>
                                <br>
                                <br>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"btn\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}
", "registration/register.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/registration/register.html.twig");
    }
}
