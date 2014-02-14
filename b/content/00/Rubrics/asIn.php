<text:p text:style-name="Rubric"><?php 
echo $content; 
if($nr) echo ', <text:span text:style-name="NonRubric">' . $nr . '</text:span>, ';
?> as in <?php echo $location ?>, <text:span text:style-name="NonRubric">p. <text:bookmark-ref text:reference-format="page" text:ref-name=<?php echo '"'.$link.'"' ?>/></text:span></text:p>
