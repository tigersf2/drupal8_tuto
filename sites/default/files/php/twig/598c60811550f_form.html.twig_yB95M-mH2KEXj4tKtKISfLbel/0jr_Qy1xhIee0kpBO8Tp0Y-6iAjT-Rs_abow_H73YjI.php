<?php

/* core/themes/classy/templates/form/form.html.twig */
class __TwigTemplate_13d9648e31d4c684e1fa61f54c294a50992d08ddc86d069793617372c3ab785b extends Twig_Template
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
        $__internal_30666612e124de9586b43d743a403a9c1d6ae76ffbe8c6197477661b14083cb3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_30666612e124de9586b43d743a403a9c1d6ae76ffbe8c6197477661b14083cb3->enter($__internal_30666612e124de9586b43d743a403a9c1d6ae76ffbe8c6197477661b14083cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 13
        echo "<form";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
</form>
";
        
        $__internal_30666612e124de9586b43d743a403a9c1d6ae76ffbe8c6197477661b14083cb3->leave($__internal_30666612e124de9586b43d743a403a9c1d6ae76ffbe8c6197477661b14083cb3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/form.html.twig", "/Users/hamdi/tuto_drupal8/core/themes/classy/templates/form/form.html.twig");
    }
}
