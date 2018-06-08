<?php

/* contact/list.html.twig */
class __TwigTemplate_1df9814a82b907ac68a7114b149a13ae8794ebfb42519dd3e120aa96102d903f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "contact/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/list.html.twig"));

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
\t<span><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exportAction");
        echo "\">Export</a></span> |
\t<span><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importAction");
        echo "\">Import</a></span>
\t<div class=\"container\">
\t\t<ul class=\"list-group\">
\t\t\t";
        // line 10
        if (($context["contacts"] ?? $this->getContext($context, "contacts"))) {
            // line 11
            echo "\t\t\t
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 13
                echo "\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"/contacts/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "lastname", array()), "html", null, true);
                echo "</a>Tel : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
                echo " Email : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
                echo "
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t
\t\t\t\t<li class=\"list-group-item\">No contacts</li>
\t\t\t
\t\t\t";
        }
        // line 23
        echo "
\t\t\t<li class=\"list-group-item\"><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createContact");
        echo "\">Add new contact?</a></li>
  \t\t</ul>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  101 => 23,  95 => 19,  91 => 17,  74 => 14,  71 => 13,  67 => 12,  64 => 11,  62 => 10,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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

\t<span><a href=\"{{ path('exportAction') }}\">Export</a></span> |
\t<span><a href=\"{{ path('importAction') }}\">Import</a></span>
\t<div class=\"container\">
\t\t<ul class=\"list-group\">
\t\t\t{% if contacts %}
\t\t\t
\t\t\t\t{% for contact in contacts %}
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"/contacts/{{contact.id}}\">{{ contact.firstname }} {{ contact.lastname }}</a>Tel : {{ contact.phone }} Email : {{ contact.email }}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t
\t\t\t{% else %}
\t\t\t
\t\t\t\t<li class=\"list-group-item\">No contacts</li>
\t\t\t
\t\t\t{% endif %}

\t\t\t<li class=\"list-group-item\"><a href=\"{{ path('createContact') }}\">Add new contact?</a></li>
  \t\t</ul>
\t</div>

{% endblock %}
", "contact/list.html.twig", "/home/mostapha/Perso/Canaljob/app/Resources/views/contact/list.html.twig");
    }
}
