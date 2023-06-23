<?php 
require 'Input.php';


class TextInput extends Input {

    public function __construct($name, $label, $initVal) {
        parent::__construct($name, $label, $initVal);
    }

    public function validate() {
        return strlen($this->getValue()) > 3;
    }

    protected function _renderSetting() {
        // Implementação para renderizar a tag de input de texto
        $html = '<label for="' . $this->_name . '">' . $this->_label . '</label>';
        $html .= '<input type=text name="' . $this->_name . '" value="' . $this->_initVal . '">';
        return $html;
    }   
}

?>