<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_d0366ffec1498aa8994446a2d4ec8861d9e5ca5835300a9fcee6c8c9fef41b5f extends Twig_Template
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
        $__internal_8dc91d96e7cbeeb224d752e8c059e3668562eb952eb908a9ac17dff60425cfec = $this->env->getExtension("native_profiler");
        $__internal_8dc91d96e7cbeeb224d752e8c059e3668562eb952eb908a9ac17dff60425cfec->enter($__internal_8dc91d96e7cbeeb224d752e8c059e3668562eb952eb908a9ac17dff60425cfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_sub_taxonomylinks.twig"));

        // line 1
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>
        ";
                // line 4
                if ((twig_length_filter($this->env, $context["values"]) < 2)) {
                    // line 5
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "singular_name", array()), "html", null, true);
                    echo ":
        ";
                } else {
                    // line 7
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["type"], array(), "array"), "name", array()), "html", null, true);
                    echo ":
        ";
                }
                // line 9
                echo "        </em>
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["values"]);
                $context['_iterated'] = false;
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
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 12
                    echo "        ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 13
                    echo "            ";
                    echo $this->env->getExtension('Bolt')->trans("none");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " - ";
                }
                // line 16
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8dc91d96e7cbeeb224d752e8c059e3668562eb952eb908a9ac17dff60425cfec->leave($__internal_8dc91d96e7cbeeb224d752e8c059e3668562eb952eb908a9ac17dff60425cfec_prof);

    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 16,  111 => 15,  102 => 13,  89 => 12,  80 => 11,  62 => 10,  59 => 9,  53 => 7,  47 => 5,  45 => 4,  42 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if record.taxonomy is defined %}*/
/*     {% for type, values in record.taxonomy %}*/
/*         <em>*/
/*         {% if values|length < 2 %}*/
/*             {{ config.get('taxonomy')[type].singular_name }}:*/
/*         {% else %}*/
/*             {{ config.get('taxonomy')[type].name }}:*/
/*         {% endif %}*/
/*         </em>*/
/*         {% for link, value in values %}*/
/*             <a href="{{ link }}">{{ value }}</a>{% if not loop.last %}, {% endif %}*/
/*         {% else %}*/
/*             {{ __('none') }}*/
/*         {% endfor %}*/
/*         {% if not loop.last %} - {% endif %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
