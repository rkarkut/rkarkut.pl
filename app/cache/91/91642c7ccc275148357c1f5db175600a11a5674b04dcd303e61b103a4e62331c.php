<?php

/* @bolt/_nav/_macros.twig */
class __TwigTemplate_5b38f38eb41129c0890ec55b066b398bc4daa0a189abfc74b03feafc12fc7c57 extends Twig_Template
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
        $__internal_85949014a6574b4ab2f05cc50bad1fdfa2f23f44a8a18d3c4c138942165e5ca3 = $this->env->getExtension("native_profiler");
        $__internal_85949014a6574b4ab2f05cc50bad1fdfa2f23f44a8a18d3c4c138942165e5ca3->enter($__internal_85949014a6574b4ab2f05cc50bad1fdfa2f23f44a8a18d3c4c138942165e5ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_macros.twig"));

        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
        
        $__internal_85949014a6574b4ab2f05cc50bad1fdfa2f23f44a8a18d3c4c138942165e5ca3->leave($__internal_85949014a6574b4ab2f05cc50bad1fdfa2f23f44a8a18d3c4c138942165e5ca3_prof);

    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5a14b188ad99e64ae26b2d97f6f9904ccd9de88bd8f40a8c9e5840aebbda9983 = $this->env->getExtension("native_profiler");
            $__internal_5a14b188ad99e64ae26b2d97f6f9904ccd9de88bd8f40a8c9e5840aebbda9983->enter($__internal_5a14b188ad99e64ae26b2d97f6f9904ccd9de88bd8f40a8c9e5840aebbda9983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "heading"));

            // line 5
            echo "    ";
            $context["__internal_04074a692df3ef557cd4ac2fec3e811c5a30745567e81a6b19352387f37a3888"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_04074a692df3ef557cd4ac2fec3e811c5a30745567e81a6b19352387f37a3888"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
            
            $__internal_5a14b188ad99e64ae26b2d97f6f9904ccd9de88bd8f40a8c9e5840aebbda9983->leave($__internal_5a14b188ad99e64ae26b2d97f6f9904ccd9de88bd8f40a8c9e5840aebbda9983_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_72eb3383b135a62cc2206add544e52662d0e615e5a7a4f97b8f44af57c88558d = $this->env->getExtension("native_profiler");
            $__internal_72eb3383b135a62cc2206add544e52662d0e615e5a7a4f97b8f44af57c88558d->enter($__internal_72eb3383b135a62cc2206add544e52662d0e615e5a7a4f97b8f44af57c88558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 23
            echo "
    ";
            // line 24
            $context["__internal_5079ae869c95d233b6a334c7ab54db0a8711913f3b77eb0673573b646ef1fb75"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if ((((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter((isset($context["force_submenu"]) ? $context["force_submenu"] : null), false)) : (false)))) {
                    // line 48
                    echo "                ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_5079ae869c95d233b6a334c7ab54db0a8711913f3b77eb0673573b646ef1fb75"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_5079ae869c95d233b6a334c7ab54db0a8711913f3b77eb0673573b646ef1fb75"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_5079ae869c95d233b6a334c7ab54db0a8711913f3b77eb0673573b646ef1fb75"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
            
            $__internal_72eb3383b135a62cc2206add544e52662d0e615e5a7a4f97b8f44af57c88558d->leave($__internal_72eb3383b135a62cc2206add544e52662d0e615e5a7a4f97b8f44af57c88558d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fb857365862bc05790a6c458714b5bdc1598e268f6718e0242a5f1426e8a0988 = $this->env->getExtension("native_profiler");
            $__internal_fb857365862bc05790a6c458714b5bdc1598e268f6718e0242a5f1426e8a0988->enter($__internal_fb857365862bc05790a6c458714b5bdc1598e268f6718e0242a5f1426e8a0988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collapse"));

            // line 82
            echo "    ";
            $context["__internal_f4cdc6d9b5012b0e57f12b5024b21a15bf9456ce977177da36de41518b15c961"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_f4cdc6d9b5012b0e57f12b5024b21a15bf9456ce977177da36de41518b15c961"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_f4cdc6d9b5012b0e57f12b5024b21a15bf9456ce977177da36de41518b15c961"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
            
            $__internal_fb857365862bc05790a6c458714b5bdc1598e268f6718e0242a5f1426e8a0988->leave($__internal_fb857365862bc05790a6c458714b5bdc1598e268f6718e0242a5f1426e8a0988_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1e7d2ff1cc82ec253079e415da086c67692b4552464bef5e1bcac5971d6f1bc2 = $this->env->getExtension("native_profiler");
            $__internal_1e7d2ff1cc82ec253079e415da086c67692b4552464bef5e1bcac5971d6f1bc2->enter($__internal_1e7d2ff1cc82ec253079e415da086c67692b4552464bef5e1bcac5971d6f1bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 101
            echo "    ";
            $context["__internal_10e086a35d07d016f266ac0b25738f2f6e6621b5f1ee33cc1b2e41f77ecdf964"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 105
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_10e086a35d07d016f266ac0b25738f2f6e6621b5f1ee33cc1b2e41f77ecdf964"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
            
            $__internal_1e7d2ff1cc82ec253079e415da086c67692b4552464bef5e1bcac5971d6f1bc2->leave($__internal_1e7d2ff1cc82ec253079e415da086c67692b4552464bef5e1bcac5971d6f1bc2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_03ed8cbb7225e1546db5bc63914beaf523dc2380add7c3ffc2fa025191b8c57b = $this->env->getExtension("native_profiler");
            $__internal_03ed8cbb7225e1546db5bc63914beaf523dc2380add7c3ffc2fa025191b8c57b->enter($__internal_03ed8cbb7225e1546db5bc63914beaf523dc2380add7c3ffc2fa025191b8c57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 117
            echo "    ";
            $context["__internal_056095c37e252200d5e54b8dd9ae6c22e07aacb60b6a94310c03f23a8aefd293"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_056095c37e252200d5e54b8dd9ae6c22e07aacb60b6a94310c03f23a8aefd293"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
            
            $__internal_03ed8cbb7225e1546db5bc63914beaf523dc2380add7c3ffc2fa025191b8c57b->leave($__internal_03ed8cbb7225e1546db5bc63914beaf523dc2380add7c3ffc2fa025191b8c57b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_75065309c3be8b2dfdf48eb4da2eb5da97f13db77e71418b4515be38e16a5596 = $this->env->getExtension("native_profiler");
            $__internal_75065309c3be8b2dfdf48eb4da2eb5da97f13db77e71418b4515be38e16a5596->enter($__internal_75065309c3be8b2dfdf48eb4da2eb5da97f13db77e71418b4515be38e16a5596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
            
            $__internal_75065309c3be8b2dfdf48eb4da2eb5da97f13db77e71418b4515be38e16a5596->leave($__internal_75065309c3be8b2dfdf48eb4da2eb5da97f13db77e71418b4515be38e16a5596_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 138,  484 => 137,  477 => 135,  474 => 134,  472 => 133,  469 => 132,  453 => 131,  436 => 124,  430 => 122,  428 => 121,  423 => 120,  421 => 119,  418 => 118,  415 => 117,  399 => 116,  380 => 108,  372 => 107,  369 => 106,  364 => 105,  359 => 104,  354 => 103,  351 => 102,  348 => 101,  329 => 100,  311 => 91,  303 => 86,  298 => 83,  295 => 82,  281 => 81,  266 => 74,  262 => 72,  258 => 70,  252 => 69,  249 => 68,  247 => 67,  240 => 64,  236 => 63,  229 => 62,  226 => 61,  223 => 60,  220 => 59,  215 => 58,  213 => 57,  207 => 54,  198 => 53,  191 => 50,  186 => 49,  183 => 48,  181 => 47,  172 => 46,  169 => 45,  166 => 43,  164 => 42,  161 => 41,  155 => 40,  152 => 39,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  135 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 29,  120 => 28,  117 => 27,  115 => 26,  112 => 25,  110 => 24,  107 => 23,  86 => 22,  69 => 7,  66 => 6,  63 => 5,  47 => 4,  38 => 126,  34 => 111,  30 => 95,  26 => 76,  22 => 10,);
    }
}
/* {##*/
/*  # Sidebar-menu heading*/
/*  #}*/
/* {% macro heading(title, icon) %}*/
/*     {% from _self import label %}*/
/*     <li class="divider">*/
/*         <em>{{ label(icon, title) }}</em>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)*/
/*  #*/
/*  # @param string  icon*/
/*  # @param string  label (default: slug())*/
/*  # @param array   popoveritems*/
/*  # @param bool    active*/
/*  # @param bool    wide*/
/*  # @param array   subitems*/
/*  #}*/
/* {% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}*/
/* */
/*     {% from _self import label, icon %}*/
/* */
/*     {% if subitems is empty %}*/
/*         {% set subitems = popoveritems %}*/
/*     {% endif %}*/
/* */
/*     {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}*/
/*     {% set allowedany = false %}*/
/*     {% set allowedamount = 0 %}*/
/*     {% set allowedsingle = "" %}*/
/*     {% for item in subitems %}*/
/*         {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}*/
/*             {% set allowedany = true %}*/
/*             {% set allowedamount = allowedamount + 1 %}*/
/*             {% set allowedsingle = item %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}*/
/* */
/*     {# Show stuff! #}*/
/*     {% if allowedany %}*/
/*         <li{% if class %} class="{{ class }}"{% endif %}>*/
/*             {% if allowedamount == 1 and not force_submenu|default(false) %}*/
/*                 {% set item = allowedsingle %}*/
/*                 <a href="{{ item.link }}">*/
/*                     {{ icon(item.icon, "icon") }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a  href="{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}" class="menu-pop">*/
/*                     {{ label(icon, label) }}*/
/*                 </a>*/
/*                 <ul class="nav submenu">*/
/*                     {% set divider = false %}*/
/*                     {% for item in popoveritems %}*/
/*                         {% if item == '-' %}*/
/*                             {% set divider = true %}*/
/*                         {% elseif isallowed(item.isallowed|default('dashboard')) %}*/
/*                             <li{% if divider %} class="subdivider"{% endif %}>*/
/*                                 <a href="{{ item.link }}">*/
/*                                     {{ icon(item.icon) }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                                 </a>*/
/*                             </li>*/
/*                             {% set divider = false %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu collapse/expand*/
/*  #}*/
/* {% macro collapse() %}*/
/*     {% from _self import label %}*/
/* */
/*     <li class="nav-secondary-collapse">*/
/*         <a href="#">*/
/*             {{ label('fa:compress', __('Collapse sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/*     <li class="nav-secondary-expand">*/
/*         <a href="#">*/
/*             {{ label('fa:expand', __('Expand sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu link*/
/*  #}*/
/* {% macro link(icon, label, pathname, active, divider) %}*/
/*     {% from _self import label %}*/
/*     {% set class = '' %}*/
/*     {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}*/
/*     {% if active %}{% set class = class ~ ' active' %}{% endif %}*/
/*     {% if divider %}{% set class = class ~ ' divider' %}{% endif %}*/
/* */
/*     <li{% if class %} class="{{ class|trim }}" {% endif %}>*/
/*         <a href="{{ path(pathname) }}">{{ label(icon, label) }}</a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu label*/
/*  #}*/
/* {% macro label(icon, label) %}*/
/*     {% from _self import icon %}*/
/* */
/*     {% if icon is empty %}*/
/*         <i class="icon">{{ label|slice(0, 1) }}</i>*/
/*     {% elseif icon != '-' %}*/
/*         {{ icon(icon, true) }}*/
/*     {% endif %}*/
/*     {{ label|raw }}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Icon*/
/*  #}*/
/* {% macro icon(icon, box) %}*/
/*     {% set class = box|default(false) ? 'icon' : 'fa-fw' %}*/
/*     {# Font Awsome #}*/
/*     {% if icon|slice(0,3) == 'fa:' %}*/
/*         <i class="fa fa-{{ icon|slice(3) }} {{ class }}"></i>*/
/*     {# Defaults to (?) #}*/
/*     {% else %}*/
/*         <i class="fa fa-question-circle {{ class }}" title="{{ icon }}"></i>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
