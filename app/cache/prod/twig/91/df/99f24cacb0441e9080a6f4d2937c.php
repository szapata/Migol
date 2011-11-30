<?php

/* MigolCommonPagesBundle:Default:index.html.twig */
class __TwigTemplate_91df99f24cacb0441e9080a6f4d2937c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Worldmap bg -->
<div class=\"index-worldmap-bg\">
    <div class=\"row margin-top-topbar\">
        <!-- Logo and Slogan -->
        <div class=\"span10\">
            <div class=\"row margin-top-standard\">
                <div class=\"span10\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/logos/official_logo_elegido_small.png"), "html");
        echo "\" alt=\"Migol\" />   
                </div>
            </div>
            <div class=\"row margin-top-standard\">  
                <div class=\"span10\">
                    <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.title"), "html");
        echo "<br/><small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.slogan"), "html");
        echo "</small></h1>
                </div>
            </div>

        </div>
        <!-- End Logo and Slogan -->

        <!-- Login Box -->
        <div class=\"span6\">
            <div class=\"row margin-top-standard\">
                <div class=\"span6 white-transparent-box\">
                    <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html");
        echo "\" method=\"post\" class=\"form-stacked\">
                    <div class=\"modal-header\">
                        <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin"), "html");
        echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        <p>
                            <label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html");
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
                        </p>
                        <p>
                            <label for=\"password\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html");
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" />
                        </p>
                        <p>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html");
        echo "</span>

                        </p>
                    </div>
                    <div class=\"modal-footer\">
                        <p>
                            <a href=\"#\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.password.lost"), "html");
        echo "</a>
                            <input class=\"btn success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin"), "html");
        echo "\" />
                            
                        </p> 
                        <p><br/><a href=\"#\" class=\"btn facebook\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup.facebook.connect"), "html");
        echo "</a></p>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Login Box -->
    </div>
    <!-- Register Action -->
    <div class=\"row margin-top-standard\">
        <div class=\"span10\">
            <p><span class=\"label important\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.watch"), "html");
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.learnmore"), "html");
        echo " 
                <a href=\"#\" data-controls-modal=\"tour\" data-keyboard=\"true\" data-backdrop=\"true\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.learnmore.link"), "html");
        echo "</a>
            </p>
        </div>
        <div class=\"span6\">
            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_user_registration_register"), "html");
        echo "\" class=\"btn superlarge orange\"><em>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup"), "html");
        echo "</em></a>
        </div>
    </div>
    <!-- End Register Action -->

    <!-- Tour -->
    <div id=\"tour\" class=\"modal hide fade in\">
        <div class=\"modal-header\">
            <a href=\"#\" class=\"close\">x</a>
            <h3>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.learnmore.title"), "html");
        echo "</h3>
        </div>
        <div class=\"modal-body\" id=\"video-tour\">
            <object class=\"center-block\" style=\"height: 300px; width: 400px\"><param name=\"movie\" value=\"http://www.youtube.com/v/OYYDfK6rXMQ?version=3\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/OYYDfK6rXMQ?version=3\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"400\" height=\"300\"></object>
        </div>
        <div class=\"modal-footer\">
            <span class=\"help-block\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.scape.toclose"), "html");
        echo "</span>
        </div>
    </div>
    <!-- End Tour -->

    <!-- Select Zone -->
    <div class=\"row margin-top-standard\">
        <div class=\"span16 black-transparent-box\">
            <div class=\"padding-top-half padding-left-half\">
                <p class=\"white-text\"><strong><em>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.zone"), "html");
        echo "</em></strong></p>
                <p><strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.zone"), "html");
        echo "</strong></p>
            </div>
        </div>
    </div>
    <!-- End Select Zone -->
    </div>
<!-- End WorlMap bg -->
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
