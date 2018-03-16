<!DOCTYPE html>
<html>

<body>

<form id="regForm" method="POST" action="submit.php" enctype="multipart/form-data">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <p>Email::<input type="email" placeholder="Email..." oninput="this.className = ''" name="email"></p>
    <p>Password:<input type="password" placeholder="Password" oninput="this.className = ''" name="password"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input type="text" placeholder="FirstName...MiddleName...LastName..." oninput="this.className = ''" name="name"></p>
    <p><input type="number" placeholder="Phone-No..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input type="date" placeholder="dd" oninput="this.className = ''" name="dd"></p>
    
  </div>
  <div class="tab"><b>Vehicle Details:</b><br>
    <p>Vehicle-No:<input placeholder="Vehicle No..." oninput="this.className = ''" name="vehicle-no"></p>
    <p>RFID-No:<input placeholder="RFID No..." oninput="this.className = ''" name="rfid-no"></p>
    <p>Vehicle-Type<input placeholder="Vehicle Type..." name="vehicle-type"></p>
    <p>Vehicle-Category:<input placeholder="Vehicle Category..."  name="vehicle-category"></p>
    <p>Vehicle-Company:<input placeholder="Vehicle-Company..."  name="vehicle-company"></p>
    <p>Vehicle-Model:<input placeholder="Vehicle Model..."  name="vehicle-model"></p>
    <p>Vehicle-Color:<input placeholder="Vehicle Color..."  name="vehicle-color"></p>
  </div>
  <div class="tab"><b>Upload</b>
    <p>Vehicle Paper:<input type="file" name="imgx" id="imgx" required></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button name="pre" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button name="subing" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  <div id="lasts" style="display:none;text-align: center;">
  <button name="submitting">Submit</button>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("lasts").style.display='inline';
    document.getElementById("nextBtn").style.display='none';
  } else {
    document.getElementById("nextBtn").style.display='inline';
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  if(currentTab==0)
  {
    var st=y[0].value;
    var pt=y[1].value;
    if(st.indexOf('@')==-1 || st.indexOf('.')==-1 || st.indexOf('.')<st.indexOf('@')|| st.indexOf('.')==st.indexOf('@')+1)
     {
        y[0].className+=" invalid";
        alert('Invalid E-mail');
        valid=false;
    }
    if(pt.length<8)
    {
      y[0].className+=" invalid";
        alert('password length must be greater than 7');
        valid=false;
    }
    
  }
  if(currentTab==1)
  {
    var ip=y[0].value;
    console.log(ip.split(' ').length);
    if(ip.split(" ").length!=3)
    { 
      y[0].className+=" invalid";
      alert('enter first middle and lastname');
      valid=false;
    }
    var num=y[1].value;
    if(num.length!=10)
    {
      y[1].className+=" invalid";
      alert('Enter valid mobile no');
      valid=false;
    }
  }

  /*
  for (i = 3; i < y.length-1; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  */
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
