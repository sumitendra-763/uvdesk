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

/* @UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig */
class __TwigTemplate_fa0dbbe6e3b7b83a28c95cf44c5267fc25c3052679c9d457b989d68f256ea705 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig", 1);
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

        echo " 
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer Settings"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 8
        echo "\t<div class=\"uv-inner-section\">
\t\t";
        // line 10
        echo "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 11
        echo "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 12
        echo "
\t\t";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 13, $this->source); })()), "getRegisteredComponent", [0 => (isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 13, $this->source); })())], "method", false, false, false, 13), "renderSidebar", [0 => (isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 13, $this->source); })())], "method", false, false, false, 13);
        echo "

\t\t<div class=\"uv-view ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15), "get", [0 => "uv-asideView"], "method", false, false, false, 15))) {
            echo "uv-aside-view";
        }
        echo "\">
\t\t\t";
        // line 16
        if (((isset($context["configuration"]) || array_key_exists("configuration", $context)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)))) {
            // line 17
            echo "                <h1>Update configuration</h1>
            ";
        } else {
            // line 19
            echo "                <h1>Add configuration</h1>
            ";
        }
        // line 21
        echo "
            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"swiftmailer-settings-view\">
                <div class=\"swiftmailer-setting-type\">
                    ";
        // line 27
        echo "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">Mailer ID</label>

                        <div class=\"uv-field-block\">
                            ";
        // line 31
        if (((isset($context["configuration"]) || array_key_exists("configuration", $context)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" placeholder=\"Mailer ID - Leave blank to automatically create id\" />
                            ";
        } else {
            // line 34
            echo "                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"Mailer ID - Leave blank to automatically create id\" />
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>

                    ";
        // line 40
        echo "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">Transport Type</label>

                        ";
        // line 43
        if (((isset($context["configuration"]) || array_key_exists("configuration", $context)) &&  !twig_test_empty((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 43, $this->source); })())))) {
            // line 44
            echo "                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 45, $this->source); })()), "transport", [], "any", false, false, false, 45) == "smtp")) {
                echo "selected";
            }
            echo ">SMTP</option>
                                <option value=\"gmail\" ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 46, $this->source); })()), "transport", [], "any", false, false, false, 46) == "gmail")) {
                echo "selected";
            }
            echo ">Gmail</option>
                                <option value=\"yahoo\" ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 47, $this->source); })()), "transport", [], "any", false, false, false, 47) == "yahoo")) {
                echo "selected";
            }
            echo ">Yahoo Mail</option>
                            </select>
                        ";
        } else {
            // line 50
            echo "                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" selected>SMTP</option>
                                <option value=\"gmail\">Gmail</option>
                                <option value=\"yahoo\">Yahoo</option>
                            </select>
                        ";
        }
        // line 56
        echo "                    </div>

                    ";
        // line 59
        echo "                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "deliveryStatus", [], "any", true, true, false, 62) && (twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 62, $this->source); })()), "deliveryStatus", [], "any", false, false, false, 62) == true))) {
            // line 63
            echo "                                    <input name=\"deliveryStatus\" type=\"checkbox\" checked=\"\">
                                ";
        } else {
            // line 65
            echo "                                    <input name=\"deliveryStatus\" type=\"checkbox\">
                                ";
        }
        // line 67
        echo "
                                <span class=\"uv-checkbox-view\"></span>
                            </div>

                            <span class=\"uv-checkbox-label\">Enable Delivery</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>

                <div class=\"swiftmailer-transport-setting-references\">

                </div>

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        echo "\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

    <script id=\"swft_conf_template_gmail\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_yahoo\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Server</label>

            <div class=\"uv-field-block\">
                <% if (typeof(host) != 'undefined' && host != '') { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"<%- host %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>
            
            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Port</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(port) != 'undefined' && port != '') { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"<%- port %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"465\" />
                <% } %>
            </div>
        </div>

        ";
        // line 181
        echo "
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Encryption Mode</label>
            
            <div class=\"uv-field-block\">
                <select name=\"encryptionMode\" class=\"uv-select\">
                    <option value=\"ssl\" 
                        <% if (typeof(encryption) == 'undefined' || encryption == 'ssl') { print('selected'); } %>
                    >ssl</option>
                    <option value=\"tls\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'tls') { print('selected'); } %>
                    >tls</option>
                    <option value=\"none\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'none') { print('selected'); } %>
                    >None</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Authentication Mode</label>
            
            <div class=\"uv-field-block\">
                <select name=\"authenticationMode\" class=\"uv-select\">
                    <option value=\"login\"
                        <% if (typeof(authentication) == 'undefined' || authentication == 'login') { print('selected'); } %>
                    >login</option>
                    <option value=\"plain\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'plain') { print('selected'); } %>
                    >Plain</option>
                    <option value=\"cram-md5\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'cram-md5') { print('selected'); } %>
                    >Cram-MD5</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Sender Address</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(senderAddress) != 'undefined' && senderAddress != '') { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"<%- senderAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Delivery Address</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(deliveryAddress) != 'undefined' && deliveryAddress != '') { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"<%- deliveryAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SwiftMailerSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
                    username: [
                        {
                            required: true,
                            msg: '";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please specify a valid email address"), "html", null, true);
        echo "'
                        },
                        {
                            pattern: /^([\\w-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([\\w-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)\$/,
                            msg: '";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please specify a valid email address"), "html", null, true);
        echo "'
                        }
                    ],
                    password: function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the password associated with your email address\";
                        }
                    },
                    host: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
                    port: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar SwiftMailerSettingsView = Backbone.View.extend({
                swft_conf_template_custom: _.template(\$(\"#swft_conf_template_custom\").html()),
                swft_conf_template_gmail: _.template(\$(\"#swft_conf_template_gmail\").html()),
                swft_conf_template_yahoo: _.template(\$(\"#swft_conf_template_yahoo\").html()),
\t\t\t\tevents: {
                    'change #cta-swiftmailer-transport': 'ctaTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                ctaTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'smtp':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_gmail(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_yahoo(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            ";
        // line 324
        if (((isset($context["configuration"]) || array_key_exists("configuration", $context)) &&  !twig_test_empty((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 324, $this->source); })())))) {
            // line 325
            echo "                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel(\$.parseJSON('";
            // line 327
            echo json_encode((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 327, $this->source); })()));
            echo "'))
                });\t
            ";
        } else {
            // line 330
            echo "                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel({ transport: 'smtp' })
                });\t
            ";
        }
        // line 335
        echo "\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 335,  514 => 330,  508 => 327,  504 => 325,  502 => 324,  430 => 255,  423 => 251,  351 => 181,  256 => 89,  246 => 88,  231 => 82,  214 => 67,  210 => 65,  206 => 63,  204 => 62,  199 => 59,  195 => 56,  187 => 50,  179 => 47,  173 => 46,  167 => 45,  164 => 44,  162 => 43,  157 => 40,  152 => 36,  148 => 34,  142 => 32,  140 => 31,  134 => 27,  127 => 21,  123 => 19,  119 => 17,  117 => 16,  111 => 15,  106 => 13,  103 => 12,  100 => 11,  97 => 10,  94 => 8,  84 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Swift Mailer Settings'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t{% if configuration is defined and configuration.id is not empty %}
                <h1>Update configuration</h1>
            {% else %}
                <h1>Add configuration</h1>
            {% endif %}

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"swiftmailer-settings-view\">
                <div class=\"swiftmailer-setting-type\">
                    {# Mailer Id #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">Mailer ID</label>

                        <div class=\"uv-field-block\">
                            {% if configuration is defined and configuration.id is not empty %}
                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"{{ configuration.id }}\" placeholder=\"Mailer ID - Leave blank to automatically create id\" />
                            {% else %}
                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"Mailer ID - Leave blank to automatically create id\" />
                            {% endif %}
                        </div>
                    </div>

                    {# Transport Type #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">Transport Type</label>

                        {% if configuration is defined and configuration is not empty %}
                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" {% if configuration.transport == 'smtp' %}selected{% endif %}>SMTP</option>
                                <option value=\"gmail\" {% if configuration.transport == 'gmail' %}selected{% endif %}>Gmail</option>
                                <option value=\"yahoo\" {% if configuration.transport == 'yahoo' %}selected{% endif %}>Yahoo Mail</option>
                            </select>
                        {% else %}
                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" selected>SMTP</option>
                                <option value=\"gmail\">Gmail</option>
                                <option value=\"yahoo\">Yahoo</option>
                            </select>
                        {% endif %}
                    </div>

                    {# Delivery Status #}
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                {% if configuration.deliveryStatus is defined and configuration.deliveryStatus == true %}
                                    <input name=\"deliveryStatus\" type=\"checkbox\" checked=\"\">
                                {% else %}
                                    <input name=\"deliveryStatus\" type=\"checkbox\">
                                {% endif %}

                                <span class=\"uv-checkbox-view\"></span>
                            </div>

                            <span class=\"uv-checkbox-label\">Enable Delivery</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>

                <div class=\"swiftmailer-transport-setting-references\">

                </div>

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    <script id=\"swft_conf_template_gmail\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_yahoo\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Server</label>

            <div class=\"uv-field-block\">
                <% if (typeof(host) != 'undefined' && host != '') { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"<%- host %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Email</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Password</label>
            
            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Port</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(port) != 'undefined' && port != '') { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"<%- port %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"465\" />
                <% } %>
            </div>
        </div>

        {# Optional Fields #}

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Encryption Mode</label>
            
            <div class=\"uv-field-block\">
                <select name=\"encryptionMode\" class=\"uv-select\">
                    <option value=\"ssl\" 
                        <% if (typeof(encryption) == 'undefined' || encryption == 'ssl') { print('selected'); } %>
                    >ssl</option>
                    <option value=\"tls\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'tls') { print('selected'); } %>
                    >tls</option>
                    <option value=\"none\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'none') { print('selected'); } %>
                    >None</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Authentication Mode</label>
            
            <div class=\"uv-field-block\">
                <select name=\"authenticationMode\" class=\"uv-select\">
                    <option value=\"login\"
                        <% if (typeof(authentication) == 'undefined' || authentication == 'login') { print('selected'); } %>
                    >login</option>
                    <option value=\"plain\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'plain') { print('selected'); } %>
                    >Plain</option>
                    <option value=\"cram-md5\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'cram-md5') { print('selected'); } %>
                    >Cram-MD5</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Sender Address</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(senderAddress) != 'undefined' && senderAddress != '') { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"<%- senderAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">Delivery Address</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(deliveryAddress) != 'undefined' && deliveryAddress != '') { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"<%- deliveryAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SwiftMailerSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
                    username: [
                        {
                            required: true,
                            msg: '{{ \"Please specify a valid email address\"|trans }}'
                        },
                        {
                            pattern: /^([\\w-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([\\w-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)\$/,
                            msg: '{{ \"Please specify a valid email address\"|trans }}'
                        }
                    ],
                    password: function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the password associated with your email address\";
                        }
                    },
                    host: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
                    port: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar SwiftMailerSettingsView = Backbone.View.extend({
                swft_conf_template_custom: _.template(\$(\"#swft_conf_template_custom\").html()),
                swft_conf_template_gmail: _.template(\$(\"#swft_conf_template_gmail\").html()),
                swft_conf_template_yahoo: _.template(\$(\"#swft_conf_template_yahoo\").html()),
\t\t\t\tevents: {
                    'change #cta-swiftmailer-transport': 'ctaTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                ctaTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'smtp':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_gmail(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_yahoo(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            {% if configuration is defined and configuration is not empty %}
                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel(\$.parseJSON('{{ configuration|json_encode|raw }}'))
                });\t
            {% else %}
                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel({ transport: 'smtp' })
                });\t
            {% endif %}
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig", "/home/users/sanjeev.papnoi/www/html/UVDeskOSZIp/uvdesk-community-v1.0.6/vendor/uvdesk/core-framework/Resources/views/SwiftMailer/manageConfigurations.html.twig");
    }
}
