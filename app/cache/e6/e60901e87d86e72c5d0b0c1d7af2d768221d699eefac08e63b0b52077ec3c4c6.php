<?php

/* @bolt/clearcache/clearcache.twig */
class __TwigTemplate_f01a0580477de7dd1fe6f19c58ac8cad4ffbcb07abd432c3f1802f747a087ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/clearcache/clearcache.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427da61114703b5f679d9e4b8a2e152d1106f37354515cfdeab421b9f69d869c = $this->env->getExtension("native_profiler");
        $__internal_427da61114703b5f679d9e4b8a2e152d1106f37354515cfdeab421b9f69d869c->enter($__internal_427da61114703b5f679d9e4b8a2e152d1106f37354515cfdeab421b9f69d869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/clearcache/clearcache.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_427da61114703b5f679d9e4b8a2e152d1106f37354515cfdeab421b9f69d869c->leave($__internal_427da61114703b5f679d9e4b8a2e152d1106f37354515cfdeab421b9f69d869c_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_ee645ded2925300e07c1479ab1b55b6c5d4250cca7426af664cacca188d7c271 = $this->env->getExtension("native_profiler");
        $__internal_ee645ded2925300e07c1479ab1b55b6c5d4250cca7426af664cacca188d7c271->enter($__internal_ee645ded2925300e07c1479ab1b55b6c5d4250cca7426af664cacca188d7c271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Configuration";
        
        $__internal_ee645ded2925300e07c1479ab1b55b6c5d4250cca7426af664cacca188d7c271->leave($__internal_ee645ded2925300e07c1479ab1b55b6c5d4250cca7426af664cacca188d7c271_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b9e5ccf1728b4011d87d9111eeeca3be3ca3ec6a17b94ff184bbbc7df583f09e = $this->env->getExtension("native_profiler");
        $__internal_b9e5ccf1728b4011d87d9111eeeca3be3ca3ec6a17b94ff184bbbc7df583f09e->enter($__internal_b9e5ccf1728b4011d87d9111eeeca3be3ca3ec6a17b94ff184bbbc7df583f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("Clear the cache");
        
        $__internal_b9e5ccf1728b4011d87d9111eeeca3be3ca3ec6a17b94ff184bbbc7df583f09e->leave($__internal_b9e5ccf1728b4011d87d9111eeeca3be3ca3ec6a17b94ff184bbbc7df583f09e_prof);

    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_16265666c5179419c16f2c1edd384aa5a1c7088d25d0952e900f6b56ad4ce7c4 = $this->env->getExtension("native_profiler");
        $__internal_16265666c5179419c16f2c1edd384aa5a1c7088d25d0952e900f6b56ad4ce7c4->enter($__internal_16265666c5179419c16f2c1edd384aa5a1c7088d25d0952e900f6b56ad4ce7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("clearcache");
        echo "\" class=\"btn btn-primary\">";
        echo $this->env->getExtension('Bolt')->trans("Clear cache again");
        echo "</a>
            </p>
        </div>
    </div>

";
        
        $__internal_16265666c5179419c16f2c1edd384aa5a1c7088d25d0952e900f6b56ad4ce7c4->leave($__internal_16265666c5179419c16f2c1edd384aa5a1c7088d25d0952e900f6b56ad4ce7c4_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/clearcache/clearcache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  66 => 10,  60 => 9,  48 => 7,  36 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Configuration > Clear the cache #}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title __('Clear the cache') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <p>*/
/*                 <a href="{{ path('clearcache') }}" class="btn btn-primary">{{ __('Clear cache again') }}</a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
