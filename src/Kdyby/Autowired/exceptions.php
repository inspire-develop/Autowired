<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\Autowired;


interface Exception
{

	/**
	 * @return \Reflector|\Nette\Reflection\Property|\Nette\Reflection\Method
	 */
	function getReflector();

}



/**
 * The exception that is thrown when a method call is invalid for the object's
 * current state, method has been invoked at an illegal or inappropriate time.
 */
class InvalidStateException extends \RuntimeException implements Exception
{

	/**
	 * @var \Reflector
	 */
	private $reflector;



	public function __construct($message = "", \Reflector $reflector = NULL, $previous = NULL)
	{
		parent::__construct($message, $previous ? $previous->getCode() : 0, $previous);
		$this->reflector = $reflector;
	}



	/**
	 * @return \Reflector
	 */
	public function getReflector()
	{
		return $this->reflector;
	}

}



/**
 * The exception that is thrown when an argument does not match with the expected value.
 */
class InvalidArgumentException extends \InvalidArgumentException implements Exception
{

	/**
	 * @var \Reflector
	 */
	private $reflector;



	public function __construct($message = "", \Reflector $reflector = NULL, $previous = NULL)
	{
		parent::__construct($message, $previous ? $previous->getCode() : 0, $previous);
		$this->reflector = $reflector;
	}



	/**
	 * @return \Reflector
	 */
	public function getReflector()
	{
		return $this->reflector;
	}
}



/**
 * The exception that is thrown when a value (typically returned by function) does not match with the expected value.
 */
class UnexpectedValueException extends \UnexpectedValueException implements Exception
{

	/**
	 * @var \Reflector
	 */
	private $reflector;



	public function __construct($message = "", \Reflector $reflector = NULL, $previous = NULL)
	{
		parent::__construct($message, $previous ? $previous->getCode() : 0, $previous);
		$this->reflector = $reflector;
	}



	/**
	 * @return \Reflector
	 */
	public function getReflector()
	{
		return $this->reflector;
	}

}


class MemberAccessException extends \Nette\MemberAccessException implements Exception
{

	/**
	 * @var \Reflector
	 */
	private $reflector;



	public function __construct($message = "", \Reflector $reflector = NULL, $previous = NULL)
	{
		parent::__construct($message, $previous ? $previous->getCode() : 0, $previous);
		$this->reflector = $reflector;
	}



	/**
	 * @return \Reflector
	 */
	public function getReflector()
	{
		return $this->reflector;
	}

}



class MissingServiceException extends \Nette\DI\MissingServiceException implements Exception
{

	/**
	 * @var \Reflector
	 */
	private $reflector;



	public function __construct($message = "", \Reflector $reflector = NULL, $previous = NULL)
	{
		parent::__construct($message, $previous ? $previous->getCode() : 0, $previous);
		$this->reflector = $reflector;
	}



	/**
	 * @return \Reflector
	 */
	public function getReflector()
	{
		return $this->reflector;
	}

}



class MissingClassException extends InvalidStateException
{

}
