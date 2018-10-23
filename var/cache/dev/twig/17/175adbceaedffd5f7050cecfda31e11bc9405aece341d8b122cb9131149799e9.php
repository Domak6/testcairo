<?php

/* data.html.twig */
class __TwigTemplate_fc59b1017b457a713ce1ad43f410111af63192376f9f66827c79f3a90f8e07ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
    <head>
        <title>Encje</title>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
       <a href=\"/add\">Dodaj</a> 
      <h1>Rodzice</h1>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 11
            echo "          <p>ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</p>
          <p>Imię: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</p>
          <p>Nazwisko: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "surname", array()), "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      <h1>Dzieci</h1>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childrens"] ?? $this->getContext($context, "childrens")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 17
            echo "          <p>ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</p>
          <p>Imię: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</p>
          <p>Nazwisko: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "surname", array()), "html", null, true);
            echo "</p>
          ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["c"], "parent", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "              <p> i.id </p>a
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  88 => 23,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  64 => 17,  60 => 16,  57 => 15,  49 => 13,  45 => 12,  40 => 11,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
    <head>
        <title>Encje</title>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
       <a href=\"/add\">Dodaj</a> 
      <h1>Rodzice</h1>
      {% for f in parents %}
          <p>ID: {{ f.id }}</p>
          <p>Imię: {{ f.name }}</p>
          <p>Nazwisko: {{ f.surname }}</p>
      {% endfor %}
      <h1>Dzieci</h1>
      {% for c in childrens %}
          <p>ID: {{ c.id }}</p>
          <p>Imię: {{ c.name }}</p>
          <p>Nazwisko: {{ c.surname }}</p>
          {% for i in c.parent %}
              <p> i.id </p>a
          {% endfor %}
      {% endfor %}

    </body>
</html>
", "data.html.twig", "C:\\testcario\\app\\Resources\\views\\data.html.twig");
    }
}
