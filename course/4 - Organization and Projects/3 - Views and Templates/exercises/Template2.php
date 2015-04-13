<?php
class Template {
    protected $location;

    public function __construct($location) {
        $this->location = $location;
    }

    public function render($tpl, $data = array())
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }

        require $this->location . '/' . $tpl;
    }

    public function escapeHtml($data)
    {
        return htmlspecialchars($data, ENT_COMPAT, 'UTF-8');
    }
}