<style>
	.hide > * { height:0px; overflow:hidden; }
	.show { height:auto; display:block; }
	#clicky-num span {
		display:inline-block;
		width:3em;
		border:1px solid green;
		border-radius:3px;
		text-align:center;
	}

	.Head2Ps 
	body {counter-reset:ps;}
	.psalm { counter-reset: line 2; counter-increment: ps; }
	.BodyL { counter-increment: line; }
	.BodyL.show:before { 
		content:counter(ps) ":" counter(line) " "; 
    -webkit-user-select: none;
	}

	.BodyLDrop.show:before { 
		content:counter(ps) ":1 "; 
    -webkit-user-select: none;
	}
	.BodyLDrop.show::first-letter {
    font-family: inherit;
    font-size: inherit;
    vertical-align: inherit;
	}
</style>
<input id='ps-search'/><br/>
<?php
echo "<div id='clicky-num'>";
for($i=1;$i<=150;$i++){
	echo "<span data-num='ps-$i'> $i </span>";
}
echo "</div>";

for($i=1;$i<=150;$i++){
	echo "<div class='psalm hide' id='ps-$i'>";
	psalm($i);
	reading('vr/gloria_patri-s.php',0);
	echo "</div>";
}

?>

<script>
	var cnum = document.querySelector('#clicky-num');
	cnum.addEventListener('click', function(e){
		var ds = e.target.dataset, ps=null;
		if('num' in ds) ps = document.querySelector('#'+ds.num);
		if(ps!==null) ps.classList.toggle('hide');
		var psvis = document.querySelectorAll('.psalm:not(.hide)');
		for(var i=0;i<psvis.length;i++){
			if(psvis[i]!==ps) psvis[i].classList.add('hide');
		}
	});
</script>
