<?php
	// Get Programs
	function get_academic_programs() {
		$json = file_get_contents('../App_Code/includes/json/programs.json');
		$programs = json_decode($json); // decode as objects
	
		// Sort by the "program" property
		usort($programs, function ($a, $b) {
			return strcmp($a->program, $b->program);
		});
	
		return $programs; // still objects
	}
	
	// Get LPPs
	function get_academic_lpps() {
		$json = file_get_contents('../App_Code/includes/json/lpps.json');
		$lpps = json_decode($json);
			
		return $lpps;
	}
	
	// Get LPP Name
	function get_academic_lpp_name($id) {
		$json = file_get_contents('../App_Code/includes/json/lpps.json');
		$lpps = json_decode($json);	
		
		foreach ($lpps as $entry) {
			if (isset($entry['id']) && $entry['id'] === $id) {
				return $entry['lpp'];
			}
		}
		
		return null; // or return 'Unknown' or another fallback 
	}
	
	// Divisions
	function get_academic_divisions() {
		$json = file_get_contents('../App_Code/includes/json/divisions.json');
		$divisions = json_decode($json);
			
		return $divisions;
	}
?>