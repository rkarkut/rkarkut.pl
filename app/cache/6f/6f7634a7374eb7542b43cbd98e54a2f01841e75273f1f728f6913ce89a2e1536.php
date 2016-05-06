<?php

/* _recordfooter.twig */
class __TwigTemplate_65f068d9c110df860c5205519d9ab1b3883ff29165796d376941230394a5e6b2 extends Twig_Template
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
        $__internal_d836dd3de1c7bfea8c5f2eb5cdb8e899441753c2abfa8277885a072df7f7d1ad = $this->env->getExtension("native_profiler");
        $__internal_d836dd3de1c7bfea8c5f2eb5cdb8e899441753c2abfa8277885a072df7f7d1ad->enter($__internal_d836dd3de1c7bfea8c5f2eb5cdb8e899441753c2abfa8277885a072df7f7d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_recordfooter.twig"));

        // line 2
        echo "    Dodany przez <em>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array()), "displayname", array()), "html", null, true);
        echo "</em> dnia ";
        echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%d.%m.%Y");
        echo " -
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link", array()), "html", null, true);
        echo "\">Permalink</a> -
    ";
        // line 6
        echo "    ";
        $this->loadTemplate("_sub_taxonomylinks.twig", "_recordfooter.twig", 6)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        
        $__internal_d836dd3de1c7bfea8c5f2eb5cdb8e899441753c2abfa8277885a072df7f7d1ad->leave($__internal_d836dd3de1c7bfea8c5f2eb5cdb8e899441753c2abfa8277885a072df7f7d1ad_prof);

    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 3,  22 => 2,);
    }
}
/* {# This file is inserted as the 'footer' of each listed record. #}*/
/*     Dodany przez <em>{{ record.user.displayname }}</em> dnia {{ record.datepublish|localdate("%d.%m.%Y")}} -*/
/*     <a href="{{ record.link }}">Permalink</a> -*/
/*     {# include the 'default' links to taxonomies. Check the documentation for ways to modify and customize */
/*        what is output to the browser: http://docs.bolt.cm/taxonomies#taxonomies #}*/
/*     {% include '_sub_taxonomylinks.twig' with {record: record} %}*/
/* */
