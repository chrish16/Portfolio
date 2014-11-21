<?php
/**
 * Controller to handle pages located at /portfolio
 *
 * @author Chris Horak <chris@chrishorak.com>
 */

class PortfolioController extends Controller
{
	public function index()
	{
		$this->template->setView('portfolio/index');
		$this->template->setProperties([
			'title' => 'Portfolio',
			'description' => 'View selected works by Chris Horak, a web designer and developer.',
			'keywords' => 'portfolio',
			'header_headline' => 'Portfolio',
			'header_description' => 'Here are some projects I\'ve worked on.'
		]);
	}

	public function appliances_connection()
	{
		$this->template->setView('portfolio/appliances-connection');
		$this->template->setProperties([
			'title' => 'Appliances Connection',
			'description' => 'Appliances Connection case study by Chris Horak.',
			'keywords' => 'portfolio, appliances connection, case study',
			'header_class' => 'page-header--small'
		]);
	}

	public function postfess()
	{
		$this->template->setView('portfolio/postfess');
		$this->template->setProperties([
			'title' => 'Portfolio',
			'description' => 'Postfess case study by Chris Horak.',
			'keywords' => 'portfolio, postfess, case study',
			'header_class' => 'page-header--small'
		]);
	}
}