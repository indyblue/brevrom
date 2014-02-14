<p:Rubric><?php 
echo $content; 
if($nr) echo ', <s:NonRubric>' . $nr . '</s>, ';
?> as in <?php echo $location ?>, <s:NonRubric>p. <text:bookmark-ref text:reference-format="page" text:ref-name=<?php echo '"'.$link.'"' ?>/></s></p>
