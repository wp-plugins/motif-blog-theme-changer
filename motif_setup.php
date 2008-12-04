<div class="wrap">
<h2>Setup Themes</h2>

<p>Available Themes</p>
<?php
if(count($this->themes)>0){
	
	foreach($this->themes as $theme){
		echo "<p>";
		echo "<img src=\"". get_option('siteurl') . "/" . $theme['Stylesheet Dir'] . "/"  . $theme['Screenshot'] ."\" alt=\"Current theme preview\" />";
		echo "</p>";
	}
}
?>
</div>