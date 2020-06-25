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
<link rel="stylesheet" href="style2.css"/>
</head>
<body>		
<div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-9 col-sm-9 col-9 main-section mt-5">
        <h1 class="text-center text-inverse mb-5" style="border-bottom: 1px solid white;">LENDER ONBOARDING APPLICATION</h1>
        
        <h3 style="color:#fabd07;" class="mb-5">COMPANY INFORMATION</h3>
        <form class="container" id="needs-validation" novalidate>
          <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom01">Company Name <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom02">Address <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="validationCustom02"  value="" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom03">Address Line 2 <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="validationCustom03"  value="" required>
                </div>
              </div>
            </div>
            
          <div class="row">
             <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom04">City <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom04" value="" required>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="province">Province  <span style="color:red;">*</span></label>
                <select class="custom-select d-block form-control" id="province" required>
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
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
</div>
            <div class="row">
             <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom05">Postal Code <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom05" value="" required>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="country">Country <span style="color:red;">*</span></label>
                <!-- <input type="text" class="form-control" id="validationCustom05" value="" required> -->
                <select class="custom-select d-block form-control" id="country" required>
                <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom06">Phone Number <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom06"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom07">Contact Name <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom07"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom08">Contact Number <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom08"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="login">No. of Access Login <span style="color:red;">*</span></label>
                <select class="custom-select d-block form-control" id="login" required>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom09">Website <span style="color:red;">*</span></label>
                <input type="url" class="form-control" id="validationCustom09"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom10">Lender Adminstrator # <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom10"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom11">Mortgage Brokerage No. <span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom11"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="lendertype">Lender Type <span style="color:red;">*</span></label>
                <select class="custom-select d-block form-control" id="lendertype" required>
                <option value="Institutional Lender">Institutional Lender</option>
                                    <option value="Private Mortgage Lender">Private Mortgage Lender</option>
                                    <option value="Private Equity Lender">Private Equity Lender</option>
                                    <option value="Private Real Estate Lender">Private Real Estate Lender</option>
                                    <option value="Equipment Lender">Equipment Lender</option>
                                    <option value="Accounts Receviable Lender $100,000- $200,0000">Accounts Receivable Lender $100,000-$2,000,000</option>
                                    <option value="Accounts Receivable Lender $2,000,000 +">Accounts Receivable Lender $2,000,000 +</option>
                                    <option value="Construction Lender">Construction Lender</option>
                                    <option value="Factoring">Factoring</option>
                                    <option value="Asset Based Lender">Asset Based Lender</option>
                                    <option value="Trust Company">Trust Company</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>
            </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="loandesgin">Loan Designation <span style="color:red;">*</span></label>
                  <select class="custom-select d-block form-control" id="loandesign" required>
                  <option value="Conventional Commerical">Conventional Commerical Loan</option>
                                      <option value="Sub-Conventional Commerical loan">Sub-Conventional Commerical Loan</option>
                                      <option value="Alternative Loan">Alternative Loan</option>
                                      <option value="Private Loan">Private Loan</option>
                  </select>
                  <div class="invalid-feedback">
                    Please selected any option.
                  </div>
                </div>
              </div>
             
              <h3 style="color:#fabd07;" class="mb-5 mt-5">LENDING CRITERIA</h3>
              <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <label  class="custom-control custom-checkbox" for="assettype"> Asset Type (Please Check All That Apply) <span style="color:red;">*</span> </label>     
                        <fieldset class="group"> 
                          <ul class="checkbox"> 
                            <li><input type="checkbox" id="cb1" value="Automobile" /><label for="cb1">Automobile</label></li> 
                            <li><input type="checkbox" id="cb2" value="Accounts Receivables" /><label for="cb2">Accounts Receivables</label></li> 
                            <li><input type="checkbox" id="cb3" value="Cash" /><label for="cb3">Cash</label></li> 
                            <li><input type="checkbox" id="cb4" value="Equipment" /><label for="cb4">Equipment</label></li> 
                            <li><input type="checkbox" id="cb5" value="Inventory(New/In Production)" /><label for="cb5">Inventory (New/In Production)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Inventory(Aged upto 12 months)" /><label for="cb6>">Inventory (Aged up to 12 months)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Real Estate(Commercial)" /><label for="cb6>">Real Estate (Commercial)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Real Estate(Residential)" /><label for="cb6>">Real Estate (Residential)</label></li> 
                          </ul> 
                        </fieldset> 
                  </div>
                </div> 
                  <hr> 
                  <div class="row">
                    <div class="col-lg-12">
                        <label  class="custom-control custom-checkbox" for="ledningtype"> Loan Type (Please Check All That Apply) <span style="color:red;">*</span></label>     
                          <fieldset class="group"> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox" id="cb1" value="Working Capital" /><label for="cb1">Working Capital</label></li> 
                              <li><input type="checkbox" id="cb2" value="Bridge Loan Financing" /><label for="cb2">Bridge Loan Financing</label></li> 
                              <li><input type="checkbox" id="cb3" value="Accounts Receivable Financing" /><label for="cb3">Accounts Receivable Financing</label></li> 
                              <li><input type="checkbox" id="cb4" value="Purchase Order Financing" /><label for="cb4">Purchase Order Financing</label></li> 
                              <li><input type="checkbox" id="cb5" value="Equipment Financing" /><label for="cb5">Equipment Financing</label></li> 
                              <li><input type="checkbox" id="cb6" value="Commercial Real Estate Financing" /><label for="cb6>">Commercial Real Estate Financing</label></li> 
                              <li><input type="checkbox" id="cb7" value="Land Development Financing" /><label for="cb7>">Land Development Financing</label></li> 
                              <li><input type="checkbox" id="cb8" value="Construction Financing" /><label for="cb8>">Construction Financing</label></li> 
                              <li><input type="checkbox" id="cb9" value="Mezzanine Financing" /><label for="cb9>">Mezzanine Financing</label></li> 
                              <li><input type="checkbox" id="cb10" value="Debtor-In-Possession Financing(DIP)" /><label for="cb10>">Debtor-In-Possession Financing (DIP)</label></li> 
                              <li><input type="checkbox" id="cb12" value="Tech Start-Ups" /><label for="cb12>">Tech Start-Ups</label></li> 
                              <li style="width:32em;"><input type="checkbox" id="cb11" value="Automotive Lease Portfolio Financing (Securitization)" /><label for="cb11>">Automotive Lease Portfolio Financing (Securitization)</label></li> 
                             
                            </ul> 
                          </fieldset> 
                    </div>  
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-lg-12">
                        <label  class="custom-control custom-checkbox" for="borrowertype"> Borrower Type (Please Check All That Apply) <span style="color:red;">*</span></label>     
                          <fieldset class="group"> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox" id="cb1" value="Auto Dealers" /><label for="cb1">Auto Dealers</label></li> 
                              <li><input type="checkbox" id="cb2" value="Construction Developers" /><label for="cb2">Construction Developers</label></li> 
                              <li><input type="checkbox" id="cb3" value="Distributors" /><label for="cb3">Distributors</label></li> 
                              <li><input type="checkbox" id="cb4" value="Hospitality Services" /><label for="cb4">Hospitality Services</label></li> 
                              <li><input type="checkbox" id="cb5" value="Importers/Exporters" /><label for="cb5">Importers/Exporters</label></li> 
                              <li><input type="checkbox" id="cb6" value="Manufacturers" /><label for="cb6>">Manufacturers</label></li> 
                              <li><input type="checkbox" id="cb7" value="Online Sellers" /><label for="cb7>">Online Sellers</label></li> 
                              <li><input type="checkbox" id="cb8" value="Professional Corporations" /><label for="cb8>">Professional Corporations</label></li> 
                              <li><input type="checkbox" id="cb9" value="Real Estate Developers " /><label for="cb9>">Real Estate Developers </label></li> 
                              <li><input type="checkbox" id="cb10" value="Rental Property Owners" /><label for="cb10>">Rental Property Owners</label></li> 
                              <li><input type="checkbox" id="cb11" value="Restaurant Owner" /><label for="cb11>">Restaurant Owner</label></li> 
                              <li><input type="checkbox" id="cb12" value="Retailer" /><label for="cb12>">Retailer</label></li> 
                              <li><input type="checkbox" id="cb13" value="Tech Corporations" /><label for="cb13>">Tech Corporations</label></li>
                              <li style="width:12em"><input type="checkbox" id="cb14" value="Other" /><label for="cb14>">Other(Please Specify)</label></li>
                              <li><input type="text" id="cb15" value="" /><label for="cb15>"></label></li>
                            </ul> 
                          </fieldset> 
                    </div>  
                  </div>
                  <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="text-inverse" for="lendertype">Loan Amount <span style="color:red;">*</span></label>
                          <select class="custom-select d-block form-control" id="lendertype" required>
                          <option value="$0-$250,000">$0-$250,000</option>
                                              <option value="$250,000-$500,000">$250,000-$500,000</option>
                                              <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                              <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                              <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                              <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                              <option value="$10,000,000 +">$10,000,000 +</option>                                   
                          </select>
                          <div class="invalid-feedback">
                            Please selected any option.
                          </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="text-inverse" for="lendingterms">Lending Terms <span style="color:red;">*</span></label>
                          <select class="custom-select d-block form-control" id="lendingterms" required>
                          <option value="12 Months">12 Months</option>
                                              <option value="18 Months">18 Months</option>
                                              <option value="24 Months">24 Months</option>
                                              <option value="36 Months">36 Months</option>
                                              <option value="48 Months">48 Months</option>
                                              <option value="60 Months">60 Months</option>
                                                                         
                          </select>
                          <div class="invalid-feedback">
                            Please selected any option.
                          </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="text-inverse" for="interestrate">Interest Rate <span style="color:red;">*</span></label>
                          <select class="custom-select d-block form-control" id="interestrate" required>
                          <option value="0-3.99%">0-3.99%</option>
                                  <option value="4%-5.99%">4%-5.99%</option>
                                  <option value="6%-7.99%">6%-7.99%</option>
                                  <option value="8%-9.99%">8%-9.99%</option>
                                  <option value="10%-11.99%">10%-11.99%</option>
                                  <option value="12%-14.99%">12%-14.99%</option>
                                  <option value="15%-17.99%">15%-17.99%</option>
                                  <option value="18%-23.99%">18%-23.99%</option>
                                  <option value="24% and up">24% and up</option>
                                                                         
                          </select>
                          <div class="invalid-feedback">
                            Please selected any option.
                          </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="text-inverse" for="lendingfees">Lending Fees <span style="color:red;">*</span></label>
                          <select class="custom-select d-block form-control" id="lendingfees" required>
                          <option value="0.5-1.0%">0.5-1%</option>
                                  <option value="1%-2%">1% - 2%</option>
                                  <option value="2%- 4%">4% - 4%</option>
                                  <option value="4%- 5%">4% - 5%</option>
                                  <option value="5% & up">5% & up</option>
                                                                         
                          </select>
                          <div class="invalid-feedback">
                            Please selected any option.
                          </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="text-inverse" for="depositreq">Deposit Requirements <span style="color:red;">*</span></label>
                          <select class="custom-select d-block form-control" id="depositreq" required>
                          <option value="1% of loan amount">1% of loan amount</option>
                                  <option value="2% of loan amount">2% of loan amount</option>
                                  <option value="5% of loan amount">5% of loan amount</option>
                                  <option value="10% of loan amount">10% of loan amount</option>
                                  <option value="15% of loan amount">15% of loan amount</option>
                                                                         
                          </select>
                          <div class="invalid-feedback">
                            Please selected any option.
                          </div>
                        </div>
                     </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">

                <label class="text-inverse" for="geographic" style="font-weight: 650; font-size:1.2em;">Geographic Boundaries <span style="color:red;">*</span></label>
                </div>
                <div class="form-group col-md-2">
                
                   <div class="checkbox" style="text-align: right;">               
                      <label for="North" style="margin-bottom:20px; margin-top:10px;"><input id="North" type="checkbox" />North</label>
                      </div>
                    <div class="checkbox" style="text-align: right;">               
                      <label for="South" style="margin-bottom:20px;"><input id="South" type="checkbox"/>South</label>
                    </div>
                    
                   </div>
                   <div class="form-group col-md-3">
                      <select id="North" class="form-control">
                              <option value="Aurora">Aurora</option>
                                                <option value="Barrie">Barrie</option>
                                                <option value="Bradford/West Gwillimbury">Bradford/West Gwillimbury</option>
                                                <option value="Bracebridge">Bracebridge</option>
                                                <option value="East Gwillimbury">East Gwillimbury</option>
                                                <option value="Georgina">Georgina</option>
                                                <option value="Gravenhurst">Gravenhurst</option> 
                                                <option value="Innisfil">Innisfil</option> 
                                                <option value="King City">King City</option>  
                                                <option value="Markham">Markham</option>
                                                <option value="Minden">Minden</option> 
                                                <option value="Muskoka">Muskoka</option> 
                                                <option value="Newmarket">Newmarket</option>  
                                                <option value="Orillia">Orillia</option>
                                                <option value="Parry Sound">Parry Sound</option>      
                                                <option value="Richmond Hill">Richmond Hill</option>      
                                                <option value="Sudbury">Sudbury</option>      
                                                <option value="Thornhill">Thornhill</option>    
                                                <option value="Vaughan">Vaughan</option>      
                        </select>
                                <select id="South" class="form-control" style="margin-top:10px;">
                                <option value="Toronto">Toronto</option>
                                                <option value="GTA">GTA</option>
                                    
                               </select>
                  </div>
                  <div class="form-group col-md-2">
                  <div class="checkbox" style="text-align: right;">               
                      <label for="East" style="margin-bottom:20px; margin-top:10px;"><input id="East" type="checkbox" />East</label>
                      </div>
                    <div class="checkbox" style="text-align: right;">               
                      <label for="West" style="margin-bottom:20px;"><input id="West" type="checkbox"/>West</label>
                    </div>
                     
                </div>
                <div class="form-group col-md-3">
                      <select id="East" class="form-control">
                      <option value="Ajax">Ajax</option>
                                                <option value="Belleville">Belleville</option>
                                                <option value="Bowmanvilley">Bowmanville</option>
                                                <option value="Cornwall">Cornwall</option>
                                                <option value="Kawartha Lakes">Kawartha Lakes</option>
                                                <option value="Kingston">Kingston</option>
                                                <option value="Oshawa">Oshawa</option> 
                                                <option value="Ottawa">Ottawa</option> 
                                                <option value="Peterborough">Peterborough</option>  
                                                <option value="Pickering">Pickering</option>
                                                <option value="Prince Edward County">Prince Edward County</option> 
                                                <option value="Scarborough">Scarborough</option> 
                                                <option value="Trenton">Trenton</option>  
                                                <option value="Whitby">Whitby</option>                            
                        </select>
                                <select id="West" class="form-control" style="margin-top:10px;">
                                <option value="Brantford">Brantford</option>
                                                <option value="Brampton">Brampton</option>
                                                <option value="Burlington">Burlington</option>
                                                <option value="Cambridge">Cambridge</option>
                                                <option value="Chatham">Chatham</option>
                                                <option value="Etobicoke">Etobicoke</option>
                                                <option value="Georgetown">Georgetown</option> 
                                                <option value="Guelph">Guelph</option> 
                                                <option value="Hamilton">Hamilton</option>  
                                                <option value="London">London</option>
                                                <option value="Milton">Milton</option> 
                                                <option value="Mississauga">Mississauga</option> 
                                                <option value="North York">North York</option>  
                                                <option value="Sarnia">Sarnia</option>  
                                                <option value="St. Catherine’s">St. Catherine’s</option> 
                                                <option value="St. Thomas">St. Thomas</option> 
                                                <option value="York">York</option>  
                                                <option value="Waterloo">Waterloo</option>  
                                                <option value="Windsor">Windsor</option>  
                                                <option value="Woodstock">Woodstock</option>  
                               </select>
                  </div>
                  <div class="form-group col-md-2"></div>
                </div>
</div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <label  class="custom-control custom-checkbox" for="docreq"> Documens Require (Please Check All That Apply) <span style="color:red;">*</span></label>     
                          <fieldset class="group"> 
                            <ul class="checkbox"> 
                              <li style="width:25em;"><input type="checkbox" id="cb1" value="Finance Application" /><label for="cb1">Finance Application</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb2" value="Mortgage Application" /><label for="cb2">Mortgage Application</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb3" value="Articles of Incorporation" /><label for="cb3">Articles of Incorporations</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb4" value="Shareholder Agreements" /><label for="cb4">Shareholder Agreements</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb5" value="Officer & Directors Ledgers" /><label for="cb5">Officer & Directors Ledgers</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb6" value="Trade License(if applicable)" /><label for="cb6>">Trade License (if applicable)</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb7" value="Credit Bureau(for borrower & company)" /><label for="cb7>">Credit Bureau (for borrower & company)</label></li> 
                              <li style="width:30em;"><input type="checkbox" id="cb8" value="Company Financials(previous 2 years, accountant prepared)" /><label for="cb8>">Company Financials (previous 2 years, accountant prepared)</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb9" value="Bank Statements(90-120 days) " /><label for="cb9>">Bank Statements (90-120 days) </label></li> 
                              <li style="width:32em;"><input type="checkbox" id="cb10" value="Asset Analysis docs or purchase orders(for inventory & equipment)" /><label for="cb10>">Asset Analysis docs or purchase orders (for inventory & equipment)</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb11" value="Purchase & Sale Agreement(for real estate)" /><label for="cb11>">Purchase & Sale Agreement (for real estate)</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb12" value="Land Appraisal(for real estate)" /><label for="cb12>">Land Appraisal (for real estate)</label></li> 
                              <li style="width:25em;"><input type="checkbox" id="cb13" value="Existing loan documentation" /><label for="cb13>">Existing loan documentation</label></li>
                             
                            </ul> 
                          </fieldset> 
                    </div>  
                  </div>
</div>
                  <hr>
                  <div class="row">
                  <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom12">Date</label>
                <input type="date" class="form-control" id="validationCustom12" value="" required>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
              <label class="text-inverse" for="validationCustom13">Signature</label>
                <input type="text" class="form-control" id="validationCustom13" value="" required>
              </div>  
            </div>
            <div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-default mt-5" style="background-color: #fabd07; color:#14213D;">Submit</button>
    </div>
  </div>
</div>
         
        
<script>
var g_UnFocusElementStyle = "";
var g_FocusBackColor = "#FFC";
var g_invalidFields = 0;

function initFormElements(sValidElems) {
	var inputElems = document.getElementsByTagName('textarea');
	for(var i = 0; i < inputElems.length; i++) {
		com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
		com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
	}
	/* Add the code for the input elements */
	inputElems = document.getElementsByTagName('input');
	for(var i = 0; i < inputElems.length; i++) {
		if(sValidElems.indexOf(inputElems[i].getAttribute('type') != -1)) {
			com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
			com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
		}
	}
	
	/* submit handler */
	
	
	com_abhi.EVENTS.addEventHandler(document.getElementById('form1'), 'submit' , validateAllfields, false);
	
	/* Add the default focus handler */
	document.getElementsByTagName('input')[0].focus();
	
	/* Add the event handlers for validation */
	com_abhi.EVENTS.addEventHandler(document.forms[0].firstName, 'blur', validateFirstName, false);

	com_abhi.EVENTS.addEventHandler(document.forms[0].address, 'blur', validateAddress, false);

}

function highlightFormElement(evt) {
	var elem = com_abhi.EVENTS.getEventTarget(evt);
	if(elem != null) {
		elem.style.backgroundColor = g_FocusBackColor;
	}
}

function unHightlightFormElement(evt) {
	var elem = com_abhi.EVENTS.getEventTarget(evt);
	if(elem != null) {
		elem.style.backgroundColor = "";
	}
}

function validateAddress() {
	var formField = document.getElementById('address');
	var ok = (formField.value != null && formField.value.length != 0);
	var grpEle = document.getElementById('grpAddress');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('addressIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('addressErrorMsg').innerHTML = "";
		}
		else  {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('addressIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('addressErrorMsg').innerHTML = "Please enter your address";
		}
		return ok;
	}
	
}

function validateFirstName() {
	var formField = document.getElementById('firstName');
	var ok = (formField.value != null && formField.value.length != 0);
	var grpEle = document.getElementById('grpfirstName');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('firstNameIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('firstNameErrorMsg').innerHTML = "";
		}
		else  {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('firstNameIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('firstNameErrorMsg').innerHTML = "Please enter your first name";
		}
		return ok;
	}
}




function validateAllfields(e) {
	/* Need to do it this way to make sure all the functions execute */
	
	var bOK = validateFirstName();
	bOK &= validateAddress(); 
	

	if(!bOK) {
		alert("The fields that are marked bold and red are required. Please supply valid\n values for these fields before sending.");
		com_abhi.EVENTS.preventDefault(e);
	}
	
	
}

com_abhi.EVENTS.addEventHandler(window, "load", function() { initFormElements("text"); }, false);
</script>
</body>
</html>
