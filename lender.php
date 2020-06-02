<!DOCTYPE html>
<html>
<head>
<title> Lender Form</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="../assets/jquery.signaturepad.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/numeric-1.2.6.min.js"></script> 
<script src="assets/bezier.js"></script> 
<script src="jquery.signaturepad.js"></script>
<script src="json2.min.js"></script>
<link rel="stylesheet" href="style2.css"/>
</head>
<body>

<div class="wrapper">
  <div class="container">
    <h1>Lender Onboarding Criteria</h1>
    <form>
    <div class="form-group">
    <input type="text" class="form-control" id="coname">
          <label for="coname">Company Name</label>
          <div class="line"></div>
      </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="addln1">
          <label for="addln1">Address</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="text" class="form-control" id="addln2">
          <label for="addln2">Address Line 2</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="city">
          <label for="city">City</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="province" class="form-control">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
            </select>
          <label for="province">Province</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="postal">
          <label for="postal">Postal Code</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
        <select id="country" class="form-control">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="US">CANADA</option>
                                    <option value="USA">USA</option>
                                   
            </select>
          <label for="country">Country</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
        <input id="phonenumber" class="form-control" type="tel" required/>
          <label for="postal">Phone Number</label>
          <div class="line"></div>                
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="contname">
          <label for="contname">Contact Name</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="email" class="form-control" id="contemail">
          <label for="contemail">Contact Email</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        
        <div class="form-group col-md-6">
        <select id="login" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                  
            </select>
          <label for="login">No. of Access Login    </label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
          <input type="url" class="form-control" id="website">
          <label for="website">Website</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="lend_admin">
          <label for="lend_admin">Lender Adminstrator</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="text" class="form-control" id="mort_brok">
          <label for="mort_brok">Mortgage Brokerage</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="5"></textarea>
        <label>Lending Criteria</label>
        <div class="line"></div>
      </div>
      <div class="form-row">
        
        <div class="form-group col-md-6">
        <label>Documents Required  </label><br>

        <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
       
          <!-- <div class="line"></div> -->
        </div>
        <div class="form-group col-md-6">
        <label>Geographic Boundaries</label><br>

        <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">North</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">South</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">East</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">West</label>
</div>
        </div>
</div>
        <div class="form-row">
        
        <div class="form-group col-md-6">
        <select id="assets" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                  
            </select>
          <label for="assets">Assets Class </label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="loan_type" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                  
            </select>
          <label for="loan_type">Loan Types </label>
          <div class="line"></div>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" min="0" name="loanamt">
          <label for="currency-field">Loan Amount</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
        <p>Interest Rate <span id="demo"></span></p>
        <div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
  </div>
        </div>
        <div class="form-group col-md-4">
      
          <input type="text" class="form-control" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" min="0" name="lend_fees">
          <label for="currency-field">Lending Fees</label>
          <div class="line"></div>               
        </div>
      </div>

      <div class="form-row">
        
        <div class="form-group col-md-6">
        <select id="lend_terms" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">0-12 months</option>
                                    <option value="two">13-18 months</option>
                                    <option value="three">19-24 months</option>
                                    <option value="four">25-36 months</option>
                                    <option value="five">37-48 months</option>
                                    <option value="six">49-60 months</option>
                                  
            </select>
          <label for="lend_terms">Lending Terms </label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="text" class="form-control" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" min="0" name="dep_req">
          <label for="currency-field">Deposit Requirements</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        
        <div class="form-group col-md-6">
        <label for="curr_date">Date</label>
        <input id="curr_date" class="form-control" type="date" required/>
         
          <div class="line"></div>  
        </div>
        <div class="form-group col-md-6">
        <div id="signArea">
        <!-- <h2 class="tag-info"> Signature</h2> -->
        <label>Signature </label>
        <div class="sig sigWrapper" style="height: auto;">
          <div class="typed">

          </div>
          <canvas class="sign-pad" id="sign-pad" width="550" height="100"></canvas>
      </div>
       </div>
        <button id="btnSaveSign">Save Signature</button>
      <div class="sign-container">
        <?php
        $image_list=glob("./doc_signs/*.png");
        foreach($image_list as $image){
          ?>

          <img src="<?php echo $image; ?>" class="sign-preview"/>
          <?php
        }
        ?>

      </div>
        </div>
      </div>


      <!-- <div class="form-group">
        <input type="text" class="form-control" id="inputAddress">
        <label for="inputAddress">Address</label>
        <div class="line"></div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="inputAddress2">
        <label for="inputAddress2">Address 2</label>
        <div class="line"></div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="inputCity">
          <label for="inputCity">City</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>State Option 1</option>
            <option>State Option 2</option>
          </select>
          <label for="inputState">State</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputZip">
          <label for="inputZip">Zip</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="8"></textarea>
        <label>A little about yourself...</label>
        <div class="line"></div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div> -->
    </form>
  </div>
</div>
<script>
function checkValue(element) {
  // check if the input has any value (if we've typed into it)
  if ($(element).val())
    $(element).addClass('has-value');
  else
    $(element).removeClass('has-value');
}

$(document).ready(function() {
  // Run on page load
  $('.form-control').each(function() {
    checkValue(this);
  })
  // Run on input exit
  $('.form-control').blur(function() {
    checkValue(this);
  });

});
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});

$("#btnSaveSign").click(function(e){
html2canvas([document.getElementById('sign-pad')], {
onrendered: function (canvas) {
var canvas_img_data = canvas.toDataURL('image/png');
var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
//ajax call to save image inside folder
$.ajax({
url: 'save_signs.php',
data: { img_data:img_data },
type: 'post',
dataType: 'json',
success: function (response) {
window.location.reload();
}
});
}
});
});

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});
function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}




</script>
</body>
</html>
