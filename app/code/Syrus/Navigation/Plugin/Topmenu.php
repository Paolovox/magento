<?php

namespace Syrus\Navigation\Plugin;

class Topmenu
{
    public function afterGetHtml(\Magento\Theme\Block\Html\Topmenu $topmenu, $html)
    {

        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "/preorder/valutationproducts/form" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\">".
            "<span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Home") . "</span>".
            "</a>";
        $html .= "</li>";

        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "/preorder/valutationproducts/form" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\">".
            "<span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("In scadenza") . "</span>".
            "</a>";
        $html .= "</li>";

        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "/preorder/valutationproducts/form" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\">".
            "<span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Conclusi") . "</span>".
            "</a>";
        $html .= "</li>";

        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "/preorder/valutationproducts/form" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\">".
                "<span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Crea il tuo bid") . "</span>".
                 "</a>";
        $html .= "</li>";

        return $html;
    }
}
