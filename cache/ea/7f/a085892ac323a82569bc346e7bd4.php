<?php

/* productbox\index\index.tpl */
class __TwigTemplate_ea7fa085892ac323a82569bc346e7bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        if (array_key_exists("draft", $context)) {
            // line 4
            echo "<div class=\"alert alert-info\">
\t";
            // line 5
            if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
            echo $_draft_;
            echo "
</div>
";
        }
        // line 7
        echo " 
<article id=\"productInfo\" class=\"article marginbt20\" itemscope itemtype=\"http://schema.org/Product\">
\t<div class=\"row-fluid row-form\">
    \t<div class=\"span9\">
        \t<div class=\"row-fluid\">
            \t<div class=\"span6\">
                \t<ul class=\"pagination\">
                \t\t";
        // line 14
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "previous") != null)) {
            // line 15
            echo "                    \t<li><a href=\"";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "previous")));
            echo "\">← Poprzedni produkt</a></li>
                    \t";
        }
        // line 17
        echo "                    \t";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "next") != null)) {
            // line 18
            echo "                        <li><a href=\"";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "next")));
            echo "\">Kolejny produkt →</a></li>
                        ";
        }
        // line 20
        echo "                    </ul>
                    <div id=\"gallery\" data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\">
\t                    <div class=\"image-large\">
\t                    \t<a href=\"";
        // line 23
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "large");
        echo "\" rel=\"gallery\">
\t\t\t                \t<img src=\"";
        // line 24
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "normal");
        echo "\" alt=\"";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "productname");
        echo "\" itemprop=\"image\">
\t\t\t                </a>
\t                    </div>
\t                    ";
        // line 27
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_product_, "otherphoto"), "small")) > 0)) {
            // line 28
            echo "\t                    <a href=\"#\" class=\"slider-move slider-moveLeft\"></a>
\t                    <div class=\"image-slider\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 31
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "large");
            echo "\" title=\"\" rel=\"gallery\"><img src=\"";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "normal");
            echo "\" alt=\"\" ></a></li>
\t\t\t\t\t\t\t\t";
            // line 32
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_product_, "otherphoto"), "small"));
            foreach ($context['_seq'] as $context["key"] => $context["otherphoto"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo $this->getAttribute($this->getAttribute($this->getAttribute($_product_, "otherphoto"), "large"), $_key_, array(), "array");
                echo "\" title=\"\" rel=\"gallery\"><img src=\"";
                if (isset($context["otherphoto"])) { $_otherphoto_ = $context["otherphoto"]; } else { $_otherphoto_ = null; }
                echo $_otherphoto_;
                echo "\" alt=\"\" ></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['otherphoto'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t                    <a href=\"#\" class=\"slider-move slider-moveRight\"></a>
\t                    ";
        }
        // line 39
        echo "                    </div>
\t\t\t\t</div>
                <div class=\"span6\">
                \t<h1 class=\"product-name\" itemprop=\"name\">";
        // line 42
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "productname");
        echo "</h1>
                    <ul class=\"labels unstyled\">
                    \t";
        // line 44
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "discountprice") != null)) {
            // line 45
            echo "                    \t<li class=\"label-promotion\">";
            echo Gekosale\Translation::get("TXT_PROMOTION");
            echo "</li>
                    \t";
        }
        // line 47
        echo "                    \t";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "new") == 1)) {
            // line 48
            echo "                    \t<li class=\"label-new\">";
            echo Gekosale\Translation::get("New product");
            echo "</li>
                    \t";
        }
        // line 50
        echo "                    \t";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "statuses"));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 51
            echo "                        <li class=\"label";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if (($this->getAttribute($_status_, "symbol") != "")) {
                echo "-";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "symbol");
            }
            echo "\">";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            echo $this->getAttribute($_status_, "name");
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "                    </ul>
                    ";
        // line 54
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "opinions") > 0)) {
            // line 55
            echo "\t\t\t\t\t<div class=\"product-star\" itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
\t\t\t\t\t\t<div class=\"star pull-left readonly\" itemprop=\"ratingValue\" data-rating=\"";
            // line 56
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "rating");
            echo "\">";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "rating");
            echo "</div>
                        <span class=\"info pull-left\">(<strong>";
            // line 57
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "rating");
            echo "</strong>/5) <a href=\"#review\" title=\"\">Opinie (<span itemprop=\"reviewCount\">";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "opinions");
            echo "</span>)</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 60
        echo "                    <div class=\"intro\">
                    \t<div itemprop=\"description\">";
        // line 61
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "shortdescription");
        echo "</div>
                    \t";
        // line 62
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "producername") != "")) {
            // line 63
            echo "                        <p itemprop=\"brand\">";
            echo Gekosale\Translation::get("TXT_PRODUCER");
            echo ": <a href=\"";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.producerlist", array("param" => $this->getAttribute($_product_, "producerurl")));
            echo "\" title=\"";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "producername");
            echo "\"><strong>";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "producername");
            echo "</strong></a></p>
                        ";
        }
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"span3\">
        \t<div id=\"addToCart\" class=\"well well-small\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
        \t\t";
        // line 71
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if ((($this->getAttribute($_product_, "discountprice") != null) && ($this->getAttribute($_product_, "discountprice") != $this->getAttribute($_product_, "price")))) {
            // line 72
            echo "        \t\t\t<span class=\"price price-large\" id=\"changeprice\" itemprop=\"price\">";
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "discountpricenetto"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "discountprice"));
            }
            echo "</span>
                \t<span class=\"price price-small\" id=\"changeprice-old\">";
            // line 73
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricenetto"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "price"));
            }
            echo "</span>
\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t<span class=\"price price-large\" id=\"changeprice\" itemprop=\"price\">";
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricewithoutvat"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "price"));
            }
            echo "</span>
\t\t\t\t";
        }
        // line 77
        echo "            \t<div class=\"hr\"></div>
                <ul>
                \t";
        // line 79
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "trackstock") == 1)) {
            // line 80
            echo "                \t<li><span>";
            echo Gekosale\Translation::get("TXT_PRODUCT_IS_AVAILABLE");
            echo " <strong class=\"green available\">";
            echo Gekosale\Translation::get("TXT_AVAILABLE");
            echo "</strong><strong class=\"noavailable red\">";
            echo Gekosale\Translation::get("TXT_NOT_AVAILABLE");
            echo "</strong></span></li>
                \t";
        } else {
            // line 82
            echo "                \t<li><span>";
            echo Gekosale\Translation::get("TXT_PRODUCT_IS_AVAILABLE");
            echo " <span class=\"green\"><strong>dostępny</strong></span></span></li>
                \t";
        }
        // line 84
        echo "                    <li><span>";
        echo Gekosale\Translation::get("TXT_DISPATCH");
        echo ": <strong>";
        echo Gekosale\Translation::get("TXT_FROM");
        echo " ";
        if (isset($context["deliverymin"])) { $_deliverymin_ = $context["deliverymin"]; } else { $_deliverymin_ = null; }
        echo Gekosale\Template::priceFormat($_deliverymin_);
        echo "</strong></span></li>
                    ";
        // line 85
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "availablityname") != "")) {
            // line 86
            echo "\t\t\t\t\t<li><span>Dostawa w ciągu <strong id=\"availablity\">";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "availablityname");
            echo "</strong></span></li>
\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t</ul>
                <div class=\"hr\"></div>
                <form>
\t\t\t\t\t<input type=\"hidden\" id=\"attributevariants\" value=\"0\" />
\t\t\t\t\t<input type=\"hidden\" id=\"availablestock\" value=\"";
        // line 92
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "stock");
        echo "\" />
\t\t\t\t\t<input type=\"hidden\" id=\"variantprice\" value=\"";
        // line 93
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "price");
        echo "\" />\t
\t\t\t\t\t";
        // line 94
        if (isset($context["attset"])) { $_attset_ = $context["attset"]; } else { $_attset_ = null; }
        if (($_attset_ != null)) {
            // line 95
            echo "\t\t\t\t\t";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["grid"] => $context["attributesgroup"]) {
                // line 96
                echo "\t\t\t\t\t<label>";
                if (isset($context["attributesgroup"])) { $_attributesgroup_ = $context["attributesgroup"]; } else { $_attributesgroup_ = null; }
                echo $this->getAttribute($_attributesgroup_, "name");
                echo ":</label>
                \t<select id=\"attributes-";
                // line 97
                if (isset($context["grid"])) { $_grid_ = $context["grid"]; } else { $_grid_ = null; }
                echo $_grid_;
                echo "\" name=\"attributes-";
                if (isset($context["grid"])) { $_grid_ = $context["grid"]; } else { $_grid_ = null; }
                echo $_grid_;
                echo "\" class=\"attributes span12\">
                    \t";
                // line 98
                if (isset($context["attributesgroup"])) { $_attributesgroup_ = $context["attributesgroup"]; } else { $_attributesgroup_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attributesgroup_, "attributes"));
                foreach ($context['_seq'] as $context["v"] => $context["variant"]) {
                    // line 99
                    echo "\t        \t\t\t<option value=\"";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo $_v_;
                    echo "\">";
                    if (isset($context["variant"])) { $_variant_ = $context["variant"]; } else { $_variant_ = null; }
                    echo $_variant_;
                    echo "</option>
\t        \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 101
                echo "                    </select>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['grid'], $context['attributesgroup'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 103
            echo "                    <div class=\"hr\"></div>
                    ";
        }
        // line 104
        echo "\t
                    <div class=\"amount\">
                    \t<div class=\"pull-left mgr5\">";
        // line 106
        echo Gekosale\Translation::get("TXT_QUANTITY");
        echo ":</div>
                        <div class=\"pull-left mgr5\"><input type=\"text\" class=\"spinnerhide\" data-packagesize=\"";
        // line 107
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "packagesize");
        echo "\" id=\"product-qty\" value=\"";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "packagesize");
        echo "\"></div>
                        <div class=\"pull-left\">";
        // line 108
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "unit");
        echo "</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
                    <button type=\"submit\" id=\"add-cart\" class=\"btn btn-primary btn-large available\"><i class=\"icon-shopping-cart icon-white\"></i> ";
        // line 111
        echo Gekosale\Translation::get("TXT_ADD_TO_CART");
        echo "</button>
                    <a href=\"";
        // line 112
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo Gekosale\Template::getPathFromRoute("frontend.contact", array("param" => $this->getAttribute($_product_, "idproduct")));
        echo "\" class=\"btn btn-large btn-danger noavailable\"><i class=\"icon-question-sign icon-white\"></i> ";
        echo Gekosale\Translation::get("TXT_REQUEST_QUOTE");
        echo "</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</article>
<script type=\"text/javascript\">
\$(document).ready(function(){

\tvar producttrackstock = ";
        // line 121
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "trackstock");
        echo ";

\t\$('#add-cart').unbind('click').bind('click', function(){
\t\tif(producttrackstock == 1){
\t\t\tif(\$('#availablestock').val() > 0){
\t\t\t\treturn xajax_addProductToCart(";
        // line 126
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "idproduct");
        echo ", \$('#attributevariants').val(), \$('#product-qty').val());
\t\t\t}else{
\t\t\t\tGError('";
        // line 128
        echo Gekosale\Translation::get("ERR_SHORTAGE_OF_STOCK");
        echo "');
\t\t\t\treturn false;
\t\t\t}
\t\t}else{
\t\t\treturn xajax_addProductToCart(";
        // line 132
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "idproduct");
        echo ", \$('#attributevariants').val(), \$('#product-qty').val());
\t\t}
\t});
\t
\t";
        // line 136
        if (isset($context["attset"])) { $_attset_ = $context["attset"]; } else { $_attset_ = null; }
        if (($_attset_ != null)) {
            // line 137
            echo "\tGProductAttributes({
\t\taoVariants: ";
            // line 138
            if (isset($context["variants"])) { $_variants_ = $context["variants"]; } else { $_variants_ = null; }
            echo $_variants_;
            echo ",
\t\tbTrackStock: producttrackstock,
\t});
\t";
        } else {
            // line 142
            echo "\tif(producttrackstock == 1 && (\$('#availablestock').val() == 0)){
\t\t\$('.available').hide();
\t\t\$('.noavailable').show();
\t}else{
\t\t\$('.available').show();
\t\t\$('.noavailable').hide();
\t}
\t";
        }
        // line 150
        echo "});

</script>
";
    }

    public function getTemplateName()
    {
        return "productbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 150,  483 => 142,  475 => 138,  472 => 137,  469 => 136,  461 => 132,  454 => 128,  448 => 126,  439 => 121,  424 => 112,  420 => 111,  413 => 108,  405 => 107,  401 => 106,  397 => 104,  393 => 103,  386 => 101,  373 => 99,  368 => 98,  360 => 97,  354 => 96,  348 => 95,  345 => 94,  340 => 93,  335 => 92,  329 => 88,  322 => 86,  319 => 85,  309 => 84,  303 => 82,  293 => 80,  290 => 79,  286 => 77,  273 => 75,  261 => 73,  249 => 72,  246 => 71,  238 => 65,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 47,  146 => 45,  143 => 44,  137 => 42,  132 => 39,  126 => 35,  112 => 33,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 17,  53 => 15,  50 => 14,  41 => 7,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }
}