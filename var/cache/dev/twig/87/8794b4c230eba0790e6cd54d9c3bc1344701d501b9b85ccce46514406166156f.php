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

/* reservation/index.html.twig */
class __TwigTemplate_1b49017775ccdf8909d4d878f249cc91a4b7734997240d9e93da9c46f7f15405 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
    <div class=\"card\">
        <div class=\"card-header\">
            Vous réserver le salon :  <b style=\"color: #994d00\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sallepriver"]) || array_key_exists("sallepriver", $context) ? $context["sallepriver"] : (function () { throw new RuntimeError('Variable "sallepriver" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        echo "</b>
        </div>
        <div class=\"card-body text-center\">
            <h6>Ce salon est actuellement disponible à la réservation</h6>
            <p class=\"card-text\">Les prix sont de </p>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public");
        echo "\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
            <hr class=\"my-4\">
            <h6>Les prix</h6>
            <div class=\"form-inline\">
                <div class=\"form-group mb-2\">
                    <label for=\"staticEmail2\" class=\"sr-only\">Email</label>
                    <button class=\"btn btn-info mb-2\">Une matinée : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sallepriver"]) || array_key_exists("sallepriver", $context) ? $context["sallepriver"] : (function () { throw new RuntimeError('Variable "sallepriver" does not exist.', 21, $this->source); })()), "PrixMatin", [], "any", false, false, false, 21), "html", null, true);
        echo "€</button>
                </div>
                <div class=\"form-group mx-sm-3 mb-2\">
                    <label for=\"inputPassword2\" class=\"sr-only\">Password</label>
                    <button  class=\"btn btn-info mb-2\">Un après-midi : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sallepriver"]) || array_key_exists("sallepriver", $context) ? $context["sallepriver"] : (function () { throw new RuntimeError('Variable "sallepriver" does not exist.', 25, $this->source); })()), "PrixAprem", [], "any", false, false, false, 25), "html", null, true);
        echo "€</button>
                </div>
                <button  class=\"btn btn-info mb-2\">Une journée : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sallepriver"]) || array_key_exists("sallepriver", $context) ? $context["sallepriver"] : (function () { throw new RuntimeError('Variable "sallepriver" does not exist.', 27, $this->source); })()), "PrixJourne", [], "any", false, false, false, 27), "html", null, true);
        echo "€</button>
            </div>
            <hr class=\"my-4\">
            Tous nos salons de <b style=\"color: #994d00\">4 et 6 places</b> sont équipés de :
            <br>
            <img src=\"img/router.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/apple.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/imprimante.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;&nbsp;
            <img src=\"img/monitor.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >
        </div>
    </div>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  118 => 25,  111 => 21,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}
<br>
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            Vous réserver le salon :  <b style=\"color: #994d00\">{{ sallepriver.titre }}</b>
        </div>
        <div class=\"card-body text-center\">
            <h6>Ce salon est actuellement disponible à la réservation</h6>
            <p class=\"card-text\">Les prix sont de </p>
            <a href=\"{{ path('public') }}\" class=\"btn btn-primary\" id=\"btn\">En savoir plus</a>
            <hr class=\"my-4\">
            <h6>Les prix</h6>
            <div class=\"form-inline\">
                <div class=\"form-group mb-2\">
                    <label for=\"staticEmail2\" class=\"sr-only\">Email</label>
                    <button class=\"btn btn-info mb-2\">Une matinée : {{ sallepriver.PrixMatin }}€</button>
                </div>
                <div class=\"form-group mx-sm-3 mb-2\">
                    <label for=\"inputPassword2\" class=\"sr-only\">Password</label>
                    <button  class=\"btn btn-info mb-2\">Un après-midi : {{ sallepriver.PrixAprem }}€</button>
                </div>
                <button  class=\"btn btn-info mb-2\">Une journée : {{ sallepriver.PrixJourne }}€</button>
            </div>
            <hr class=\"my-4\">
            Tous nos salons de <b style=\"color: #994d00\">4 et 6 places</b> sont équipés de :
            <br>
            <img src=\"img/router.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/tasse.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/water.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/apple.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;
            <img src=\"img/imprimante.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >&nbsp;&nbsp;
            <img src=\"img/monitor.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 34px;\" >
        </div>
    </div>
    <br>
{% endblock %}
", "reservation/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/reservation/index.html.twig");
    }
}
