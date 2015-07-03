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
}

class NullObject {
	use NullPattern;
}