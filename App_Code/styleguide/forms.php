<form>
  <!-- Text input -->
  <div class="mb-3">
	<label for="exampleText" class="form-label">Text Input</label>
	<input type="text" class="form-control" id="exampleText" placeholder="Enter text">
  </div>

  <!-- Email input -->
  <div class="mb-3">
	<label for="exampleEmail" class="form-label">Email address</label>
	<input type="email" class="form-control" id="exampleEmail" placeholder="name@example.com">
  </div>

  <!-- Password input -->
  <div class="mb-3">
	<label for="examplePassword" class="form-label">Password</label>
	<input type="password" class="form-control" id="examplePassword" placeholder="Password">
  </div>

  <!-- Select -->
  <div class="mb-3">
	<label for="exampleSelect" class="form-label">Select</label>
	<select class="form-select" id="exampleSelect">
	  <option selected>Choose an option</option>
	  <option value="1">Option One</option>
	  <option value="2">Option Two</option>
	  <option value="3">Option Three</option>
	</select>
  </div>

  <!-- Textarea -->
  <div class="mb-3">
	<label for="exampleTextarea" class="form-label">Textarea</label>
	<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Type here..."></textarea>
  </div>

  <!-- Checkboxes -->
  <div class="mb-3">
	<label class="form-label d-block">Checkboxes</label>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="check1">
	  <label class="form-check-label" for="check1">Option 1</label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="check2">
	  <label class="form-check-label" for="check2">Option 2</label>
	</div>
  </div>

  <!-- Radio buttons -->
  <div class="mb-3">
	<label class="form-label d-block">Radio Buttons</label>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="exampleRadios" id="radio1" value="option1" checked>
	  <label class="form-check-label" for="radio1">Radio 1</label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="exampleRadios" id="radio2" value="option2">
	  <label class="form-check-label" for="radio2">Radio 2</label>
	</div>
  </div>

  <!-- Range input -->
  <div class="mb-3">
	<label for="exampleRange" class="form-label">Range</label>
	<input type="range" class="form-range" id="exampleRange">
  </div>

  <!-- File input -->
  <div class="mb-3">
	<label for="formFile" class="form-label">File input</label>
	<input class="form-control" type="file" id="formFile">
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>