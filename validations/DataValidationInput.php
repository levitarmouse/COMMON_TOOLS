<?php

namespace levitarmouse\common_tools\validations;

/**
 * Description of ValidateRequestInput
 *
 * @author gabriel
 */
class DataValidationInput  extends \levitarmouse\core\DataTypes{


    use \levitarmouse\core\LmIterator;

    public function addInput(DataInput $mixed) {

        $this->add($mixed);
    }

}
