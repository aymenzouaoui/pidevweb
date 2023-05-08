<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* message/mm.html.twig */
class __TwigTemplate_7d65666f82ff924fb80634495072401a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/mm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/mm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/mm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "message
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/message.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <h1>Messages</h1>
    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })())) == 0)) {
            // line 14
            echo "        <p>Aucun message.</p>
    ";
        } else {
            // line 16
            echo "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 18), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        // line 22
        echo "

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"container\">

    <!-- Page header start -->
    <div class=\"page-title\">
        <div class=\"row gutters\">
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
                <h5 class=\"title\">Chat App</h5>
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\"> </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class=\"content-wrapper\">

        <!-- Row start -->
        <div class=\"row gutters\">

            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">

                <div class=\"card m-0\">

                    <!-- Row start -->
                    <div class=\"row no-gutters\">
                        <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3\">
                            <div class=\"users-container\">
                                <div class=\"chat-search-box\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Search\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-info\">
                                                <i class=\"fa fa-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"users\">
                                    <li class=\"person\" data-chat=\"person1\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <span class=\"status busy\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Steve Bangalter</span>
                                            <span class=\"time\">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person1\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Retail Admin\">
                                            <span class=\"status offline\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Steve Bangalter</span>
                                            <span class=\"time\">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person active-user\" data-chat=\"person2\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Retail Admin\">
                                            <span class=\"status away\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Peter Gregor</span>
                                            <span class=\"time\">12/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person3\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <span class=\"status busy\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Jessica Larson</span>
                                            <span class=\"time\">11/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person4\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Retail Admin\">
                                            <span class=\"status offline\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Lisa Guerrero</span>
                                            <span class=\"time\">08/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person5\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar5.png\" alt=\"Retail Admin\">
                                            <span class=\"status away\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Michael Jordan</span>
                                            <span class=\"time\">05/02/2019</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9\">
                            <div class=\"selected-user\">
                                <span>To: <span class=\"name\">Emily Russell</span></span>
                            </div>
                            <div class=\"chat-container\">
                                <ul class=\"chat-box chatContainerScroll\">
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Hello, I'm Russell.
                                            <br>How can I help you today?</div>
                                        <div class=\"chat-hour\">08:55 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:56 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Hi, Russell
                                            <br> I need more information about Developer Plan.</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Sam</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Are we meeting today?
                                            <br>Project has been already finished and I have results to show you.</div>
                                        <div class=\"chat-hour\">08:57 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:59 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar5.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Joyse</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">The rest of the team is not here yet.
                                            <br>Maybe in an hour or so?</div>
                                        <div class=\"chat-hour\">08:57 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:59 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Have you faced any problems at the last phase of the project?</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Jin</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Actually everything was fine.
                                            <br>I'm very excited to show this to our team.</div>
                                        <div class=\"chat-hour\">07:00 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                </ul>
                                <div class=\"form-group mt-3 mb-0\">
                                    <textarea class=\"form-control\" rows=\"3\" placeholder=\"Type your message here...\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "message/mm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 22,  144 => 20,  135 => 18,  131 => 17,  128 => 16,  124 => 14,  122 => 13,  118 => 11,  108 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}message
{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/message.css')}}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}

    <h1>Messages</h1>
    {% if messages|length == 0 %}
        <p>Aucun message.</p>
    {% else %}
        <ul>
            {% for message in messages %}
                <li>{{ message.content }}</li>
            {% endfor %}
        </ul>
    {% endif %}


<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div class=\"container\">

    <!-- Page header start -->
    <div class=\"page-title\">
        <div class=\"row gutters\">
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
                <h5 class=\"title\">Chat App</h5>
            </div>
            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\"> </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class=\"content-wrapper\">

        <!-- Row start -->
        <div class=\"row gutters\">

            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">

                <div class=\"card m-0\">

                    <!-- Row start -->
                    <div class=\"row no-gutters\">
                        <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3\">
                            <div class=\"users-container\">
                                <div class=\"chat-search-box\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Search\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-info\">
                                                <i class=\"fa fa-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"users\">
                                    <li class=\"person\" data-chat=\"person1\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <span class=\"status busy\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Steve Bangalter</span>
                                            <span class=\"time\">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person1\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Retail Admin\">
                                            <span class=\"status offline\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Steve Bangalter</span>
                                            <span class=\"time\">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person active-user\" data-chat=\"person2\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Retail Admin\">
                                            <span class=\"status away\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Peter Gregor</span>
                                            <span class=\"time\">12/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person3\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <span class=\"status busy\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Jessica Larson</span>
                                            <span class=\"time\">11/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person4\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Retail Admin\">
                                            <span class=\"status offline\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Lisa Guerrero</span>
                                            <span class=\"time\">08/02/2019</span>
                                        </p>
                                    </li>
                                    <li class=\"person\" data-chat=\"person5\">
                                        <div class=\"user\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar5.png\" alt=\"Retail Admin\">
                                            <span class=\"status away\"></span>
                                        </div>
                                        <p class=\"name-time\">
                                            <span class=\"name\">Michael Jordan</span>
                                            <span class=\"time\">05/02/2019</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9\">
                            <div class=\"selected-user\">
                                <span>To: <span class=\"name\">Emily Russell</span></span>
                            </div>
                            <div class=\"chat-container\">
                                <ul class=\"chat-box chatContainerScroll\">
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Hello, I'm Russell.
                                            <br>How can I help you today?</div>
                                        <div class=\"chat-hour\">08:55 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:56 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Hi, Russell
                                            <br> I need more information about Developer Plan.</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Sam</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Are we meeting today?
                                            <br>Project has been already finished and I have results to show you.</div>
                                        <div class=\"chat-hour\">08:57 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:59 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar5.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Joyse</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">The rest of the team is not here yet.
                                            <br>Maybe in an hour or so?</div>
                                        <div class=\"chat-hour\">08:57 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                    <li class=\"chat-right\">
                                        <div class=\"chat-hour\">08:59 <span class=\"fa fa-check-circle\"></span></div>
                                        <div class=\"chat-text\">Have you faced any problems at the last phase of the project?</div>
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Jin</div>
                                        </div>
                                    </li>
                                    <li class=\"chat-left\">
                                        <div class=\"chat-avatar\">
                                            <img src=\"https://www.bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Retail Admin\">
                                            <div class=\"chat-name\">Russell</div>
                                        </div>
                                        <div class=\"chat-text\">Actually everything was fine.
                                            <br>I'm very excited to show this to our team.</div>
                                        <div class=\"chat-hour\">07:00 <span class=\"fa fa-check-circle\"></span></div>
                                    </li>
                                </ul>
                                <div class=\"form-group mt-3 mb-0\">
                                    <textarea class=\"form-control\" rows=\"3\" placeholder=\"Type your message here...\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>

</div>
{% endblock %}
", "message/mm.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\message\\mm.html.twig");
    }
}
