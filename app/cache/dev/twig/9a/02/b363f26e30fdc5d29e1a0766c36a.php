<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9a02b363f26e30fdc5d29e1a0766c36a extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'secondCol' => array($this, 'block_secondCol'),
            'thirdCol' => array($this, 'block_thirdCol'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "MigolCommonPagesBundle::3colsLayout.html.twig";
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

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->renderParentBlock("scripts", $context, $blocks);
        echo "
    <script>
            \$(function () {
              \$(\"a[rel=twipsy]\").twipsy({
                live: true,
                placement: 'below'
              })
            })
    </script>
";
    }

    // line 13
    public function block_secondCol($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getContext($context, 'error')) {
            // line 15
            echo "        <div class=\"alert-message fade in error\" data-alert=\"alert\">
             <a class=\"close\" href=\"#\">×</a>
             <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
            echo "</p>
        </div>
    ";
        }
        // line 20
        echo "    <div class=\"white-transparent-box padding-left-standard padding-top-half\">
        <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin"), "html");
        echo "</h1>
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html");
        echo "\" method=\"post\" class=\"form-stacked\">
            <p>
                <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html");
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
            </p>

            <p>
                <label for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html");
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            </p>

            <p>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html");
        echo "</span>
            </p>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html");
        echo "\" class=\"btn success\"/>
        </form>
    </div>
    
    <div class=\"alert-message block-message warning margin-top-standard\">
        <h4>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.facebook"), "html");
        echo "</h4>
        <p><a href=\"#\" class=\"btn facebook superlarge\"><span class=\"icon-facebook\"></span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin"), "html");
        echo "</a></p>
        
    </div>
";
    }

    // line 48
    public function block_thirdCol($context, array $blocks = array())
    {
        // line 49
        echo "<div class=\"span4\">
    <p><span class=\"icon-padlock-small\"></span><small><a href=\"#\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.password.lost"), "html");
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.or.maybe.your"), "html");
        echo " <a href=\"#\" rel=\"twipsy\" data-original-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.forget.try.with.username"), "html");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("public.signin.forget.username"), "html");
        echo "</a></small></p>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
