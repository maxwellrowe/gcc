<aside id="ap-controller">
	<span class="h5 d-block mb-2">Search &amp; Filter</span>
	<form>
		<input type="text" class="form-control mb-2" id="ap-controller-search" placeholder="Search..." aria-label="Search Programs">
		
		<button class="btn btn-link p-0 mt-2 mb-1 fw-bold text-dark text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#ap-controller-awards" aria-expanded="true" aria-controls="ap-controller-awards">
			<span class="fa-sharp fa-regular fa-angle-down"></span> Award Types
		</button>
		<div class="collapse show" id="ap-controller-awards">
			<div class="form-check mb-1">
				<input class="form-check-input" type="checkbox" value="award-aa" id="ap-controller-award-aa">
				<label class="form-check-label" for="ap-controller-award-aa">
					Associate of Arts
				</label>
			</div>
			<div class="form-check mb-1">
				<input class="form-check-input" type="checkbox" value="award-as" id="ap-controller-award-as">
				<label class="form-check-label" for="ap-controller-award-as">
					Associate of Science
				</label>
			</div>
			<div class="form-check mb-1">
				<input class="form-check-input" type="checkbox" value="award-ast" id="ap-controller-award-ast">
				<label class="form-check-label" for="ap-controller-award-ast">
					Associate Degree for Transfer
				</label>
			</div>
			<div class="form-check mb-1">
				<input class="form-check-input" type="checkbox" value="award-coa" id="ap-controller-award-coa">
				<label class="form-check-label" for="ap-controller-award-coa">
					Certificate of Achievement
				</label>
			</div>
			<div class="form-check mb-1">
				<input class="form-check-input" type="checkbox" value="award-sc" id="ap-controller-award-sc">
				<label class="form-check-label" for="ap-controller-award-sc">
					Skills Certificate
				</label>
			</div>
		</div>
		
		<button class="btn btn-link p-0 mt-2 mb-1 fw-bold text-dark text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#ap-controller-lpp" aria-expanded="true" aria-controls="ap-controller-lpp">
			<span class="fa-sharp fa-regular fa-angle-down"></span> Learning &amp; Professional Pathways
		</button>
		<div class="collapse show" id="ap-controller-lpp">
			<?php
			$lpps = get_academic_lpps();
			foreach($lpps as $item) {
			?>
				<div class="form-check mb-1">
					<input class="form-check-input" type="checkbox" value="lpp-<?php echo $item->id; ?>" id="ap-controller-lpp-<?php echo $item->id; ?>">
					<label class="form-check-label ap-controller-lpp-label-<?php echo $item->id; ?>" for="ap-controller-lpp-<?php echo $item->id; ?>">
						<span></span> <?php echo $item->lpp; ?>
					</label>
				</div>
			<?php } ?>
		</div>
		
		<button class="btn btn-link p-0 mt-2 mb-1 fw-bold text-dark text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#ap-controller-divisions" aria-expanded="false" aria-controls="ap-controller-divisions">
			<span class="fa-sharp fa-regular fa-angle-down"></span> Divisions
		</button>
		<div class="collapse" id="ap-controller-divisions">
			<?php
			$divisions = get_academic_divisions();
			foreach($divisions as $item) {
			?>
				<div class="form-check mb-1">
					<input class="form-check-input" type="checkbox" value="division-<?php echo $item->id; ?>" id="ap-controller-division-<?php echo $item->id; ?>">
					<label class="form-check-label ap-controller-division-label-<?php echo $item->id; ?>" for="ap-controller-division-<?php echo $item->id; ?>">
						<span></span> <?php echo $item->name; ?>
					</label>
				</div>
			<?php } ?>
		</div>
	</form>
</aside>