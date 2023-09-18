<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        // Load the 'tsa1_config' config file
        $this->config->load('tsa1_config', true);
        
        // Get the Pokemon data from the config file
        $pokemonData = $this->config->item('tsa1_poke', 'tsa1_config');
        
        // Load the 'welcome_message' view and pass the Pokemon data to it
        $data['pokemonData'] = $pokemonData;
        $this->load->view('welcome_message', $data);
    }
}
