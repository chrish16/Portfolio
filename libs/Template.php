<?php
/**
 * Template class used by all controllers to render views.
 *
 * @author Chris Horak <chris@chrishorak.com>
 */
 
class Template
{
	/**
	 * The view to display.
	 *
	 * @var string
	 */
	private $view;

	/**
	 * Properties to modify the header/view.
	 *
	 * @var array
	 */
	private $properties;

	/**
	 * Set the view to display.
	 *
	 * @param string $view The view.
	 */
	public function setView($view)
	{
		$this->view = $view;
	}

	/**
	 * Set the header/view properties.
	 *
	 * @param array $properties The properties.
	 */
	public function setProperties(array $properties)
	{
		$this->properties = $properties;
	}

	/**
	 * Render the template.
	 */
	public function __destruct()
	{
		extract($this->properties);
		
		/**
		 * Combine and show the views.
		 */
		require ROOT . DS . 'views' . DS. 'default_header.php';
		require ROOT . DS . 'views' . DS . $this->view . '.php';
		require ROOT . DS . 'views' . DS . 'default_footer.php';
	}
}