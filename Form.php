<?php
class Form {

    protected $_inputs;

    public function __construct() {
        $this->_inputs = array();
    }

    /**
     *  adds an input instance to the collection of inputs managed by this form object
     */
    public function addInput(Input $input) {
        $this->_inputs[] = $input;
    }

    /**
     *  iterates over all inputs managed by this form and returns false if any of them don't validate
     */
    public function validate() {
        foreach ($this->_inputs as $input) {
            if (!$input->validate()) {
                return false;
            }
        }
        return true;
    }

    /**
     * returns the value of the input by $name
     */
    public function getValue($name) {
        foreach ($this->_inputs as $input) {
            if ($input->name() === $name) {
                return $input->getValue();
            }
        }
        return null;
    }

    /**
     *  draws the outer form element, and the markup for each input, one input per row
     */
    public function display() {
        $html = '<form action="Sample.php" method="post">';
        foreach ($this->_inputs as $input) {
            $html .= '<div>' . $input->render() . '</div>';
        }
        $html .= '<button type="submit">Submit</button>';
        $html .= '</form>';
        echo $html;
    }
}
