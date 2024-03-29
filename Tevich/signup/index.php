<div class="signup-modal" id="signup-modal">
  <div class="signup-container">
    <div class="signup-box">
      <div id="close-btn" class="close-btn">
        <button>
          <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true" role="presentation">
            <path d="M8.5 10 4 5.5 5.5 4 10 8.5 14.5 4 16 5.5 11.5 10l4.5 4.5-1.5 1.5-4.5-4.5L5.5 16 4 14.5 8.5 10z"></path>
          </svg>
        </button>
      </div>
      <form id="signup-form" class="signup-form" method="post" action="signup\signup.php" enctype="multipart/form-data">
        <div style="display: flex" class="signup-display" id="signup-step-1">
          <div class="signup-title">
            <svg width="24" height="28" viewBox="0 0 24 28">
              <g fill-rule="evenodd">
                <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path>
                <path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path>
              </g>
            </svg>
            <h4>Join Twitch today</h4>
          </div>
          <div class="signup-about">
            <p>Creating an account allows you to participate in chat, follow your favorite channels, and broadcast from your own channel.</p>
          </div>
          <div class="signup-username">
            <p>Username</p>
            <input style="margin-left: 0" name="username" type="text" />
          </div>
          <div class="signup-pass">
            <p>Password</p>
            <input style="margin-left: 0" name="password" type="text" />
          </div>
          <!-- <div class="profile-picture">
            <p>profile picture</p>
            <input class="profile-icon-input" name="profile-picture" type="file"/>
          </div> -->
          <div class="signup-step">
            <p>Step 1 of 3</p>
          </div>
          <div id="step-footer-1" class="login__nextstep-container">
            <div class="login-btn">
              <button type="button" id="login-btn">Already a Twitch user? Log in</button>
            </div>
            <button type="button" id="next-step-btn" class="signup-nextstep-btn">Next Step</button>
          </div>
        </div>
        <div style="display: none" class="signup-display" id="signup-step-2">
          <div class="signup-title">
            <svg width="24" height="28" viewBox="0 0 24 28">
              <g fill-rule="evenodd">
                <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path>
                <path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path>
              </g>
            </svg>
            <h4>Join Twitch today</h4>
          </div>
          <div class="signup-phone">
            <div class="signup-phone-titles">
              <p class="signup-phone-title-1">Phone Number</p>
              <p class="signup-phone-title-2">(Requiers Verification)</p>
            </div>
            <div class="signup-phone-inputs">
              <select name="country_code" id="">
                <option value="AF">Afghanistan +93</option>
                <option value="AX">Aland Islands +358</option>
                <option value="AL">Albania +355</option>
                <option value="DZ">Algeria +213</option>
                <option value="AS">American Samoa +1</option>
                <option value="AD">Andorra +376</option>
                <option value="AO">Angola +244</option>
                <option value="AI">Anguilla +1</option>
                <option value="AG">Antigua and Barbuda +1</option>
                <option value="AR">Argentina +54</option>
                <option value="AM">Armenia +374</option>
                <option value="AW">Aruba +297</option>
                <option value="AC">Ascension Island +247</option>
                <option value="AU">Australia +61</option>
                <option value="AT">Austria +43</option>
                <option value="AZ">Azerbaijan +994</option>
                <option value="BS">Bahamas +1</option>
                <option value="BH">Bahrain +973</option>
                <option value="BD">Bangladesh +880</option>
                <option value="BB">Barbados +1</option>
                <option value="BY">Belarus +375</option>
                <option value="BE">Belgium +32</option>
                <option value="BZ">Belize +501</option>
                <option value="BJ">Benin +229</option>
                <option value="BM">Bermuda +1</option>
                <option value="BT">Bhutan +975</option>
                <option value="BO">Bolivia +591</option>
                <option value="BQ">Bonaire, Saint Eustatius, and Saba +599</option>
                <option value="BA">Bosnia and Herzegovina +387</option>
                <option value="BW">Botswana +267</option>
                <option value="BR">Brazil +55</option>
                <option value="IO">British Indian Ocean Territory +246</option>
                <option value="VG">British Virgin Islands +1</option>
                <option value="BN">Brunei +673</option>
                <option value="BG">Bulgaria +359</option>
                <option value="BF">Burkina Faso +226</option>
                <option value="BI">Burundi +257</option>
                <option value="KH">Cambodia +855</option>
                <option value="CM">Cameroon +237</option>
                <option value="CA">Canada +1</option>
                <option value="CV">Cape Verde +238</option>
                <option value="KY">Cayman Islands +1</option>
                <option value="CF">Central African Republic +236</option>
                <option value="TD">Chad +235</option>
                <option value="CL">Chile +56</option>
                <option value="CN">China +86</option>
                <option value="CX">Christmas Island +61</option>
                <option value="CC">Cocos (Keeling) Islands +61</option>
                <option value="CO">Colombia +57</option>
                <option value="KM">Comoros +269</option>
                <option value="CG">Congo +242</option>
                <option value="CD">Congo, The Democratic Republic of the +243</option>
                <option value="CK">Cook Islands +682</option>
                <option value="CR">Costa Rica +506</option>
                <option value="HR">Croatia +385</option>
                <option value="CU">Cuba +53</option>
                <option value="CW">Curacao +599</option>
                <option value="CY">Cyprus +357</option>
                <option value="CZ">Czech Republic +420</option>
                <option value="DK">Denmark +45</option>
                <option value="DJ">Djibouti +253</option>
                <option value="DM">Dominica +1</option>
                <option value="DO">Dominican Republic +1</option>
                <option value="TL">East Timor +670</option>
                <option value="EC">Ecuador +593</option>
                <option value="EG">Egypt +20</option>
                <option value="SV">El Salvador +503</option>
                <option value="GQ">Equatorial Guinea +240</option>
                <option value="ER">Eritrea +291</option>
                <option value="EE">Estonia +372</option>
                <option value="ET">Ethiopia +251</option>
                <option value="FK">Falkland Islands (Malvinas) +500</option>
                <option value="FO">Faroe Islands +298</option>
                <option value="FJ">Fiji +679</option>
                <option value="FI">Finland +358</option>
                <option value="FR">France +33</option>
                <option value="GF">French Guiana +594</option>
                <option value="PF">French Polynesia +689</option>
                <option value="GA">Gabon +241</option>
                <option value="GM">Gambia +220</option>
                <option value="GE">Georgia +995</option>
                <option value="DE">Germany +49</option>
                <option value="GH">Ghana +233</option>
                <option value="GI">Gibraltar +350</option>
                <option value="GR">Greece +30</option>
                <option value="GL">Greenland +299</option>
                <option value="GD">Grenada +1</option>
                <option value="GP">Guadeloupe +590</option>
                <option value="GU">Guam +1</option>
                <option value="GT">Guatemala +502</option>
                <option value="GG">Guernsey +44</option>
                <option value="GN">Guinea +224</option>
                <option value="GW">Guinea-Bissau +245</option>
                <option value="GY">Guyana +592</option>
                <option value="HT">Haiti +509</option>
                <option value="HN">Honduras +504</option>
                <option value="HK">Hong Kong +852</option>
                <option value="HU">Hungary +36</option>
                <option value="IS">Iceland +354</option>
                <option value="IN">India +91</option>
                <option value="ID">Indonesia +62</option>
                <option value="IR">Iran +98</option>
                <option value="IQ">Iraq +964</option>
                <option value="IE">Ireland +353</option>
                <option value="IM">Isle of Man +44</option>
                <option value="IL">Israel +972</option>
                <option value="IT">Italy +39</option>
                <option value="CI">Ivory Coast +225</option>
                <option value="JM">Jamaica +1</option>
                <option value="JP">Japan +81</option>
                <option value="JE">Jersey +44</option>
                <option value="JO">Jordan +962</option>
                <option value="KZ">Kazakhstan +7</option>
                <option value="KE">Kenya +254</option>
                <option value="KI">Kiribati +686</option>
                <option value="XK">Kosovo +383</option>
                <option value="KW">Kuwait +965</option>
                <option value="KG">Kyrgyzstan +996</option>
                <option value="LA">Laos +856</option>
                <option value="LV">Latvia +371</option>
                <option value="LB">Lebanon +961</option>
                <option value="LS">Lesotho +266</option>
                <option value="LR">Liberia +231</option>
                <option value="LY">Libya +218</option>
                <option value="LI">Liechtenstein +423</option>
                <option value="LT">Lithuania +370</option>
                <option value="LU">Luxembourg +352</option>
                <option value="MO">Macao +853</option>
                <option value="MK">Macedonia +389</option>
                <option value="MG">Madagascar +261</option>
                <option value="MW">Malawi +265</option>
                <option value="MY">Malaysia +60</option>
                <option value="MV">Maldives +960</option>
                <option value="ML">Mali +223</option>
                <option value="MT">Malta +356</option>
                <option value="MH">Marshall Islands +692</option>
                <option value="MQ">Martinique +596</option>
                <option value="MR">Mauritania +222</option>
                <option value="MU">Mauritius +230</option>
                <option value="YT">Mayotte +262</option>
                <option value="MX">Mexico +52</option>
                <option value="FM">Micronesia +691</option>
                <option value="MD">Moldova +373</option>
                <option value="MC">Monaco +377</option>
                <option value="MN">Mongolia +976</option>
                <option value="ME">Montenegro +382</option>
                <option value="MS">Montserrat +1</option>
                <option value="MA">Morocco +212</option>
                <option value="MZ">Mozambique +258</option>
                <option value="MM">Myanmar +95</option>
                <option value="NA">Namibia +264</option>
                <option value="NR">Nauru +674</option>
                <option value="NP">Nepal +977</option>
                <option value="NL">Netherlands +31</option>
                <option value="NC">New Caledonia +687</option>
                <option value="NZ">New Zealand +64</option>
                <option value="NI">Nicaragua +505</option>
                <option value="NE">Niger +227</option>
                <option value="NG">Nigeria +234</option>
                <option value="NU">Niue +683</option>
                <option value="NF">Norfolk Island +672</option>
                <option value="KP">North Korea +850</option>
                <option value="MP">Northern Mariana Islands +1</option>
                <option value="NO">Norway +47</option>
                <option value="OM">Oman +968</option>
                <option value="PK">Pakistan +92</option>
                <option value="PW">Palau +680</option>
                <option value="PS">Palestine +970</option>
                <option value="PA">Panama +507</option>
                <option value="PG">Papua New Guinea +675</option>
                <option value="PY">Paraguay +595</option>
                <option value="PE">Peru +51</option>
                <option value="PH">Philippines +63</option>
                <option value="PL">Poland +48</option>
                <option value="PT">Portugal +351</option>
                <option value="PR">Puerto Rico +1</option>
                <option value="QA">Qatar +974</option>
                <option value="RE">Reunion +262</option>
                <option value="RO">Romania +40</option>
                <option value="RU">Russia +7</option>
                <option value="RW">Rwanda +250</option>
                <option value="BL">Saint Bartelemey +590</option>
                <option value="SH">Saint Helena +290</option>
                <option value="KN">Saint Kitts and Nevis +1</option>
                <option value="LC">Saint Lucia +1</option>
                <option value="MF">Saint Martin +590</option>
                <option value="PM">Saint Pierre and Miquelon +508</option>
                <option value="VC">Saint Vincent and the Grenadines +1</option>
                <option value="WS">Samoa +685</option>
                <option value="SM">San Marino +378</option>
                <option value="ST">Sao Tome and Principe +239</option>
                <option value="SA">Saudi Arabia +966</option>
                <option value="SN">Senegal +221</option>
                <option value="RS">Serbia +381</option>
                <option value="SC">Seychelles +248</option>
                <option value="SL">Sierra Leone +232</option>
                <option value="SG">Singapore +65</option>
                <option value="SX">Sint Maarten +1</option>
                <option value="SK">Slovakia +421</option>
                <option value="SI">Slovenia +386</option>
                <option value="SB">Solomon Islands +677</option>
                <option value="SO">Somalia +252</option>
                <option value="ZA">South Africa +27</option>
                <option value="KR">South Korea +82</option>
                <option value="SS">South Sudan +211</option>
                <option value="ES">Spain +34</option>
                <option value="LK">Sri Lanka +94</option>
                <option value="SD">Sudan +249</option>
                <option value="SR">Suriname +597</option>
                <option value="SJ">Svalbard and Jan Mayen +47</option>
                <option value="SZ">Swaziland +268</option>
                <option value="SE">Sweden +46</option>
                <option value="CH">Switzerland +41</option>
                <option value="SY">Syria +963</option>
                <option value="TW">Taiwan +886</option>
                <option value="TJ">Tajikistan +992</option>
                <option value="TZ">Tanzania +255</option>
                <option value="TH">Thailand +66</option>
                <option value="TG">Togo +228</option>
                <option value="TK">Tokelau +690</option>
                <option value="TO">Tonga +676</option>
                <option value="TT">Trinidad and Tobago +1</option>
                <option value="TA">Tristan de Cunha +290</option>
                <option value="TN">Tunisia +216</option>
                <option value="TR">Turkey +90</option>
                <option value="TM">Turkmenistan +993</option>
                <option value="TC">Turks and Caicos Islands +1</option>
                <option value="TV">Tuvalu +688</option>
                <option value="VI">U.S. Virgin Islands +1</option>
                <option value="UG">Uganda +256</option>
                <option value="UA">Ukraine +380</option>
                <option value="AE">United Arab Emirates +971</option>
                <option value="GB">United Kingdom +44</option>
                <option value="US">United States +1</option>
                <option value="UY">Uruguay +598</option>
                <option value="UZ">Uzbekistan +998</option>
                <option value="VU">Vanuatu +678</option>
                <option value="VA">Vatican City +39</option>
                <option value="VE">Venezuela +58</option>
                <option value="VN">Vietnam +84</option>
                <option value="WF">Wallis and Futuna +681</option>
                <option value="EH">Western Sahara +212</option>
                <option value="YE">Yemen +967</option>
                <option value="ZM">Zambia +260</option>
                <option value="ZW">Zimbabwe +263</option>
              </select>
              <input name="phone_number" type="text" />
            </div>
            <p class="signup-phone-about">Providing a phone number helps improve security</p>
          </div>
          <div class="signup-use-email">
            <button>
              <svg width="20px" height="20px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" data-a-selector="tw-core-button-icon" aria-hidden="true" class="ScIconSVG-sc-1q25cff-1 jpczqG">
                <g>
                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm14 1.943V14H4V7.943l4.256 3.04a3 3 0 003.488 0L16     7.943zM15.28 6H4.72L9.42 9.356a1 1 0 001.162 0L15.28 6z" clip-rule="evenodd"></path>
                </g>
              </svg>
              <div>Use email instead</div>
            </button>
          </div>
          <div class="signup-about" style="margin-top: 34px">
            <p style="text-align: center">Twitch may use your phone number to call or send text messages with information regarding your account.</p>
          </div>
          <div class="signup-step">
            <p>Step 2 of 3</p>
          </div>
          <div id="step-footer-2" style="display: none" class="login__nextstep-container">
            <div class="back-btn">
              <button type="button" id="back-btn">Back</button>
            </div>
            <button type="button" id="next-step-btn" class="signup-nextstep-btn">Next Step</button>
          </div>
        </div>
        <div style="display: none" class="signup-display" id="signup-step-3">
          <div class="signup-title">
            <svg width="24" height="28" viewBox="0 0 24 28">
              <g fill-rule="evenodd">
                <path d="M19 6v6h-2V6h2zm-7 0h2v6h-2V6zM5 0 0 5v18h6v5l5-5h4l9-9V0H5zm17 13-4 4h-4l-4 4v-4H6V2h16v11z"></path>
                <path fill="#FFF" d="m18 17 4-4V2H6v15h4v4l4-4h4zM12 6h2v6h-2V6zm7 0h-2v6h2V6z"></path>
              </g>
            </svg>
            <h4>Join Twitch today</h4>
          </div>
          <div class="signup-phone">
            <div class="signup-phone-titles">
              <p class="signup-phone-title-1">Date of Birth</p>
            </div>
            <div class="signup-phone-inputs">
              <select name="birth_month" id="">
                <option value="" disabled="" selected>Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <input name="birth_day" style="width: 100px" type="text" placeholder="Day" />
              <input name="birth_year" style="width: 100px" type="text" placeholder="Year" />
            </div>
            <p class="signup-phone-about">Please provide your date of birth so we know you are old enough to have an account.</p>
          </div>
          <div class="signup-about" style="margin-top: 61px">
            <p style="text-align: center">
              By clicking Sign Up, you are agreeing to Twitch's
              <a href="">Terms of Service</a>, are acknowledging our <a href="">Privacy Notice</a> and the <a href="">EU, EEA &amp; UK Consumer Right of Withdrawal Information</a>.
            </p>
          </div>
          <div class="signup-step">
            <p>Step 3 of 3</p>
          </div>
          <div id="step-footer-3" style="display: none" class="login__nextstep-container">
            <div class="back-btn">
              <button type="button">Back</button>
            </div>
            <button id="next-step-btn" type="submit" style="width: 66px" class="signup-nextstep-btn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
