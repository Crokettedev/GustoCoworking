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

/* contact/index.html.twig */
class __TwigTemplate_b924163d742975e5806ec5fec3867472446e1c4307feb2ba23a69c29d4daddd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success text-center\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "valid", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <div class=\"alert alert-danger\">
            Votre message n'a pas pu être envoyer.
        </div>
    ";
        }
        // line 18
        echo "        <div class=\"card text-center\" style=\"border-color: transparent;\">
            <div class=\"card-body\">
                <h4>Bella Italia&nbsp;<img src=\"img/italy.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\"></h4>
                <div>
                    <img src=\"img/coffee (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                    <img src=\"img/food-and-restaurant.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                    <img src=\"img/coliseum.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                </div>
                <p class=\"card-text\">
                    Imaginé sur nos terres d’Italie, depuis plus de 10 ans nous avons su nous imposer comme un important producteur et importateur de café. Comment ? En choisissant la meilleure qualité, en travaillant en partenariat avec les meilleurs producteurs du monde, pour vous créer le meilleur café. </p><p>Nous sommes aujourd’hui, spécialiste dans la vente de produits autour du café : machine automatique, machine expresso, moulin à café, café en grains et café en dosette.
                    Selon nous, le meilleur moment de consommer un bon café est lorsque nous travaillons, et partageons un moment entre collègues, amis ou encore avec de futurs partenaires. </p> <p>C’est pour cela que sur Paris nous avons décidé d’aménager nos locaux sous forme d’open space.
                    Travailler dans le confort, en dégustant le meilleur café est à retrouver dans votre espace de coworking Gusto-Coffee.
                </p>
                <div class=\"row\">
                    <div class=\"col\">
                        <label for=\"exampleInputEmail1\">Suivez nous sur</label>
                        <a href=\"https://www.facebook.com/\"><button type=\"button\" class=\"form-control\" placeholder=\"First name\" style=\"background-color: #008ae6; color: white\">Facebook</button></a>
                    </div>
                    <div class=\"col\">
                        <label for=\"exampleInputEmail1\">Suivez nous sur</label>
                        <a><button type=\"button\" class=\"form-control\" placeholder=\"Last name\" style=\"background-color: #cc6699; color: white\">Instagram</button></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" style=\"border-color: transparent;\">

                    <div class=\"card-body\" >
                        <h5>Ecologie et travail &nbsp;<img src=\"img/arbre.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\"></h5>
                        <p class=\"card-text\">Gusto-Coffee s'engage aussi auprès de mère nature, en vous proposant des salons équipées en matériaux 100 % recyclé.
                            Nos salons ont été désignés pour laisser entrer la lumière naturelle du soleil.
                            Nous luttons contre le gaspillage donc nous redistribuons nos denrées aux associations en fin de journée..</p>
                        <div>
                            <img src=\"img/desk.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">&nbsp;
                            <img src=\"img/ecology.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">&nbsp;
                            <img src=\"img/recycle-sign.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">
                        </div>
                        <br>
                    </div>

                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" style=\"border-color: transparent;\">
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
        <br>

        <div class=\"card text-center\" id=\"card-reser\">
            <div class=\"card-header\" id=\"card-reser\">
                Contactez-nous !
            </div>
            <div class=\"card-body\">
                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 96, $this->source); })()), 'form_start');
        echo "
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 97, $this->source); })()), "Name", [], "any", false, false, false, 97), 'row');
        echo "
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'row');
        echo "
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 99, $this->source); })()), "message", [], "any", false, false, false, 99), 'row');
        echo "

                <button class=\"btn\" id=\"btn\">Envoyer</button>
                ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <br>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 102,  212 => 99,  208 => 98,  204 => 97,  200 => 96,  120 => 18,  114 => 14,  112 => 13,  109 => 12,  100 => 9,  97 => 8,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Coworking Gusto{% endblock %}
{% block body %}
    <br>

    <div class=\"container\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success text-center\">
            {{ message }}
        </div>
    {% endfor %}

    {% if not contactForm.vars.valid %}
        <div class=\"alert alert-danger\">
            Votre message n'a pas pu être envoyer.
        </div>
    {% endif %}
        <div class=\"card text-center\" style=\"border-color: transparent;\">
            <div class=\"card-body\">
                <h4>Bella Italia&nbsp;<img src=\"img/italy.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\"></h4>
                <div>
                    <img src=\"img/coffee (1).png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                    <img src=\"img/food-and-restaurant.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                    <img src=\"img/coliseum.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\">
                </div>
                <p class=\"card-text\">
                    Imaginé sur nos terres d’Italie, depuis plus de 10 ans nous avons su nous imposer comme un important producteur et importateur de café. Comment ? En choisissant la meilleure qualité, en travaillant en partenariat avec les meilleurs producteurs du monde, pour vous créer le meilleur café. </p><p>Nous sommes aujourd’hui, spécialiste dans la vente de produits autour du café : machine automatique, machine expresso, moulin à café, café en grains et café en dosette.
                    Selon nous, le meilleur moment de consommer un bon café est lorsque nous travaillons, et partageons un moment entre collègues, amis ou encore avec de futurs partenaires. </p> <p>C’est pour cela que sur Paris nous avons décidé d’aménager nos locaux sous forme d’open space.
                    Travailler dans le confort, en dégustant le meilleur café est à retrouver dans votre espace de coworking Gusto-Coffee.
                </p>
                <div class=\"row\">
                    <div class=\"col\">
                        <label for=\"exampleInputEmail1\">Suivez nous sur</label>
                        <a href=\"https://www.facebook.com/\"><button type=\"button\" class=\"form-control\" placeholder=\"First name\" style=\"background-color: #008ae6; color: white\">Facebook</button></a>
                    </div>
                    <div class=\"col\">
                        <label for=\"exampleInputEmail1\">Suivez nous sur</label>
                        <a><button type=\"button\" class=\"form-control\" placeholder=\"Last name\" style=\"background-color: #cc6699; color: white\">Instagram</button></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" style=\"border-color: transparent;\">

                    <div class=\"card-body\" >
                        <h5>Ecologie et travail &nbsp;<img src=\"img/arbre.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 35px;\"></h5>
                        <p class=\"card-text\">Gusto-Coffee s'engage aussi auprès de mère nature, en vous proposant des salons équipées en matériaux 100 % recyclé.
                            Nos salons ont été désignés pour laisser entrer la lumière naturelle du soleil.
                            Nous luttons contre le gaspillage donc nous redistribuons nos denrées aux associations en fin de journée..</p>
                        <div>
                            <img src=\"img/desk.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">&nbsp;
                            <img src=\"img/ecology.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">&nbsp;
                            <img src=\"img/recycle-sign.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\">
                        </div>
                        <br>
                    </div>

                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"card text-center\" style=\"border-color: transparent;\">
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
        <br>

        <div class=\"card text-center\" id=\"card-reser\">
            <div class=\"card-header\" id=\"card-reser\">
                Contactez-nous !
            </div>
            <div class=\"card-body\">
                {{ form_start(contactForm) }}
                {{ form_row(contactForm.Name) }}
                {{ form_row(contactForm.email) }}
                {{ form_row(contactForm.message) }}

                <button class=\"btn\" id=\"btn\">Envoyer</button>
                {{ form_end(contactForm) }}
            </div>
        </div>
        <br>


{% endblock %}", "contact/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/contact/index.html.twig");
    }
}
