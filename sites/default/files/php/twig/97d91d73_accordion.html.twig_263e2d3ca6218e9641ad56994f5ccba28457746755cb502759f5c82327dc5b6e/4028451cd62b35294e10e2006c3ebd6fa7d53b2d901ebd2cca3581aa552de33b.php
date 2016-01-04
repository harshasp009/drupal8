<?php

/* modules/examples/js_example/templates/accordion.html.twig */
class __TwigTemplate_e0ac2b26c15ddc0b60b8f3e97f11abf148c228174fc72db0815c7257be99d0c8 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 8
        echo "
<div class=\"demo\">
<h2>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
<div id=\"accordion\">
  <h3><a href=\"#\">Section 1</a></h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3><a href=\"#\">Section 2</a></h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3><a href=\"#\">Section 3</a></h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3><a href=\"#\">Section 4</a></h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>

</div><!-- End demo -->
";
    }

    public function getTemplateName()
    {
        return "modules/examples/js_example/templates/accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  43 => 8,);
    }
}
/* {#*/
/* */
/* /***/
/*  * @file*/
/*  * Template file for js_example module.*/
/*  *//* */
/* #}*/
/* */
/* <div class="demo">*/
/* <h2>{{  title }}</h2>*/
/* <div id="accordion">*/
/*   <h3><a href="#">Section 1</a></h3>*/
/*   <div>*/
/*     <p>*/
/*     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer*/
/*     ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit*/
/*     amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut*/
/*     odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.*/
/*     </p>*/
/*   </div>*/
/*   <h3><a href="#">Section 2</a></h3>*/
/*   <div>*/
/*     <p>*/
/*     Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet*/
/*     purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor*/
/*     velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In*/
/*     suscipit faucibus urna.*/
/*     </p>*/
/*   </div>*/
/*   <h3><a href="#">Section 3</a></h3>*/
/*   <div>*/
/*     <p>*/
/*     Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.*/
/*     Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero*/
/*     ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis*/
/*     lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.*/
/*     </p>*/
/*     <ul>*/
/*       <li>List item one</li>*/
/*       <li>List item two</li>*/
/*       <li>List item three</li>*/
/*     </ul>*/
/*   </div>*/
/*   <h3><a href="#">Section 4</a></h3>*/
/*   <div>*/
/*     <p>*/
/*     Cras dictum. Pellentesque habitant morbi tristique senectus et netus*/
/*     et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in*/
/*     faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia*/
/*     mauris vel est.*/
/*     </p>*/
/*     <p>*/
/*     Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.*/
/*     Class aptent taciti sociosqu ad litora torquent per conubia nostra, per*/
/*     inceptos himenaeos.*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* */
/* </div><!-- End demo -->*/
/* */
