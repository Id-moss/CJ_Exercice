<?php

/* contact/show.html.twig */
class __TwigTemplate_fd56af9a9a7e1b3fafd5ef168b1512588117c13acd14ccb25257091254bf81e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "contact/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "
\t<div class=\"p-3 row text-white rounded bg-dark\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
          <h3 class=\"display-4 font-italic\"></h3>
          <p class=\"lead my-3\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "firstname", array()), "html", null, true);
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "lastname", array()), "html", null, true);
        echo "</p>
          <p class=\"lead my-3\">Email : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</p>
          <p class=\"lead my-3\">Phone : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "phone", array()), "html", null, true);
        echo "</p>
          <p class=\"lead my-3\">Adress : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "adress", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "country", array()), "html", null, true);
        echo "</p>
        </div>
        <div>
        <p class=\"lead my-3\"><a href=\"/contacts/edit/";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "\">Edit</a></p>
        <p class=\"lead my-3\"><a href=\"/contacts/delete/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "\">Delete</a></p>
        </div>
     </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  78 => 16,  70 => 13,  66 => 12,  62 => 11,  56 => 10,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}


{% block fos_user_content %}

\t<div class=\"p-3 row text-white rounded bg-dark\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
          <h3 class=\"display-4 font-italic\"></h3>
          <p class=\"lead my-3\">{{ contact.firstname }}\t{{ contact.lastname }}</p>
          <p class=\"lead my-3\">Email : {{ contact.email }}</p>
          <p class=\"lead my-3\">Phone : {{ contact.phone }}</p>
          <p class=\"lead my-3\">Adress : {{ contact.adress }}, {{ contact.country }}</p>
        </div>
        <div>
        <p class=\"lead my-3\"><a href=\"/contacts/edit/{{ contact.id }}\">Edit</a></p>
        <p class=\"lead my-3\"><a href=\"/contacts/delete/{{ contact.id }}\">Delete</a></p>
        </div>
     </div>

{% endblock %}
", "contact/show.html.twig", "/home/mostapha/Perso/Canaljob/app/Resources/views/contact/show.html.twig");
    }
}
