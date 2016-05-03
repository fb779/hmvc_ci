<?php
	$this->parser->parse("templates/header.php", $dt);
	if (isset($dt['navigate'])){
		$this->parser->parse("templates/navigation.php", $dt);
	}
	
	if (isset($page)){
		$this->parser->parse($page, $dt_page);
	} 

	$this->parser->parse("templates/footer.php", array());

	// $this->load->view("templates/header.php");
	// $this->load->view("templates/navigation.php");
	// $this->load->view($page, $dt);
	// $this->load->view("templates/footer.php");
