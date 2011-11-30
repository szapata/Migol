<?php

/* MigolCommonPagesBundle:Private:photo.html.twig */
class __TwigTemplate_eed1d11faeb03c87ffcc42a6199a25a4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"row margin-top-logo\">
    <div class=\"span4 margin-top-standard profile-photo\">     
            <img src=\"//lh6.googleusercontent.com/-h2ItMrLEMww/AAAAAAAAAAI/AAAAAAAAAx0/qRp2UhNuryU/photo.jpg?sz=48\" alt=\"Foto del perfil de Salvador\"/>
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MigolUserBundle_showProfile", array("username" => $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false))), "html");
        echo "\">
            ";
        // line 5
        if (twig_test_empty($this->getAttribute($this->getContext($context, 'user'), "firstname", array(), "any", false))) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "username", array(), "any", false), "html");
            echo "
            ";
        } else {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "firstname", array(), "any", false), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "lastname", array(), "any", false), "html");
            echo "    
            ";
        }
        // line 10
        echo "            </a>  
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
