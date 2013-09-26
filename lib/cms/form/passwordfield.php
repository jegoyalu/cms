<?php
/**
 * @author Jefferson González
 * @license MIT
 */

namespace Cms\Form;

use Cms\Enumerations\FormFieldType;

class PasswordField extends TextField
{
    public function __construct($label, $name, $value='', $description='', $placeholder='', $required=false, $readonly=false, $size=0)
    {
        parent::__construct($label, $name, $value, $description, $placeholder, $required, $readonly, $size);
        
        $this->type = FormFieldType::PASSWORD;
    }
}
?>
