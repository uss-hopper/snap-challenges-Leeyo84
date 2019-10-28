<?php

/**
 * Class TestClass
 *
 * Snap challenge class
 *
 * created a class as a snap challenge for DDC-10-21-19
 */
class TestClass{
	/**
	 * id for this class
	 * @var $testClassId
	 */
	public $testClassId;
	/**
	 *color of this class
	 * @var $testClassColor
	 */
	public $testClassColor;
}

/**
 * accesor/getter method for test class id
 *
 * @param string $newTestClassId new value of test class id
 * @throws \TypeError if $newTestClassId is not a string
 *
 */
public function setTestClassId($newTestClassId){
	$newTestClassId = filter_var($newTestClassId, FILTER_SANITIZE_STRING);
	if(strlen($newTestClassId)> 20){
		throw (new \RangeException("id is too long"));
	}
	$this->testClassId =$newTestClassId;
}
/**
 * accesor/getter method for test class id
 *
 * @param string $newTestClassId new value of test class id
 * @throws \TypeError if $newTestClassId is not a string
 *
 */
public function setTestClassColor($newTestClassColor){
	$newTestClassColor = filter_var($newTestClassColor, FILTER_SANITIZE_STRING);
	if(strlen($newTestClassColor)> 20){
		throw (new \RangeException("id is too long"));
	}
	$this->testClassColor =$newTestClassColor;


/**constructor for new TestClass
 *
 * @param string $newTestClassId
 * @param string $newTestClassColor
 * @throws \InvalidArgumentException if data types are not valid
 * @throws \RangeException if data values are out of bounds
 * */
public function __construct($newTestClassId, $newTestClassColor){
	try{
		$this->setTestClassId($newTestClassId);
		$this->setTestClassColor($newTestClassColor);
	}
	//determining what exception type was thrown
	catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw (new $exceptionType($exception->getMessage(), 0, $exception));
	}
}


