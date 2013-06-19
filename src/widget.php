<?php

abstract class widget
{
	protected $_id;
	protected $_label;
	protected $_help;

	public function __construct($id, $label)
	{
		$this->_id = $id;
		$this->_label = $label;
	}
}