<?php

class Carbon_Field_Hidden extends Carbon_Field {
	public $field_html;
	protected $wide = true;
	protected $default_value = 'placeholder';

	function set_html($html) {
		$this->field_html = $html;
		return $this;
	}

	function to_json($load) {
		$field_data = parent::to_json($load);

		$field_data = array_merge($field_data, array(
			'html' => $this->field_html,
		));

		return $field_data;
	}

	function template() {
		?>
		<input id="{{{ id }}}" type="hidden" name="{{{ name }}}" value="{{ value }}" class="regular-text" />
		{{{ html }}}
		<?php
	}

	function get_label() {
		return '';
	}
}