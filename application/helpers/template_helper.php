<?php 

function template_view($view, $data = null)
{
    $ci = get_instance();
    $ci->load->view('templates/header', $data);
	$ci->load->view('templates/navbar', $data);
	$ci->load->view('templates/sidebar', $data);
	$ci->load->view($view, $data);
	$ci->load->view('templates/footer', $data); 
}

function activeMenu($page, $page2 = null)
{
	$ci = get_instance();

	$uri = $ci->uri->segment(1);

	if($page == $uri || $page2 == $uri) {
		return 'active';
	} 
}