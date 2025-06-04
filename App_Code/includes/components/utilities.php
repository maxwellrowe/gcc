<p>The following can be applied to most any component. For each component that is built if there can be the following <strong>Advanced Options</strong>. The following would wrap the component code, eg:</p>
<pre class="bg-gray-300 p-3 rounded">
<code>
&lt;div class=&quot;[Match Height] [Custom Class] [Animation Class] [Animation Delay Class]&quot; style=&quot;padding: [Padding]; margin: [Margin];&quot;&gt;
  &lt;p&gt;Component Code Here...&lt;/p&gt;
&lt;/div&gt;
</code>
</pre>
<p><strong>Advanced Options</strong>
<ul>
	<li>Match Height</li>
	<li>Animation</li>
	<li>Padding</li>
	<li>Margin</li>
	<li>Custom Class</li>
	
</ul>
<h3>Match Height</h3>
<p><strong>Options:</strong></p>
<table class="table">
	<thead>
		<tr>
			<th>Class</th>
			<th>Function</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>match-height-none</td>
			<td>Default, no matching height.</td>
		</tr>
		<tr>
			<td>match-height-row</td>
			<td>Matches the height in a row of components/ elements that have this class applied.</td>
		</tr>
		<tr>
			<td>match-height-all</td>
			<td>Matches height on all components/ elements on a page that have this class applied.</td>
		</tr>
	</tbody>
</table>
<p><strong>Example:</strong> Only the initial "div" has a height of 150px set.</p>
<div class="row mb-4 g-3">
	<div class="col">
		<div class="bg-primary match-height-row rounded" style="height: 150px"></div>
	</div>
	<div class="col">
		<div class="bg-primary match-height-row rounded"></div>
	</div>
	<div class="col">
		<div class="bg-primary match-height-row rounded"></div>
	</div>
</div>

<h3>Animation</h3>
<p>We are using the Data AOS animation plugin. Classes can be applied to the wrapper div for animation effects.</p>
<p><strong>Options for Animation:</strong></p>
<table class="table">
	<thead>
		<tr>
			<th>Class</th>
			<th>Function</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>no-gcc-anim</td>
			<td>Default, no animation.</td>
		</tr>
		<tr>
			<td>gcc-anim-fade-up</td>
			<td>Fade up animation.</td>
		</tr>
		<tr>
			<td>gcc-anim-fade</td>
			<td>Fade in animation.</td>
		</tr>
		<tr>
			<td>gcc-anim-fade-down</td>
			<td>Fade down animation.</td>
		</tr>
	</tbody>
</table>
<p><strong>Options for Delay:</strong></p>
<table class="table">
	<thead>
		<tr>
			<th>Class</th>
			<th>Function</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>gcc-anim-delay-0</td>
			<td>Default, no delay.</td>
		</tr>
		<tr>
			<td>gcc-anim-delay-200</td>
			<td>200 ms delay</td>
		</tr>
		<tr>
			<td>gcc-anim-delay-400</td>
			<td>400 ms delay</td>
		</tr>
		<tr>
			<td>gcc-anim-delay-600</td>
			<td>600 ms delay</td>
		</tr>
		<tr>
			<td>gcc-anim-delay-800</td>
			<td>800 ms delay</td>
		</tr>
	</tbody>
</table>
<p><strong>Example:</strong></p>
<div class="row mb-4 g-3">
	<div class="col">
		<div class="bg-primary rounded gcc-anim-fade" style="height: 150px"></div>
	</div>
	<div class="col">
		<div class="bg-secondary rounded gcc-anim-fade-down gcc-anim-delay-400" style="height: 150px"></div>
	</div>
	<div class="col">
		<div class="bg-yellow rounded gcc-anim-fade-up gcc-anim-delay-800" style="height: 150px"></div>
	</div>
</div>

<h3>Padding, Margin and Custom Class</h3>
<table class="table">
	<thead>
		<tr>
			<th>Option</th>
			<th>Field</th>
			<th>Function</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Padding</td>
			<td>Text Field</td>
			<td>Add padding to the style tag in short form, eg 1rem 2rem.</td>
		</tr>
		<tr>
			<td>Margin</td>
			<td>Text Field</td>
			<td>Add margin to the style tag in short form, eg 1rem 2rem.</td>
		</tr>
		<tr>
			<td>Custom Class</td>
			<td>Text Field</td>
			<td>Add one or more custom classes to the component, space separated.</td>
		</tr>
	</tbody>
</table>