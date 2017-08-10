<?php

/* modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig */
class __TwigTemplate_c124814b92b8f99feb7ea60d88ced99fdf299de6a621789457fd576e2d287241 extends Twig_Template
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
        $__internal_8ed077e95b583bd10e601efefc9b6d8db7c008b39e17c4bf382c9cbfe678f841 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed077e95b583bd10e601efefc9b6d8db7c008b39e17c4bf382c9cbfe678f841->enter($__internal_8ed077e95b583bd10e601efefc9b6d8db7c008b39e17c4bf382c9cbfe678f841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig"));

        $tags = array("set" => 1, "if" => 5);
        $filters = array("upper" => 4, "date" => 12, "t" => 16);
        $functions = array("url" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('upper', 'date', 't'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        ob_start();
        // line 2
        echo "<div id=\"resume\" class=\"resume\">
    <span class=\"resume__subtitle\">
        ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), "html", null, true));
        echo "
        ";
        // line 5
        if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
            // line 6
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true));
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <em>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true));
            echo "</em>
        ";
        }
        // line 10
        echo "    </span>
    <span class=\"resume__time\">
        <em>by ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile"] ?? null), "ip", array()), "html", null, true));
        echo "</em> at <em>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "time", array()), "r"), "html", null, true));
        echo "</em>
    </span>

    <a id=\"resume-view-all\" class=\"button--flat resume__button\"
       href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.admin_list")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest")));
        echo "</a>
</div>
";
        $context["resume"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
<div id=\"webprofiler\">

    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["resume"] ?? null), "html", null, true));
        echo "

    <div id=\"collectors\" class=\"collectors panel\">
    </div>

    <div class=\"loader--fixed\" style=\"display: none\">
        <svg class=\"loader__circle\">
            <circle class=\"loader__path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\"/>
        </svg>
    </div>

    <script id=\"collector\" type=\"text/template\">
        <a href=\"#<%= id %>\" title=\"<%= summary %>\" class=\"overview__link\">
            <img src=\"data:image/png;base64,<%= icon %>\"
                 class=\"overview__icon\">
            <span class=\"overview__title\"><%= label %></span>
            <% if(typeof(summary) !== \"undefined\") { %>
            <span class=\"overview__subtitle\"><%= summary %></span>
            <% } %>
        </a>
    </script>

    ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["panels"] ?? null), "html", null, true));
        echo "

    <div class=\"modal js--modal\" style=\"display: none\">
        <div class=\"modal__container\">
            <div class=\"modal__bar\">
                <h3 class=\"modal__title\"></h3>
            </div>
            <div class=\"modal__content\">
                <div class=\"modal__main-data\"></div>
            </div>
            <a class=\"button--flat js--modal-close l-right\">Close</a>
        </div>
    </div>
</div>
";
        
        $__internal_8ed077e95b583bd10e601efefc9b6d8db7c008b39e17c4bf382c9cbfe678f841->leave($__internal_8ed077e95b583bd10e601efefc9b6d8db7c008b39e17c4bf382c9cbfe678f841_prof);

    }

    public function getTemplateName()
    {
        return "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 44,  98 => 22,  93 => 19,  85 => 16,  76 => 12,  72 => 10,  66 => 8,  58 => 6,  56 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig", "/Users/hamdi/tuto_drupal8/modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig");
    }
}
