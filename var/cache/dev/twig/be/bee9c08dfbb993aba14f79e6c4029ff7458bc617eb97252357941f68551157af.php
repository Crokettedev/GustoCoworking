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

/* base.html.twig */
class __TwigTemplate_f78296135b981c5356afd1095b764c7d3d0c10a9a21fc7ab2e897068b8c86969 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Crete+Round&display=swap\" rel=\"stylesheet\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <script src=\"https://kit.fontawesome.com/238a647158.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/238a647158.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"navbar-home\">
        <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_principal");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Gusto_7.png"), "html", null, true);
        echo "\" class=\"mr-3\" id=\"img_Gusto7\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\" id=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" id=\"nav-link\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos espaces
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public");
            echo "\">Public</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private");
            echo "\">Privé</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos services
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Informatique</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("food");
            echo "\">Menu</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\" id=\"nav-link\">Notre histoire</a>
                </li>
            </ul>
            ";
        } else {
            // line 58
            echo "            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos espaces
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public");
            echo "\">Public</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("private");
            echo "\">Privé</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos services
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Informatique</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("food");
            echo "\">Menu</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\" id=\"nav-link\">Message</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\" id=\"nav-link\">Contact</a>
                </li>
            </ul>
            ";
        }
        // line 89
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89)) {
            // line 90
            echo "            <span class=\"navbar-text\">
    \t\t\t\t<a class=\"nav-link\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" id=\"nav-link\">Connexion</a>
    \t\t\t</span>
            ";
        } else {
            // line 94
            echo "
            <span class=\"navbar-text\">
                <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.png"), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"width: 20px;\">&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "lastname", [], "any", false, false, false, 98), "html", null, true);
            echo "
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "getid", [], "method", false, false, false, 101)]), "html", null, true);
            echo "\">Mon compte</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
                        </div>
                    </div>

    \t\t\t</span>
            ";
        }
        // line 108
        echo "
        </div>
    </nav>
</div>
<div class=\"container\">
    <ul class=\"nav justify-content-end\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "getid", [], "method", false, false, false, 115)]), "html", null, true);
        echo "\" style=\"float: right;\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cart.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; margin-top: 11px; margin-right: -5px;\"><span class=\"badge badge-warning\" id=\"badge-food\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "paniers", [], "any", false, false, false, 115)), "html", null, true);
        echo "</span></a>
        </li>
    </ul>
</div>


";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "
<footer class=\"page-footer font-small blue\">
    <div class=\"footer-copyright text-center py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h5>Services</h5>
                    <p>Inscription<br>Espace public<br>Salons privées</p>
                </div>
                <div class=\"col\">
                    <h5>Contact</h5>
                    <p>Notre histoire<br>contact@gusto.fr<br>
                        01 34 67 00 90 <br>
                        <a href=\"#\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                        <a href=\"#\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                        <a href=\"#\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/linkedin.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coworking";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 121,  287 => 5,  267 => 137,  263 => 136,  259 => 135,  244 => 122,  242 => 121,  229 => 115,  220 => 108,  211 => 102,  207 => 101,  199 => 98,  193 => 94,  187 => 91,  184 => 90,  181 => 89,  174 => 85,  163 => 77,  149 => 66,  145 => 65,  136 => 58,  129 => 54,  121 => 49,  107 => 38,  103 => 37,  92 => 29,  88 => 27,  86 => 26,  76 => 21,  68 => 16,  56 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Coworking{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('app.css') }}\">
    <link href=\"https://fonts.googleapis.com/css?family=Crete+Round&display=swap\" rel=\"stylesheet\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <script src=\"https://kit.fontawesome.com/238a647158.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
    <script src=\"https://kit.fontawesome.com/238a647158.js\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('app.js') }}\"></script>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"navbar-home\">
        <a class=\"navbar-brand\" href=\"{{ path('page_principal') }}\"><img src=\"{{ asset('img/Gusto_7.png') }}\" class=\"mr-3\" id=\"img_Gusto7\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\" id=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            {% if not app.user %}
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\" id=\"nav-link\">Inscription</a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos espaces
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ path('public') }}\">Public</a>
                            <a class=\"dropdown-item\" href=\"{{ path('private') }}\">Privé</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos services
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Informatique</a>
                            <a class=\"dropdown-item\" href=\"{{ path('food') }}\">Menu</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\" id=\"nav-link\">Notre histoire</a>
                </li>
            </ul>
            {% else %}
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos espaces
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ path('public') }}\">Public</a>
                            <a class=\"dropdown-item\" href=\"{{ path('private') }}\">Privé</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Nos services
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"#\">Informatique</a>
                            <a class=\"dropdown-item\" href=\"{{ path('food') }}\">Menu</a>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\" id=\"nav-link\">Message</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\" id=\"nav-link\">Contact</a>
                </li>
            </ul>
            {% endif %}
            {% if not app.user %}
            <span class=\"navbar-text\">
    \t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_login') }}\" id=\"nav-link\">Connexion</a>
    \t\t\t</span>
            {% else %}

            <span class=\"navbar-text\">
                <div class=\"btn-group dropright\">
                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"{{ asset('img/user.png') }}\" class=\"card-img-top\" alt=\"...\" style=\"width: 20px;\">&nbsp;{{ app.user.lastname }}
                        </button>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ path('app_edit', {id: app.user.getid()})  }}\">Mon compte</a>
                            <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Déconnexion</a>
                        </div>
                    </div>

    \t\t\t</span>
            {% endif %}

        </div>
    </nav>
</div>
<div class=\"container\">
    <ul class=\"nav justify-content-end\">
        <li class=\"nav-item\">
            <a href=\"{{ path('panier', {id: app.user.getid()})  }}\" style=\"float: right;\"><img src=\"{{ asset('img/cart.png') }}\" class=\"card-img-top\" alt=\"...\" style=\"width: 30px; margin-top: 11px; margin-right: -5px;\"><span class=\"badge badge-warning\" id=\"badge-food\">{{ app.user.paniers|length }}</span></a>
        </li>
    </ul>
</div>


{% block body %}{% endblock %}

<footer class=\"page-footer font-small blue\">
    <div class=\"footer-copyright text-center py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h5>Services</h5>
                    <p>Inscription<br>Espace public<br>Salons privées</p>
                </div>
                <div class=\"col\">
                    <h5>Contact</h5>
                    <p>Notre histoire<br>contact@gusto.fr<br>
                        01 34 67 00 90 <br>
                        <a href=\"#\"><img src=\"{{ asset('img/facebook.png') }}\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                        <a href=\"#\"><img src=\"{{ asset('img/instagram.png') }}\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                        <a href=\"#\"><img src=\"{{ asset('img/linkedin.png') }}\" class=\"card-img-top\" alt=\"...\" style=\"width: 29px;\"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
", "base.html.twig", "/Users/mac/Desktop/Projet Gusto/GustoPro/templates/base.html.twig");
    }
}
