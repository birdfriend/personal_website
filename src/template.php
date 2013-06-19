<?php

class template{
	protected $_data = array();

	public function assign($key, $value)
	{
		if(is_array($key))
		{
			foreach($key as $subKey => $subValue)
				$this->_data[$subKey] = $subValue;
		}
		else
			$this->_data[$key] = $value;
	}

	public function render($src)
	{
		include __DIR__ . "/template/" . $src;
	}
}