<?php

/* index.twig */
class __TwigTemplate_79155e0d38676a325ddbacde1dd4b84cc32d0698b15230e276951aad349bdc37 extends Twig_Template
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
        $__internal_cbe39a7d8b58eabb8efdf5af7a6892312ffc66fd24c026fb18998255917dc942 = $this->env->getExtension("native_profiler");
        $__internal_cbe39a7d8b58eabb8efdf5af7a6892312ffc66fd24c026fb18998255917dc942->enter($__internal_cbe39a7d8b58eabb8efdf5af7a6892312ffc66fd24c026fb18998255917dc942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        // line 1
        $this->loadTemplate("_head.twig", "index.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("_menu.twig", "index.twig", 3)->display($context);
        // line 4
        echo "

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homebg", array()), "html", null, true);
        echo "')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        ";
        // line 14
        echo "                        <hr class=\"small\">
                        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method")) {
            // line 16
            echo "                        <span class=\"subheading\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 18
        echo "                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
               

            ";
        // line 30
        $template_storage = $context['app']['storage'];
        $context['records'] =         $template_storage->getContent("entries/latest/6", array("paging" => true) );
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 32
            echo "

               <div class=\"post-preview\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                            ";
            // line 40
            echo $this->env->getExtension('Bolt')->excerpt($this->getAttribute($context["record"], "teaser", array()), 100);
            echo "
                        </h3>
                    </a>
                    <p class=\"post-meta\">";
            // line 43
            $this->loadTemplate("_recordfooter.twig", "index.twig", 43)->display(array_merge($context, array("record" => $context["record"])));
            echo "</p>
                </div>
                <hr>
               
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                <!-- Pager -->
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


            </div>
        </div>
    </div>

    <hr>

 ";
        // line 59
        $this->loadTemplate("_footer.twig", "index.twig", 59)->display($context);
        // line 60
        echo "
";
        
        $__internal_cbe39a7d8b58eabb8efdf5af7a6892312ffc66fd24c026fb18998255917dc942->leave($__internal_cbe39a7d8b58eabb8efdf5af7a6892312ffc66fd24c026fb18998255917dc942_prof);

    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  148 => 59,  136 => 50,  132 => 48,  113 => 43,  107 => 40,  101 => 37,  96 => 35,  91 => 32,  73 => 31,  70 => 30,  56 => 18,  50 => 16,  48 => 15,  45 => 14,  35 => 8,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% include '_head.twig' %}*/
/* */
/* {% include '_menu.twig' %}*/
/* */
/* */
/*     <!-- Page Header -->*/
/*     <!-- Set your background image for this header on the line below. -->*/
/*     <header class="intro-header" style="background-image: url('{{ paths.theme }}img/{{ theme.homebg }}')">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <div class="site-heading">*/
/*                         {#<h1>{{ app.config.get('general/sitename') }}</h1>#}*/
/*                         <hr class="small">*/
/*                         {% if app.config.get('general/payoff') %}*/
/*                         <span class="subheading">{{ app.config.get('general/payoff') }}</span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <!-- Main Content -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                */
/* */
/*             {% setcontent records = "entries/latest/6" allowpaging %}*/
/*                 {% for record in records %}*/
/* */
/* */
/*                <div class="post-preview">*/
/*                     <a href="{{ record.link }}">*/
/*                         <h2 class="post-title">*/
/*                             {{ record.title }}*/
/*                         </h2>*/
/*                         <h3 class="post-subtitle">*/
/*                             {{ record.teaser|excerpt(100) }}*/
/*                         </h3>*/
/*                     </a>*/
/*                     <p class="post-meta">{% include '_recordfooter.twig' with {record: record} %}</p>*/
/*                 </div>*/
/*                 <hr>*/
/*                */
/*                 {% endfor %}*/
/* */
/*                 <!-- Pager -->*/
/*                 {{ pager() }}*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*  {% include '_footer.twig' %}*/
/* */
/* */
