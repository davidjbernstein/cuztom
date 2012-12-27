<?php

class Cuztom_Field_Color extends Cuztom_Field
{	
	function _output( $value )
	{
		return '<input type="text" name="cuztom[' . $this->id_name . ']" id="' . $this->id_name . '" class="js-cuztom-colorpicker cuztom-colorpicker colorpicker cuztom-input" value="' . ( ! empty( $value ) ? $value : $this->default_value ) . '" />';
	}	
}