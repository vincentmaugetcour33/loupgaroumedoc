<?php

/* VMBlogBundle:Default:commentaire.html.twig */
class __TwigTemplate_e39bab5746217b039f79ce443ae6dc2b extends Twig_Template
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
        // line 6
        echo "<div class=\"count\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pagination"), "getTotalItemCount"), "html", null, true);
        echo " commentaires
</div>
<table>
<tr>
";
        // line 12
        echo "    <!--<th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Id", "c.id");
        echo "</th>-->
    <th";
        // line 13
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "c.auteur"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Auteur", "c.auteur");
        echo "</th>
    <th";
        // line 14
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "c.contenu"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Contenu", "c.contenu");
        echo "</th>
</tr>

";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 19
            echo "<tr ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <!--<td></td>-->
    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "auteur"), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "contenu"), "html", null, true);
            echo "</td>
</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
";
        // line 27
        echo "<div class=\"navigation\">
    ";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
</div> 
 
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  116 => 27,  113 => 25,  96 => 22,  92 => 21,  84 => 19,  67 => 18,  57 => 14,  49 => 13,  44 => 12,  37 => 7,  34 => 6,  31 => 4,  28 => 3,);
    }
}
