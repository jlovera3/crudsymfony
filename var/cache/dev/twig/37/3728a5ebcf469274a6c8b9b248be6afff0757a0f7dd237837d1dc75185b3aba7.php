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

/* libro/show.html.twig */
class __TwigTemplate_516f313a3acb9cb50471de00c9f0eb4cc395a21023989a0855347b7fca7155ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libro/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "libro/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "libro/show.html.twig", 1);
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

        echo "Libro";
        
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
        echo "    <h1>Libro</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 16, $this->source); })()), "titulo", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isbn</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 20, $this->source); })()), "isbn", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 24, $this->source); })()), "fecha", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 24, $this->source); })()), "fecha", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 28, $this->source); })()), "genero", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bestseller</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 32, $this->source); })()), "bestseller", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("libro_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("libro_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>
    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, (isset($context["libro"]) || array_key_exists("libro", $context) ? $context["libro"] : (function () { throw new RuntimeError('Variable "libro" does not exist.', 44, $this->source); })()), "brochureFilename", [], "any", false, false, false, 44))), "html", null, true);
        echo "\">View brochure (PDF)</a>
    ";
        // line 45
        echo twig_include($this->env, $context, "libro/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "libro/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  155 => 44,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Libro{% endblock %}

{% block body %}
    <h1>Libro</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ libro.id }}</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>{{ libro.titulo }}</td>
            </tr>
            <tr>
                <th>Isbn</th>
                <td>{{ libro.isbn }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ libro.fecha ? libro.fecha|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>{{ libro.genero }}</td>
            </tr>
            <tr>
                <th>Bestseller</th>
                <td>{{ libro.bestseller ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ libro.image }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('libro_index') }}\">back to list</a>

    <a href=\"{{ path('libro_edit', {'id': libro.id}) }}\">edit</a>
    <a href=\"{{ asset('uploads/brochures/' ~ libro.brochureFilename) }}\">View brochure (PDF)</a>
    {{ include('libro/_delete_form.html.twig') }}
{% endblock %}
", "libro/show.html.twig", "C:\\xampp\\crudsymfony\\templates\\libro\\show.html.twig");
    }
}
