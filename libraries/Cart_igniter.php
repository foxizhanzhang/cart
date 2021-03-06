<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Cart Igniter Library
*
* @package		Cart Igniter
* @subpackage	Cart Igniter Library
* @author		Brennan Novak
* @link			http://social-igniter.com/pages/modules/cart
*
*
*/
class Cart_igniter
{
	function __construct()
	{
		$this->ci =& get_instance();
		
		// Configs
		$this->ci->load->config('cart');

		// Models
		$this->ci->load->model('cart_model');

		// Libraries
        $this->ci->load->library('cart');

		// Variables
		$this->deed_categories	= $this->ci->config->item('name');
		$this->site_id			= $this->ci->config->item('site_id');
	}	
		
	
	function render_sidebar_cart()
	{
		$this->data['cart_contents'] = $this->ci->cart->contents();

		return $this->ci->load->view('partials/sidebar_cart', $this->data, true);
	}
	
	
	function render_widget_quad()
	{
		$this->data = '';
	
		return $this->ci->load->view('partials/widget_quad', $this->data, true);
	}
	
}