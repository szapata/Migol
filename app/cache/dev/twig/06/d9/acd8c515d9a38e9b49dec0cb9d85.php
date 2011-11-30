<?php

/* MigolCommonPagesBundle:Private:2colsLayout.html.twig */
class __TwigTemplate_06d9acd8c515d9a38e9b49dec0cb9d85 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'header' => array($this, 'block_header'),
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
    <script>
            \$(function () {
              \$(\"a[rel=twipsy]\").twipsy({
                live: true,
                placement: 'below'
              });
              
            });
    </script>
";
    }

    // line 15
    public function block_bodyclass($context, array $blocks = array())
    {
        echo " ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "        <!-- Navigation Top Bar -->
        ";
        // line 18
        $this->env->loadTemplate("MigolCommonPagesBundle:Private:privateTopNavBar.html.twig")->display($context);
        // line 19
        echo "        <!-- End Navigation Top Bar -->
";
    }

    // line 27
    public function block_firstCol($context, array $blocks = array())
    {
        // line 28
        echo "                
            ";
    }

    // line 38
    public function block_secondCol($context, array $blocks = array())
    {
        // line 39
        echo "            <span>&LeftArrow;</span> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("MigolCommonPagesBundle_homepage"), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.backhome"), "html");
        echo "</a>
                
            ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
<div class=\"row margin-top-topbar\">
    <!-- 1st Column -->
    <div class=\"span4\">
        
            ";
        // line 27
        $this->displayBlock('firstCol', $context, $blocks);
        // line 30
        echo "        
    
    </div>
    <!-- End 1st Column -->
    
    <!-- 2nd Column -->
    <div class=\"span12\">
        <div class=\"row margin-top-logo center-column-content\">
            ";
        // line 38
        $this->displayBlock('secondCol', $context, $blocks);
        // line 42
        echo "        </div>
    </div>
    <!-- End 2nd Column -->
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:2colsLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
