<?php
session_start();
include('includes/header.php');

if (isset($_SESSION['price']) and isset($_SESSION['package_name'])) {
    $price = $_SESSION['price'];
    $package_name = $_SESSION['package_name'];
} else {
    $price = 0;
}

$countryCodesToNames = array(
    "AF" => "Afghanistan",
    "AL" => "Albania",
    "DZ" => "Algeria",
    "AS" => "American Samoa",
    "AD" => "Andorra",
    "AO" => "Angola",
    "AI" => "Anguilla",
    "AQ" => "Antarctica",
    "AG" => "Antigua and Barbuda",
    "AR" => "Argentina",
    "AM" => "Armenia",
    "AW" => "Aruba",
    "AU" => "Australia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BS" => "Bahamas",
    "BH" => "Bahrain",
    "BD" => "Bangladesh",
    "BB" => "Barbados",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BZ" => "Belize",
    "BJ" => "Benin",
    "BM" => "Bermuda",
    "BT" => "Bhutan",
    "BO" => "Bolivia",
    "BA" => "Bosnia and Herzegovina",
    "BW" => "Botswana",
    "BV" => "Bouvet Island",
    "BR" => "Brazil",
    "BQ" => "British Antarctic Territory",
    "IO" => "British Indian Ocean Territory",
    "VG" => "British Virgin Islands",
    "BN" => "Brunei",
    "BG" => "Bulgaria",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "KH" => "Cambodia",
    "CM" => "Cameroon",
    "CA" => "Canada",
    "CT" => "Canton and Enderbury Islands",
    "CV" => "Cape Verde",
    "KY" => "Cayman Islands",
    "CF" => "Central African Republic",
    "TD" => "Chad",
    "CL" => "Chile",
    "CN" => "China",
    "CX" => "Christmas Island",
    "CC" => "Cocos [Keeling] Islands",
    "CO" => "Colombia",
    "KM" => "Comoros",
    "CG" => "Congo - Brazzaville",
    "CD" => "Congo - Kinshasa",
    "CK" => "Cook Islands",
    "CR" => "Costa Rica",
    "HR" => "Croatia",
    "CU" => "Cuba",
    "CY" => "Cyprus",
    "CZ" => "Czech Republic",
    "CI" => "Côte d’Ivoire",
    "DK" => "Denmark",
    "DJ" => "Djibouti",
    "DM" => "Dominica",
    "DO" => "Dominican Republic",
    "NQ" => "Dronning Maud Land",
    "DD" => "East Germany",
    "EC" => "Ecuador",
    "EG" => "Egypt",
    "SV" => "El Salvador",
    "GQ" => "Equatorial Guinea",
    "ER" => "Eritrea",
    "EE" => "Estonia",
    "ET" => "Ethiopia",
    "FK" => "Falkland Islands",
    "FO" => "Faroe Islands",
    "FJ" => "Fiji",
    "FI" => "Finland",
    "FR" => "France",
    "GF" => "French Guiana",
    "PF" => "French Polynesia",
    "TF" => "French Southern Territories",
    "FQ" => "French Southern and Antarctic Territories",
    "GA" => "Gabon",
    "GM" => "Gambia",
    "GE" => "Georgia",
    "DE" => "Germany",
    "GH" => "Ghana",
    "GI" => "Gibraltar",
    "GR" => "Greece",
    "GL" => "Greenland",
    "GD" => "Grenada",
    "GP" => "Guadeloupe",
    "GU" => "Guam",
    "GT" => "Guatemala",
    "GG" => "Guernsey",
    "GN" => "Guinea",
    "GW" => "Guinea-Bissau",
    "GY" => "Guyana",
    "HT" => "Haiti",
    "HM" => "Heard Island and McDonald Islands",
    "HN" => "Honduras",
    "HK" => "Hong Kong SAR China",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IN" => "India",
    "ID" => "Indonesia",
    "IR" => "Iran",
    "IQ" => "Iraq",
    "IE" => "Ireland",
    "IM" => "Isle of Man",
    "IL" => "Israel",
    "IT" => "Italy",
    "JM" => "Jamaica",
    "JP" => "Japan",
    "JE" => "Jersey",
    "JT" => "Johnston Island",
    "JO" => "Jordan",
    "KZ" => "Kazakhstan",
    "KE" => "Kenya",
    "KI" => "Kiribati",
    "KW" => "Kuwait",
    "KG" => "Kyrgyzstan",
    "LA" => "Laos",
    "LV" => "Latvia",
    "LB" => "Lebanon",
    "LS" => "Lesotho",
    "LR" => "Liberia",
    "LY" => "Libya",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MO" => "Macau SAR China",
    "MK" => "Macedonia",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "MY" => "Malaysia",
    "MV" => "Maldives",
    "ML" => "Mali",
    "MT" => "Malta",
    "MH" => "Marshall Islands",
    "MQ" => "Martinique",
    "MR" => "Mauritania",
    "MU" => "Mauritius",
    "YT" => "Mayotte",
    "FX" => "Metropolitan France",
    "MX" => "Mexico",
    "FM" => "Micronesia",
    "MI" => "Midway Islands",
    "MD" => "Moldova",
    "MC" => "Monaco",
    "MN" => "Mongolia",
    "ME" => "Montenegro",
    "MS" => "Montserrat",
    "MA" => "Morocco",
    "MZ" => "Mozambique",
    "MM" => "Myanmar [Burma]",
    "NA" => "Namibia",
    "NR" => "Nauru",
    "NP" => "Nepal",
    "NL" => "Netherlands",
    "AN" => "Netherlands Antilles",
    "NT" => "Neutral Zone",
    "NC" => "New Caledonia",
    "NZ" => "New Zealand",
    "NI" => "Nicaragua",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "NU" => "Niue",
    "NF" => "Norfolk Island",
    "KP" => "North Korea",
    "VD" => "North Vietnam",
    "MP" => "Northern Mariana Islands",
    "NO" => "Norway",
    "OM" => "Oman",
    "PC" => "Pacific Islands Trust Territory",
    "PK" => "Pakistan",
    "PW" => "Palau",
    "PS" => "Palestinian Territories",
    "PA" => "Panama",
    "PZ" => "Panama Canal Zone",
    "PG" => "Papua New Guinea",
    "PY" => "Paraguay",
    "YD" => "People's Democratic Republic of Yemen",
    "PE" => "Peru",
    "PH" => "Philippines",
    "PN" => "Pitcairn Islands",
    "PL" => "Poland",
    "PT" => "Portugal",
    "PR" => "Puerto Rico",
    "QA" => "Qatar",
    "RO" => "Romania",
    "RU" => "Russia",
    "RW" => "Rwanda",
    "RE" => "Réunion",
    "BL" => "Saint Barthélemy",
    "SH" => "Saint Helena",
    "KN" => "Saint Kitts and Nevis",
    "LC" => "Saint Lucia",
    "MF" => "Saint Martin",
    "PM" => "Saint Pierre and Miquelon",
    "VC" => "Saint Vincent and the Grenadines",
    "WS" => "Samoa",
    "SM" => "San Marino",
    "SA" => "Saudi Arabia",
    "SN" => "Senegal",
    "RS" => "Serbia",
    "CS" => "Serbia and Montenegro",
    "SC" => "Seychelles",
    "SL" => "Sierra Leone",
    "SG" => "Singapore",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "SB" => "Solomon Islands",
    "SO" => "Somalia",
    "ZA" => "South Africa",
    "GS" => "South Georgia and the South Sandwich Islands",
    "KR" => "South Korea",
    "ES" => "Spain",
    "LK" => "Sri Lanka",
    "SD" => "Sudan",
    "SR" => "Suriname",
    "SJ" => "Svalbard and Jan Mayen",
    "SZ" => "Swaziland",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "SY" => "Syria",
    "ST" => "São Tomé and Príncipe",
    "TW" => "Taiwan",
    "TJ" => "Tajikistan",
    "TZ" => "Tanzania",
    "TH" => "Thailand",
    "TL" => "Timor-Leste",
    "TG" => "Togo",
    "TK" => "Tokelau",
    "TO" => "Tonga",
    "TT" => "Trinidad and Tobago",
    "TN" => "Tunisia",
    "TR" => "Turkey",
    "TM" => "Turkmenistan",
    "TC" => "Turks and Caicos Islands",
    "TV" => "Tuvalu",
    "UM" => "U.S. Minor Outlying Islands",
    "PU" => "U.S. Miscellaneous Pacific Islands",
    "VI" => "U.S. Virgin Islands",
    "UG" => "Uganda",
    "UA" => "Ukraine",
    "SU" => "Union of Soviet Socialist Republics",
    "AE" => "United Arab Emirates",
    "GB" => "United Kingdom",
    "US" => "United States",
    "ZZ" => "Unknown or Invalid Region",
    "UY" => "Uruguay",
    "UZ" => "Uzbekistan",
    "VU" => "Vanuatu",
    "VA" => "Vatican City",
    "VE" => "Venezuela",
    "VN" => "Vietnam",
    "WK" => "Wake Island",
    "WF" => "Wallis and Futuna",
    "EH" => "Western Sahara",
    "YE" => "Yemen",
    "ZM" => "Zambia",
    "ZW" => "Zimbabwe",
    "AX" => "Åland Islands",
);

$canada_provinces_territories = ["Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Northwest Territories", "Nova Scotia", "Nunavut", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan", "Yukon"];
$us_states = ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"];

?>

    <section class="content-seq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                    <h1>Payment</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <form action="functions/order-place.php" method="POST" enctype="multipart/form-data"
                          class="has-validation-callback">
                          <?php

                    if (isset($_SESSION['success'])) {
                        $alertClass = 'alert-success';
                        $message = $_SESSION['success'];
                        unset($_SESSION['success']);
                    } else {
                        $alertClass = '';
                        $message = '';
                    }
                    ?>
                    <?php if (!empty($message)) : ?>
                        <div class="alert <?php echo $alertClass; ?> alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?php echo $alertClass == 'alert-success' ? 'Success!' : 'Alert!'; ?></strong> <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                        <input type="hidden" name="type" value="paypal_payment">
                        <input type="hidden" value="203.130.26.2" name="customer[ip]">
                        <input type="hidden" id="invoiceId" value="" name="invoiceId">
                        <div class="form-sec step-1-form logo-brief-form">

                            <ul>
                                <li>
                                    <label>Package: </label>
                                    <input type="text" placeholder="" id="package_name"
                                           value="<?= $package_name ?>" name="package_name" readonly>
                                </li>
                                <!--<li>-->
                                <!--    <label>Amount: USD </label>-->
                                <!--    <input type="text" placeholder="" id="pprice" readonly="" value="$<?= $price ?>">-->
                                <!--    <input type="hidden" name="package_price" placeholder="" id="price" readonly=""-->
                                <!--           value="<?= $price ?>">-->
                                <!--</li>-->
                                <hr>
                                <li>
                                    <label>FIRST NAME <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="customer_first_name"
                                           placeholder="" id="txtShipFirstName" required>
                                </li>
                                <li>
                                    <label>LAST NAME <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="customer_last_name"
                                           placeholder="" id="txtShipLastName">
                                </li>
                                <!-- <li>
                                    <label>COUNTRY <span class="req-field-star">*</span></label>
                                    <select name="country" id="country">
                                        <option value="">Select Country</option>
                                        <?php foreach ($countryCodesToNames as $code => $name) : ?>
                                            <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                                <li>
                                    <label>ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                    <input type="text" name="zip" placeholder="" id="txtShipPostalCode"
                                           data-validation="required" aria-required="true" maxlength="5"
                                           onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                                </li>
                                <li>
                                    <label>CITY <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="city" placeholder=""
                                           id="txtShipCity" class="city">
                                </li>
                                <li>
                                    <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                                    <select name="state" id="state">
                                        <option value="">Select State</option>
                                    </select>

                                    <input type="text" name="city" id="city" placeholder="City*"
                                           style="display:none">
                                </li> -->
                                <!--<li>-->
                                <!--    <label>ADDRESS <span class="req-field-star">*</span></label>-->
                                <!--    <input type="text" data-validation="required" name="address" placeholder=""-->
                                <!--           id="txtShipAddress1">-->
                                <!--</li>-->
                                <li>
                                    <label>Telephone <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="phone" placeholder=""
                                           id="txtPhoneNumber" maxlength="10"
                                           onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                                </li>
                                <li>
                                    <label>EMAIL <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="email" placeholder=""
                                           id="txtEmailAddress">
                                </li>
                                <hr>
                                <!-- <img class="img-responsive in-block" src="img/visa.png"
                                     style="text-align: center;margin: 0 auto;">
                                <li>
                                    <label>CARD NAME: <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="card" placeholder="" id="">
                                </li>
                                <li>
                                    <label>CARD NUMBER: <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="card_number" placeholder=""
                                           id="txtCardNumber" maxlength="16">
                                </li>
                                <li>
                                    <label>EXP DATE: <span class="req-field-star">*</span></label>
                                    <select id="cmbCardMonth" data-validation="required" class="required month"
                                            name="card_expiryMonth">
                                        <option value="">Month</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
                                            echo "<option value='{$month}'>" . date('F', mktime(0, 0, 0, $i, 1)) . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <select id="cmbCardYear" data-validation="required" class="required year"
                                            name="card_expiryYear">
                                        <option value="">Year</option>
                                        <?php
                                        $currentYear = date("Y");
                                        for ($i = $currentYear; $i <= $currentYear + 20; $i++) {
                                            echo "<option value='{$i}'>{$i}</option>";
                                        }
                                        ?>
                                    </select>
                                </li>
                                <li>
                                    <label>CVV: <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="card_cvv" placeholder=""
                                           id="txtCardSecurityCode" maxlength="4">
                                </li> -->
                            </ul>
                        </div>
                        <!-- <div class="row paddingBottom">
                            <div class="col-lg-6 col-md-6 ">
                                <label class="field-txt">Statement Descriptor:</label>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label class="field-txt">creativeinduction.com</label>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div id="finalFormResult" style="margin: 15px 0"></div>
                        </div>
                        <div class="form-sec">
                            <ul>
                                <li class="submit-btn">
                                    <button type="submit" class="btn btn-red a-btn" id="orderFormBtn"
                                            value="1" name="paypal_payment">Submit
                                    </button>

                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 sidebar">
                    <h2><span>Need</span> Assistance?</h2>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Toll Free:</span> +1 332 288-4388
                        </li>
                        <li><a href="javascript:;" class="chat"><i class="fa fa-comments" aria-hidden="true"></i>
                                <span>Live Chat:</span>with our design expert</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var countryDropdown = document.getElementById('country');
            var stateDropdown = document.getElementById('state');
            var cityInput = document.getElementById('city');

            var usStates = <?php echo json_encode($us_states); ?>;
            var canadaProvinces = <?php echo json_encode($canada_provinces_territories); ?>;

            countryDropdown.addEventListener('change', function () {
                var selectedCountry = countryDropdown.value;
                stateDropdown.innerHTML = ''; // Clear previous options

                if (selectedCountry === 'US') {

                    cityInput.style.display = 'none'; // Hide city input
                    stateDropdown.style.display = 'block';
                    populateStates(usStates);

                } else if (selectedCountry === 'CA') {

                    cityInput.style.display = 'none'; // Hide city input
                    stateDropdown.style.display = 'block';
                    populateStates(canadaProvinces);

                } else if (selectedCountry === 'OTHER') {

                    cityInput.style.display = 'block'; // Show city input
                    stateDropdown.style.display = 'none'; // Hide state dropdown

                }

            });


            function populateStates(states) {
                for (var i = 0; i < states.length; i++) {
                    var stateName = states[i];
                    var option = document.createElement('option');
                    option.value = stateName;
                    option.textContent = stateName;
                    stateDropdown.appendChild(option);
                }
            }
        });
    </script>

<?php include 'includes/footer.php' ?>