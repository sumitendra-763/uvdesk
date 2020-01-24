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

/* @UVDeskSupportCenter/Templates/footer.html.twig */
class __TwigTemplate_b51f3d56012f5a2fe6a15964924d534ce0083931bcadfd188ed8fdea19f91962 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/footer.html.twig"));

        // line 1
        echo "<div class=\"uv-container\">
\t<div class=\"uv-footer\">
\t\t<div class=\"uv-footer-wrapper\">
\t\t\t<div class=\"uv-footer-lt\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder");
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"uv-open-popup\" data-target=\"cookie-dialog-modal\">Cookie Policy</a></li>
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 8, $this->source); })()), "footerLinks", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["footerLink"]) {
            // line 9
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerLink"], "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerLink"], "label", [], "any", false, false, false, 9), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerLink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
    <div class=\"uv-footer-credit\">
      <span class=\"uv-credit-text\">Powered by <a href=\"https://www.uvdesk.com\" target=\"_blank\">UVdesk</a></span>
    </div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskSupportCenter/Templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  59 => 9,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uv-container\">
\t<div class=\"uv-footer\">
\t\t<div class=\"uv-footer-wrapper\">
\t\t\t<div class=\"uv-footer-lt\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase_folder') }}\">Home</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"uv-open-popup\" data-target=\"cookie-dialog-modal\">Cookie Policy</a></li>
\t\t\t\t\t{% for footerLink in websiteConfiguration.footerLinks %}
\t\t\t\t\t\t<li><a href=\"{{ footerLink.url }}\" target=\"_blank\">{{ footerLink.label }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
    <div class=\"uv-footer-credit\">
      <span class=\"uv-credit-text\">Powered by <a href=\"https://www.uvdesk.com\" target=\"_blank\">UVdesk</a></span>
    </div>
\t</div>
</div>
", "@UVDeskSupportCenter/Templates/footer.html.twig", "/home/users/sanjeev.papnoi/www/html/UVDeskOSZIp/uvdesk-community-v1.0.6/vendor/uvdesk/support-center-bundle/Resources/views/Templates/footer.html.twig");
    }
}
