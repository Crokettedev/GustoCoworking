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

/* private/index.html.twig */
class __TwigTemplate_b307002d3383587789edc12a17ee6fddb9299e6c6592cc96d96736e45051915d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "private/index.html.twig", 1);
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

        echo "Salons privées";
        
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
            echo "        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
                Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                <br>
                <h5><img src=\"img/casqueastro.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\" > : \"Allo Houston, nous avons des  <b style=\"color: #994d00\">Coworkers\"</b></h5>
                <p>Identifiez-vous afin de profiter de notre salons privées interplanétaire, choisissez la prochaine planète ou vous allez travailler <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-sm\" id=\"btn\">Connectez-vous</a></p>
            </div>
            <img src=\"img/astro2.png\" class=\"d-block w-100\">
        </div>
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
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

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 6 places
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePrive6"]) || array_key_exists("SallePrive6", $context) ? $context["SallePrive6"] : (function () { throw new RuntimeError('Variable "SallePrive6" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePrivers"]) {
                // line 41
                echo "                            <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "titre", [], "any", false, false, false, 41), "html", null, true);
                echo "</h5>
                            <p class=\"card-text\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "contenu", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
                            <hr class=\"my-4\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePrivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 4 places
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePrive4"]) || array_key_exists("SallePrive4", $context) ? $context["SallePrive4"] : (function () { throw new RuntimeError('Variable "SallePrive4" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePrivers"]) {
                // line 55
                echo "                                <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "titre", [], "any", false, false, false, 55), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "contenu", [], "any", false, false, false, 56), "html", null, true);
                echo "</p>
                                <hr class=\"my-4\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePrivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 65
            echo "        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
                Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                <br>
                <h5><img src=\"img/casqueastro.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\" > : \"Allo <b style=\"color: #994d00\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "firstname", [], "any", false, false, false, 69), "html", null, true);
            echo "</b>, ta choisit ta planète ? \"</h5>
                <p>Identifiez-vous afin de profiter de notre salons privées interplanétaire, choisissez la prochaine planète ou vous allez travailler <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-sm\" id=\"btn\">Connectez-vous</a></p>
            </div>
            <img src=\"img/astro2.png\" class=\"d-block w-100\">
        </div>
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
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

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 6 places
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePrive6"]) || array_key_exists("SallePrive6", $context) ? $context["SallePrive6"] : (function () { throw new RuntimeError('Variable "SallePrive6" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePrivers"]) {
                // line 97
                echo "                                <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "titre", [], "any", false, false, false, 97), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "contenu", [], "any", false, false, false, 98), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation.priv", ["id" => twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                                <hr class=\"my-4\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePrivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 4 places
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["SallePrive4"]) || array_key_exists("SallePrive4", $context) ? $context["SallePrive4"] : (function () { throw new RuntimeError('Variable "SallePrive4" does not exist.', 111, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["SallePrivers"]) {
                // line 112
                echo "                                <h5>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "titre", [], "any", false, false, false, 112), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "contenu", [], "any", false, false, false, 113), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation.priv", ["id" => twig_get_attribute($this->env, $this->source, $context["SallePrivers"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                                <hr class=\"my-4\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SallePrivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 123
        echo "
    <br>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 123,  279 => 117,  270 => 114,  266 => 113,  261 => 112,  257 => 111,  246 => 102,  237 => 99,  233 => 98,  228 => 97,  224 => 96,  195 => 70,  191 => 69,  185 => 65,  177 => 59,  168 => 56,  163 => 55,  159 => 54,  148 => 45,  139 => 42,  134 => 41,  130 => 40,  101 => 14,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Salons privées{% endblock %}

{% block body %}
<br>
<div class=\"container\">
    {% if not app.user %}
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
                Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                <br>
                <h5><img src=\"img/casqueastro.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\" > : \"Allo Houston, nous avons des  <b style=\"color: #994d00\">Coworkers\"</b></h5>
                <p>Identifiez-vous afin de profiter de notre salons privées interplanétaire, choisissez la prochaine planète ou vous allez travailler <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm\" id=\"btn\">Connectez-vous</a></p>
            </div>
            <img src=\"img/astro2.png\" class=\"d-block w-100\">
        </div>
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
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

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 6 places
                        </div>
                        <div class=\"card-body\">
                            {% for SallePrivers in SallePrive6 %}
                            <h5>{{ SallePrivers.titre }}</h5>
                            <p class=\"card-text\">{{ SallePrivers.contenu }}</p>
                            <hr class=\"my-4\">
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 4 places
                        </div>
                        <div class=\"card-body\">
                            {% for SallePrivers in SallePrive4 %}
                                <h5>{{ SallePrivers.titre }}</h5>
                                <p class=\"card-text\">{{ SallePrivers.contenu }}</p>
                                <hr class=\"my-4\">
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
                Salons privées <img src=\"img/astronaut.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px;\" >
                <br>
                <h5><img src=\"img/casqueastro.png\" class=\"card-img-top\" alt=\"...\" style=\"width: 40px;\" > : \"Allo <b style=\"color: #994d00\">{{ app.user.firstname }}</b>, ta choisit ta planète ? \"</h5>
                <p>Identifiez-vous afin de profiter de notre salons privées interplanétaire, choisissez la prochaine planète ou vous allez travailler <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm\" id=\"btn\">Connectez-vous</a></p>
            </div>
            <img src=\"img/astro2.png\" class=\"d-block w-100\">
        </div>
        <div class=\"card text-center\" style=\"border-color: transparent\">
            <div class=\"card-body\">
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

        <div class=\"card card-body text-center\" id=\"card-reservation-index\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 6 places
                        </div>
                        <div class=\"card-body\">
                            {% for SallePrivers in SallePrive6 %}
                                <h5>{{ SallePrivers.titre }}</h5>
                                <p class=\"card-text\">{{ SallePrivers.contenu }}</p>
                                <a href=\"{{ path('reservation.priv', {id: SallePrivers.id} ) }}\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                                <hr class=\"my-4\">
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card\" id=\"card-reser\">
                        <div class=\"card-header\" id=\"card-reser\">
                            Salons à 4 places
                        </div>
                        <div class=\"card-body\">
                            {% for SallePrivers in SallePrive4 %}
                                <h5>{{ SallePrivers.titre }}</h5>
                                <p class=\"card-text\">{{ SallePrivers.contenu }}</p>
                                <a href=\"{{ path('reservation.priv', {id: SallePrivers.id} ) }}\" class=\"btn btn-primary\" id=\"btn\">Réserver</a>
                                <hr class=\"my-4\">
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    <br>
    {% endblock %}
", "private/index.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/private/index.html.twig");
    }
}
