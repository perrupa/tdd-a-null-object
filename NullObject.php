<?php
trait NullPattern {

	function __get( $key )
	{
		return $this;
	}

	function __call( $key, $arguments )
	{
		return $this;
	}

	function __toString()
	{
		return "NullObject()";
	}
}

class NullObject {
	use NullPattern;

	function __construct( $value = null )
	{
	}
}
