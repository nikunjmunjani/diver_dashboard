<div class="container">
    <div class="row mb-5">
        <div class="col-12 center-main-block mt-5 mb-5">
            <div class="center-block main-step">
                <span class="info-text d-block">Thanks for scanning the QR and</span> 
                <span class="info-text d-block">start your registration process for</span>
                <span class="info-text d-block"><span class="cstm-link">Open Water</span> course at <span class="cstm-link">Swansea</span></span>
                <span class="info-text d-block"><span class="cstm-link">NSW 2281</span>, Australia</span>
            </div>

            <div class="center-block second-step d-none">
                <span class="info-text d-block">You are just few steps away to</span>
                <span class="info-text d-block">complete the <span class="cstm-link">registration</span></span> 

                <div class="mt-5">
                    <ul id="cstm-form-progress">
                        <li>
                            <div class="progress-node progress-grey" data-step="1"></div>
                            <p id="progress_p_1">Fill the form for SSI registration</p>
                        </li>
                        <li>
                            <div class="progress-divider progress-grey" id="progress_divider_1"></div>
                        </li>
                        <li>
                            <div class="progress-node progress-grey" data-step="2"></div>
                            <p id="progress_p_2">Update / Complete medical questionary</p>
                        </li>
                        <li>
                            <div class="progress-divider progress-grey" id="progress_divider_2"></div>
                        </li>
                        <li>
                            <div class="progress-node progress-grey" data-step="3"></div>
                            <p id="progress_p_3">Digital signature</p>
                        </li>
                        <li>
                            <div class="progress-divider progress-grey" id="progress_divider_3"></div>
                        </li>
                        <li>
                            <div class="progress-node progress-grey" data-step="4"></div>
                            <p id="progress_p_4">Submit & download the signed forms</p>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="center-block email-step d-none">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control cstm-input">
                    <span class="cstm-error" id="email_error"></span>
                </div>
            </div>

            <div class="center-block form-step-1 row d-none">
                <div class="mb-4 col-12">
                    <h1 class="form-title">Diver Details</h1>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="email" name="diver_email" placeholder="Email *" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_email_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_first_name" placeholder="First name *" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_first_name_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_last_name" placeholder="Last name *" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_last_name_error"></span>
                </div>
                <div class="form-inline mb-4 col-12">
                    <label>Gender</label>
                    <div class="m-auto-mr-0">
                        <input type="radio" id="male" name="gender" checked>
                        <label for="male" class="ml-3">Male</label>
                        
                        <input type="radio" id="female" name="gender" >
                        <label for="female" class="ml-3">Female</label>
                    </div>
                    
                    <span class="cstm-error" id="diver_gender_error"></span>
                </div>
                <div class="form-inline mb-4 col-12">
                    <label>Birth Date</label>
                    <div class="m-auto-mr-0">
                        <input type="text" name="diver_birth_date" id="diver_birth_date" class="ml-3 diver_date" readonly>
                    </div>
                    <span class="cstm-error" id="diver_birth_date_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_parent_name" placeholder="Parent / Guardian name *" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_parent_name_error"></span>
                </div>

                <div class="mb-4 mt-4 col-12">
                    <h1 class="form-sub-title">Other Details</h1>
                </div>
                <div class="form-group mb-4 col-12">
                    <select name="diver_country" class="form-control cstm-input select-search">
                        <option value="">Country</option>
                        <option value="in">India</option>
                    </select>
                    <span class="cstm-error" id="diver_country_error"></span>
                </div>
                <div class="form-group mb-4 col-6">
                    <select name="diver_state" class="form-control cstm-input select-search">
                        <option value="">State</option>
                    </select>
                    <span class="cstm-error" id="diver_state_error"></span>
                </div>
                <div class="form-group mb-4 col-6">
                    <select name="diver_city" class="form-control cstm-input select-search">
                        <option value="">City</option>
                    </select>
                    <span class="cstm-error" id="diver_city_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_pincode" placeholder="Pincode" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_pincode_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <textarea name="diver_address" placeholder="Address" rows="3" class="form-control cstm-input"></textarea>
                    <span class="cstm-error" id="diver_address_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_emerg_contact_name" placeholder="Emergency contact name" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_emerg_contact_name_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_emerg_contact_num" placeholder="Emergency contact phone number" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_emerg_contact_num_error"></span>
                </div>
                <div class="form-group mb-4 col-12">
                    <input type="text" name="diver_diver_insurance" placeholder="Diver Insurance" class="form-control cstm-input">
                    <span class="cstm-error" id="diver_diver_insurance_error"></span>
                </div>
                                
            </div>

            <div class="center-block center-block-less-top form-step-2 row d-none">
                <div class="mb-4 col-12">
                    <h1 class="form-title">Diver Medical </h1>
                </div>
                <div class="que1_div">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have had problems with my lungs, breathing, heart and/or blood affecting my normal physical or mental performance.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes1" name="que1" value="1" data-id="que1_sub_div" class="ans_radio_btn">
                            <label for="yes1" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no1" name="que1" value="0" class="ans_radio_btn" checked>
                            <label for="no1" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que1_sub_div d-none">
                        <h1 class="form-sub-title">I have/have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que1-1" name="que1_1">
                            <label for="que1-1" class="ml-1">Chest surgery, heart surgery, heart valve surgery, an implantable medical device (eg, stent, pacemaker, neurostimulator), pneumothorax, and/or chronic lung disease.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que1-2" name="que1_1">
                            <label for="que1-2" class="ml-1">Asthma, wheezing, severe allergies, hay fever or congested airways within the last 12 months that limits my physical activity/exercise.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que1-3" name="que1_1">
                            <label for="que1-3" class="ml-1">A problem or illness involving my heart such as: angina, chest pain on exertion, heart failure, immersion pulmonary edema, heart attack or stroke, OR am taking medication for any heart condition.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que1-4" name="que1_1">
                            <label for="que1-4" class="ml-1">Recurrent bronchitis and currently coughing within the past 12 months, OR have been diagnosed with emphysema.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que1-5" name="que1_1">
                            <label for="que1-5" class="ml-1">Symptoms affecting my lungs, breathing, heart and/or blood in the last 30 days that impair my physical or mental performance.</label>
                        </div>
                    </div>
                </div>

                <div class="que2_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I am over 45 years of age.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes2" name="que2" value="1" data-id="que2_sub_div" class="ans_radio_btn">
                            <label for="yes2" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no2" name="que2" value="0" class="ans_radio_btn" checked>
                            <label for="no2" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que2_sub_div d-none">
                        <h1 class="form-sub-title">I AM OVER 45 YEARS OF AGE AND :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que2-1" name="que2_1">
                            <label for="que2-1" class="ml-1">I currently smoke or inhale nicotine by other means.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que2-2" name="que2_1">
                            <label for="que2-2" class="ml-1">I have a high cholesterol level.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que2-3" name="que2_1">
                            <label for="que2-3" class="ml-1">I have high blood pressure.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que2-4" name="que2_1">
                            <label for="que2-4" class="ml-1">I have had a close blood relative die suddenly or of cardiac disease or stroke before the age of 50, OR have a family history of heart disease before age 50 (including abnormal heart rhythms, coronary artery disease or cardiomyopathy)</label>
                        </div>
                        
                    </div>
                </div>

                <div class="que3_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I struggle to perform moderate exercise (for example, walk 1.6 kilometer/one mile in 14 minutes or swim 200 meters/yards without resting), OR I have been unable to participate in a normal physical activity due to fitness or health reasons within the past 12 months.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes3" name="que3" value="1" class="ans_radio_btn">
                            <label for="yes3" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no3" name="que3" value="0" class="ans_radio_btn" checked>
                            <label for="no3" class="ml-3">No</label>
                        </div>
                    </div>
                </div>

                <div class="que4_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have had problems with my eyes, ears, or nasal passages/sinuses.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes4" name="que4" value="1" data-id="que4_sub_div" class="ans_radio_btn">
                            <label for="yes4" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no4" name="que4" value="0" class="ans_radio_btn" checked>
                            <label for="no4" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que4_sub_div d-none">
                        <h1 class="form-sub-title">I have/have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que4-1" name="que4_1">
                            <label for="que4-1" class="ml-1">Sinus surgery within the last 6 months.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que4-2" name="que4_1">
                            <label for="que4-2" class="ml-1">Ear disease or ear surgery, hearing loss, or problems with balance.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que4-3" name="que4_1">
                            <label for="que4-3" class="ml-1">Recurrent sinusitis within the past 12 months.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que4-4" name="que4_1">
                            <label for="que4-4" class="ml-1">Eye surgery within the past 3 months.</label>
                        </div>
                        
                    </div>
                </div>
                <div class="que5_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have had surgery within the last 12 months, OR I have ongoing problems related to past surgery.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes5" name="que5" value="1" class="ans_radio_btn">
                            <label for="yes5" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no5" name="que5" value="0" class="ans_radio_btn" checked>
                            <label for="no5" class="ml-3">No</label>
                        </div>
                    </div>
                </div>

                <div class="que6_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have lost consciousness, had migraine headaches, seizures, stroke, significant head injury, or suffer from persistent neurologic injury or disease.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes6" name="que6" value="1" data-id="que6_sub_div" class="ans_radio_btn">
                            <label for="yes6" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no6" name="que6" value="0" class="ans_radio_btn" checked>
                            <label for="no6" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que6_sub_div d-none">
                        <h1 class="form-sub-title">I have/have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que6-1" name="que6_1">
                            <label for="que6-1" class="ml-1">Head injury with loss of consciousness within the past 5 years.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que6-2" name="que6_1">
                            <label for="que6-2" class="ml-1">Persistent neurologic injury or disease.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que6-3" name="que6_1">
                            <label for="que6-3" class="ml-1">Recurring migraine headaches within the past 12 months, or take medications to prevent them.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que6-4" name="que6_1">
                            <label for="que6-4" class="ml-1">Blackouts or fainting (full/partial loss of consciousness) within the last 5 years.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que6-5" name="que6_1">
                            <label for="que6-5" class="ml-1">Epilepsy, seizures, or convulsions, OR take medications to prevent them.</label>
                        </div>
                        
                    </div>
                </div>

                <div class="que7_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I am currently undergoing treatment (or have required treatment within the last five years) for psychological problems, personality disorder, panic attacks, or an addiction to drugs or alcohol; or, I have been diagnosed with a learning or developmental disability.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes7" name="que7" value="1" class="ans_radio_btn">
                            <label for="yes7" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no7" name="que7" value="0" class="ans_radio_btn" checked>
                            <label for="no7" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que7_sub_div d-none">
                        <h1 class="form-sub-title">I have/have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que7-1" name="que7_1">
                            <label for="que7-1" class="ml-1">Behavioral health, mental or psychological problems requiring medical/psychiatric treatment.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que7-2" name="que7_1">
                            <label for="que7-2" class="ml-1">Major depression, suicidal ideation, panic attacks, uncontrolled bipolar disorder requiring medication/psychiatric treatment.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que7-3" name="que7_1">
                            <label for="que7-3" class="ml-1">Been diagnosed with a mental health condition or a learning/developmental disorder that requires ongoing care or special accommodation.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que7-4" name="que7_1">
                            <label for="que7-4" class="ml-1">An addiction to drugs or alcohol requiring treatment within the last 5 years.</label>
                        </div>
                                                
                    </div>
                </div>

                <div class="que8_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have had back problems, hernia, ulcers, or diabetes.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes8" name="que8" value="1" data-id="que8_sub_div" class="ans_radio_btn">
                            <label for="yes8" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no8" name="que8" value="0" class="ans_radio_btn" checked>
                            <label for="no8" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que8_sub_div d-none">
                        <h1 class="form-sub-title">I have/have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que8-1" name="que8_1">
                            <label for="que8-1" class="ml-1">Recurrent back problems in the last 6 months that limit my everyday activity.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que8-2" name="que8_1">
                            <label for="que8-2" class="ml-1">Back or spinal surgery within the last 12 months.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que8-3" name="que8_1">
                            <label for="que8-3" class="ml-1">Diabetes, either drug or diet controlled, OR gestational diabetes within the last 12 months.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que8-4" name="que8_1">
                            <label for="que8-4" class="ml-1">An uncorrected hernia that limits my physical abilities.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que8-5" name="que8_1">
                            <label for="que8-5" class="ml-1">Active or untreated ulcers, problem wounds, or ulcer surgery within the last 6 months.</label>
                        </div>
                                                
                    </div>
                </div>

                <div class="que9_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I have had stomach or intestine problems, including recent diarrhea.</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes9" name="que9" value="1" data-id="que9_sub_div" class="ans_radio_btn">
                            <label for="yes9" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no9" name="que9" value="0" class="ans_radio_btn" checked>
                            <label for="no9" class="ml-3">No</label>
                        </div>
                    </div>
    
                    <div class="mb-4 col-12 que9_sub_div d-none">
                        <h1 class="form-sub-title">I have had :  </h1>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-1" name="que9_1">
                            <label for="que9-1" class="ml-1">Ostomy surgery and do not have medical clearance to swim or engage in physical activity.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-2" name="que9_1">
                            <label for="que9-2" class="ml-1">Dehydration requiring medical intervention within the last 7 days.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-3" name="que9_1">
                            <label for="que9-3" class="ml-1">Active or untreated stomach or intestinal ulcers or ulcer surgery within the last 6 months.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-4" name="que9_1">
                            <label for="que9-4" class="ml-1">Frequent heartburn, regurgitation, or gastroesophageal reflux disease (GERD).</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-5" name="que9_1">
                            <label for="que9-5" class="ml-1">Active or uncontrolled ulcerative colitis or Crohn’s disease.</label>
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="que9-6" name="que9_1">
                            <label for="que9-6" class="ml-1">Bariatric surgery within the last 12 months.</label>
                        </div>
                                                
                    </div>
                </div>

                <div class="que10_div d-none">
                    <div class="mb-4 col-12">
                        <span class="info-text text-left d-block">I am taking prescription medications (with the exception of birth control or or anti-malarial drugs other than mefloquine (Lariam).</span>
                        <div class="mt-3 mb-3">
                            <input type="radio" id="yes10" name="que10" value="1" class="ans_radio_btn">
                            <label for="yes10" class="ml-1">Yes</label>
                            
                            <input type="radio" id="no10" name="que10" value="0" class="ans_radio_btn" checked>
                            <label for="no10" class="ml-3">No</label>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="center-block form-step-3 row d-none">
                <div class="mb-4 col-12">
                    <h1 class="form-title">Diver Signature </h1>
                </div>
                <div class="mb-4 col-12 signpad_main_div">
                    <div class="sigPad" id="diver_sign_div" >
                        <div class="sig sigWrapper" >
                            <canvas class="pad sig_canvas" id="diver_canvas"></canvas>
                            <input type="hidden" name="diver_sign" class="output">
                        </div>
                    </div>
                </div>
            </div>

            <div class="center-block center-block-less-top form-step-4 row d-none">
                <div class="mb-4 col-12">
                    <h1 class="form-title">Parent/Guardian Signature </h1>
                </div>
                <div class="mb-4 col-12 signpad_main_div">
                    <div class="sigPad" id="diver_parent_sign_div" >
                        <div class="sig sigWrapper" >
                            <canvas class="pad sig_canvas" id="diver_parent_canvas"></canvas>
                            <input type="hidden" name="diver_parent_sign" class="output">
                        </div>
                    </div>
                </div>
            </div>

            <div class="center-block center-block-less-top waiting-step row d-none">
                <div class="mb-4 col-12">
                    <h1 class="form-title">Signing documents </h1>
                </div>
                <div class="mb-4 col-12">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_qsgqcwag.json"  background="transparent"  speed="1" class="sign_waiting_gif" loop autoplay></lottie-player>
                </div>
                <div class="mb-4 mt-4 col-12">
                    <span class="small-gray-text animated fadeInDown d-block" id="infinity_text">Filling the SSI form..</span>
                </div>
            </div>

            <div class="center-block finish-step d-none">
                <span class="info-text d-block"><span class="cstm-link">Thanks</span> for completing the <span class="info-text d-block">registration process. please find </span><span class="info-text d-block">us at front desk. you can </span><span class="info-text d-block">download signed documents </span><a href="javascript:void(0);" id="pdf_link" class="pdf_link" target="_blank"><span class="info-text cstm-link d-block">here</span></a>
            </div>

            
        </div>
        <div class="col-12 text-center">
            <button class="cstm-btn-blue continue_btn" data-step="main-step" data-next="second-step">Join now</button>
        </div>
    </div>
</div>

<script>
    function resize(){    
        if($(window).width()<1020){

            $(".sig_canvas").attr("height",$(".signpad_main_div").width());
            $(".sig_canvas").attr("width",$(".signpad_main_div").width());
            $(".sigPad").css("height",$(".signpad_main_div").width());
            $(".sigPad").css("width",$(".signpad_main_div").width());
            $(".sigWrapper").css("height",$(".signpad_main_div").width());
            $(".sigWrapper").css("width",$(".signpad_main_div").width());
        }else{
            $(".sig_canvas").attr("height",400);
            $(".sig_canvas").attr("width",500);

            $(".sigPad").css("height",400);
            $(".sigPad").css("width",500);
            $(".sigWrapper").css("height",400);
            $(".sigWrapper").css("width",500);
        }
    }
    $(document).ready(function(){
        
        $(window).on("resize", function(){                      
            resize();
        });

        $(".center-main-block").css("min-height",($(window).height()-300));
        $(".select-search").select2({
            dropdownAutoWidth : true,
            width: '100%'
        });
        $( "#diver_birth_date" ).datepicker({
            format: 'yyyy/mm/dd',
            endDate: new Date(),
        }).datepicker('update', new Date(new Date().getFullYear(),new Date().getMonth(),new Date().getDate()));

        $('#diver_sign_div').signaturePad({
            drawOnly:true, 
            drawBezierCurves:true, 
            lineTop:200
        });
        $('#diver_parent_sign_div').signaturePad({
            drawOnly:true, 
            drawBezierCurves:true, 
            lineTop:200
        });

        var infinity_text = ["Filling the SSI form..", "Signing the forms", "Blowing some bubbles"];
        let i  = 0 ;
        setInterval(function loop(){
            
            $("#infinity_text").removeClass("animated fadeInDown");
            
            setTimeout(function(){ 
                $("#infinity_text").addClass("animated fadeInDown");
                $("#infinity_text").html(infinity_text[i]); 
            },500);

            i++;
            if (i >= infinity_text.length) {i=0;}

        },2500);

        $(document).on("click",".continue_btn",function(){
            var step= $(this).attr("data-step");
            var next= $(this).attr("data-next");

            $("."+step).addClass("d-none");
            $("."+next).removeClass("d-none");

            $(this).html("Continue");
            
            if(step=="main-step"){
                $(this).attr("data-step","second-step");
                $(this).attr("data-next","email-step");
            }else if(step=="second-step"){
                $(this).attr("data-step","email-step");
                $(this).attr("data-next","form-step-1");
            }else if(step=="email-step"){

                $(this).attr("data-step","form-step-1");
                $(this).attr("data-next","form-step-2");
                
                $(".step_div").removeClass("d-none");
                
                if($(window).width()<=1024){
                    $(".main-nav").removeClass("justify-content-center");
                    $(".main-nav").addClass("justify-content-left");
                    $(".logo-nav").hide();
                    setTimeout(function(){
                        $(".logo-nav").show(); 
                        $(".nav-item").addClass("animated fadeInRight");
                    },200);
                    
                }
            }else if(step=="form-step-1"){

                $(this).attr("data-step","que1_div");
                $(this).attr("data-next","que2_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","10%");
            }else if(step=="que1_div"){

                $(this).attr("data-step","que2_div");
                $(this).attr("data-next","que3_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","20%");
            }else if(step=="que2_div"){

                $(".que1_div").addClass("d-none");
                $(this).attr("data-step","que3_div");
                $(this).attr("data-next","que4_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","30%");
            }else if(step=="que3_div"){

                $(this).attr("data-step","que4_div");
                $(this).attr("data-next","que5_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","40%");
            }else if(step=="que4_div"){

                $(this).attr("data-step","que5_div");
                $(this).attr("data-next","que6_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","50%");
            }else if(step=="que5_div"){

                $(this).attr("data-step","que6_div");
                $(this).attr("data-next","que7_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","60%");
            }else if(step=="que6_div"){

                $(this).attr("data-step","que7_div");
                $(this).attr("data-next","que8_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","70%");
            }else if(step=="que7_div"){

                $(this).attr("data-step","que8_div");
                $(this).attr("data-next","que9_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","80%");
            }else if(step=="que8_div"){

                $(this).attr("data-step","que9_div");
                $(this).attr("data-next","que10_div");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","90%");
            }else if(step=="que9_div"){

                $(this).attr("data-step","form-step-2");
                $(this).attr("data-next","form-step-3");

                $(".nav-progress").removeClass("d-none");

                $(".nav-progress-bar").css("width","100%");
            }else if(step=="form-step-2"){

                $(this).attr("data-step","form-step-3");
                $(this).attr("data-next","form-step-4");
                
                resize();
                $(".nav-progress").addClass("d-none");
            }else if(step=="form-step-3"){

                $(this).attr("data-step","form-step-4");
                $(this).attr("data-next","waiting-step");

            }else if(step=="form-step-4"){

                $(this).attr("data-step","waiting-step");
                $(this).attr("data-next","finish-step");
                $(this).html("<img class='img-fluid' src='<?= base_url(); ?>assets/images/button_loader.gif' style='width:20px;' >");

            }else{
                $(this).hide();
                $(".main-nav").removeClass("justify-content-left");
                $(".main-nav").addClass("justify-content-center");
                $(".logo-nav").hide();
                setTimeout(function(){
                    $(".logo-nav").show(); 
                    $(".nav-item").addClass("animated fadeInLeft");
                },200);
                $(".step_div").addClass("d-none");
                $(".nav-progress").addClass("d-none");

            }
            
            if(step=="main-step"){
                setTimeout(function(){ step_progress_animate(); },500);
            }
        });

        $(document).on("change",".ans_radio_btn",function(){
            var rdname=$(this).attr("name");
            console.log(rdname);
            var id = $("input[name='"+rdname+"']").attr("data-id");
            console.log(id);
            if($("input[name='"+rdname+"']:checked").val()==1){
                if(id!=''){
                    $("."+id).removeClass("d-none");
                }
            }else{
                $("."+id).removeClass("d-none");
                $("."+id).addClass("d-none");
            }
            
        });

    });

    function step_progress_animate() { 
        
        $(".progress-node").removeClass("progress-green");
        $(".progress-divider").removeClass("divider-black");
        $(".progress-node").next().removeClass("progress-p-black");

        $(".progress-node").addClass("progress-grey");
        $(".progress-divider").addClass("progress-grey");

        $(".progress-node").each(function(i, v){
            animate_step($(v), i);
        });

    }

    function animate_step(element, delayIndex) {

        setTimeout(function(){

            var step= $(element).attr("data-step");
            $(element).removeClass("progress-grey");
            $(element).addClass("progress-green");
            $(element).next().addClass("progress-p-black");

            $("#progress_divider_"+step).removeClass("progress-grey");
            $("#progress_divider_"+step).addClass("divider-black");
        }, 800*delayIndex);

    }

</script>