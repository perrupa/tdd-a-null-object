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
	}

	public function testPropertiesArentNull()
	{
		$this->assertNotNull( $this->subject->imaginaryProperty ,
			'NullObject properties are never null' );
		$this->assertNotNull( $this->subject->imaginaryProperty->otherImaginaryProperty ,
			'Even nested NullObject properties are never null' );
	}

	public function testNullObjectCanCallFunctions()
	{
		$this->assertNotNull( $this->subject->noFunctionHere() ,
			'NullObject pretends to call functions like a boss');
		$this->assertNotNull( $this->subject->noFunctionHere()->orHere() ,
			'NullObject pretends to call functions over and over like a boss');
	}

	public function testNullObjectCanCallFunctionsFromProperties()
	{
		$this->assertNotNull( $this->subject->noFunctionHere()->orProperty ,
			'NullObject gets properties off functions');
		$this->assertNotNull( $this->subject->noFunctionHere()->orHere() ,
			'NullObject calls functions from fake properties');
	}
}


function logger( $msg ) {
	print_r( "\n" );
	print_r( $msg );
	print_r( "\n" );
}