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
            echo "    <table id=\"\" class=\"\">
        <caption>GALLERY</caption>
        <tbody>
        <tr>
    ";
            // line 10
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
                // line 11
                echo "        <td><img class=\"\" id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" rel=\"popover\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" /></td>
        ";
                // line 13
                echo "        ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 4) == 0)) {
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
            // line 15
            echo "    </tbody></table>
";
        }
        // line 17
        echo "
<script language=\"javascript\" type=\"text/javascript\">
 \$(document).ready(function() 
 {
    \$(\"img\").popover({trigger: 'hover',html:true, content: function() { return '<img class=\"img-rounded\" width=\"230px\" src=\"'+\$(this).attr('src')+'\"/>'; }, delay: { show: 500, hide: 10} });
 });\$.data(document.body, 'popup',1);
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
        return array (  93 => 17,  89 => 15,  70 => 13,  59 => 11,  42 => 10,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}