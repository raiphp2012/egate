<!DOCTYPE HTML>
<html>
	<?php $this->load->view('common/head');?>
	<style>
			#ms{
				display:none !important;
			}
	
			#fps{
				display:none !important;
			}

			
/* service */

@media only screen and (min-width: 1024px)
                {
					#s_sub{
						border-radius:5px;
						color: #fff;
    border: 1px solid;
    border-color: #2F9EEC #1988D6 #1988D6;
    background: #2596e6;
   
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2f9eec', endColorstr='#1988d6');
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
					}
					#p_sub{
						border-radius:5px;
					color: black;
    border: 1px solid;
    border-color: silver;
    background:#b9d6eb;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2f9eec', endColorstr='#1988d6');
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
					}
					.name{
					 width: 168px !important;
                     height: 125px;
                    
                     border: none !important;
                     padding: 0 10px;
					}
					#state{
						width:30%;
						background: #fff;
						border: 1px solid #e5e5e5;
						-webkit-border-radius: 2px;
						-moz-border-radius: 2px;
						border-radius: 2px;
						padding: 5px;
						font-size: 13px;
					}

					.tempContDiv input[type="text"], .tempContDiv textarea, .date, .tempContDiv .pdfTextArea, .mSelect select {
						background: #fff;
						border: 1px solid #e5e5e5;
						-webkit-border-radius: 2px;
						-moz-border-radius: 2px;
						border-radius: 2px;
						padding: 5px;
						font-size: 13px;

					}
					.phone .tempContDiv span label, .date .tempContDiv span label, .time .tempContDiv span label, .address .tempContDiv span label, .geolocation .tempContDiv span label, .name .tempContDiv span label {
						font-size: 11px;
						padding-top: 3px;

					}
					.tempFrmWrapper {
						padding: 10px 25px;
					}
ol, ul {
    list-style: none outside none;
}
.leftAlign .tempFrmWrapper .labelName {
    float: left;
    width: 30%;
    line-height: 20px;
    margin-right: 11px;
    vertical-align: baseline;
}
.tempFrmWrapper .labelName {
    font-weight: bold;
    font-size: 13px;
    color: #444;
}
.tempFrmWrapper .tempContDiv {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', "Lucida Grande", Arial,Arimo, Helvetica, sans-serif;
}
.leftAlign .tempFrmWrapper .tempContDiv {
    margin-left: 35% !important;
}

.tempFrmWrapper .tempContDiv {
    margin: 0;
    padding: 0;
    height: 1%;
}
.clearBoth {
    clear: both;
}
.address .tempContDiv .addOne input, .geolocation .tempContDiv .addOne input {
    width: 98%;
}
.leftAlign .address .tempContDiv span.addtwo, .geolocation .tempContDiv span.addtwo {
    width: 48%;
}
.medium .tempContDiv input[type="text"], .medium .tempContDiv textarea, .medium .mSelect select, .medium .tempContDiv .sliderCont, .medium .tempContDiv .pdfTextArea, .medium .tempContDiv .phCodeWrapper {
    width: 75%;
}
.small .tempContDiv .form_sBox {
    width: 50%;
}

.form_sBox {
    border: 1px solid #DDDDDD;
    overflow: hidden;
    background: #fff;
    position: relative;
    min-width: 60px;
    height: 28px;
}
.form_sBox select {
    position: absolute;
    top: 0;
    border: 0;
    width: 110%;
    font-size: 13px;
    /* outline: none; */
    margin: 0;
    appearance: none;
    -moz-appearance: radio-container;
    -webkit-appearance: none;
    background: transparent;
    text-overflow: '';
    webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    min-width: 55px;
    max-width: 100%;
    font-weight: 400;
    font-family: 'Open Sans',"Lucida Grande","Lucida Sans Unicode",Arial,Arimo,Helvetica,sans-serif;
    text-indent: 0.01px;
    padding: 3px;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.form_sBox select {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 13px;
}
.medium .tempContDiv .form_sBox {
    width: 75%;
}
.large .tempContDiv input[type="text"], .large .tempContDiv textarea, .large .mSelect select, .large .tempContDiv .sliderCont, .large .tempContDiv .pdfTextArea, .large .tempContDiv .phCodeWrapper {
    width: 99%;
}
.uploadContainer {
    height: 75px;
    position: relative;
    background: rgba(255,255,255,0.8);
    overflow: hidden;
    border: 1px dotted;
}
.signContainer .signArea, .tempContDiv input[type="file"], .mSelect select {
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #e5e5e5;
}
.tempContDiv input[type="file"] {
    /* outline: none; */
    border: 1px solid #ccc;
    margin: 0 auto;
    padding: 5px;
    width: auto;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 1;
}
.uploadContainer input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 103% !important;
    /* outline: none; */
    opacity: 0;
    margin-left: -15px !important;
    right: 0;
    font-size: 200px;
    top: -20px;
    height: 150%;
}
.uploadContainer .floatText {
    width: 100%;
    height: 100%;
    text-align: center;
    color: #222;
    position: absolute;
    overflow: hidden;
    top: 31%;
}
.pageFotDef{
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
}
.alignSubmit{
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
}
.inlineBlock {
    display: inline-block;
}
.submitColor1 {
    color: #fff;
    border: 1px solid;
    border-color: silver silver silver;
    background: #aad6f5;
    color:black;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2f9eec', endColorstr='#1988d6');
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.submitColor {
    color: #fff;
    border: 1px solid;
    border-color: #2F9EEC #1988D6 #1988D6;
    background: #2596e6;
   
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2f9eec', endColorstr='#1988d6');
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.fmSmtButton {
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    padding: 5px 15px;
    font-weight: 400;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font: 13px 'Open Sans',"Lucida Grande","Lucida Sans Unicode",Arial, Arimo, Helvetica,sans-serif;
}
.fmSmtButton1 {
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    padding: 5px 15px;
    font-weight: 400;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font: 13px 'Open Sans',"Lucida Grande","Lucida Sans Unicode",Arial, Arimo, Helvetica,sans-serif;
}
input, input[type="text"], input[type="search"], isindex, textarea, button {
    /* outline: none; */
    margin: 0 auto;
    padding: 5px 10px;
}
.alignSubmit{
    text-align:center;
}

.form{
    background: #fff;
    border: 1px solid #d6d6d6;
    -webkit-box-shadow: 0 0px 3px #E1E1E1;
    -moz-box-shadow: 0 0px 3px #E1E1E1;
    box-shadow: 0 0px 3px #E1E1E1;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    
}
.date{
    border:none !important;
}
.instruction {
    color: #939393;
    font-style: italic;
    margin-top: 0px;
    font-size: 11px;
    overflow: visible !important;
}
/* form */
.warningMessage {
    font: 12px Arial, Arimo, Helvetica, sans-serif;
    color: #ff0000;
    /* padding-top: 5px; */
    display: none;
    word-wrap: break-word;
}
.leftAlign .tempFrmWrapper .tempContDiv {
    margin-left: 35%;
}
}         
.tempFrmWrapper .tempContDiv {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', "Lucida Grande", Arial,Arimo, Helvetica, sans-serif;
}
    </style>
			<script>
					var vc = vc || {};
					(function () {
							'use strict';
				
							vc.settings = {
									"languageId": "hi",
									"itemlanguageId": "en-IN", /*Added for OD-381*/
									"marketId": "in",
									"dealerLocatorUrl": "/in/find-a-dealer",
									"requestQuoteURL": "",
									"northToSouthSearch": "True",/*COM-493-Added*/
									"sc_site": "in",
									"enableservicetypetab": "True", //OD-90-Added
									"enableViewInventoryCTA": "",/*OD-227-Added*/
									"enabledealerWebsites": "True", //OD-497-Added
									"enablesearchbasedonctry": "False",
									"distanceInMiles": "1",
						"CarModelID" : ""
							};
				
					}());
				</script>



<script>
	$( "iconHeartInactive" ).click(function() {
	$( this ).toggleClass( "iconHeartActive" );
  });
</script>
  
	<body>
		
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">
	<!-- start header navbar -->
	<?php $this->load->view('common/header');?>
    <!-- end of header navbar -->
    
<!-- start service form------------------------------------------------------------------ -->

<div class="prnt" style="background:#f5f5f5; padding-top:33px; padding-bottom:33px;">
    <div class="container form" style="width:50%;">
       <div class="col-md-9" style="float:left; padding-left:200px;">
        <h5 style="margin-top: 20px; margin-bottom: 10px; ">Product Service Form</h5>
       </div>
       <div class="col-md-3" style="float:right; padding-top:20px;">
         <img src="assets/images/logoxxxxxx.png" width="100%">
       </div>
       <div class="clearfix"></div>
    <form class="needs-validation" novalidate>
    <ul>
     <li class="tempFrmWrapper name namemedium" elname="livefield-elem" comptype="7" needdata="true" id="Name-li" compname="Name" linkname="Name" isvisible="true" mandatory="true" page_no="1" page_link_name="Page"> 
             <label class="labelName">NAME
             
             <em class="important">*</em>
             
             </label>
             <div class="tempContDiv twoType">
             <div class="nameWrapper">
             <span>  <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" elname="First" name="Name_First" placeholder="First Name" required>
             
             
             <label class="formSubInfoText">&nbsp;&nbsp; &nbsp; </label> </span>
             <span>  <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" elname="Last" name="Name_Last" placeholder="Last Name" value="">
             
             
             <!-- <label class="formSubInfoText">Last</label> </span> -->
             
             
             
             <!-- <div class="clearBoth"></div></div><p class="errorMessage warningMessage" elname="error" id="error-Name" style="display: block;"></p> -->
             </div><div class="clearBoth"></div>
             </div>
         </li>

         <li class="tempFrmWrapper address  addrlarge" elname="livefield-elem" comptype="8" needdata="true" id="Address-li" compname="Address" linkname="Address" isvisible="true" mandatory="true" page_no="1" page_link_name="Page">

                 <div class="arrowNav"></div><label class="labelName">ADDRESS
                 
                 <em class="important">*</em>
                 
                 </label>
                 <div class="tempContDiv address">
                 <div class="addrCont">
               
                 
                 <span class="addOne"> 
                 <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Address_AddressLine1" value="" placeholder="address">
                 
                 
                 <!-- Display name of 'AddressLine1' component of 'Address' field. -->
                 <label class="formSubInfoText"></label> </span><BR><br>
                 
              
                 <span class="addOne"> 
                 <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Address_AddressLine2" placeholder="address line2">
                 
                 
                 <!-- Display name of 'AddressLine2' component of 'Address' field. -->
                 <label class="formSubInfoText"></label> </span><br>
                 <br>
                 <span class="flLeft addtwo"> 
                 <!-- <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Address_City" value="">
                  -->
                  <select id="state" onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Address_City">
                     <option value="Uttrakhand">Uttrakhand</option>
                     <option value="Uttarparadesh">Uttarparadesh</option>
                     <option value="Delhi">Delhi</option>
                     <option value="Mumbai">Mumbai</option>
                   </select>
                   
                 <!-- Display name of 'City' component of 'Address' field. -->
                 <label class="formSubInfoText"></label>&nbsp; &nbsp; </span>
               
                 <span class="flLeft addtwo"> 
                 <input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Address_ZipCode" placeholder="Postal / Zip Code">
                 
                 
                 <!-- Display name of 'ZipCode' component of 'Address' field. -->
                 <label class="formSubInfoText"></label> </span>
              
                 
                 <div class="clearBoth"></div><p class="errorMessage" elname="error" id="error-Address"></p>
                 </div></div><div class="clearBoth"></div>
         </li>
         <li class="tempFrmWrapper email medium" elname="livefield-elem" comptype="9" id="Email-li" needdata="true" compname="Email" linkname="Email" isvisible="true" mandatory="true" page_no="1" page_link_name="Page" domain_option="0" need_reconf="false">


                 <label class="labelName">EMAIL
                 
                 <em class="important">*</em>
                 
                 </label>
                 <div class="tempContDiv">
                 
                 <span><input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="Email" placeholder="example@mail.com">
                 
                 <p class="errorMessage warningMessage" elname="error" id="error-Email" style="display: block;"></p>
                 
                  </span>
                 
                 </div><div class="clearBoth"></div>
             </li>
             <li class="tempFrmWrapper phone medium" elname="livefield-elem" comptype="11" id="PhoneNumber-li" needdata="true" compname="PhoneNumber" linkname="PhoneNumber" isvisible="true" mandatory="true" page_no="1" page_link_name="Page"> 
<label class="labelName">PHONE

<em class="important">*</em>

</label>
<div class="tempContDiv" elname="phoneFormatElem" phoneformat="INTERNATIONAL">
<div>

<input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" id="PhoneNumber" type="text" name="countrycode" elname="countrycode" maxlength="20" value="" iscodeenabled="false" placeholder="+91 0123456789">

<div class="clearBoth"></div></div><p class="errorMessage warningMessage" elname="error" id="error-PhoneNumber" style="display: block;"> </p>
</div><div class="clearBoth"></div>
<li class="tempFrmWrapper dropdown small" elname="livefield-elem" comptype="12" id="Dropdown2-li" needdata="true" compname="Dropdown2" linkname="Dropdown2" isvisible="true" mandatory="true" page_no="1" page_link_name="Page">
     <label class="labelName">Item
     
     <em class="important">*</em>
     
     </label>
     <div class="tempContDiv">
     <div class="form_sBox">
     <div class="customArrow"></div><select name="Dropdown2">
     
     <option selected="true" value="-Select-">-Select-</option>
    
     <option value="Projector" formula_val="">Projector</option>
     <option value="Speaker" formula_val="">Speaker</option>
     <option value="Headphone" formula_val="">Headphone</option>
     <option value="Screen" formula_val="">Screen</option>
     
     </select></div><div elname="liveFieldTempChoiceCont" style="display: none;"></div><p class="errorMessage" elname="error" id="error-Dropdown2"></p>
     </div><div class="clearBoth"></div></li>
</li>

<li class="tempFrmWrapper dropdown medium" elname="livefield-elem" comptype="12" id="Dropdown-li" needdata="true" compname="Dropdown" linkname="Dropdown" isvisible="true" mandatory="true" page_no="1" page_link_name="Page">
     <label class="labelName">MODEL NO.
     
     <em class="important">*</em>
     
     </label>
     <div class="tempContDiv">
     <div class="form_sBox">
     <div class="customArrow"></div><select name="Dropdown">
     
     <option selected="true" value="-Select-">-Select-</option>
     
     
     
     
     
     <option value="EG I9 BLACK / WHITE" formula_val="">EG I9 BLACK / WHITE</option>
     <option value="EG I9 M (MIRACAST / MULTISCREEN)" formula_val="">EG I9 M (MIRACAST / MULTISCREEN)</option>
     <option value="EG I9 A (ANDROID)" formula_val="">EG I9 A (ANDROID)</option>
     <option value="EG P513" formula_val="">EG P513</option>
     <option value="EG P531" formula_val="">EG P531</option>
     <option value="EG I12 M" formula_val="">EG I12 M</option>
     <option value="EG I12 A" formula_val="">EG I12 A</option>
     <option value="EG K8.1 M" formula_val="">EG K8.1 M</option>
     <option value="EG K8.1 A" formula_val="">EG K8.1 A</option>
     <option value="EG K9" formula_val="">EG K9</option>
     <option value="OTHER PROJECTOR" formula_val="">OTHER PROJECTOR</option>
     
     
     
     </select></div><div elname="liveFieldTempChoiceCont" style="display: none;"></div><p class="errorMessage" elname="error" id="error-Dropdown"></p>
     </div><div class="clearBoth"></div>
 
</li>
    <li elname="livefield-elem" comptype="1" id="SingleLine1-li" needdata="true" compname="SingleLine1" linkname="SingleLine1" isvisible="true" class="tempFrmWrapper medium" mandatory="true" page_no="1" page_link_name="Page"> 
         <label class="labelName">ITEM SERIAL No. 
         
         <em class="important">*</em>
         
         </label>
         <div class="tempContDiv">
         
         <span><input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="SingleLine1" value=""></span>
         
         
         <p class="errorMessage warningMessage" elname="error" id="error-SingleLine1" style="display: block;"></p>
         
         <p class="instruction" elname="hint" id="hint-SingleLine1">  </p>
         </div><div class="clearBoth"></div>
     </li>
     <li elname="livefield-elem" comptype="1" id="SingleLine-li" needdata="true" compname="SingleLine" linkname="SingleLine" isvisible="true" class="tempFrmWrapper medium" mandatory="true" page_no="1" page_link_name="Page"> 
             <label class="labelName">INVOICE No. 
             
             <em class="important">*</em>
             
             </label>
             <div class="tempContDiv">
             
             <span><input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="SingleLine" value=""></span>
             
             
             <p class="errorMessage warningMessage" elname="error" id="error-SingleLine" style="display: block;"></p>
             </div><div class="clearBoth"></div>
     </li>
     <li class="tempFrmWrapper date" tabindex="1" style="outline:none;"  elname="livefield-elem" comptype="5" id="Date-li" compname="Date" linkname="Date" needdata="true" isvisible="true" disableddays="[]" startoftheweek="" mandatory="true" page_no="1" page_link_name="Page"> 
             <label class="labelName">PURCHASE DATE 
             
             <em class="important">*</em>
             
             </label>
             <div class="tempContDiv" datelocale="en-GB" elname="mm/dd/yy" id="DatedateDiv" isdisable="false">
             <div><span>  
             
             
             <input type="date" id="Date-date" onchange="ZFLive.validateFieldConstraint(this);" onfocusout="checkDatePicker(this);" autocomplete="off" onclick="$(this).datepicker().datepicker('show')" onfocus="$(this).datepicker().datepicker('show')" type="text" value="" class="hasDatepicker"><img class="calendarIcon" src="https://img.zohostatic.com/forms/ZOHOFORMS_Sep_26_2019_5/images/spacer.gif" title="...">
             
             
             
             
             <!-- <div class="clearBoth"></div><label class="formSubInfoText"></label> </span><div class="clearBoth"></div></div><p class="errorMessage warningMessage" elname="error" id="error-Date" style="display: block;">Choose a date.</p> -->
             
             <span> </span></div><div class="clearBoth"></div>
         
         </li>

         <li class="tempFrmWrapper dropdown large" elname="livefield-elem" comptype="12" id="Dropdown1-li" needdata="true" compname="Dropdown1" linkname="Dropdown1" isvisible="true" mandatory="true" page_no="1" page_link_name="Page">
                 <label class="labelName">FAULT / PROBLEM
                 
                 <em class="important">*</em>
                 
                 </label>
                 <div class="tempContDiv">
                 <div class="form_sBox">
                 <div class="customArrow"></div><select name="Dropdown1">
                 
                 <option selected="true" value="-Select-">-Select-</option>
                 
                 
                 
                 
                 
                 <option value="No Sound" formula_val="">No Sound</option>
                 <option value="No Picture / white screen" formula_val="">No Picture / white screen</option>
                 <option value="Dark / Red Spot on Screen" formula_val="">Dark / Red Spot on Screen</option>
                 <option value="Lines or distorted picture" formula_val="">Lines or distorted picture</option>
                 <option value="USB / HDMI Ports not working" formula_val="">USB / HDMI Ports not working</option>
                 <option value="Video Freezes While Audio Continues" formula_val="">Video Freezes While Audio Continues</option>
                 <option value="I damaged the item" formula_val="">I damaged the item</option>
                 <option value="Not Switching ON" formula_val="">Not Switching ON</option>
                 <option value="Switches OFF automatically" formula_val="">Switches OFF automatically</option>
                 <option value="Not Connecting wifi / Phone" formula_val="">Not Connecting wifi / Phone</option>
                 <option value="Hanging" formula_val="">Hanging</option>
                 <option value="Others" formula_val="">Others</option>
                 
                 
                 
                 </select></div><div elname="liveFieldTempChoiceCont" style="display: none;"></div><p class="errorMessage" elname="error" id="error-Dropdown1"></p>
                 </div><div class="clearBoth"></div>
             
             </li>
             <li elname="livefield-elem" comptype="1" id="SingleLine2-li" needdata="true" compname="SingleLine2" linkname="SingleLine2" isvisible="true" class="tempFrmWrapper large" mandatory="false" page_no="1" page_link_name="Page"> 
                     <label class="labelName">Describe Problem 
                     
                     </label>
                     <div class="tempContDiv">
                     
                     <span><input onfocusout="ZFLive.validateFieldConstraint(this);" autocomplete="off" type="text" maxlength="255" name="SingleLine2" value=""></span>
                     
                     
                     <p class="errorMessage" elname="error" id="error-SingleLine2" style="display: none;"></p>
                     </div><div class="clearBoth"></div>
             </li>
             <li class="zfcheckbox tempFrmWrapper oneColumns" minchoices="1" maxchoices="1" elname="livefield-elem" comptype="14" needdata="true" id="Checkbox-li" compname="Checkbox" linkname="Checkbox" isvisible="true" mandatory="true" page_no="1" page_link_name="Page"> 
                     <label class="labelName">E.&amp;.O.E / Terms
                     
                     <em class="important">*</em>
                     
                     </label>
                     <div class="tempContDiv">
                     <div class="overflow">
                     
                     <span class="multiAttType"> <input onmousedown="event.preventDefault();" type="checkbox" id="Checkbox_1" class="checkBoxType" name="Checkbox-check" elname="Checkbox" value="yes i agree" formula_val="" onchange="ZFLive.checkMaxChoiceLimit(this);">
                     <label for="Checkbox_1" class="checkChoice">yes i agree</label> </span>
                     
                     
                     <div class="clearBoth"></div></div><p class="errorMessage" elname="error" id="error-Checkbox"></p>
                     
                     <p class="instruction" elname="hint" id="hint-Checkbox"> E.&amp;.O.E : any dispute regarding warranty/support/product, will ONLY be dealt in Jurisdiction of Ghaziabad Court. I agree to terms &amp; condition of warranty as laid down on Egate's website. No accessory along with the projector is being sent.</p>
                     </div><div class="clearBoth"></div>
             </li>
             <li class="tempFrmWrapper  file_upload" uploadlimit="2" elname="livefield-elem" comptype="19" id="FileUpload-li" needdata="true" compname="FileUpload" linkname="FileUpload" allowedtype="pdf,jpg,jpeg,png" isvisible="true" mandatory="false" page_no="1" page_link_name="Page"> 
                     <label class="labelName">
                     Upload File
                     
                     </label>
                     <div class="tempContDiv">
                     
                                                        
                     <div class="uploadContainer">
                     
                      
                     
                     
                     <input type="file" name="FileUpload" multiple="multiple" id="FileUpload-id" onchange="ZFLive.addMultipleFileUploadFields(this.files,'FileUpload','2')">
                     
                     
                     
                      
                     
                     <input style="display:none;" type="hidden" value="" elname="FileUpload" filepath="">
                     
                     <div class="floatText">
                     
                     
                     
                     <em class="uploadIcon"></em><b>Drag &amp; Drop (or) <a elname="fileUploadInst">Choose File(s)</a></b>
                     
                     </div></div><div class="uploadedCont" id="FileUpload-div-files" style="display:none;"><ul elname="fileElementUL" class="fileUplodBdrbot"><li elname="templateFileElement" style="display:none"><span elname="fileSpanElement" class="flLeft previewWrapper"> <div class="previewContainer"><a elname="zoomIcon" class="over_Icon" onclick="ZFLive.zoomImage(this);">
                     <span elname="zoomIcon" class="zoomIcon"></span> </a>
                     <img elname="fileImage">
                     <div elname="fileNonImage" class="fileTypeIcon"></div></div></span>
                     <div class="uploadFileCont"><em elname="fileName" class="uploadFileTitle"></em>
                     <b elname="fileExtension"></b>
                     <p elname="fileSize" class="fileSize"></p></div><a name="removeFileElement" filepath="" onclick="ZFLive.removeFile('FileUpload',this)" class="flRight attachDelete"></a>
                     <!--  <div class="clearBoth"></div>--></li></ul><div class="clearBoth"></div></div>
                     
                     
                     <p class="errorMessage" elname="error" id="error-FileUpload"></p>
                     
                     <!-- <p class="instruction" elname="hint" id="hint-FileUpload"> Invoice/Warranty/Pic - PDF-JPG-JPEF-PNG only</p> -->
                     </div><div class="clearBoth"></div>
                 
                 </li>
                 <li style="overflow:visible; position: relative;" class="btnAllign fmFooter" id="formAccess" elname="0">

                         <div class="pageFotDef">
                        
                         <div class="alignSubmit">
                             <button type="submit" id="s_sub">Submit</button>&nbsp;&nbsp;&nbsp;
                             <button type="button" id="p_sub">Print</button>
                         </div>
                             
                         
                         
                         </div><div class="clearBoth"></div>
                         
                 </li>
                 
     </ul>
 </form>
 </div>
</div>
<!-- end of servive form______________________________---------------------___________________--------- -->

  <!-- start footer -->
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container" style="width:98%;">
		<!-- <div class="f_nav">
			<ul>
					<li class="footer-list-item"><a href="https://group.EGATE.com/">Company</a></li>
					<li class="footer-list-item"><a href="/in/footer/download-brochures">Download Brochures</a></li>
					<li class="footer-list-item"><a href="/in/footer/contact-us">Contact Us</a></li>
					
			</ul>
			<ul class="f2_nav">
					<li class="footer-list-item"><a href="/in/footer/EGATE-in-the-news">EGATE in the News</a></li>
					<li class="footer-list-item"><a href=" https://group.EGATE.com/careers">Careers</a></li>
					<li class="footer-list-item"><a href="https://www.media.EGATE.com/" rel="noopener noreferrer" target="_blank">Media/Press</a></li>
				
			</ul>
		</div> -->
     <div class="my_ftr">
			 
		 </div>
			<div class="row copyright">
				<div class="col-md-12">
						
					<!-- <p>
						<small class="block">&copy; 2019 Prahtam vision. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">Pratham Vision</a> <a href="http://blog.gessato.com/" target="_blank"></a>  <a href="http://unsplash.co/" target="_blank"></a></small>
					</p> -->
					<!-- <p>
						
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p> -->
					<!-- <div class="f_logo">
						<img src="images/logoxxxxxx_b&w.jpg " width="20%">
					</div> -->
					<div class="col-md-2 col-sm-12 col-xs-12 footr">
						<div class="f-over">
									 <ul>
										<li><h3>About us</h3></li>
										<li><a href="#">Home</a></li>
										<li><a href="#">About US</a></li>
										<li><a href="#">contact US</a></li>
										<li><a href="#">Gallery</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Career</a></li>
									 </ul>
						</div>
			    </div>       

				   <div class="col-md-2 col-sm-12 col-xs-12 footr">
             <div class="f-over">
                    <ul>
											<li><h3>Quick Link</h3></li>
											<li><a href="#">News</a></li>
											<li><a href="#">E-Learning</a></li>
											<li><a href="#">News Arrivals</a></li>
											<li><a href="#">Employee Login</a></li>
											<li><a href="#">Become A Partner</a></li>
											<li><a href="#">Press Reless</a></li>
										</ul>
										
									
             </div>
        </div>
        
				<div class="col-md-2 col-sm-12 col-xs-12 footr">
					<div class="f-over">
								 <ul>
									 <li><h3>Quick Link</h3></li>
									 <li><a href="#">My Account</a></li>
									 <li><a href="#">Order Tracking</a></li>
									 <li><a href="#">Wishlist</a></li>
									 <li><a href="Privacy_policy.html">Privacy Policy</a></li>
									 <li><a href="Refunds_Cancellations.html">Refunds & Cancellations</a></li>
									 <li><a href="T&C.html">Terms & Conditions</a></li>
								 </ul>
								 
							 
					</div>
		        </div>

		 <div class="col-md-3 col-sm-12 col-xs-12 footr">
			<div class="f-over">
						 <ul>
								<li><h3>Contact Us</h3></li>
									
								<p>
									Sec9, Vasundhara 
									Ghaziabad, UP
								</p>
								<p>Email-
									<a href="">info@egate.pro</a>
								</p>

								<p>Phone-
									<a href="">0120 4120225</a>
								</p>
									<ul class="fh5co-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
						 </ul>
						 
						
					
						 
					 
			</div>
     </div>
      <div class="col-md-3 col-sm-12 col-xs-12 footr">
				<div class="f-over">
							<ul>
								<li class=""><h3>	Your Inbox Deserves Better!</h3></li>
								<li><a><span class="hand"></span>Get Occasional Updates & Fantastic Discount Offers</a></li>
							  <li>
										<form>
												<input type="email" name="email" id="eml" placeholder="Email">
										</form>
								</li>
								<li>
										<form>
												<input type="button" name="btn" id="btn"  value="Subscribe">
										</form>
								</li>
							</ul>
							
							

				</div>
			</div>
			</div>
	
		</div>
		<!-- <div class="address">
			<div class="col-md-4 col-sm-4 col-xs-6">
				<ul>
					<li><h3>Address</h3></li>
					<ul class="fh5co-social-icons">
							<div style="padding-bottom:17px; font-size:20px;"><li><a>C-260 , sec-63, noida</a></li></div>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
		  	</ul>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-6">
				<div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.448618861381!2d77.38560831440685!3d28.616313691567036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce50681005277%3A0x8346be7c596c1159!2sPratham+Vision+P+Limited!5e0!3m2!1sen!2sus!4v1560400649988!5m2!1sen!2sus&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="95%" height="170px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe></div>
			</div>
		</div> -->
	</footer>
	<div class="c_right text-certer">
          <p>
						<small class="block">copyright &copy; 2019. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank"></a> <a href="http://blog.gessato.com/" target="_blank"></a>  <a href="http://unsplash.co/" target="_blank"></a></small>
					</p> 
	</div>
	<!-- end of footer -->

	</div>
	
	<!-- <canvas class="draw" width="1000" height="625"></canvas> -->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<div class="follow">
		<div class="facbk">

		</div>
		<div class="facbk">
			
		</div>
		<div class="facbk">
			
		</div>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="owl_js/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
  <script src="js/library.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
	<!-- partical -->
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>

   <!-- stats.js -->
	 <script src="js/lib/stats.js"></script>
	 

	 <!-- brand start -->
	 <script src="new/js/library.js"></script>
	 <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	 <script src="js/new/owl.carousel.min.js"></script>
	 <script src="js/new/jquery.raty.js"></script>
	
	 <script src="js/new/jquery.prettyPhoto.js"></script>
	 <script src="js/new/jquery.selectbox-0.2.js"></script>
	 <script src="js/new/theme-script.js"></script>
	 <script src="js/custom.js"></script>
   
	 <!-- brand end -->

  <script>
			$('.handle').on('click', function(){
				$('nav ul').toggleClass('showing');
			});
		
			// optional
			$('#blogCarousel').carousel({
						interval: 5000
				});
		</script>
		<script>
			var count_particles, stats, update;
			stats = new Stats;
			stats.setMode(0);
			stats.domElement.style.position = 'absolute';
			stats.domElement.style.left = '0px';
			stats.domElement.style.top = '0px';
			document.body.appendChild(stats.domElement);
			count_particles = document.querySelector('.js-count-particles');
			update = function() {
				stats.begin();
				stats.end();
				if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
					count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
				}
				requestAnimationFrame(update);
			};
			requestAnimationFrame(update);
		</script>
	

	<!-- partical -->
	</body>
</html>

