<?php


class SomeClass {
	

	public $hitSubmit = '';

	public function blahSubmit() {
		$this->hitSubmit = 'you hit the submit button';
		return;
	}
	
	
	
	
	public function showForm() { 
	
	
		if (isset($_POST['submit'])) {
			$this->blahSubmit();
		}				
		?>
		
	
		<form method="post" action="">
			<h1>Stuff here</h1>
			<input type="submit" name="submit" value="Submit">
		</form>
		
		<?php echo $this->hitSubmit; ?>
		
	<?php	
	} // showForm
	
	
	
		
} // class

$someClass = new SomeClass();
$someClass->showForm();