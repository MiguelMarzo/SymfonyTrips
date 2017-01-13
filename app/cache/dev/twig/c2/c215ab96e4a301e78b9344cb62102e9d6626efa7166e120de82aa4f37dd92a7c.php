<?php

/* trip/show.html.twig */
class __TwigTemplate_be073d7a4adc847d77febd04df9f64bc3768f4972d01a48e90dc2fc460b68830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trip/show.html.twig", 1);
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
        $__internal_b889b3e135acddb23ac788544eaba940fa68c1ab539ba4c8fa5beaff8d38b835 = $this->env->getExtension("native_profiler");
        $__internal_b889b3e135acddb23ac788544eaba940fa68c1ab539ba4c8fa5beaff8d38b835->enter($__internal_b889b3e135acddb23ac788544eaba940fa68c1ab539ba4c8fa5beaff8d38b835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "trip/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b889b3e135acddb23ac788544eaba940fa68c1ab539ba4c8fa5beaff8d38b835->leave($__internal_b889b3e135acddb23ac788544eaba940fa68c1ab539ba4c8fa5beaff8d38b835_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a835f8e4fc85a821097215b690ad2d173739562b8e48bd921d791059215bb8 = $this->env->getExtension("native_profiler");
        $__internal_98a835f8e4fc85a821097215b690ad2d173739562b8e48bd921d791059215bb8->enter($__internal_98a835f8e4fc85a821097215b690ad2d173739562b8e48bd921d791059215bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Trip</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Urlpicture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "urlPicture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trip_edit", array("id" => $this->getAttribute((isset($context["trip"]) ? $context["trip"] : $this->getContext($context, "trip")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_98a835f8e4fc85a821097215b690ad2d173739562b8e48bd921d791059215bb8->leave($__internal_98a835f8e4fc85a821097215b690ad2d173739562b8e48bd921d791059215bb8_prof);

    }

    public function getTemplateName()
    {
        return "trip/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Trip</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ trip.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ trip.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ trip.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Urlpicture</th>*/
/*                 <td>{{ trip.urlPicture }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Price</th>*/
/*                 <td>{{ trip.price }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('trip_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('trip_edit', { 'id': trip.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
