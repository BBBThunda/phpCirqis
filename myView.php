<?php
class MyView {
    protected $template_dir = 'templates/';
    protected $vars = array();
    public function __construct($template_dir = null) {
        if ($template_dir !== null) {
            // Check here whether this directory really exists
            $this->template_dir = $template_dir;
        }
    }
    public function render($skeleton, $template_files) {
    	
        if (file_exists($this->template_dir.$skeleton)) {
            include $this->template_dir.$skeleton;
        } else {
            throw new Exception('no template skeleton file ' . $template_file . ' present in directory ' . $this->template_dir);
        }
    }
    public function __set($name, $value) {
        $this->vars[$name] = $value;
    }
    public function __get($name) {
        return $this->vars[$name];
    }
}
?>