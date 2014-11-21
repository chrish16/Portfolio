<?php
/**
 * Controller to handle pages located at /resume
 *
 * @author Chris Horak <chris@chrishorak.com>
 */

class ResumeController extends Controller
{
	public function index()
	{
		$this->template->setView('resume/index');
		$this->template->setProperties([
			'title' 				=> 'Resume',
			'description' 			=> 'View the resume of Chris Horak, a web designer and developer.',
			'keywords'				=> 'resume',
			'header_headline' 		=> 'Resume',
			'header_description' 	=> 'Here are my qualifications.'
		]);
	}
}