<?php

/* EcommerceBundle:Default:voir.html.twig */
class __TwigTemplate_debf595ef8e2d8b8e24a55c2b8c75e6d39b50d41b7320444bb7d87046ed9452c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "EcommerceBundle:Default:voir.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1fef5bfa60b71bfcfea994b9d0b61d53d0abd3cb2c3719dc96bcebff59d0a5c = $this->env->getExtension("native_profiler");
        $__internal_a1fef5bfa60b71bfcfea994b9d0b61d53d0abd3cb2c3719dc96bcebff59d0a5c->enter($__internal_a1fef5bfa60b71bfcfea994b9d0b61d53d0abd3cb2c3719dc96bcebff59d0a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fef5bfa60b71bfcfea994b9d0b61d53d0abd3cb2c3719dc96bcebff59d0a5c->leave($__internal_a1fef5bfa60b71bfcfea994b9d0b61d53d0abd3cb2c3719dc96bcebff59d0a5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65aeb2c81a6a10fbbaade289428a4796ba408120b30bd7704a671e500d3ed93 = $this->env->getExtension("native_profiler");
        $__internal_e65aeb2c81a6a10fbbaade289428a4796ba408120b30bd7704a671e500d3ed93->enter($__internal_e65aeb2c81a6a10fbbaade289428a4796ba408120b30bd7704a671e500d3ed93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">

      <div class=\"row\">



        <div class=\"col-lg-9\">


          <div class=\"row\">


            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"../img/slide-2.jpg\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), "nom", array()), "html", null, true);
        echo "
                  </h4>
                  <h5>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), "prix", array()), "html", null, true);
        echo " \$</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
 ";
        
        $__internal_e65aeb2c81a6a10fbbaade289428a4796ba408120b30bd7704a671e500d3ed93->leave($__internal_e65aeb2c81a6a10fbbaade289428a4796ba408120b30bd7704a671e500d3ed93_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  59 => 21,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig"%}*/
/* {% block body  %}*/
/* <div class="container">*/
/* */
/*       <div class="row">*/
/* */
/* */
/* */
/*         <div class="col-lg-9">*/
/* */
/* */
/*           <div class="row">*/
/* */
/* */
/*             <div class="col-lg-4 col-md-6 mb-4">*/
/*               <div class="card h-100">*/
/*                 <a href="#"><img class="card-img-top" src="../img/slide-2.jpg" alt=""></a>*/
/*                 <div class="card-body">*/
/*                   <h4 class="card-title">*/
/*                 {{cc.nom}}*/
/*                   </h4>*/
/*                   <h5>{{cc.prix}} $</h5>*/
/*                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>*/
/*                 </div>*/
/*                 <div class="card-footer">*/
/*                   <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*           </div>*/
/*           <!-- /.row -->*/
/* */
/*         </div>*/
/*         <!-- /.col-lg-9 -->*/
/* */
/*       </div>*/
/*       <!-- /.row -->*/
/* */
/*     </div>*/
/*  {% endblock %}*/
/* */
