<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* usuario/index.html.twig */
class __TwigTemplate_29c9724bf8308993ced968e379ac821a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello UsuarioController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "! </h1> <!--Usando variables mandadas en la respuesta del Controller-->
    <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</p>
    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usuario");
        yield "\">ver pagina</a> <!--Haciendo referencia a una url definida en un controller usando su name, tambien se puede usar url() para una url absoluta-->
</div>
<h2>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mensajeextra", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mensajeextra"]) || array_key_exists("mensajeextra", $context) ? $context["mensajeextra"] : (function () { throw new RuntimeError('Variable "mensajeextra" does not exist.', 24, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</h2> <!--Ignorar si la variable es null-->
<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>UUID</th>
            <th>Nombre</th>
            <th>Nick</th>
            <th>Numero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!--Bucle foreach en twig sin necesidad de hacer un bucle en php-->
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 40
            yield "            <tr>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "uuid", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "nick", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "numero", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td>
                    <!--Pasando parametros a un path en twig-->
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usuario_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">Revisar</a>
                    <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usuario_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">Editar</a>
                    <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usuario_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">Borrar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['usuario'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</table>
<a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_usuario_new");
        yield "\">Nuevo</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "usuario/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 55,  194 => 54,  184 => 50,  180 => 49,  176 => 48,  170 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  151 => 40,  147 => 39,  129 => 24,  124 => 22,  120 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UsuarioController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! </h1> <!--Usando variables mandadas en la respuesta del Controller-->
    <p>{{ variable }}</p>
    <a href=\"{{ path('app_usuario') }}\">ver pagina</a> <!--Haciendo referencia a una url definida en un controller usando su name, tambien se puede usar url() para una url absoluta-->
</div>
<h2>{{ mensajeextra|default('') }}</h2> <!--Ignorar si la variable es null-->
<h1>Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>UUID</th>
            <th>Nombre</th>
            <th>Nick</th>
            <th>Numero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!--Bucle foreach en twig sin necesidad de hacer un bucle en php-->
        {% for usuario in usuarios %}
            <tr>
                <td>{{ usuario.id }}</td>
                <td>{{ usuario.uuid }}</td>
                <td>{{ usuario.nombre }}</td>
                <td>{{ usuario.nick }}</td>
                <td>{{ usuario.numero }}</td>
                <td>
                    <!--Pasando parametros a un path en twig-->
                    <a href=\"{{ path('app_usuario_show', {'id': usuario.id}) }}\">Revisar</a>
                    <a href=\"{{ path('app_usuario_edit', {'id': usuario.id}) }}\">Editar</a>
                    <a href=\"{{ path('app_usuario_delete', {'id': usuario.id}) }}\">Borrar</a>
                </td>
            </tr>
        {% endfor %}
</table>
<a href=\"{{ path('app_usuario_new') }}\">Nuevo</a>

{% endblock %}", "usuario/index.html.twig", "/cosascosas/basicosymfony/templates/usuario/index.html.twig");
    }
}
