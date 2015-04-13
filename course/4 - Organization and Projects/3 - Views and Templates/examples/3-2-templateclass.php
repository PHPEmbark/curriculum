<?php
class Template {
    public function render($tpl, $data = array())
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }

        require __DIR__ . '/' . $tpl;
    }
}