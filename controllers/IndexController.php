<?php
/**
 * Controller to handle pages located at /
 *
 * @author Chris Horak <chris@chrishorak.com>
 */

class IndexController extends Controller
{
	public function index()
	{
		$this->template->setView('index/index');
		$this->template->setProperties([
			'title' => 'Home',
			'description' => 'The portfolio of Chris Horak, a web designer and developer.',
			'keywords' => 'branding, social media, seo, php, portfolio, resume',
			'header_class' => 'page-header--home',
			'header_headline' => 'Chris Horak',
			'header_description' => 'Web Designer, Developer &amp; Internet Enthusiast'
		]);
	}
}