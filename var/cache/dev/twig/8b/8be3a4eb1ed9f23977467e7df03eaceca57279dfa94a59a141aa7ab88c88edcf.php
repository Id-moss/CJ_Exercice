<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_28d9435d3a321f3a2c83cc34977fe0cacce9809889f8ee492c946b17159e5a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "<div class=\"p-3 row text-light rounded bg-dark\">
\t<div class=\"col-md-3\"></div>
\t<div class=\"col-md-6\">
\t\t<h3 class=\"display-4 font-italic\"></h3>
\t\t<p class=\"lead my-3\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</p>
\t\t<p class=\"lead my-3\">Email :\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t<p class=\"lead my-3\">Phone :\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</p>
\t\t<p class=\"lead my-3\">Adress :\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adress", array()), "html", null, true);
        echo "</p>
\t</div>

\t<div>
\t\t<p class=\"lead my-3\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit</a></p>
\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 9,  41 => 8,  37 => 7,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"p-3 row text-light rounded bg-dark\">
\t<div class=\"col-md-3\"></div>
\t<div class=\"col-md-6\">
\t\t<h3 class=\"display-4 font-italic\"></h3>
\t\t<p class=\"lead my-3\">{{ user.firstname }}\t{{ user.lastname }}</p>
\t\t<p class=\"lead my-3\">Email :\t{{ user.email }}</p>
\t\t<p class=\"lead my-3\">Phone :\t{{ user.phone }}</p>
\t\t<p class=\"lead my-3\">Adress :\t{{ user.adress }}</p>
\t</div>

\t<div>
\t\t<p class=\"lead my-3\"><a href=\"{{ path('fos_user_profile_edit') }}\">Edit</a></p>
\t</div>
</div>", "@FOSUser/Profile/show_content.html.twig", "/home/mostapha/Perso/Canaljob/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
