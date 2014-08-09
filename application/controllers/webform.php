<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webform extends CI_Controller {

	/*
		This is a web designers webform to ask questions to their 
	*/




	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session','table', 'form_validation','email'));
	}


	public function index()
	{
		$this->load->view('webform');
	}

	public function send()
	{
		// Config
		$main_email = 'Your email address'; // Your email address to specify to and from address
		$subject 	= 'please choose a subject'; // Please choose a subject for the email
		$site_name	= 'Site name'; // Site name for the email headers

		$this->form_validation->set_rules('domain', 'Domain name', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('name', 'Name', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|xxs_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('deadline', 'Deadline', 'trim|xxs_clean');
		$this->form_validation->set_rules('content_is', 'Where is the content', 'trim|xxs_clean');
		$this->form_validation->set_rules('company_nature', 'What is the nature of the business', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('company_services', 'Company services', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('no_pages', 'Number of pages', 'trim|xxs_clean');
		$this->form_validation->set_rules('target', 'Target audience', 'trim|xxs_clean');
		$this->form_validation->set_rules('marketing_materials', 'Marketing materials', 'trim|xxs_clean');
		$this->form_validation->set_rules('company_message', 'Company message', 'trim|xxs_clean');
		$this->form_validation->set_rules('design_elements', 'Design elements', 'trim|xxs_clean');
		$this->form_validation->set_rules('interactivity', 'Interactivity', 'trim|xxs_clean');
		$this->form_validation->set_rules('look_feel', 'Look and feel', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('liked_sites', 'Liked sites', 'required|trim|xxs_clean');
		$this->form_validation->set_rules('like_navigation', 'Liked navigation', 'trim|xxs_clean');
		$this->form_validation->set_rules('liked_colours', 'Liked colours', 'trim|xxs_clean');
		$this->form_validation->set_rules('competitor_sites', 'Competitor sites', 'trim|xxs_clean');
		$this->form_validation->set_rules('your_slogan', 'Your slogan', 'trim|xxs_clean');
		$this->form_validation->set_rules('colours', 'Colours', 'trim|xxs_clean');
		$this->form_validation->set_rules('notes', 'Notes', 'trim|xxs_clean');
		$this->form_validation->set_error_delimiters('<p class="text-danger"><small>', '</small></p>');




		$domain				= 	$this->input->post('domain');
		$name 				= 	$this->input->post('name');
		$address 			= 	$this->input->post('address');
		$email 				= 	$this->input->post('email');
		$phone 				= 	$this->input->post('phone');

		$services 			= 	array(
			'webdesign'		=>	$this->input->post('webdesign'),
			'website_repair'	=> 	$this->input->post('website_repair'),
			'redesign'		=>	$this->input->post('redesign'),
			'e_commerce'		=>	$this->input->post('e_commerce'),
			'cms_design'		=>	$this->input->post('cms_design'),
			'logo_design'	=> 	$this->input->post('logo_design'),
			);
		
		$deadline			=	$this->input->post('deadline');
		$phases				=	$this->input->post('phases');
		$existing_content	=	$this->input->post('existing_content');
		$content_is			=	$this->input->post('content_is');
		$company_nature		=	$this->input->post('company_nature');
		$company_services	=	$this->input->post('company_services');
		$no_pages			=	$this->input->post('no_pages');
		$target_aud			=	$this->input->post('target_aud');
		$marketing_materials=	$this->input->post('marketing_materials');
		$company_message	=	$this->input->post('company_message');
		$design_elements	=	$this->input->post('design_elements');
		$interactivity		=	$this->input->post('interactivity');
		$look_feel			=	$this->input->post('look_feel');
		$liked_sites		=	$this->input->post('liked_sites');
		$like_navigation	=	$this->input->post('like_navigation');
		$liked_colours		=	$this->input->post('liked_colours');
		$site_layout		=	$this->input->post('site_layout');
		$competitor_sites	=	$this->input->post('competitor_sites');
		$logo				= 	$this->input->post('logo');
		$your_slogan		=	$this->input->post('your_slogan');
		$colours 			=	$this->input->post('colours');
		$maintinance		=	$this->input->post('maintinance');
		$updates			=	$this->input->post('updates');
		$notes				=	$this->input->post('notes');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['message'] = '<div class="alert alert-danger"><p class="text-center"><strong>Something went wrong!</strong><br/> Please check and try again.</p></div>';
			$this->load->view('webform', $data);
		}
		else
		{
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';

			$this->email->initialize($config);

			$this->email->from($main_email, $site_name);
			$this->email->to($main_email); 			
			$this->email->subject($subject);
			$this->email->message(
				
				'<h3>General Information</h3>' .
				'<strong>Name:</strong><br/>' 		. $name  	. '<br/><br/>' . 
				'<strong>Address:</strong><br/>' 	. $address 	. '<br/><br/>' . 
				'<strong>Email:</strong><br/>' 		. $email 	. '<br/><br/>' . 
				'<strong>Phone:</strong><br/>' 		. $phone 	. '<br/><br/>' .
				
				'<h3>Services</h3>' .
				$services['webdesign'] . ', ' . $services['website_repair'] . ', ' . $services['redesign'] . ', ' . $services['e_commerce'] .', ' . $services['cms_design'] . ', ' . $services['logo_design'] .'<br/><br/>' .

				'<h3>Important Information</h3>' .
				'<strong>Domain Name:</strong><br/>' . $domain . '<br/><br/>' .
				'<strong>Is there a deadline:</strong><br/>' . $deadline. '<br/><br/>' .
				'<strong>Is the project to be broken down into phazes:</strong><br/>' . $phases . '<br/><br/>' .
				'<strong>Will we be using existing content:</strong><br/>' . $existing_content . '<br/><br/>' .
				'<strong>If so where is the content:</strong><br/>' . $content_is . '<br/><br/>' .

				'<h3>Background Information</h3>' .
				'<strong>What is the nature of the business:</strong><br/>' . $company_nature . '<br/><br/>' .
				'<strong>What are the services that the company provides:</strong><br/>' . $company_services . '<br/><br/>' .
				'<strong>How many pages do you anticipate the site having:</strong><br/>' . $no_pages . '<br/><br/>' .
				'<strong>Who is the target audience:</strong><br/>' . $target_aud . '<br/><br/>' .
				'<strong>Do you currently have any marketing materrials:</strong><br/>' . $marketing_materials . '<br/><br/>' .

				'<h3>Goals, Message</h3>' .
				'<strong>What is the primary message you wish to convey:</strong><br/>' . $company_message . '<br/><br/>' .
				'<strong>Do you have any design elements in mind:</strong><br/>' . $design_elements . '<br/><br/>' .
				'<strong>What kind of interactivity will your site need:</strong><br/>' . $interactivity . '<br/><br/>' .

				'<h3>Style, Design Message, Theme</h3>' .
				'<strong>What image do you want the site to project, what should be "the look and feel":</strong><br/>' . $look_feel . '<br/><br/>' .
				'<strong>List some sites you like the look of:</strong><br/>' . $liked_sites . '<br/><br/>' .
				'<strong>List some sites you like the look of the navigation:</strong><br/>' . $like_navigation . '<br/><br/>' .
				'<strong>List some sites you like the colours of:</strong><br/>' . $liked_colours . '<br/><br/>' .
				'<strong>List some sites you like the layout of:</strong><br/>' . $site_layout . '<br/><br/>' .
				'<strong>List some competitor sites:</strong><br/>' . $competitor_sites . '<br/><br/>' .

				'<h3>Logo and Corporate Identity</h3>' .
				'<strong>Do you have a company logo:</strong><br/>' . $logo . '<br/><br/>' .
				'<strong>Do you have a slogan or mission statment:</strong><br/>' . $your_slogan . '<br/><br/>' .
				'<strong>What are your company colours:</strong><br/>' . $colours . '<br/><br/>' .

				'<h3>Maintinance</h3>' .
				'<strong>Who will be maintaining the site:</strong><br/>' . $maintinance . '<br/><br/>' .
				'<strong>How often will the site be updated:</strong><br/>' . $updates . '<br/><br/>'.

				'<h3>Additional Notes/Comments</h3>' . $notes . '<br/><br/>' 

				);

			$this->email->send();

			// On Success
			$this->session->set_flashdata('message', '<div class="alert alert-success"><p class="text-center"><strong>Message Sent!!!</strong><br/>Thank you for completing the questionnaire. This will help us to better understand your needs and streamline the process more effectivly. If in the meantime you have any questions please get in touch.</p></div>');
			redirect('');
		}

		
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */