<?php

/* ADGsbBundle::layout.html.twig */
class __TwigTemplate_52fa520a6fece350ae90b1870ca62547 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
       
    <header>
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ADGsb/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"101px\" height=\"101px\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ADGsb/css/style.css"), "html", null, true);
        echo " \"type=\"text/css\" media=\"all\" />
        <h1>Le site GSB</h1>
    </header>
    <nav>
        <h3>LE MENU :</h3>
        <h5>Présentation</h5>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ad_gsp_activite");
        echo "\">Activité</a></li>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ad_gsp_entreprise");
        echo "\">L'Entreprise</a></li>
        <h5>Le SI</h5>
        <li><a href=\"\">Description</a></li>
        <li><a href=\"\">La gestion: </a></li>
        <li><a href=\"\">L'équipement :</a></li>
        <h5>Le réseau</h5>
        <li><a href=\"\">Répartition</a></li>
        <li><a href=\"\">Segmentation</a></li>
    </nav>
    <section>
        <h1>TOTO</h1>
    </section>
    <footer>
        <p>copyright 2013-2014</p>
    </footer>
</html>
";
    }

    public function getTemplateName()
    {
        return "ADGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  38 => 12,  29 => 6,  25 => 5,  19 => 1,);
    }
}
