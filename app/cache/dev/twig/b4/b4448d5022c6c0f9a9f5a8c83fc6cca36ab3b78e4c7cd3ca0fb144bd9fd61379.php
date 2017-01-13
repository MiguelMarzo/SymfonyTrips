<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3a2191f7f1bfa5a64ddc423ed1db375a1e8861dba1ee3d82598a2e8d6f483ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3716e2b70ae166b03a383fdcfc3c4a5c0019238b83ce06b1e576083c4fdae6f = $this->env->getExtension("native_profiler");
        $__internal_f3716e2b70ae166b03a383fdcfc3c4a5c0019238b83ce06b1e576083c4fdae6f->enter($__internal_f3716e2b70ae166b03a383fdcfc3c4a5c0019238b83ce06b1e576083c4fdae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3716e2b70ae166b03a383fdcfc3c4a5c0019238b83ce06b1e576083c4fdae6f->leave($__internal_f3716e2b70ae166b03a383fdcfc3c4a5c0019238b83ce06b1e576083c4fdae6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5b115cbe5eb923d7a9c7b3b4dc85ee0a7299f16eb8f6bdc621001fc9051e42f = $this->env->getExtension("native_profiler");
        $__internal_a5b115cbe5eb923d7a9c7b3b4dc85ee0a7299f16eb8f6bdc621001fc9051e42f->enter($__internal_a5b115cbe5eb923d7a9c7b3b4dc85ee0a7299f16eb8f6bdc621001fc9051e42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5b115cbe5eb923d7a9c7b3b4dc85ee0a7299f16eb8f6bdc621001fc9051e42f->leave($__internal_a5b115cbe5eb923d7a9c7b3b4dc85ee0a7299f16eb8f6bdc621001fc9051e42f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_411c26ec489005dbb8fd84c66c0503b068da246a91080394d3858769e5254c6c = $this->env->getExtension("native_profiler");
        $__internal_411c26ec489005dbb8fd84c66c0503b068da246a91080394d3858769e5254c6c->enter($__internal_411c26ec489005dbb8fd84c66c0503b068da246a91080394d3858769e5254c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_411c26ec489005dbb8fd84c66c0503b068da246a91080394d3858769e5254c6c->leave($__internal_411c26ec489005dbb8fd84c66c0503b068da246a91080394d3858769e5254c6c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88d34e0dcdfb84b206f62fc58dacc08271a54382e91a6218a97c561e4fb2b807 = $this->env->getExtension("native_profiler");
        $__internal_88d34e0dcdfb84b206f62fc58dacc08271a54382e91a6218a97c561e4fb2b807->enter($__internal_88d34e0dcdfb84b206f62fc58dacc08271a54382e91a6218a97c561e4fb2b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_88d34e0dcdfb84b206f62fc58dacc08271a54382e91a6218a97c561e4fb2b807->leave($__internal_88d34e0dcdfb84b206f62fc58dacc08271a54382e91a6218a97c561e4fb2b807_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
