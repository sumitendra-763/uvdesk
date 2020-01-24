<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @UVDeskCoreFramework/Groups/createSupportGroup.html.twig */
class __TwigTemplate_8c1586c1c6b31632e5268891f4f4b445c24f36a1da65c288a4d453637a3556a5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Groups/createSupportGroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Groups/createSupportGroup.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Groups/createSupportGroup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Group"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 6
        echo "\t<div class=\"uv-inner-section\">
\t\t";
        // line 8
        echo "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 9
        echo "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Users";
        // line 10
        echo "
\t\t";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 11, $this->source); })()), "getRegisteredComponent", [0 => (isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 11, $this->source); })())], "method", false, false, false, 11), "renderSidebar", [0 => (isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 11, $this->source); })())], "method", false, false, false, 11);
        echo "
\t\t
\t\t<div class=\"uv-view ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13), "get", [0 => "uv-asideView"], "method", false, false, false, 13))) {
            echo "uv-aside-view";
        }
        echo "\">
\t\t\t<h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Group"), "html", null, true);
        echo "</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"group-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"description\" class=\"uv-field\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"agent-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempUsers\" class=\"uv-field\" value=\"\" />
                        <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"user-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                            </div>
                            <ul class=\"uv-agents-list\">
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 47, $this->source); })()), "getAgentsPartialDetails", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 48
            echo "                                    <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 49) != null)) {
                // line 50
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 50), "html", null, true);
                echo "\"/>
                                        ";
                // line 53
                echo "                                        ";
            }
            // line 54
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            ";
        // line 63
        if ((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 64, $this->source); })()), "getUsersByGroupId", [0 => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)], "method", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 65
                echo "                                    <a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                                        ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 66), "html", null, true);
                echo "
                                        <span class=\"uv-icon-remove\"></span>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Teams"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"team-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
                        <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        echo "</label>
                                <ul class=\"\">
                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 86, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 87
            echo "                                        <li data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                                            ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        echo "
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            ";
        // line 98
        if ((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 99, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["team"], "isActive", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 101), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 102), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                            ";
        }
        // line 108
        echo "                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group Status"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"isActive\" ";
        // line 119
        echo ((((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 119, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 119, $this->source); })()), "isActive", [], "any", false, false, false, 119))) ? ("checked") : (""));
        echo ">
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group is Active"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        echo "\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 137
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar GroupModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
                        required: true,
                        msg: 'This field is mandatory'
                    },{
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: 'This field must have characters only'
                    },{
\t\t\t\t\t\tmaxLength:50,
                        msg:'Maximum character length is 50'
\t\t\t\t\t}],
\t\t\t\t\t'description': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        echo "\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\tvar GroupForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"saveGroup\",
\t\t\t\t\t'blur input, textarea': 'formChanegd',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#agent-filter')
                    this.setAddedIds('#team-filter')
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 169
        echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 169, $this->source); })());
        echo "');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveGroup : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
                        if(!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tgroupForm = new GroupForm({
\t\t\t\tel : \$(\"#group-form\"),
\t\t\t\tmodel : new GroupModel()
\t\t\t});\t
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/Groups/createSupportGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 169,  395 => 154,  374 => 137,  364 => 136,  347 => 129,  337 => 122,  331 => 119,  324 => 115,  315 => 108,  312 => 107,  306 => 106,  299 => 102,  294 => 101,  291 => 100,  286 => 99,  284 => 98,  275 => 92,  272 => 91,  263 => 88,  258 => 87,  254 => 86,  249 => 84,  240 => 78,  231 => 71,  228 => 70,  218 => 66,  213 => 65,  208 => 64,  206 => 63,  198 => 58,  195 => 57,  185 => 54,  182 => 53,  177 => 50,  175 => 49,  170 => 48,  166 => 47,  160 => 44,  151 => 38,  141 => 31,  136 => 29,  126 => 22,  121 => 20,  112 => 14,  106 => 13,  101 => 11,  98 => 10,  95 => 9,  92 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Add Group'|trans }}{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Add Group'|trans }}</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"group-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ group.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"description\" class=\"uv-field\">{{ group.description }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Users'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"agent-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempUsers\" class=\"uv-field\" value=\"\" />
                        <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"user-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Filter With'|trans }}</label>
                            </div>
                            <ul class=\"uv-agents-list\">
                                {% for agent in user_service.getAgentsPartialDetails %}
                                    <li data-id=\"{{agent.id}}\">
                                        {% if agent.smallThumbnail != null %}
                                            <img src=\"{{ agent.smallThumbnail }}\"/>
                                        {# {% else %}
                                            <img src=\"{{ agentAsset }}\"/> #}
                                        {% endif %}
                                        {{agent.name}}
                                    </li>
                                {% endfor %}
                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    {{ 'No result found'|trans }}
                                </li>
                            </ul>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            {% if group %}
                                {% for user in user_service.getUsersByGroupId(group.id) %}
                                    <a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{ user.id }}\">
                                        {{ user.name }}
                                        <span class=\"uv-icon-remove\"></span>
                                    </a>
                                {% endfor %}
                            {% endif %}
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Teams'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"team-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
                        <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Filter With'|trans }}</label>
                                <ul class=\"\">
                                    {% for team in user_service.getSupportTeams() %}
                                        <li data-id=\"{{team.id}}\">
                                            {{team.name}}
                                        </li>
                                    {% endfor %}
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            {% if group %}
                                {% for team in group.getSupportTeams() %}
\t\t\t\t\t\t\t\t\t{% if team.isActive %}
\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{team.id }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ team.name }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
                                {% endfor %}
                            {% endif %}
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Group Status'|trans }}</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"isActive\" {{ group and group.isActive ? 'checked' : '' }}>
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Group is Active'|trans }}</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar GroupModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
                        required: true,
                        msg: 'This field is mandatory'
                    },{
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: 'This field must have characters only'
                    },{
\t\t\t\t\t\tmaxLength:50,
                        msg:'Maximum character length is 50'
\t\t\t\t\t}],
\t\t\t\t\t'description': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\tvar GroupForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"saveGroup\",
\t\t\t\t\t'blur input, textarea': 'formChanegd',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#agent-filter')
                    this.setAddedIds('#team-filter')
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanegd: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveGroup : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if(id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
                        if(!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tgroupForm = new GroupForm({
\t\t\t\tel : \$(\"#group-form\"),
\t\t\t\tmodel : new GroupModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/Groups/createSupportGroup.html.twig", "/home/users/sanjeev.papnoi/www/html/UVDeskOSZIp/uvdesk-community-v1.0.6/vendor/uvdesk/core-framework/Resources/views/Groups/createSupportGroup.html.twig");
    }
}
