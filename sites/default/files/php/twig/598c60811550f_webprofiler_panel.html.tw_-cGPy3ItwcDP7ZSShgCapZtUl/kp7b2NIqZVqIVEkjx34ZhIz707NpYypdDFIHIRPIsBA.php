<?php

/* modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig */
class __TwigTemplate_b660ec3ca07d90f83463f3533cac4ee7a534042e08d5e27bd863d56f40406b40 extends Twig_Template
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
        $__internal_6cf268ac9a06c964275c02f41adf8a475b1b7217e25e08894e476c6a1c001fd0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf268ac9a06c964275c02f41adf8a475b1b7217e25e08894e476c6a1c001fd0->enter($__internal_6cf268ac9a06c964275c02f41adf8a475b1b7217e25e08894e476c6a1c001fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig"));

        $tags = array();
        $filters = array("raw" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('raw'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["panel"] ?? null)));
        echo "
";
        
        $__internal_6cf268ac9a06c964275c02f41adf8a475b1b7217e25e08894e476c6a1c001fd0->leave($__internal_6cf268ac9a06c964275c02f41adf8a475b1b7217e25e08894e476c6a1c001fd0_prof);

    }

    public function getTemplateName()
    {
        return "modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig";
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
        return new Twig_Source("", "modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig", "/Users/hamdi/tuto_drupal8/modules/devel/webprofiler/templates/Profiler/webprofiler_panel.html.twig");
    }
}
