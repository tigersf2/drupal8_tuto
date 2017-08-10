<?php

/* block.html.twig */
class __TwigTemplate_427ceffeef7118469d7753956e2b0d458f0c2f44d3b385e4ec36128cfc86801f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1b20f6ce58bc02ded45f1bc58e01568c8a817aa9a2c37015cdd496ad2b5c86 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1b20f6ce58bc02ded45f1bc58e01568c8a817aa9a2c37015cdd496ad2b5c86->enter($__internal_7d1b20f6ce58bc02ded45f1bc58e01568c8a817aa9a2c37015cdd496ad2b5c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "block.html.twig"));

        $tags = array("set" => 33, "if" => 41, "block" => 45);
        $filters = array("clean_class" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 33
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["plugin_id"] ?? null))));
        // line 39
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 41
        if (($context["label"] ?? null)) {
            // line 42
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 44
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "</div>
";
        
        $__internal_7d1b20f6ce58bc02ded45f1bc58e01568c8a817aa9a2c37015cdd496ad2b5c86->leave($__internal_7d1b20f6ce58bc02ded45f1bc58e01568c8a817aa9a2c37015cdd496ad2b5c86_prof);

    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8408edc80c76dbdfe00a8d2f5169659d1ef2c209de4ba242016f84106ba6af0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8408edc80c76dbdfe00a8d2f5169659d1ef2c209de4ba242016f84106ba6af0->enter($__internal_f8408edc80c76dbdfe00a8d2f5169659d1ef2c209de4ba242016f84106ba6af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "    <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
      ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    </div>
  ";
        
        $__internal_f8408edc80c76dbdfe00a8d2f5169659d1ef2c209de4ba242016f84106ba6af0->leave($__internal_f8408edc80c76dbdfe00a8d2f5169659d1ef2c209de4ba242016f84106ba6af0_prof);

    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  91 => 46,  85 => 45,  77 => 50,  75 => 45,  70 => 44,  62 => 42,  60 => 41,  56 => 40,  51 => 39,  49 => 36,  48 => 35,  47 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block.html.twig", "core/themes/bartik/templates/block.html.twig");
    }
}
