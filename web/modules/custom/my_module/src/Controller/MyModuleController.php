<?php

namespace Drupal\my_module\Controller;




class MyModuleController 
{
	public function hello()
	{
		
		return array(
      '#theme' => 'my-template',
      '#test_var' => 'testing new value',
    );
	
	}

	
		
}