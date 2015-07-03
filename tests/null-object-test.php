<?php
class StackTest extends PHPUnit_Framework_TestCase
{
	function setUp() {
		$this->subject = new NullObject();
	}

	public function testthatNullObjectWorks()
	{
		$this->assertInstanceOf( $this->subject, NullObject,
			'Subject is a NullObject' );
		$this->$this->assertNotNull( $this->subject ,
			'NullObject ain\'t null' );
		$this->$this->assertNotNull( $this->subject->imaginaryProperty ,
			'NullObject properties are never null' );
	}
}
