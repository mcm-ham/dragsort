<?php
	if ($_POST) {
		$vals = explode("|", $_POST["ids"]);
		for ($idx = 0; $idx < count($vals); $idx+=1) {
			$id = $vals[$idx];
			$ordinal = $idx;
			//...
		}
		return;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<style type="text/css">
		body { font-family:Arial; font-size:12pt; padding:20px; width: 800px; margin:20px auto; border:solid 1px black; }
		h1 { font-size:16pt; }
		h2 { font-size:13pt; }
		ul { width:350px; list-style-type: none; margin:0px; padding:0px; }
		li { float:left; padding:5px; width:100px; height:100px; }
		li div { width:90px; height:50px; border:solid 1px black; background-color:#E0E0E0; text-align:center; padding-top:40px; }
		.placeHolder div { background-color:white!important; border:dashed 1px gray !important; }
	</style>
</head>
<body>
    <div>
        
        <h1>jQuery List DragSort PHP Example</h1>
	    
	    <a href="http://dragsort.codeplex.com/">Homepage</a><br/>
	    <br/>
        
        <h2>Save list order with ajax:</h2>
        
        <ul id="gallery">
			<?php
				$list = array("blue", "orange", "brown", "red", "yellow", "green", "black", "white", "purple");
				for ($idx = 0; $idx < count($list); $idx+=1) {
					echo "<li itemID='" . $idx . "'>";
					echo "<div>" . $list[$idx] . "</div>";
					echo "</li>";
				}
			?>
		</ul>
		
		<script type="text/javascript" src="jquery.dragsort.js"></script>
		<script type="text/javascript">
		    $("#gallery").dragsort({ dragSelector: "div", dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

		    function saveOrder() {
		        var serialStr = "";
		        $("#gallery li").each(function(i, elm) { serialStr += (i > 0 ? "|" : "") + $(elm).attr("itemID"); });
		        $.post("example.php", { ids: serialStr });
		    };
	    </script>
        
        <div style="clear:both;"></div>
    </div>
</body>
</html>
