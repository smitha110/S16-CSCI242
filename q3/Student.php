<?php

/* BEGIN ANSWER SECTION */

class Student {

	private static $name = "";

	/*
	* Accepts: Nothing
	* Returns: Nothing
	* Purpose: Initialize student objects to safe stable state
	*/
	public function __construct()
	{
	}

	/*
	* Accepts: Nothing
	* Returns: string name of the student
	* Purpose: Get the name of the student
	*/
	public function getName()
	{
		//return $this->name;
		return self::$name;
	}
	
	/*
	EXPLANATION:
	The variable self is a static variable which means
	it only exists once in memory. Therefore, you cannot
	reference the object. You must reference the class in
	which the variable was instantiated since only that class
	knows in memory where the static variable is stored.
	*/

	/*
	* Accepts: string with name of the student
	* Returns: null
	* Purpose: Set the name of the student
	*/
	public function setName($name)
	{
		//$this->name = $name;
		self::$name = $name;
	}

}
/* END ANSWER SECTION */
