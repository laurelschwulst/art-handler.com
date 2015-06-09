<?php

class TypeField extends InputListField {

  public function value() {
    $value = parent::value();
    if(empty($value)) {
      // get the first key of options
      $options = $this->options();
      if(is_array($options)) {
        reset($options);
        $value = key($options);        
      }
    }
    return $value;
  }

  public function input() {
    $val   = func_get_arg(0);
    $input = parent::input();
    $input->addClass('type');
    $input->attr('type', 'type');
    $input->val($val);
    $input->attr('checked', $val == $this->value());
    return $input;
  }

  public function item($value, $text) {
    $item = parent::item($value, $text);
    $item->addClass('input-with-type');
    return $item;
  }

}
