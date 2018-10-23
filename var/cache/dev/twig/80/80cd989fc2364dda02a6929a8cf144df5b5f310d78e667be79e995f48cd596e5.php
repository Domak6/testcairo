<?php

/* base.html.twig */
class __TwigTemplate_00b3eafa71c0d0f039a3ad3a208b5e92b446f82a6cd5b6a2a3f2a1721b5ce8f1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
    <head>
        <title>Youtube lista wideo</title>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
      <div>
      <h3>Video List</h3>
     <ul>
     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youtube_videos"] ?? $this->getContext($context, "youtube_videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 12
            echo "     <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "video_id", array()), "html", null, true);
            echo ")</li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "     </ul>
     <h3>Playlists</h3>
     <ul>
     ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youtube_playlists"] ?? $this->getContext($context, "youtube_playlists")));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 18
            echo "     <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["playlist"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["playlist"], "playlist_id", array()), "html", null, true);
            echo ")</li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "     </ul>
   </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  72 => 20,  61 => 18,  57 => 17,  52 => 14,  41 => 12,  37 => 11,  25 => 1,);
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
        <title>Youtube lista wideo</title>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
      <div>
      <h3>Video List</h3>
     <ul>
     {% for video in youtube_videos %}
     <li>{{ video.title }} ({{ video.video_id }})</li>
     {% endfor %}
     </ul>
     <h3>Playlists</h3>
     <ul>
     {% for playlist in youtube_playlists %}
     <li>{{ playlist.title }} ({{ playlist.playlist_id }})</li>
     {% endfor %}
     </ul>
   </div>
    </body>
</html>
", "base.html.twig", "C:\\testcario\\app\\Resources\\views\\base.html.twig");
    }
}
