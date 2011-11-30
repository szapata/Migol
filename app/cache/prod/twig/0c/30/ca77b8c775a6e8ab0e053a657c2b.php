<?php

/* StyleBootstrapFormBundle:Form:fields.html.twig */
class __TwigTemplate_0c30ca77b8c775a6e8ab0e053a657c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
            'field_errors' => array($this, 'block_field_errors'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->displayBlock('field_row', $context, $blocks);
        // line 20
        echo "

";
        // line 22
        $this->displayBlock('field_label', $context, $blocks);
        // line 32
        echo "

";
        // line 34
        $this->displayBlock('field_errors', $context, $blocks);
        // line 45
        echo "

";
        // line 47
        $this->displayBlock('form_errors', $context, $blocks);
        // line 64
        echo "
";
    }

    // line 1
    public function block_field_row($context, array $blocks = array())
    {
        // line 2
        echo "  ";
        if ($this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'))) {
            // line 3
            echo "    ";
            $context['clase'] = "xlarge error";
            // line 4
            echo "    ";
            $context['caja'] = "clearfix error";
            // line 5
            echo "  ";
        } else {
            // line 6
            echo "    ";
            $context['clase'] = "xlarge";
            // line 7
            echo "    ";
            $context['caja'] = "clearfix";
            // line 8
            echo "  ";
        }
        // line 9
        echo "
  ";
        // line 10
        ob_start();
        // line 11
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'caja'), "html");
        echo "\">
      ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'));
        echo "
      <div class=\"input\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'), array("attr" => array("class" => $this->getContext($context, 'clase')), "empty_value" => "Seleccione..."));
        echo "
        <span class=\"help-inline\">";
        // line 15
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "</span>
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_field_label($context, array $blocks = array())
    {
        // line 23
        echo "  ";
        ob_start();
        // line 24
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'id'), array(), "FOSUserBundle"), "html");
        echo "
      ";
        // line 26
        if ($this->getContext($context, 'required')) {
            // line 27
            echo "        <span class=\"required\" titulo=\"Requerido\">*</span>
      ";
        }
        // line 29
        echo "    </label>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_field_errors($context, array $blocks = array())
    {
        // line 35
        ob_start();
        // line 36
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
            // line 37
            echo "    <ul class=\"error_list\">
        ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'errors'));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 39
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false), "FOSUserBundle"), "html");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_form_errors($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 49
        echo "  ";
        if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
            // line 50
            echo "    <div class=\"alert-message block-message error fade in\" data-alert=\"alert\">
      <a class=\"close\" href=\"#\">×</a>
      <p>
        <strong>Upss! Error. </strong>
          <ul class=\"error_list\">
            ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'errors'));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 56
                echo "              <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false), "FOSUserBundle"), "html");
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "          </ul>
      </p>
    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "StyleBootstrapFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
