<?php

/* {# inline_template_start #}<label class="module-name table-filter-text-source">{{ module_name }}</label> */
class __TwigTemplate_90104df6b68658f7eac72b05521a518516e1592d26abd335a2c469eb4627135d extends Twig_Template
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
        $__internal_46bcdc94ca1c1bc9c54fc090063be328cea486e491a01ebecbbce5c83f091efe = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bcdc94ca1c1bc9c54fc090063be328cea486e491a01ebecbbce5c83f091efe->enter($__internal_46bcdc94ca1c1bc9c54fc090063be328cea486e491a01ebecbbce5c83f091efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<label class=\"module-name table-filter-text-source\">{{ module_name }}</label>"));

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

        // line 1
        echo "<label class=\"module-name table-filter-text-source\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["module_name"] ?? null), "html", null, true));
        echo "</label>";
        
        $__internal_46bcdc94ca1c1bc9c54fc090063be328cea486e491a01ebecbbce5c83f091efe->leave($__internal_46bcdc94ca1c1bc9c54fc090063be328cea486e491a01ebecbbce5c83f091efe_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<label class=\"module-name table-filter-text-source\">{{ module_name }}</label>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<label class=\"module-name table-filter-text-source\">{{ module_name }}</label>", "");
    }
}
