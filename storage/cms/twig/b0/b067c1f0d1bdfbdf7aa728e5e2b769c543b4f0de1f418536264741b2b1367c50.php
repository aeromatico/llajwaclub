<?php

/* /home/ubuntu/workspace/themes/aero/partials/portada/seccion-0.htm */
class __TwigTemplate_495d9575c95855fbb7a5190090f833e3456329f6bcbf50aa647553105230be2a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"section\" id=\"section0\">
    <div class=\"content\">
       <div class=\"columns\">
          <div class=\"column is-8 is-offset-2\">
             <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.svg");
        echo "\" class=\"aeroImg50ph\">
             <h2 class=\"is-size-2-fullhd is-size-3-widescreen is-size-4-desktop is-size-5-touch is-size-5-tablet is-size-6-mobile\">SOLUCIONES CORPORATIVAS INTELIGENTES</h2>
             <p>¡Ahora pruebe con llajwa!</p>
             <p>
                <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-danger is-outlined  is-medium\">
                <i class=\"fab fa-facebook-messenger\"></i> &nbsp; Iniciar chat
                </a>                        
             </p>
             <span class=\"scroll-btn\">
             <a href=\"#\">
             <span class=\"mouse\">
             <span>
             </span>
             </span>
             </a>
             </span>
          </div>
       </div>
    </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/partials/portada/seccion-0.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"section0\">
    <div class=\"content\">
       <div class=\"columns\">
          <div class=\"column is-8 is-offset-2\">
             <img src=\"{{'assets/img/logo.svg' | theme}}\" class=\"aeroImg50ph\">
             <h2 class=\"is-size-2-fullhd is-size-3-widescreen is-size-4-desktop is-size-5-touch is-size-5-tablet is-size-6-mobile\">SOLUCIONES CORPORATIVAS INTELIGENTES</h2>
             <p>¡Ahora pruebe con llajwa!</p>
             <p>
                <a href=\"https://m.me/LlajwaClub\" target=\"_blank\" class=\"button is-danger is-outlined  is-medium\">
                <i class=\"fab fa-facebook-messenger\"></i> &nbsp; Iniciar chat
                </a>                        
             </p>
             <span class=\"scroll-btn\">
             <a href=\"#\">
             <span class=\"mouse\">
             <span>
             </span>
             </span>
             </a>
             </span>
          </div>
       </div>
    </div>
 </div>", "/home/ubuntu/workspace/themes/aero/partials/portada/seccion-0.htm", "");
    }
}
