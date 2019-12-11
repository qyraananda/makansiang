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

/* recipe/base.html.twig */
class __TwigTemplate_68c7d8d4084931312315d3644a3ccfee01cc510a6ef470338884b72aa089ebb6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        \t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        \t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "        
        <h1>Sudah waktunya makan siang. Pilih menu masakan dibawah ini</h1>
\t\t";
        // line 17
        echo "
\t\t";
        // line 19
        echo "\t\t";
        // line 20
        echo "
\t\t<table id=\"example\" class=\"display\" style=\"width:100%\">
\t\t\t<thead><tr><th>Menu</th><th>Bahan</th><th>Keterangan</th></tr></thead>
\t    \t<tbody>

\t\t    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resep"]) || array_key_exists("resep", $context) ? $context["resep"] : (function () { throw new RuntimeError('Variable "resep" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["cartValue"]) {
            // line 26
            echo "\t\t    \t";
            $context["myArray"] = (isset($context["bahan"]) || array_key_exists("bahan", $context) ? $context["bahan"] : (function () { throw new RuntimeError('Variable "bahan" does not exist.', 26, $this->source); })());
            // line 27
            echo "\t\t\t\t
\t\t    \t";
            // line 28
            $context["ing"] = [0 => json_encode(twig_get_attribute($this->env, $this->source, $context["cartValue"], "ingredients", [], "array", false, false, false, 28))];
            // line 29
            echo "\t\t        ";
            // line 30
            echo "
\t\t\t\t<tr>
\t\t            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartValue"], "title", [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ing"]) || array_key_exists("ing", $context) ? $context["ing"] : (function () { throw new RuntimeError('Variable "ing" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 34
                echo "\t\t            \t<td>
\t\t            \t\t";
                // line 35
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
\t\t           \t\t</td>
\t\t           \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t        \t\t<td>
\t\t        \t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cartValue"], "ingredients", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "\t\t\t\t                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bahan"]) || array_key_exists("bahan", $context) ? $context["bahan"] : (function () { throw new RuntimeError('Variable "bahan" does not exist.', 40, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t        ";
                    if (0 === twig_compare($context["item"], twig_get_attribute($this->env, $this->source, $context["elem"], "title", [], "any", false, false, false, 41))) {
                        echo " 
\t\t\t\t\t\t\t        \t<strong>";
                        // line 42
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo " :</strong> best-before ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elem"], "best-before", [], "array", false, false, false, 42), "html", null, true);
                        echo " ,use-by : ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elem"], "use-by", [], "array", false, false, false, 42), "html", null, true);
                        echo " <br>
\t\t\t\t\t\t\t        ";
                    }
                    // line 44
                    echo "\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
\t\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t        \t\t</td>
\t\t     \t
\t\t\t\t    
\t\t\t\t</tr>
\t\t     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cartValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  
\t\t\t</tbody>
\t    </table>


<script type=\"text/javascript\">
    \$(document).ready( function () {
        \$('#example').DataTable();
    } );
</script>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lunch Ingredient!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recipe/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 13,  214 => 12,  202 => 6,  189 => 5,  170 => 50,  160 => 46,  148 => 44,  139 => 42,  134 => 41,  129 => 40,  125 => 39,  122 => 38,  113 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 30,  96 => 29,  94 => 28,  91 => 27,  88 => 26,  84 => 25,  77 => 20,  75 => 19,  72 => 17,  68 => 14,  65 => 13,  63 => 12,  56 => 7,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Lunch Ingredient!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        \t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
        \t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        
        <h1>Sudah waktunya makan siang. Pilih menu masakan dibawah ini</h1>
\t\t{# {% set data = [dump(resep)] %} #}

\t\t{# {{ resep | json_encode() | raw }} #}
\t\t{# {{ dump(resep) }} #}

\t\t<table id=\"example\" class=\"display\" style=\"width:100%\">
\t\t\t<thead><tr><th>Menu</th><th>Bahan</th><th>Keterangan</th></tr></thead>
\t    \t<tbody>

\t\t    {% for key, cartValue in resep %}
\t\t    \t{% set myArray = bahan %}
\t\t\t\t
\t\t    \t{% set ing = [cartValue[\"ingredients\"] | json_encode() | raw] %}
\t\t        {# {% set ing = [dump(cartValue[\"ingredients\"])] %} #}

\t\t\t\t<tr>
\t\t            <td>{{ cartValue[\"title\"]}}</td>
\t\t            {% for key,value in ing %}
\t\t            \t<td>
\t\t            \t\t{{ value }}
\t\t           \t\t</td>
\t\t           \t{% endfor %}
\t\t        \t\t<td>
\t\t        \t\t\t{% for item in  cartValue.ingredients %}
\t\t\t\t                {% for elem in bahan %}
\t\t\t\t\t\t\t        {% if item == elem.title %} 
\t\t\t\t\t\t\t        \t<strong>{{ item }} :</strong> best-before {{ elem[\"best-before\"] }} ,use-by : {{ elem[\"use-by\"] }} <br>
\t\t\t\t\t\t\t        {% endif %}
\t\t\t\t\t\t\t    {% endfor %} 
\t\t\t\t            {% endfor %}
\t\t        \t\t</td>
\t\t     \t
\t\t\t\t    
\t\t\t\t</tr>
\t\t     {% endfor %}  
\t\t\t</tbody>
\t    </table>


<script type=\"text/javascript\">
    \$(document).ready( function () {
        \$('#example').DataTable();
    } );
</script>
    </body>
</html>
", "recipe/base.html.twig", "C:\\xampp\\htdocs\\fresh-recipes\\templates\\recipe\\base.html.twig");
    }
}
