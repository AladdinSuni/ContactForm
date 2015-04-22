<?php
class Helper {
  public static function jsonEncode($value = null) {
    if (defind('JSON_UNESCAPED_UNICODE')) {
      return jason_encode(
        $value,
        JSON_HEX_TAG |
        JSON_HEX_APOS |
        JSON_HEX_QUOT |
        JSON_HEX_AMP |
        JSON_UNESCAPED_UNICODE
      );
    } 
    else {
      return jason_encode(
      $value,
      JSON_HEX_TAG |
      JSON_HEX_APOS |
      JSON_HEX_QUOT |
      JSON_HEX_AMPtype
      );
    }
  }
  
  public static function alert($message = null, $type ='alert') {
    $out = '<div class="alert-box';
    $out .= !empty($type) ? ' '.$type : null;
    $out .= '">';
    $out .= $message;
    $out .= '</div>';
    return $out;
  }
}
