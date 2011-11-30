<?php

/* MigolCommonPagesBundle::publicTopNavBar.html.twig */
class __TwigTemplate_76f738752ce9cc2ca8c7f48c5f6fe0b3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
<div class=\"topbar-wrapper\" style=\"z-index: 5;\">
    <div class=\"topbar\" data-dropdown=\"dropdown\">
        <div class=\"topbar-inner\">
            <div class=\"container\">
                <ul class=\"nav secondary-nav\">
                    <li><a href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.navigation.queesmigol"), "html");
        echo "</a></li>
                    <li><a href=\"#\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.navigation.faq"), "html");
        echo "</a></li>
                    <li><a href=\"#\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.navigation.contact"), "html");
        echo "</a></li>
                    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_user_registration_register"), "html");
        echo "\" class=\"yellow\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.navigation.signup"), "html");
        echo " &raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle::publicTopNavBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
