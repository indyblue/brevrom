<?php
$solo = 0;
if(isset($_GET['solo'])) $solo = $_GET['solo'];
if($solo==0){
?>

   <table> <tr> <td:A1>
      <p:BodyL><s:VR>V. </s>Jube, domne <sr>(vel</s> Dómine<sr>)</s> benedícere.</p>
     </td> <td:B1>
      <p:BodyE><s:VR>V. </s>Pray, sir <sr>(or</s> O Lord<sr>)</s> a blessing.</p>
   </td> </tr> </table>

<?php
} else {
?>

   <table> <tr> <td:A1>
      <p:BodyL><s:VR>V. </s>Jube, Dómine benedícere.</p>
     </td> <td:B1>
      <p:BodyE><s:VR>V. </s>Pray, O Lord a blessing.</p>
   </td> </tr> </table>

<?php
}
?>

