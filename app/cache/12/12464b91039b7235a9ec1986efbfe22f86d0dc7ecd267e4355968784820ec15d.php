<?php

/* @bolt/_sub/_messages.twig */
class __TwigTemplate_38552e2c517b23a8155e04980ee8a4139da405f34de2632974499d0cf19450a1 extends Twig_Template
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
        $__internal_ae3359db78b13d1c0a1f4929bf9dd2c698a36e2f907a601cf16d20275537cdf2 = $this->env->getExtension("native_profiler");
        $__internal_ae3359db78b13d1c0a1f4929bf9dd2c698a36e2f907a601cf16d20275537cdf2->enter($__internal_ae3359db78b13d1c0a1f4929bf9dd2c698a36e2f907a601cf16d20275537cdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_messages.twig"));

        // line 14
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["self"] = $this;
        // line 29
        if (((array_key_exists("wrapper", $context) && (isset($context["wrapper"]) ? $context["wrapper"] : null)) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "keys", array(), "method")))) {
            // line 30
            echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
            // line 32
            echo $context["self"]->getflashbag((isset($context["user"]) ? $context["user"] : null));
            echo "
        </div>
    </div>
";
        } else {
            // line 36
            echo "    ";
            echo $context["self"]->getflashbag((isset($context["user"]) ? $context["user"] : null));
            echo "
";
        }
        // line 38
        echo "
";
        // line 40
        echo "<noscript>
    <div class=\"alert alert-danger\">
        <p>";
        // line 42
        echo $this->env->getExtension('Bolt')->trans("generic.noscript.message");
        echo "</p>
    </div>
</noscript>
";
        
        $__internal_ae3359db78b13d1c0a1f4929bf9dd2c698a36e2f907a601cf16d20275537cdf2->leave($__internal_ae3359db78b13d1c0a1f4929bf9dd2c698a36e2f907a601cf16d20275537cdf2_prof);

    }

    // line 1
    public function getflashbag(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_64bb0c44b7fefc744a003c874a7e7a6808e0f158dd0e0be5ff3637ab66562446 = $this->env->getExtension("native_profiler");
            $__internal_64bb0c44b7fefc744a003c874a7e7a6808e0f158dd0e0be5ff3637ab66562446->enter($__internal_64bb0c44b7fefc744a003c874a7e7a6808e0f158dd0e0be5ff3637ab66562446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashbag"));

            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 5
            echo "    ";
            if (((isset($context["user"]) ? $context["user"] : null) != null)) {
                // line 6
                echo "        ";
                echo $context["self"]->getmessages("danger");
                echo "
        ";
                // line 7
                echo $context["self"]->getmessages("warning");
                echo "
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $context["self"]->getmessages("error", "danger");
            echo "
    ";
            // line 11
            echo $context["self"]->getmessages("success");
            echo "
    ";
            // line 12
            echo $context["self"]->getmessages("info");
            echo "
";
            
            $__internal_64bb0c44b7fefc744a003c874a7e7a6808e0f158dd0e0be5ff3637ab66562446->leave($__internal_64bb0c44b7fefc744a003c874a7e7a6808e0f158dd0e0be5ff3637ab66562446_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getmessages($__key__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d7fbbe5e013c1c9c9daecfa6326d0caad7611963bc70e81526b7bc41292b4b0d = $this->env->getExtension("native_profiler");
            $__internal_d7fbbe5e013c1c9c9daecfa6326d0caad7611963bc70e81526b7bc41292b4b0d->enter($__internal_d7fbbe5e013c1c9c9daecfa6326d0caad7611963bc70e81526b7bc41292b4b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "messages"));

            // line 16
            echo "    ";
            $context["shown"] = array();
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "        ";
                if (!twig_in_filter($context["msg"], (isset($context["shown"]) ? $context["shown"] : null))) {
                    // line 19
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), (isset($context["key"]) ? $context["key"] : null))) : ((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                    echo " alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 21
                    echo $this->env->getExtension('Bolt')->ymllink($context["msg"]);
                    echo "
            </div>
            ";
                    // line 23
                    $context["shown"] = twig_array_merge((isset($context["shown"]) ? $context["shown"] : null), array(0 => $context["msg"]));
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_d7fbbe5e013c1c9c9daecfa6326d0caad7611963bc70e81526b7bc41292b4b0d->leave($__internal_d7fbbe5e013c1c9c9daecfa6326d0caad7611963bc70e81526b7bc41292b4b0d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 25,  167 => 24,  165 => 23,  160 => 21,  154 => 19,  151 => 18,  146 => 17,  143 => 16,  127 => 15,  111 => 12,  107 => 11,  103 => 10,  100 => 9,  95 => 7,  90 => 6,  87 => 5,  84 => 3,  81 => 2,  67 => 1,  56 => 42,  52 => 40,  49 => 38,  43 => 36,  36 => 32,  32 => 30,  30 => 29,  28 => 28,  25 => 27,  22 => 14,);
    }
}
/* {% macro flashbag() %}*/
/*     {% import _self as self %}*/
/* */
/*     {# we only want to show these flashes to logged on users. #}*/
/*     {% if user != null %}*/
/*         {{ self.messages('danger') }}*/
/*         {{ self.messages('warning') }}*/
/*     {% endif %}*/
/* */
/*     {{ self.messages('error', 'danger') }}*/
/*     {{ self.messages('success') }}*/
/*     {{ self.messages('info') }}*/
/* {% endmacro %}*/
/* */
/* {% macro messages(key, class) %}*/
/*     {% set shown = [] %}*/
/*     {% for msg in app['logger.flash'].get(key) %}*/
/*         {% if msg not in shown %}*/
/*             <div class="alert alert-{{ class|default(key) }} alert-dismissible">*/
/*                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                 {{ msg|ymllink }}*/
/*             </div>*/
/*             {% set shown = shown|merge([msg]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as self %}*/
/* {% if wrapper is defined and wrapper and app['logger.flash'].keys() is not empty %}*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             {{ self.flashbag(user) }}*/
/*         </div>*/
/*     </div>*/
/* {% else %}*/
/*     {{ self.flashbag(user) }}*/
/* {% endif %}*/
/* */
/* {# No Javascript #}*/
/* <noscript>*/
/*     <div class="alert alert-danger">*/
/*         <p>{{ __('generic.noscript.message') }}</p>*/
/*     </div>*/
/* </noscript>*/
/* */
