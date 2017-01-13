<?php

/* base.html.twig */
class __TwigTemplate_f5861294a911bbf698b2a43a4b2142b0e235a25c8309c32f590af3204bfcd684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d21de9c38925dc4e02e25ecc8c5f7550e72cce964e838b465e0f57efb6c2ce = $this->env->getExtension("native_profiler");
        $__internal_a5d21de9c38925dc4e02e25ecc8c5f7550e72cce964e838b465e0f57efb6c2ce->enter($__internal_a5d21de9c38925dc4e02e25ecc8c5f7550e72cce964e838b465e0f57efb6c2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Desarrollo web PHP</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Superheroe CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("trip_index");
        echo "\">Viajes 4v al mejor precio</a>
                </div>
                <!-- FORMULARIO DE BÚSQUEDA -->
                <form class=\"navbar-form navbar-right\" role=\"search\" method=\"post\" action=\"index.php\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"trip\" class=\"form-control\" placeholder=\"Buscar...\" value=\"\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
                </form>
                <!-- FIN FORMULARIO DE BÚSQUEDA -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-3\">
                    <p class=\"lead\">Tu agencia de viajes</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("trip_new");
        echo "\" class=\"list-group-item\">Sugiérenos un viaje</a>
                    </div>
                </div>

                <div class=\"col-md-9\">

                    <div class=\"row carousel-holder\">

                        <div class=\"col-md-12\">
                            <img class=\"slide-image img-rounded\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "

            ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        </div>

    </div>
</body>
<div class=\"container\">
    <hr>
    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>&copy; Eugenia Pérez - 2015</p>
            </div>
        </div>
    </footer>

</div>
</html>
";
        
        $__internal_a5d21de9c38925dc4e02e25ecc8c5f7550e72cce964e838b465e0f57efb6c2ce->leave($__internal_a5d21de9c38925dc4e02e25ecc8c5f7550e72cce964e838b465e0f57efb6c2ce_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0018c104559c0d538228bceb6dac3b92322b3056eb536471073dc05a6ae654 = $this->env->getExtension("native_profiler");
        $__internal_9d0018c104559c0d538228bceb6dac3b92322b3056eb536471073dc05a6ae654->enter($__internal_9d0018c104559c0d538228bceb6dac3b92322b3056eb536471073dc05a6ae654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d0018c104559c0d538228bceb6dac3b92322b3056eb536471073dc05a6ae654->leave($__internal_9d0018c104559c0d538228bceb6dac3b92322b3056eb536471073dc05a6ae654_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c925166e5bdec1053d82d04df227684bdc3496cbfc7d31634f639814c0d9c7ce = $this->env->getExtension("native_profiler");
        $__internal_c925166e5bdec1053d82d04df227684bdc3496cbfc7d31634f639814c0d9c7ce->enter($__internal_c925166e5bdec1053d82d04df227684bdc3496cbfc7d31634f639814c0d9c7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "                <!-- jQuery -->
                <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_c925166e5bdec1053d82d04df227684bdc3496cbfc7d31634f639814c0d9c7ce->leave($__internal_c925166e5bdec1053d82d04df227684bdc3496cbfc7d31634f639814c0d9c7ce_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 80,  168 => 77,  165 => 76,  159 => 75,  148 => 72,  123 => 82,  121 => 75,  117 => 73,  115 => 72,  108 => 68,  96 => 59,  71 => 37,  52 => 21,  46 => 18,  40 => 15,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Desarrollo web PHP</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/shop-homepage.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Superheroe CSS -->*/
/*         <link href="{{ asset('bundles/framework/css/cerulean.min.css') }}" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('trip_index') }}">Viajes 4v al mejor precio</a>*/
/*                 </div>*/
/*                 <!-- FORMULARIO DE BÚSQUEDA -->*/
/*                 <form class="navbar-form navbar-right" role="search" method="post" action="index.php">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="trip" class="form-control" placeholder="Buscar..." value="">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>*/
/*                 </form>*/
/*                 <!-- FIN FORMULARIO DE BÚSQUEDA -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-md-3">*/
/*                     <p class="lead">Tu agencia de viajes</p>*/
/*                     <div class="list-group">*/
/*                         <a href="{{ path('trip_new') }}" class="list-group-item">Sugiérenos un viaje</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-9">*/
/* */
/*                     <div class="row carousel-holder">*/
/* */
/*                         <div class="col-md-12">*/
/*                             <img class="slide-image img-rounded" src="{{asset('bundles/framework/img/logo.png') }}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% block body %}{% endblock %}*/
/* */
/* */
/*             {% block javascripts %}*/
/*                 <!-- jQuery -->*/
/*                 <script src="{{ asset('bundles/framework/js/jquery.js') }}"></script>*/
/* */
/*                 <!-- Bootstrap Core JavaScript -->*/
/*                 <script src="{{ asset('bundles/framework/js/bootstrap.min.js') }}"></script>*/
/*             {% endblock %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </body>*/
/* <div class="container">*/
/*     <hr>*/
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <p>&copy; Eugenia Pérez - 2015</p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/* </div>*/
/* </html>*/
/* */
