<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e9466a320c520ea53d0f6486d371e85047118ec149cc5ef5faf8eba04cbf0ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c398a7ce76c753ee6a6391f708953c1789e4251dd0490782f5c52117995861 = $this->env->getExtension("native_profiler");
        $__internal_91c398a7ce76c753ee6a6391f708953c1789e4251dd0490782f5c52117995861->enter($__internal_91c398a7ce76c753ee6a6391f708953c1789e4251dd0490782f5c52117995861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c398a7ce76c753ee6a6391f708953c1789e4251dd0490782f5c52117995861->leave($__internal_91c398a7ce76c753ee6a6391f708953c1789e4251dd0490782f5c52117995861_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11a26a65e654618b2257f823b6b5cc7da46efbab09e0ae8833bc83ac858bf3c2 = $this->env->getExtension("native_profiler");
        $__internal_11a26a65e654618b2257f823b6b5cc7da46efbab09e0ae8833bc83ac858bf3c2->enter($__internal_11a26a65e654618b2257f823b6b5cc7da46efbab09e0ae8833bc83ac858bf3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_11a26a65e654618b2257f823b6b5cc7da46efbab09e0ae8833bc83ac858bf3c2->leave($__internal_11a26a65e654618b2257f823b6b5cc7da46efbab09e0ae8833bc83ac858bf3c2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a996668f0495086b87245c99c69e6b13a39bc5ead4f3e45a92438878aa17715 = $this->env->getExtension("native_profiler");
        $__internal_6a996668f0495086b87245c99c69e6b13a39bc5ead4f3e45a92438878aa17715->enter($__internal_6a996668f0495086b87245c99c69e6b13a39bc5ead4f3e45a92438878aa17715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6a996668f0495086b87245c99c69e6b13a39bc5ead4f3e45a92438878aa17715->leave($__internal_6a996668f0495086b87245c99c69e6b13a39bc5ead4f3e45a92438878aa17715_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_104a514062ca84b23bd986b05c2b81ac7aa54e08c0ed63ff62b0970cc6804558 = $this->env->getExtension("native_profiler");
        $__internal_104a514062ca84b23bd986b05c2b81ac7aa54e08c0ed63ff62b0970cc6804558->enter($__internal_104a514062ca84b23bd986b05c2b81ac7aa54e08c0ed63ff62b0970cc6804558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_104a514062ca84b23bd986b05c2b81ac7aa54e08c0ed63ff62b0970cc6804558->leave($__internal_104a514062ca84b23bd986b05c2b81ac7aa54e08c0ed63ff62b0970cc6804558_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
