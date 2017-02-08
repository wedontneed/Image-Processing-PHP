<html>
<form enctype="multipart/form-data" action="main.php" method="POST">
File:
<input type="file" name="dosya" id="dosya">
<br>
Choose filter type:
<select name="function">
  <option value="Select">Select</option>}
  <option value="bwf">Black and White(256 colors)</option>
  <option value="bw01f">Black and White(2 colors)</option>
  <option value="nr">No Red</option>
  <option value="ng">No Green</option>
  <option value="nb">No Blue</option>
  <option value="inv">Inverse</option>
  <option value="orf">Only Red</option>
  <option value="ogf">Only Green</option>
  <option value="obf">Only Blue</option>
  <option value="srp">Surprise</option>
</select> 
<input type="submit" name="submit">
</form>
</html>