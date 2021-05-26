<?php

namespace srag\CustomInputGUIs\SrPluginInfosFetcher\ColorPickerInputGUI;

use ilColorPickerInputGUI;
use srag\CustomInputGUIs\SrPluginInfosFetcher\Template\Template;
use srag\DIC\SrPluginInfosFetcher\DICTrait;

/**
 * Class ColorPickerInputGUI
 *
 * @package srag\CustomInputGUIs\SrPluginInfosFetcher\ColorPickerInputGUI
 */
class ColorPickerInputGUI extends ilColorPickerInputGUI
{

    use DICTrait;

    /**
     * @inheritDoc
     */
    public function render(/*string*/ $a_mode = "") : string
    {
        $tpl = new Template("Services/Form/templates/default/tpl.property_form.html", true, true);

        $this->insert($tpl);

        $html = self::output()->getHTML($tpl);

        $html = preg_replace("/<\/div>\s*<!--/", "<!--", $html);
        $html = preg_replace("/<\/div>\s*<!--/", "<!--", $html);

        return $html;
    }
}
