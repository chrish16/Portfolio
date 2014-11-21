<?php
/**
 * Base controller that all controllers must extend.
 *
 * @author Chris Horak <chris@chrishorak.com>
 */

abstract class Controller
{
	public function __construct(Template $template)
	{
		$this->template = $template;
	}

	abstract public function index();
}