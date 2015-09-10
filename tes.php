<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    else
   {
  var pat= /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;    
             if(pat.test(x))
             {
               alert("Correct");
               return true;
             }  
             else 
              {
               alert("Incorrect");
               return false;
              }}
  } 

</script>
<h2>Email Id Format Checking</h2>
<form name="myForm" onsubmit="return validateForm()" >
Email: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
</body>
</html>
