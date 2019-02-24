<?php

/* /home/ubuntu/workspace/themes/aero/layouts/master.htm */
class __TwigTemplate_e3602d69a2c6939960637f05c0e827ca51c14e2d05b2c0be79660733a2208f36 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
      <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
      <meta name=\"author\" content=\"Alvaro Trigo Lopez\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"description\" content=\"fullPage fixed header and footer.\" />
      <meta name=\"keywords\"  content=\"fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css\" />
      <meta name=\"Resource-type\" content=\"Document\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/fullpage.css");
        echo "\" />
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bulma.css");
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aero.css");
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fonts.css");
        echo "\" />
      <link rel='stylesheet' href='//unpkg.com/plyr@3/dist/plyr.css'>
      <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/player.css");
        echo "\">
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
      ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "      <!--[if IE]>
      <script type=\"text/javascript\">
         var console = { log: function() {} };
      </script>
      <![endif]-->
   </head>
   <body>
      <div id=\"fullpage\">
         ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "      </div>
      <script type=\"text/javascript\" src=\"https://alvarotrigo.com/fullPage/vendors/scrolloverflow.js\"></script>      
      <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/fullpage.js");
        echo "\"></script>
      <script type=\"text/javascript\" src=\"https://wikiki.github.io/node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/aero.js");
        echo "\"></script>
      <script src='//cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL'></script>
      <script src='//unpkg.com/plyr@3'></script>
      <script  src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/player.js");
        echo "\"></script>
        ";
        // line 37
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 38
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "      
   </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/aero/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  98 => 37,  94 => 36,  88 => 33,  83 => 31,  79 => 29,  77 => 28,  67 => 20,  64 => 19,  59 => 17,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
      <title>{{ this.page.title }}</title>
      <meta name=\"author\" content=\"Alvaro Trigo Lopez\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"description\" content=\"fullPage fixed header and footer.\" />
      <meta name=\"keywords\"  content=\"fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css\" />
      <meta name=\"Resource-type\" content=\"Document\" />
      <link rel=\"shortcut icon\" href=\"{{'assets/img/favicon.ico' | theme}}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/dist/fullpage.css' | theme}}\" />
      <link rel=\"stylesheet\" href=\"{{'assets/css/bulma.css' | theme}}\">
      <link rel=\"stylesheet\" href=\"{{'assets/css/aero.css' | theme}}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/fonts.css' | theme}}\" />
      <link rel='stylesheet' href='//unpkg.com/plyr@3/dist/plyr.css'>
      <link rel=\"stylesheet\" href=\"{{'assets/css/player.css' | theme}}\">
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
      {% styles %}
      <!--[if IE]>
      <script type=\"text/javascript\">
         var console = { log: function() {} };
      </script>
      <![endif]-->
   </head>
   <body>
      <div id=\"fullpage\">
         {% page %}
      </div>
      <script type=\"text/javascript\" src=\"https://alvarotrigo.com/fullPage/vendors/scrolloverflow.js\"></script>      
      <script type=\"text/javascript\" src=\"{{'assets/dist/fullpage.js' | theme}}\"></script>
      <script type=\"text/javascript\" src=\"https://wikiki.github.io/node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.js\"></script>
      <script type=\"text/javascript\" src=\"{{'assets/js/aero.js' | theme}}\"></script>
      <script src='//cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL'></script>
      <script src='//unpkg.com/plyr@3'></script>
      <script  src=\"{{'assets/js/player.js' | theme}}\"></script>
        {% framework extras %}
        {% scripts %}      
   </body>
</html>", "/home/ubuntu/workspace/themes/aero/layouts/master.htm", "");
    }
}
