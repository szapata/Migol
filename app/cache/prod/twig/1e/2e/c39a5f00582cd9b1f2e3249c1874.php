<?php

/* MigolCommonPagesBundle::2colsRightLayout.html.twig */
class __TwigTemplate_1e2ec39a5f00582cd9b1f2e3249c1874 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'firstCol' => array($this, 'block_firstCol'),
            'secondCol' => array($this, 'block_secondCol'),
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
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_firstCol($context, array $blocks = array())
    {
        // line 14
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_homepage"), "html");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.title"), "html");
        echo "\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/migolcommonpages/images/logos/official_logo_elegido_small.png"), "html");
        echo "\" alt=\"Migol\" />
                </a>
                <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.title"), "html");
        echo "</h3>
                <p><em>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signup.start.enjoy"), "html");
        echo "</em></p>
            ";
    }

    // line 28
    public function block_secondCol($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row margin-top-topbar\">
    <!-- 1st Column -->
    <div class=\"span6\">
        <div class=\"row margin-top-double\">
            ";
        // line 13
        $this->displayBlock('firstCol', $context, $blocks);
        // line 20
        echo "        </div>
    
    </div>
    <!-- End 1st Column -->
    
    <!-- 2nd Column -->
    <div class=\"span10\">
        <div class=\"row margin-top-double\">
            ";
        // line 28
        $this->displayBlock('secondCol', $context, $blocks);
        // line 29
        echo "        </div>
    </div>
    <!-- End 2nd Column -->
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle::2colsRightLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
