<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_196ab52412b275d468f5ff52b3d97be7537a0f58bb1f228e7dabdd30957fba8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_13ad7ee15fb36d9f98368603f43bcbc217782b3d0c6bf183145f849ea177e8da = $this->env->getExtension("native_profiler");
        $__internal_13ad7ee15fb36d9f98368603f43bcbc217782b3d0c6bf183145f849ea177e8da->enter($__internal_13ad7ee15fb36d9f98368603f43bcbc217782b3d0c6bf183145f849ea177e8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ad7ee15fb36d9f98368603f43bcbc217782b3d0c6bf183145f849ea177e8da->leave($__internal_13ad7ee15fb36d9f98368603f43bcbc217782b3d0c6bf183145f849ea177e8da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8e4bb53d0888fb0dcb8311b2c3d2904d0a661c86771f52331b091add94615d2 = $this->env->getExtension("native_profiler");
        $__internal_c8e4bb53d0888fb0dcb8311b2c3d2904d0a661c86771f52331b091add94615d2->enter($__internal_c8e4bb53d0888fb0dcb8311b2c3d2904d0a661c86771f52331b091add94615d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8e4bb53d0888fb0dcb8311b2c3d2904d0a661c86771f52331b091add94615d2->leave($__internal_c8e4bb53d0888fb0dcb8311b2c3d2904d0a661c86771f52331b091add94615d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fab2d402e6948ee28447ac6b6ef50cfcfc82bf2793a5df0eda1d3f7329357bf = $this->env->getExtension("native_profiler");
        $__internal_2fab2d402e6948ee28447ac6b6ef50cfcfc82bf2793a5df0eda1d3f7329357bf->enter($__internal_2fab2d402e6948ee28447ac6b6ef50cfcfc82bf2793a5df0eda1d3f7329357bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fab2d402e6948ee28447ac6b6ef50cfcfc82bf2793a5df0eda1d3f7329357bf->leave($__internal_2fab2d402e6948ee28447ac6b6ef50cfcfc82bf2793a5df0eda1d3f7329357bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3484d7ccffd0bc22ce70ee85c7475915a8692789071208e0ad5523cb567f7a38 = $this->env->getExtension("native_profiler");
        $__internal_3484d7ccffd0bc22ce70ee85c7475915a8692789071208e0ad5523cb567f7a38->enter($__internal_3484d7ccffd0bc22ce70ee85c7475915a8692789071208e0ad5523cb567f7a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3484d7ccffd0bc22ce70ee85c7475915a8692789071208e0ad5523cb567f7a38->leave($__internal_3484d7ccffd0bc22ce70ee85c7475915a8692789071208e0ad5523cb567f7a38_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
