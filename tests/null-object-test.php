<?php
include 'NullObject.php';

class NullObjectTest extends PHPUnit_Framework_TestCase
{
	public function setUp() {
		$this->subject = new NullObject();
	}

	public function testthatNullObjectWorks()
	{
		$this->assertInstanceOf( 'NullObject', $this->subject,
			'Subject is a NullObject' );
		$this->assertNotNull( $this->subject ,
			'NullObject ain\'t null' );
		$this->assertNotNull( $this->subject->imaginaryProperty ,
			'NullObject properties are never null' );
	}
}
