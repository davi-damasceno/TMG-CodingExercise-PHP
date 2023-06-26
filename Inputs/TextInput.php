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
        $html = '<label for="' . $this->_name . '">' . $this->_label . ':';
        if(!$this->validate()){
            $html .= '<br/><span class="error">Invalid input</span>';
        }
        $html .= '</label>';
        $html .= '<input required type=text name="' . $this->_name . '" value="' . $this->getValue() . '">';
        return $html;
    }   
}

?>