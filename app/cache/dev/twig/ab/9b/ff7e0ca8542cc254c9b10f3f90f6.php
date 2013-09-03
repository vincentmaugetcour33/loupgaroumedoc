<?php

/* VMBlogBundle:Image:image_list.html.twig */
class __TwigTemplate_ab9bff7e0ca8542cc254c9b10f3f90f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo "
 ";
        // line 5
        if ((!twig_test_empty($this->getContext($context, "images")))) {
            // line 6
            echo "    
 ";
            // line 8
            echo "<table id=\"\" class=\"table table-striped\">
        <caption>GALERIE</caption>
        <tbody>
        <tr>
    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 13
                echo "        <td><img style=\"cursor: pointer;border: 2px solid ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "blue", 1 => "green"), $this->getAttribute($this->getContext($context, "loop"), "index0")), "html", null, true);
                echo "\" 
                 class=\"\" id=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" 
                 rel=\"popover\" alt=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" /></td>
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 6) == 0)) {
                    echo "</tr><tr>";
                }
                echo "    
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </tbody></table>
";
        } else {
            // line 21
            echo "Il n'y a aucune image dans la galerie
";
        }
        // line 23
        echo "



<!--</script>-->


";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script language=\"javascript\" type=\"text/javascript\">
(function(\$) 
 {
   
   \$(\"ul.nav > li#galleries\").addClass('active');
   \$(\"img\").popover({placement:'left',trigger: 'hover',html:true, content: function() { 
    return \"<img class='img-rounded' width=250 src='\"+\$(this).attr('src')+\"' /><div>\"+\$(this).attr('id')+\"</div>\"; },
    delay: { show: 500, hide: 10} });
 }(jQuery));
 </script>
 ";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Image:image_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  118 => 32,  107 => 23,  103 => 21,  99 => 19,  80 => 17,  74 => 15,  68 => 14,  63 => 13,  46 => 12,  40 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
