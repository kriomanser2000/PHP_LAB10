<?php
function convertToHTML($control)
{
    if ($control instanceof Button)
    {
        return "<button style='background: {$control->getBackground()}; width: {$control->getWidth()}; height: {$control->getHeight()};' name='{$control->getName()}' value='{$control->getValue()}'" . ($control->getSubmitState() ? " type='submit'" : "") . "></button>";
    }
    elseif ($control instanceof Text)
    {
        return "<input type='text' style='background: {$control->getBackground()}; width: {$control->getWidth()}; height: {$control->getHeight()};' name='{$control->getName()}' value='{$control->getValue()}' placeholder='{$control->getPlaceholder()}' />";
    }
    elseif ($control instanceof Label)
    {
        return "<label for='{$control->getParentName()}' style='background: {$control->getBackground()}; width: {$control->getWidth()}; height: {$control->getHeight()};'>{$control->getValue()}</label>";
    }
    return '';
}