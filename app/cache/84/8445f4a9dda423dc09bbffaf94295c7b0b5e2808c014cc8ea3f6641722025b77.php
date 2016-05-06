<?php

/* _sub_menu.twig */
class __TwigTemplate_15a9064ee769db20ebda306c9fc271ad4d84409c886255d9cd94dc37751cffbb extends Twig_Template
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
        $__internal_961b175e87566bf204235fa5c63829c8d2ace8370ff3238272822d6d2741af88 = $this->env->getExtension("native_profiler");
        $__internal_961b175e87566bf204235fa5c63829c8d2ace8370ff3238272822d6d2741af88->enter($__internal_961b175e87566bf204235fa5c63829c8d2ace8370ff3238272822d6d2741af88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_sub_menu.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "
    <li class=\"";
            // line 3
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "dropdown";
            } else {
                echo " index-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " first";
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last";
                }
            }
            echo "\">

        <a href=\"";
            // line 5
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "#";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "title", array(), "any", true, true)) {
                echo "title='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "'";
            }
            // line 6
            echo "           class='";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "dropdown-toggle";
            } else {
                if ($this->getAttribute($context["item"], "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                }
            }
            echo "' ";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo ">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            echo " ";
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                echo "<b class=\"caret\"></b>";
            }
            // line 8
            echo "        </a>

        ";
            // line 10
            if ($this->getAttribute($context["item"], "submenu", array(), "any", true, true)) {
                // line 11
                echo "            <ul class=\"dropdown-menu\">
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", array(), "any", true, true)) {
                        echo "title='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                        echo "'";
                    }
                    echo ">
                            ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            </ul>
        ";
            }
            // line 21
            echo "        
    </li>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_961b175e87566bf204235fa5c63829c8d2ace8370ff3238272822d6d2741af88->leave($__internal_961b175e87566bf204235fa5c63829c8d2ace8370ff3238272822d6d2741af88_prof);

    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 21,  130 => 19,  120 => 15,  110 => 14,  105 => 13,  101 => 12,  98 => 11,  96 => 10,  92 => 8,  86 => 7,  71 => 6,  59 => 5,  43 => 3,  40 => 2,  22 => 1,);
    }
}
/*  {% for item in menu %}*/
/* */
/*     <li class="{% if item.submenu is defined %}dropdown{% else %} index-{{ loop.index }}{% if loop.first %} first{% endif %}{% if loop.last %} last{% endif %}{% endif %}">*/
/* */
/*         <a href="{% if item.submenu is defined %}#{% else %}{{ item.link }}{% endif %}" {% if item.title is defined %}title='{{ item.title|escape }}'{% endif %}*/
/*            class='{% if item.submenu is defined %}dropdown-toggle{% else %}{% if item.class is defined %}{{item.class}}{% endif %}{% endif %}' {% if item.submenu is defined %}data-toggle="dropdown"{% endif %}>*/
/*             {{item.label}} {% if item.submenu is defined %}<b class="caret"></b>{% endif %}*/
/*         </a>*/
/* */
/*         {% if item.submenu is defined %}*/
/*             <ul class="dropdown-menu">*/
/*                 {% for item in item.submenu %}*/
/*                     <li class="{{ item.class }}">*/
/*                         <a href="{{ item.link }}" {% if item.title is defined %}title='{{ item.title|escape }}'{% endif %}>*/
/*                             {{item.label}}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*         */
/*     </li>*/
/* */
/*   {% endfor %}*/
/* */
