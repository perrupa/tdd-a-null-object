<?php
trait NullPattern {
	function __get( $key )
	{
		return $this;
	}
}

class NullObject {
	use NullPattern;
}