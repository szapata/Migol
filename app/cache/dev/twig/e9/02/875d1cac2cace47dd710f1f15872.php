<?php

/* MigolCommonPagesBundle:Private:photoBig.html.twig */
class __TwigTemplate_e902875d1cac2cace47dd710f1f15872 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!-- Photo -->
<div class=\"row margin-top-logo\">
    <div class=\"span4 margin-top-standard profile-photo\">     
            <img src=\"//lh6.googleusercontent.com/-h2ItMrLEMww/AAAAAAAAAAI/AAAAAAAAAx0/qRp2UhNuryU/photo.jpg?sz=48\" alt=\"Foto del perfil de Salvador\" width=\"150\" height=\"150\"/> 
    </div>
    <!--div class=\"span4 margin-top-standard profile-photo\">     
        <a class=\"btn\" href=\"#\" id=\"sendmessage\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("send.message"), "html");
        echo "</a>
    </div-->
</div>

";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:photoBig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
