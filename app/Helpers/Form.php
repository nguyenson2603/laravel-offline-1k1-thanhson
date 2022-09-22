<?php

namespace App\Helpers;

class Form
{
    public static function selectBox($name, $options, $value)
    {
        $xhtml = null;
        $xhtmlOption = ($value === null) ? '<option value="" selected>Choose..</option>' : '';
        $check = null;
        foreach ($options as $key => $option) {
            if ($value !== null) {
                $check = ($key == $value) ? 'selected' : '';
            }
            $xhtmlOption .= '<option value="' . $key . '" ' . $check . '>' . $option . '</option>';
        }
        $title = ucfirst($name);
        $xhtml = sprintf('
        <div class="form-group">
            <label>%s</label>
            <select class="custom-select" name="%s">
                %s
            </select>
        </div>
        ', $title, $name, $xhtmlOption);
        return $xhtml;
    }
}
