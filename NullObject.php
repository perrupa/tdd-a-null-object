<?php
trait NullPattern {
	function __get( $key )
	{
		return $key;
	}
}

class NullObject {
	use NullPattern;
}