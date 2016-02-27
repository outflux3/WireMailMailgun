<?php

/**
 * Class WireMailMailgun
 */

class WireMailMailgun extends WireMail implements Module, ConfigurableModule
{
	public static function getModuleInfo() {
		return array(
			'title'     => 'Wire Mail Mailgun',
			'version'   => '0.0.1',
			'summary'   => "Extends WireMail through the Mailgun API",
			'href'      => 'http://mailgun.com/',
			'author'    => 'plauclair',
			'singular'  => false,
			'autoload'  => false
		);
	}

	public function ___send()
	{
		return parent::___send(); // TODO: Change the autogenerated stub
	}

	/**
	 * @param array|null|string|null $email
	 * @param null|string|null $name
	 * @return $this
	 * @throws WireException
	 */
	public function to($email = null, $name = null)
	{
		return parent::to($email, $name); // TODO: Change the autogenerated stub
	}

	/**
	 * @param $name
	 * @return $this
	 * @throws WireException
	 */
	public function toName($name)
	{
		return parent::toName($name); // TODO: Change the autogenerated stub
	}

	/**
	 * @param $email
	 * @param null $name
	 * @return $this
	 */
	public function from($email, $name = null)
	{
		return parent::from($email, $name); // TODO: Change the autogenerated stub
	}

	/**
	 * @param $name
	 * @return $this
	 */
	public function fromName($name)
	{
		return parent::fromName($name); // TODO: Change the autogenerated stub
	}


}