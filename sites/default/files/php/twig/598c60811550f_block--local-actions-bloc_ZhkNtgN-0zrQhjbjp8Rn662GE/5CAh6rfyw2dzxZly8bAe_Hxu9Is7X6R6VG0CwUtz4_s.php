<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_81debda05de8a0993a63e936e7b6c89520d588fc374cb00cf2e7d137991f8767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b3c78bcd990ff987f3f22e68785a85f20d86d3d3302e4452e0d397e8fdecf13 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3c78bcd990ff987f3f22e68785a85f20d86d3d3302e4452e0d397e8fdecf13->enter($__internal_5b3c78bcd990ff987f3f22e68785a85f20d86d3d3302e4452e0d397e8fdecf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3c78bcd990ff987f3f22e68785a85f20d86d3d3302e4452e0d397e8fdecf13->leave($__internal_5b3c78bcd990ff987f3f22e68785a85f20d86d3d3302e4452e0d397e8fdecf13_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_b31e977740909a970f4db5b28dc80a43a42e44239769da14a8eedbb42e80de4e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e977740909a970f4db5b28dc80a43a42e44239769da14a8eedbb42e80de4e->enter($__internal_b31e977740909a970f4db5b28dc80a43a42e44239769da14a8eedbb42e80de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_b31e977740909a970f4db5b28dc80a43a42e44239769da14a8eedbb42e80de4e->leave($__internal_b31e977740909a970f4db5b28dc80a43a42e44239769da14a8eedbb42e80de4e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/seven/templates/block--local-actions-block.html.twig", "/Users/hamdi/tuto_drupal8/core/themes/seven/templates/block--local-actions-block.html.twig");
    }
}
