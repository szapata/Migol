<?php

/* MigolBackendBundle:Skill:show.html.twig */
class __TwigTemplate_bd3ae158b3b867b1c3fa363f22ae50bd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Skill</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "name", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Forplayer</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "forplayer", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Formanager</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "formanager", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Fortrainer</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "fortrainer", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Forfan</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "forfan", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Formedic</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "formedic", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Foragent</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "foragent", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Forexecutive</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "forexecutive", array(), "any", false), "html");
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_migol_skill"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_migol_skill_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_migol_skill_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MigolBackendBundle:Skill:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
