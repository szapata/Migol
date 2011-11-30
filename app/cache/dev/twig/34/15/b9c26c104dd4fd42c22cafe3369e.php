<?php

/* MigolCommonPagesBundle:Private:privateTopNavBar.html.twig */
class __TwigTemplate_3415b9c26c104dd4fd42c22cafe3369e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"topbar-wrapper\" style=\"z-index: 5;\">
    <div class=\"topbar\" data-dropdown=\"dropdown\">
        <div class=\"topbar-inner\">
            <div class=\"container\">
                <ul class=\"nav secondary-nav\">
                    <!--li><a href=\"#\"><span class=\"icon-notifications-unactive\"></span></a></li-->
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false), "html");
        echo "</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit.profile"), "html");
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("edit.account"), "html");
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("help"), "html");
        echo "</a></li>  
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_user_security_logout"), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("signout"), "html");
        echo "</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"header margin-top-topbar\">
    <div class=\"container\">
        <div class=\"row margin-top-standard\">
            <!-- Logo, home button and search -->
            <div class=\"span4\">
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_homepage"), "html");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.backhome"), "html");
        echo "\" rel=\"twipsy\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/logos/official_logo_elegido_smallest.png"), "html");
        echo "\" alt=\"Migol\" />
                </a>
            </div>
            <div class=\"span11 offset1\">
              <form action=\"\">
                <input type=\"text\" class=\"span6\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.placeholder"), "html");
        echo "\"/>
                <button type=\"submit\" class=\"btn\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search"), "html");
        echo "</button>
                <span class=\"help-inline\"><a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("advanced.search"), "html");
        echo "</a></span>
              </form>
            </div>
            <!-- End Logo, home button and search -->
        </div>
        
    </div>
</div>
<div class=\"loading text-align-center hidden span8 offset4 alert-message block-message warning\" id=\"loading\">
    <span></span>
    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/gifs/loading.gif"), "html");
        echo "\" width=\"10\" height=\"10\"/>            
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:privateTopNavBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
