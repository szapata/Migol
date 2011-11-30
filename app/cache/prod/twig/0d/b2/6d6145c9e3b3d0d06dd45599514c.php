<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0db26d6145c9e3b3d0d06dd45599514c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'secondCol' => array($this, 'block_secondCol'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle::2colsRightLayout.html.twig";
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
    public function block_secondCol($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row white-transparent-box padding-top-standard\">
        <div class=\"span6\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup"), "html");
        echo "<br/>
                <small>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup.seconds"), "html");
        echo "</small>
            </h1>
            ";
        // line 10
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 11
        echo "        </div>
        <div class=\"span4\">
            <div class=\"alert-message block-message warning\">
                <h5>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.facebook"), "html");
        echo "</h5><br/>
                <a href=\"#\" class=\"btn facebook\"><span class=\"icon-facebook-small\"></span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup"), "html");
        echo "</a>
            </div>
        </div>
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
