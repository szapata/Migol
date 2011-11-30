<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c12fdf8983e2e5498575debfa85eb23b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\">    
    <head>   
        ";
        // line 4
        $this->displayBlock('metas', $context, $blocks);
        // line 7
        echo "        
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "        
        ";
        // line 15
        $this->displayBlock('scripts', $context, $blocks);
        // line 24
        echo "
    </head>
    <body class=\"body-background\">
        <div class=\"container\">
        ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "        
        ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        
        ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_metas($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.title"), "html");
        echo " ";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        // line 11
        echo "        <!-- BOOTSTRAP -->
        <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/lib/bootstrap.less"), "html");
        echo "\"/>
        ";
    }

    // line 15
    public function block_scripts($context, array $blocks = array())
    {
        // line 16
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/lib/less-1.1.3.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/jquery-1.6.2.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/bootstrap-alerts.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/bootstrap-dropdown.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/bootstrap-twipsy.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/bootstrap-popover.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stylebootstrap/js/bootstrap-modal.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "        <!-- Navigation Top Bar -->
        ";
        // line 30
        $this->env->loadTemplate("MigolCommonPagesBundle::publicTopNavBar.html.twig")->display($context);
        // line 31
        echo "        <!-- End Navigation Top Bar -->
        ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        echo "    
        ";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
