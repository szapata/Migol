<?php

/* MigolCommonPagesBundle:Private:3colsLayout.html.twig */
class __TwigTemplate_8b35abb5c5fc62708adb2f4de8d5687a extends Twig_Template
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
            'thirdCol' => array($this, 'block_thirdCol'),
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

    // line 6
    public function block_bodyclass($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "        <!-- Navigation Top Bar -->
        ";
        // line 9
        echo $this->env->getExtension('actions')->renderAction("MigolCommonPagesBundle:GlobalBlocks:topNavBar", array(), array());
        // line 10
        echo "        <!-- End Navigation Top Bar -->
";
    }

    // line 18
    public function block_firstCol($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->env->loadTemplate("MigolCommonPagesBundle:Private:photo.html.twig")->display($context);
        // line 20
        echo "                ";
        $this->env->loadTemplate("MigolCommonPagesBundle:Private:menu.html.twig")->display($context);
        // line 21
        echo "            ";
    }

    // line 30
    public function block_secondCol($context, array $blocks = array())
    {
        // line 31
        echo "                
            ";
    }

    // line 40
    public function block_thirdCol($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"row margin-top-topbar\">
    <!-- 1st Column -->
    <div class=\"span4\">
        
            ";
        // line 18
        $this->displayBlock('firstCol', $context, $blocks);
        // line 22
        echo "        
    
    </div>
    <!-- End 1st Column -->
    
    <!-- 2nd Column -->
    <div class=\"span9\">
        <div class=\"row margin-top-logo center-column-content\">
            ";
        // line 30
        $this->displayBlock('secondCol', $context, $blocks);
        // line 33
        echo "        </div>
    </div>
    <!-- End 2nd Column -->
    
    <!-- 3th Column -->
    <div class=\"span4\">
        <div class=\"row margin-top-logo\">
            ";
        // line 40
        $this->displayBlock('thirdCol', $context, $blocks);
        // line 41
        echo "        </div>
    </div>
    <!-- End 3th Column -->
</div>
";
    }

    public function getTemplateName()
    {
        return "MigolCommonPagesBundle:Private:3colsLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
