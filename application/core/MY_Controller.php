<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MY_Controller extends CI_Controller { 
    public function __construct(){ 
        parent::__construct(); 
        debug('checking login status...');
        debug($this->session);
        
        
        
        //if (empty($this->session->userdata)) redirect('/auth');
    } 
    
}
