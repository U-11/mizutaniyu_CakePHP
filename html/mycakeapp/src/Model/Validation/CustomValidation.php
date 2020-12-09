<?php
namespace App\Model\Validation;

use Cake\Validation\Validation;

class CustomValidation extends Validation
{
  public static function isImage($fileName)
  { 
    $ret = true;
    $exts = array("png", "jpeg", "jpg");
    $sep = explode('.', $fileName);
    $ext = end($sep);
    if (!in_array($ext, $exts)) {
      $ret = false;
    }
    return $ret;
  }
}