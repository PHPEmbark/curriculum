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

$vars = [
    'title' => 'Hello and Welcome',
    'message' => 'This is my templated application',
];

$template = new Template;
$template->render('3-1-template.html', $vars);