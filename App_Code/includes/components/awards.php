<p>Outputs awards based on meta data/ taxonomy, program or individual awards selected. Multiple links should be allowed if necessary.</p>

<?php
	$awards = [
		[
			"title" => "Accounting",
			"url" => "#",
			"type" => "Associate of Science"
		],
		[
			"title" => "Accounting",
			"url" => "#",
			"type" => "Certificate of Achievement"
		],	
		[
			"title" => "Bookkeeping",
			"url" => "#",
			"type" => "Associate of Science"
		],
		[
			"title" => "Bookkeeping",
			"url" => "#",
			"type" => "Certificate of Achievement"
		]
	];
	academic_awards($awards, 'bg-gray-200');
?>
