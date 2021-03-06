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

/* installation-wizard/index.html.twig */
class __TwigTemplate_91a2ab9578083b1df1e20b45a754d5375bcf5114e1afc724457b866ef947b6fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation-wizard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation-wizard/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>Truedesk Helpdesk Community Edition - Installation Wizard</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/wizard.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

        ";
        // line 16
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.7.1/backbone-validation-min.js\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/wizard.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"wizard\">
            <header id=\"wizardHeader\" class=\"wizard-box-lt\"></header>
            <section id=\"wizardContent\" class=\"wizard-box-rt\"></section>
        </div>

        <script id=\"wizardIcons-LoaderTemplate\" type=\"text/template\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"1em\" height=\"1em\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
                <path opacity=\"0.8\" fill=\"#9161ff\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\" />
                <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z\" >
                    <animateTransform attributeType=\"xml\" attributeName=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatCount=\"indefinite\" />
                </path>
            </svg>
        </script>

        <script id=\"wizardIcons-SuccessTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.4em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"icon-success\" class=\"cls-1\" fill=\"#2ED143\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>

        <script id=\"wizardIcons-NoticeTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"error-icon\" class=\"cls-1\" fill=\"#ff5656\" fill-rule=\"evenodd\" d=\"M764.5,352A10.5,10.5,0,1,1,754,362.5,10.5,10.5,0,0,1,764.5,352Zm-0.006,12.988a1.506,1.506,0,1,1-1.5,1.506A1.5,1.5,0,0,1,764.494,364.988ZM763,356h3v8h-3v-8Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>
        
        <script id=\"installationWizard-DefaultHeaderTemplate\" type=\"text/template\">
            <div class=\"uvdesk-logo\">
\t\t\t<ul class=\"progress-bar titlelogos\">
\t\t\tTruedesk
\t\t\t</ul>
               <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mlzs_logo.png"), "html", null, true);
        echo "\" title=\"my image\" class=\"imglogos\" alt=\"My image\">
            </div>
            
            <p class=\"uv-version\">Version ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</p>
            <ul class=\"progress-bar\">
                <li class=\"welcome active-node\"><div class=\"node \"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Welcome</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"check-requirements\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>System Requirements</p></li>
                <li><div class=\"divider \"></div></li>
                <li  class=\"configure-database\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Database Configuration</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"create-admin\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Admin Details</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"install\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Installation</p></li>
            </ul>
        </script>

        <script id=\"installationWizard-DefaultContentTemplate\" type=\"text/template\">
            <div id=\"start-installation\">
                <h2>Welcome</h2>
                <p>Welcome to the helpdesk installation wizard</p>
                <p>This wizard will help guide you in setting up the UVDesk Community Edition on your system.</p>

                <ul class=\"button-groups\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">LET'S BEGIN</button></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SetupTemplate\" type=\"text/template\">
            <div id=\"wizardSetup\"></div>
            
            <ul id=\"wizardSetupNavigation\" class=\"button-groups\">
                <li><button id=\"wizardCTA-IterateBackward\" class=\"wizard-button solid button-theme-uvdesk\"><span>Back<span></button></li>
                <li><button id=\"wizardCTA-IterateInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Proceed<span></button></li>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPVersion\" type=\"text/template\">
            <div class=\"version-info-container\">
                <span class=\"wizard-svg-icon-criteria-checklist\"></span><label class=\"version-criteria-label\"></label>
                <span class=\"PHPVersion-toggle-details\">Show details</span>
            </div>
            <div class=\"systemCriteria-Details\">
                <span id=\"systemCriteria-PHPVersion-Details\"></span>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPExtensions\" type=\"text/template\">
            <div class=\"extension-info-container\">
                <span class=\"wizard-svg-icon-extension-criteria-checklist\"></span><label class=\"extension-criteria-label\"></label>
                <span class=\"PHPExtensions-toggle-details\">Show details</span>
            </div>
            <div class=\"systemCriteria-Details\">
                <ul id=\"systemCriteria-PHPExtensions-Details\">
                    <li id=\"imap-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"imap-label\"></label>
                    </li>

                    <li id=\"mailparse-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"mailparse-label\"></label>
                    </li>

                    <li id=\"mysqli-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"mysqli-label\"></label>
                    </li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate\" type=\"text/template\">
            <div id=\"wizard-systemRequirements\">
                <h2> System Requirements</h2>
                <p>The wizard will check whether your system meets the minimum requirements to successfully run the application.</p>
                
                <ul class=\"criteria-checklist\">
                    <span style=\"color: #6F6F6F !important;\">Required</span>
                    <li id=\"systemCriteria-PHPVersion\" class=\"fetching-details\"></li>
                    <li id=\"systemCriteria-PHPExtensions\" class=\"fetching-details\"></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-DatabaseConfigurationTemplate\" type=\"text/template\">
           <div id=\"wizard-configureDatabase\">
                <h2>Database Configuration</h2>
                <p>The wizard will check your MySQL database connection for any issues and configure it with your application.</p>


                <form name=\"wizardForm-ConfigureDatabase\" class=\"database-integration wizard-form\" method=\"post\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Server<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"serverName\" type=\"text\" value=\"<%- credentials.serverName %>\" placeholder=\"127.0.0.1\" />
                            <p class=\"wizard-form-info\">Server name of the database (where it is hosted).</p>
                        </div>
                    </div>

                     <div class=\"form-field\">
                        <label class=\"form-label\">Port</label>
                        <div class=\"form-content\">
                            <input name=\"serverPort\" type=\"text\" value=\"<%- credentials.serverPort %>\" placeholder=\"3306\" />
                            <p class=\"wizard-form-info\">Port number of the database (on which port database is hosted).</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Username<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"username\" type=\"text\" value=\"<%- credentials.username %>\" placeholder=\"root\" />
                            <p class=\"wizard-form-info\">Username to use when connecting to the database.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" value=\"\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Password to use when connecting to the database.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Database<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"database\" type=\"text\" value=\"<%- credentials.database %>\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Name of the database/schema</p>
                        </div>
                    </div>

                    <div class=\"form-field checkbox-form-field\">
                        <label class=\"form-label\"></label>
                        <div class=\"form-content\">
                            <div class=\"checkbox\">
                                <input id=\"createDatabase\" name=\"createDatabase\" type=\"checkbox\" <%= credentials.createDatabase == 1 ? \"checked\" : \"\" %>  />
                                <label for=\"createDatabase\" class=\"checkbox-info\">Automatically create database if not found?</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-AccountConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureAccount\">
                <h2>Create Super Admin Account</h2>
                <p>The wizard will create a default super admin account that can be used to access your application's backend.</p>

                

                <form name=\"wizardForm-ConfigureAccount\" method=\"post\" class=\"ConfigureAccount wizard-form\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Name<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"name\" type=\"text\" value=\"<%- user.name %>\"  id=\"name\" placeholder=\"Name\" />
                            <p class=\"wizard-form-info\">Name of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Email<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"email\" type=\"text\" value=\"<%- user.email %>\" placeholder=\"Email\" />
                            <p class=\"wizard-form-info\">Email of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" id=\"password\" placeholder=\"Password\" />
                            <p class=\"wizard-form-info\">Password to use when authenticating user.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Confirm Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"confirm_password\" type=\"password\" value=\"<%- user.confirmPassword %>\" id=\"confirm_password\" placeholder=\"Confirm Password\" />
                            <p class=\"wizard-form-info\">Confirm the entered user password.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-WebsiteConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureWebsite\">
                <h2>Website Configuration</h2>
                 <form name=\"wizardForm-ConfigureWebsite\" method=\"post\" action=\"\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Member Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"memeberUrlPrefix\" type=\"text\" value=\"<%- member_panel_url %>\" placeholder=\"member\" class=\"form-content\"/>
                        </div>
                    </div>
                    <div class=\"form-field\">
                        <label class=\"form-label\">Customer Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"customerUrlPrefix\" type=\"text\" value=\"<%- customer_panel_url %>\" placeholder=\"customer\" class=\"form-content\"/>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-InstallationCompleteTemplate\" type=\"text/template\">
            <div id=\"wizardSetupComplete\">
                
                <h2>Congratulation</h2>
                <p>Your UVDesk has been installed successfully.</p>
\t\t\t\t<div class=\"line-break\"></div>
                <p style=\"color: #6F6F6F;\">Visit your support page</p>
                <h5 style=\"padding: 15px 0px 15px 0px;\">Admin</h5>
    \t\t\t<a href=\"<%- prefixCollecton.member %>\" target=\"_blank\" id=\"member_panel_url\" target=\"_blank\" id=\"member_panel_url\" style=\"\">Admin Panel</a>
    \t\t\t<h5 style=\"padding: 15px 0px 15px 0px\">Frontend</h5>
    \t\t\t<a href=\"<%- prefixCollecton.knowledgebase %>\" target=\"_blank\" id=\"customer_panel_url\" target=\"_blank\" id=\"customer_panel_url\">Knowledgebase</a>
               
            </div>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate-ProcessingItem\" type=\"text/template\">
            <h2>Installation</h2>
            <p>Please wait while your helpdesk is being installed. This could take up to a few minutes.</p>
            <div class=\"lg-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"90\" height=\"90\" viewBox=\"0 0 90 90\" >
                    <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M29.456,44.342a15.078,15.078,0,0,1,4.773-11A15.223,15.223,0,0,1,45.4,28.886,15.647,15.647,0,0,1,60.887,44.712a15.08,15.08,0,0,1-4.773,11,15.221,15.221,0,0,1-11.173,4.457A15.119,15.119,0,0,1,33.9,55.45,14.977,14.977,0,0,1,29.456,44.342ZM78.7,44.922a33.958,33.958,0,0,0-.145-4.382l9.537-7.188q1.479-1.024.462-2.915L79.77,14.9a2.043,2.043,0,0,0-2.712-.866l-11.17,4.249a34.492,34.492,0,0,0-7.479-4.468l-1.5-11.7a2.039,2.039,0,0,0-2.068-1.9L36.817,0a2.05,2.05,0,0,0-2.123,1.852L32.845,13.512A38.1,38.1,0,0,0,25.237,17.8L14.2,13.292a2.051,2.051,0,0,0-2.736.8L2.222,29.421q-1.079,1.865.376,2.925l9.321,7.41a33.43,33.43,0,0,0-.274,4.377,33.305,33.305,0,0,0,.145,4.382L2.253,55.7q-1.484,1.029-.462,2.915l8.782,15.539a2.039,2.039,0,0,0,2.712.866l11.17-4.249a34.072,34.072,0,0,0,7.479,4.468l1.5,11.7a2.035,2.035,0,0,0,2.068,1.9l18.02,0.212A2.054,2.054,0,0,0,55.649,87.2L57.5,75.543a38.1,38.1,0,0,0,7.608-4.291l11.041,4.51a2.049,2.049,0,0,0,2.736-.8l9.238-15.326q1.074-1.865-.376-2.925L78.423,49.3A33.885,33.885,0,0,0,78.7,44.922Z\"></path>
                    </svg>
            </div>
            <div class=\"sm-icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\" viewBox=\"0 0 90 90\" class=\"small-svg\">
                        <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M29.456,44.342a15.078,15.078,0,0,1,4.773-11A15.223,15.223,0,0,1,45.4,28.886,15.647,15.647,0,0,1,60.887,44.712a15.08,15.08,0,0,1-4.773,11,15.221,15.221,0,0,1-11.173,4.457A15.119,15.119,0,0,1,33.9,55.45,14.977,14.977,0,0,1,29.456,44.342ZM78.7,44.922a33.958,33.958,0,0,0-.145-4.382l9.537-7.188q1.479-1.024.462-2.915L79.77,14.9a2.043,2.043,0,0,0-2.712-.866l-11.17,4.249a34.492,34.492,0,0,0-7.479-4.468l-1.5-11.7a2.039,2.039,0,0,0-2.068-1.9L36.817,0a2.05,2.05,0,0,0-2.123,1.852L32.845,13.512A38.1,38.1,0,0,0,25.237,17.8L14.2,13.292a2.051,2.051,0,0,0-2.736.8L2.222,29.421q-1.079,1.865.376,2.925l9.321,7.41a33.43,33.43,0,0,0-.274,4.377,33.305,33.305,0,0,0,.145,4.382L2.253,55.7q-1.484,1.029-.462,2.915l8.782,15.539a2.039,2.039,0,0,0,2.712.866l11.17-4.249a34.072,34.072,0,0,0,7.479,4.468l1.5,11.7a2.035,2.035,0,0,0,2.068,1.9l18.02,0.212A2.054,2.054,0,0,0,55.649,87.2L57.5,75.543a38.1,38.1,0,0,0,7.608-4.291l11.041,4.51a2.049,2.049,0,0,0,2.736-.8l9.238-15.326q1.074-1.865-.376-2.925L78.423,49.3A33.885,33.885,0,0,0,78.7,44.922Z\"></path>
                        </svg>
            </div>
           
            <span id=\"error-message-bar\" style=\"color:#FF0000\"></span>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate\" type=\"text/template\">
            <div id=\"wizard-finalizeInstall\">
                <p>Your UVDesk Community Helpdesk is ready to be installed.</p>

                <ul class=\"button-groups\" style=\"margin-top: 20px;\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Install Now</button></li>
                </ul>
            </div>
        </script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "installation-wizard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 57,  111 => 54,  74 => 20,  68 => 16,  63 => 13,  58 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>Truedesk Helpdesk Community Edition - Installation Wizard</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"{{ asset('favicon.ico') }}\" />

        {# Stylesheets #}
        <link href=\"{{ asset('css/reset.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"{{ asset('css/wizard.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

        {# Scripts #}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.7.1/backbone-validation-min.js\"></script>
        <script src=\"{{ asset('scripts/wizard.js') }}\"></script>
    </head>
    <body>
        <div id=\"wizard\">
            <header id=\"wizardHeader\" class=\"wizard-box-lt\"></header>
            <section id=\"wizardContent\" class=\"wizard-box-rt\"></section>
        </div>

        <script id=\"wizardIcons-LoaderTemplate\" type=\"text/template\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"1em\" height=\"1em\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
                <path opacity=\"0.8\" fill=\"#9161ff\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\" />
                <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z\" >
                    <animateTransform attributeType=\"xml\" attributeName=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatCount=\"indefinite\" />
                </path>
            </svg>
        </script>

        <script id=\"wizardIcons-SuccessTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.4em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"icon-success\" class=\"cls-1\" fill=\"#2ED143\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>

        <script id=\"wizardIcons-NoticeTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"error-icon\" class=\"cls-1\" fill=\"#ff5656\" fill-rule=\"evenodd\" d=\"M764.5,352A10.5,10.5,0,1,1,754,362.5,10.5,10.5,0,0,1,764.5,352Zm-0.006,12.988a1.506,1.506,0,1,1-1.5,1.506A1.5,1.5,0,0,1,764.494,364.988ZM763,356h3v8h-3v-8Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>
        
        <script id=\"installationWizard-DefaultHeaderTemplate\" type=\"text/template\">
            <div class=\"uvdesk-logo\">
\t\t\t<ul class=\"progress-bar titlelogos\">
\t\t\tTruedesk
\t\t\t</ul>
               <img src=\"{{asset('images/mlzs_logo.png')}}\" title=\"my image\" class=\"imglogos\" alt=\"My image\">
            </div>
            
            <p class=\"uv-version\">Version {{ version }}</p>
            <ul class=\"progress-bar\">
                <li class=\"welcome active-node\"><div class=\"node \"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Welcome</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"check-requirements\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>System Requirements</p></li>
                <li><div class=\"divider \"></div></li>
                <li  class=\"configure-database\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Database Configuration</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"create-admin\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Admin Details</p></li>
                <li><div class=\"divider \"></div></li>
                <li class=\"install\"><div class=\"node\"><div class=\"outer-circle\"></div><div class=\"inner-circle\"></div></div><p>Installation</p></li>
            </ul>
        </script>

        <script id=\"installationWizard-DefaultContentTemplate\" type=\"text/template\">
            <div id=\"start-installation\">
                <h2>Welcome</h2>
                <p>Welcome to the helpdesk installation wizard</p>
                <p>This wizard will help guide you in setting up the UVDesk Community Edition on your system.</p>

                <ul class=\"button-groups\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">LET'S BEGIN</button></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SetupTemplate\" type=\"text/template\">
            <div id=\"wizardSetup\"></div>
            
            <ul id=\"wizardSetupNavigation\" class=\"button-groups\">
                <li><button id=\"wizardCTA-IterateBackward\" class=\"wizard-button solid button-theme-uvdesk\"><span>Back<span></button></li>
                <li><button id=\"wizardCTA-IterateInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Proceed<span></button></li>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPVersion\" type=\"text/template\">
            <div class=\"version-info-container\">
                <span class=\"wizard-svg-icon-criteria-checklist\"></span><label class=\"version-criteria-label\"></label>
                <span class=\"PHPVersion-toggle-details\">Show details</span>
            </div>
            <div class=\"systemCriteria-Details\">
                <span id=\"systemCriteria-PHPVersion-Details\"></span>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPExtensions\" type=\"text/template\">
            <div class=\"extension-info-container\">
                <span class=\"wizard-svg-icon-extension-criteria-checklist\"></span><label class=\"extension-criteria-label\"></label>
                <span class=\"PHPExtensions-toggle-details\">Show details</span>
            </div>
            <div class=\"systemCriteria-Details\">
                <ul id=\"systemCriteria-PHPExtensions-Details\">
                    <li id=\"imap-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"imap-label\"></label>
                    </li>

                    <li id=\"mailparse-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"mailparse-label\"></label>
                    </li>

                    <li id=\"mysqli-info\" class=\"fetching-details\">
                        <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                        <label id=\"mysqli-label\"></label>
                    </li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate\" type=\"text/template\">
            <div id=\"wizard-systemRequirements\">
                <h2> System Requirements</h2>
                <p>The wizard will check whether your system meets the minimum requirements to successfully run the application.</p>
                
                <ul class=\"criteria-checklist\">
                    <span style=\"color: #6F6F6F !important;\">Required</span>
                    <li id=\"systemCriteria-PHPVersion\" class=\"fetching-details\"></li>
                    <li id=\"systemCriteria-PHPExtensions\" class=\"fetching-details\"></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-DatabaseConfigurationTemplate\" type=\"text/template\">
           <div id=\"wizard-configureDatabase\">
                <h2>Database Configuration</h2>
                <p>The wizard will check your MySQL database connection for any issues and configure it with your application.</p>


                <form name=\"wizardForm-ConfigureDatabase\" class=\"database-integration wizard-form\" method=\"post\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Server<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"serverName\" type=\"text\" value=\"<%- credentials.serverName %>\" placeholder=\"127.0.0.1\" />
                            <p class=\"wizard-form-info\">Server name of the database (where it is hosted).</p>
                        </div>
                    </div>

                     <div class=\"form-field\">
                        <label class=\"form-label\">Port</label>
                        <div class=\"form-content\">
                            <input name=\"serverPort\" type=\"text\" value=\"<%- credentials.serverPort %>\" placeholder=\"3306\" />
                            <p class=\"wizard-form-info\">Port number of the database (on which port database is hosted).</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Username<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"username\" type=\"text\" value=\"<%- credentials.username %>\" placeholder=\"root\" />
                            <p class=\"wizard-form-info\">Username to use when connecting to the database.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" value=\"\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Password to use when connecting to the database.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Database<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"database\" type=\"text\" value=\"<%- credentials.database %>\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Name of the database/schema</p>
                        </div>
                    </div>

                    <div class=\"form-field checkbox-form-field\">
                        <label class=\"form-label\"></label>
                        <div class=\"form-content\">
                            <div class=\"checkbox\">
                                <input id=\"createDatabase\" name=\"createDatabase\" type=\"checkbox\" <%= credentials.createDatabase == 1 ? \"checked\" : \"\" %>  />
                                <label for=\"createDatabase\" class=\"checkbox-info\">Automatically create database if not found?</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-AccountConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureAccount\">
                <h2>Create Super Admin Account</h2>
                <p>The wizard will create a default super admin account that can be used to access your application's backend.</p>

                

                <form name=\"wizardForm-ConfigureAccount\" method=\"post\" class=\"ConfigureAccount wizard-form\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Name<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"name\" type=\"text\" value=\"<%- user.name %>\"  id=\"name\" placeholder=\"Name\" />
                            <p class=\"wizard-form-info\">Name of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Email<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"email\" type=\"text\" value=\"<%- user.email %>\" placeholder=\"Email\" />
                            <p class=\"wizard-form-info\">Email of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" id=\"password\" placeholder=\"Password\" />
                            <p class=\"wizard-form-info\">Password to use when authenticating user.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Confirm Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"confirm_password\" type=\"password\" value=\"<%- user.confirmPassword %>\" id=\"confirm_password\" placeholder=\"Confirm Password\" />
                            <p class=\"wizard-form-info\">Confirm the entered user password.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-WebsiteConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureWebsite\">
                <h2>Website Configuration</h2>
                 <form name=\"wizardForm-ConfigureWebsite\" method=\"post\" action=\"\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Member Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"memeberUrlPrefix\" type=\"text\" value=\"<%- member_panel_url %>\" placeholder=\"member\" class=\"form-content\"/>
                        </div>
                    </div>
                    <div class=\"form-field\">
                        <label class=\"form-label\">Customer Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"customerUrlPrefix\" type=\"text\" value=\"<%- customer_panel_url %>\" placeholder=\"customer\" class=\"form-content\"/>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-InstallationCompleteTemplate\" type=\"text/template\">
            <div id=\"wizardSetupComplete\">
                
                <h2>Congratulation</h2>
                <p>Your UVDesk has been installed successfully.</p>
\t\t\t\t<div class=\"line-break\"></div>
                <p style=\"color: #6F6F6F;\">Visit your support page</p>
                <h5 style=\"padding: 15px 0px 15px 0px;\">Admin</h5>
    \t\t\t<a href=\"<%- prefixCollecton.member %>\" target=\"_blank\" id=\"member_panel_url\" target=\"_blank\" id=\"member_panel_url\" style=\"\">Admin Panel</a>
    \t\t\t<h5 style=\"padding: 15px 0px 15px 0px\">Frontend</h5>
    \t\t\t<a href=\"<%- prefixCollecton.knowledgebase %>\" target=\"_blank\" id=\"customer_panel_url\" target=\"_blank\" id=\"customer_panel_url\">Knowledgebase</a>
               
            </div>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate-ProcessingItem\" type=\"text/template\">
            <h2>Installation</h2>
            <p>Please wait while your helpdesk is being installed. This could take up to a few minutes.</p>
            <div class=\"lg-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"90\" height=\"90\" viewBox=\"0 0 90 90\" >
                    <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M29.456,44.342a15.078,15.078,0,0,1,4.773-11A15.223,15.223,0,0,1,45.4,28.886,15.647,15.647,0,0,1,60.887,44.712a15.08,15.08,0,0,1-4.773,11,15.221,15.221,0,0,1-11.173,4.457A15.119,15.119,0,0,1,33.9,55.45,14.977,14.977,0,0,1,29.456,44.342ZM78.7,44.922a33.958,33.958,0,0,0-.145-4.382l9.537-7.188q1.479-1.024.462-2.915L79.77,14.9a2.043,2.043,0,0,0-2.712-.866l-11.17,4.249a34.492,34.492,0,0,0-7.479-4.468l-1.5-11.7a2.039,2.039,0,0,0-2.068-1.9L36.817,0a2.05,2.05,0,0,0-2.123,1.852L32.845,13.512A38.1,38.1,0,0,0,25.237,17.8L14.2,13.292a2.051,2.051,0,0,0-2.736.8L2.222,29.421q-1.079,1.865.376,2.925l9.321,7.41a33.43,33.43,0,0,0-.274,4.377,33.305,33.305,0,0,0,.145,4.382L2.253,55.7q-1.484,1.029-.462,2.915l8.782,15.539a2.039,2.039,0,0,0,2.712.866l11.17-4.249a34.072,34.072,0,0,0,7.479,4.468l1.5,11.7a2.035,2.035,0,0,0,2.068,1.9l18.02,0.212A2.054,2.054,0,0,0,55.649,87.2L57.5,75.543a38.1,38.1,0,0,0,7.608-4.291l11.041,4.51a2.049,2.049,0,0,0,2.736-.8l9.238-15.326q1.074-1.865-.376-2.925L78.423,49.3A33.885,33.885,0,0,0,78.7,44.922Z\"></path>
                    </svg>
            </div>
            <div class=\"sm-icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\" viewBox=\"0 0 90 90\" class=\"small-svg\">
                        <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M29.456,44.342a15.078,15.078,0,0,1,4.773-11A15.223,15.223,0,0,1,45.4,28.886,15.647,15.647,0,0,1,60.887,44.712a15.08,15.08,0,0,1-4.773,11,15.221,15.221,0,0,1-11.173,4.457A15.119,15.119,0,0,1,33.9,55.45,14.977,14.977,0,0,1,29.456,44.342ZM78.7,44.922a33.958,33.958,0,0,0-.145-4.382l9.537-7.188q1.479-1.024.462-2.915L79.77,14.9a2.043,2.043,0,0,0-2.712-.866l-11.17,4.249a34.492,34.492,0,0,0-7.479-4.468l-1.5-11.7a2.039,2.039,0,0,0-2.068-1.9L36.817,0a2.05,2.05,0,0,0-2.123,1.852L32.845,13.512A38.1,38.1,0,0,0,25.237,17.8L14.2,13.292a2.051,2.051,0,0,0-2.736.8L2.222,29.421q-1.079,1.865.376,2.925l9.321,7.41a33.43,33.43,0,0,0-.274,4.377,33.305,33.305,0,0,0,.145,4.382L2.253,55.7q-1.484,1.029-.462,2.915l8.782,15.539a2.039,2.039,0,0,0,2.712.866l11.17-4.249a34.072,34.072,0,0,0,7.479,4.468l1.5,11.7a2.035,2.035,0,0,0,2.068,1.9l18.02,0.212A2.054,2.054,0,0,0,55.649,87.2L57.5,75.543a38.1,38.1,0,0,0,7.608-4.291l11.041,4.51a2.049,2.049,0,0,0,2.736-.8l9.238-15.326q1.074-1.865-.376-2.925L78.423,49.3A33.885,33.885,0,0,0,78.7,44.922Z\"></path>
                        </svg>
            </div>
           
            <span id=\"error-message-bar\" style=\"color:#FF0000\"></span>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate\" type=\"text/template\">
            <div id=\"wizard-finalizeInstall\">
                <p>Your UVDesk Community Helpdesk is ready to be installed.</p>

                <ul class=\"button-groups\" style=\"margin-top: 20px;\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Install Now</button></li>
                </ul>
            </div>
        </script>
    </body>
</html>", "installation-wizard/index.html.twig", "C:\\xampp\\htdocs\\truedesk\\templates\\installation-wizard\\index.html.twig");
    }
}
