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
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<a href="lender.php" >Lender Form Different Design</a>
<form class="form-card">
    <fieldset class="form-fieldset">
        <legend class="form-legend">Lender Onboarding Criteria</legend>
        <div class="form-element form-input">
            <input id="coname" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="coname">Company Name</label>
        </div>
        <div class="form-element form-input">
            <input id="addln1" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="addln1">Address</label>
        </div>
        <div class="form-element form-input">
            <input id="addln2" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="addln2">Address Line 2</label>
        </div>
        <div class="form-element form-input">
            <input id="city" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="city">City</label>
        </div>
        <div class="form-element form-select">
            <select id="province" class="form-element-field">
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
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="province">Select your Province</label>
        </div>
        <div class="form-element form-input">
            <input id="postalcode" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="postalcode">Postal Code</label>
        </div>
        <div class="form-element form-select">
            <select id="country" class="form-element-field">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="CA">Canada</option>
                                    <option value="US">USA</option>
                                  
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="country">Select your Country</label>
        </div>
        <div class="form-element form-input">
            <input id="phonenumber" class="form-element-field" type="tel" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="phonenumber">Phone Number</label>
        </div>
        <div class="form-element form-input">
            <input id="contactname" class="form-element-field" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="contactname">Contact Name</label>
        </div>
        <div class="form-element form-input">
            <input id="email" class="form-element-field" type="email" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="email">Email</label>
        </div>
        <div class="form-element form-select">
            <select id="province" class="form-element-field">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="fifth">5</option>
                              
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="province">Select your Province</label>
        </div>
        <div class="form-element form-input">
            <input id="website" class="form-element-field" type="url" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="website">Website</label>
        </div>
        <div class="form-element form-input">
            <input id="lender_admin" class="form-element-field" type="text" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="lender_admin">Lender Adminstrator</label>
        </div>
        <div class="form-element form-input">
            <input id="mortgage_brok" class="form-element-field" type="text" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="mortgage_brok">Mortgage Brokerage</label>
        </div>
        <div class="form-element form-input">
            <textarea id="lend_criteria" class="form-element-field"></textarea>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="lend_criteria">Lending Criteria</label>
        </div>
        <div class="form-checkbox form-checkbox-inline">
            <div class="form-checkbox-legend">Documents Required</div>
            <label class="form-checkbox-label">
                <input name=rap class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Rap</span>
            </label>
            <label class="form-checkbox-label">
                <input name=pop class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Pop</span>
            </label>
            <label class="form-checkbox-label">
                <input name=rock class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Rock</span>
            </label>
            <label class="form-checkbox-label">
                <input name=metal class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Metal</span>
            </label>
            <label class="form-checkbox-label">
                <input name=r_b class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>R&amp;B</span>
            </label>
        </div>
        <div class="form-element form-select">
            <select id="assets" class="form-element-field">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="fifth">5</option>
                              
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="assets">Assets</label>
        </div>
        <div class="form-checkbox form-checkbox-inline">
            <div class="form-checkbox-legend">Geographic Boundaries</div>
            <label class="form-checkbox-label">
                <input name=rap class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>North</span>
            </label>
            <label class="form-checkbox-label">
                <input name=pop class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>South</span>
            </label>
            <label class="form-checkbox-label">
                <input name=rock class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>East</span>
            </label>
            <label class="form-checkbox-label">
                <input name=metal class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>West</span>
            </label>
           
        </div>
        <div class="form-element form-select">
            <select id="loantypes" class="form-element-field">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="fifth">5</option>
                              
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="loantypes">Loan Types</label>
        </div>
        <div class="form-element form-input">
            <input id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class="form-element-field" type="text" required  data-type="currency" min="0" name="loanamt"/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="currency-field">Loan Amount</label>
        </div>
        <div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
  <p>Interest Rate <span id="demo"></span></p>
</div>
<div class="form-element form-input">
            <input id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class="form-element-field" type="text" required  data-type="currency" min="0" name="lend_fees"/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="currency-field">Lending Fees</label>
        </div>
<div class="form-element form-select">
            <select id="lend_terms" class="form-element-field">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="first">0-12 months</option>
                                    <option value="second">13-18 months</option>
                                    <option value="third">19-24 months</option>
                                    <option value="fourth">25-36 months</option>
                                    <option value="fifth">37-48 months</option>
                                    <option value="sixth">49-60 months</option>
                              
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="lend_terms">Lending Terms</label>
        </div>
        <div class="form-element form-input">
            <input id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class="form-element-field" type="text" required  data-type="currency" min="0" name="depreq"/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="currency-field">Deposit Requirements</label>
        </div>
        <div class="form-element form-input">
            <input id="date_submit" class="form-element-field" type="date" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="date_submit">Date for Submissions</label>
        </div>
       <div id="signArea">
        <h2 class="tag-info"> Signature</h2>

        <div class="sig sigWrapper" style="height: auto;">
          <div class="typed">

          </div>
          <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
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
        
       
    </fieldset>
    <div class="form-actions">
        <button class="form-btn" type="submit">Submit</button>
        <button class="form-btn-cancel -nooutline" type="reset">Cancel</button>
    </div>
</form>
<script>
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
</body></html>