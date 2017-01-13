<?php

/* trip/new.html.twig */
class __TwigTemplate_9f7743bed64a15a800abda37155f05fc86356cc0b85f2b44f58e9dcde784a3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f717dc8b160bdd4a15db6afd23077b5a99a37465b2320bba0e4f5b1922c3ba3e = $this->env->getExtension("native_profiler");
        $__internal_f717dc8b160bdd4a15db6afd23077b5a99a37465b2320bba0e4f5b1922c3ba3e->enter($__internal_f717dc8b160bdd4a15db6afd23077b5a99a37465b2320bba0e4f5b1922c3ba3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f717dc8b160bdd4a15db6afd23077b5a99a37465b2320bba0e4f5b1922c3ba3e->leave($__internal_f717dc8b160bdd4a15db6afd23077b5a99a37465b2320bba0e4f5b1922c3ba3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d51b2f911e3deaa7df64e1f6348d7cba895ad3453750e01bbbe9a04ec8f43ad = $this->env->getExtension("native_profiler");
        $__internal_1d51b2f911e3deaa7df64e1f6348d7cba895ad3453750e01bbbe9a04ec8f43ad->enter($__internal_1d51b2f911e3deaa7df64e1f6348d7cba895ad3453750e01bbbe9a04ec8f43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trip creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1d51b2f911e3deaa7df64e1f6348d7cba895ad3453750e01bbbe9a04ec8f43ad->leave($__internal_1d51b2f911e3deaa7df64e1f6348d7cba895ad3453750e01bbbe9a04ec8f43ad_prof);

    }

    public function getTemplateName()
    {
        return "trip/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trip creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('trip_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
