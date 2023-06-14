<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-12">
<<<<<<< HEAD
                <form id="tilmeldingForm" class="row g-5 fs-4 fw-bold" action="{{ route('tilmelding.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

=======
                <div class="row g-5 fs-4 fw-bold">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    <div class="row">
                        <div class="img-container col-6 pb-5">
                            <img src="https://dummyimage.com/500x500/dee2e6/6c757d.jpg" style="width: 500px; height: 500px" class="profileImage img-fluid rounded-circle" alt="...">
                        </div>
                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" capture>
                        
                        <div class="col-6 pb-5 align-self-center text-center">
                            <div class="input-group-lg mb-4">
<<<<<<< HEAD
                                <input 
                                    type="text" 
                                    class="form-control fs-5 fw-bold" 
                                    name="name" 
                                    id="name" 
                                    required="required" 
                                    value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                    placeholder="Fulde navn"
                                    {{ auth()->check() ? 'readonly="readonly"': '' }}
                                >
                            </div>
                            <div class="input-group-lg mb-4">
                                <input type="text" class="form-control fs-5 fw-bold" name="address" id="number" placeholder="Omrade">
=======
                                <input type="text" class="form-control fs-5 fw-bold" name="name" id="name" required="required" placeholder="Henrik Hahn-Nissen">
                            </div>
                            <div class="input-group-lg mb-4">
                                <input type="text" class="form-control fs-5 fw-bold" name="address" id="number" placeholder="Copenhagen Area Capital Region, Denmark">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                            </div>
                        </div>
                    </div> 
                    <hr class="solid-divider my-4">  
                
<<<<<<< HEAD
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group-lg mb-4">
                                <label for="number" class="form-label">Telefonnumer</label>
                                <input type="text" class="form-control" name="phone_number" id="number" placeholder="">
                            </div>
                            <div class="input-group-lg mb-4">
                                <label for="email" class="form-label">E-mail *</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email" 
                                    placeholder="" 
                                    value="{{ auth()->check() ? auth()->user()->email : '' }}"
                                    required="required" 
                                    name="email"
                                    {{ auth()->check() ? 'readonly="readonly"': '' }}
                                >
                            </div>
                            <div class="input-group-lg mb-4">
                                <label for="password" class="form-label">Password *</label>
                                <input type="password" class="form-control" id="password" required="required" name="password">
                            </div>
                            <div class="input-group-lg mb-4">
                                <label for="title" class="form-label">Title</label>
                                <textarea class="form-control" id="title" rows="2" name="title" placeholder=""></textarea>
                            </div>     
                        </div>
                        <div class="col-6">
                            <div class="input-group-lg">
                                <label for="resume" class="form-label">Resume</label>
                                <textarea class="form-control" id="resume" rows="14" name="resume"></textarea>
                            </div>    
                        </div>
                    </div>
=======
                    <div class="col-6">
                        <div class="input-group-lg mb-4">
                            <label for="number" class="form-label">Telefonnumer</label>
                            <input type="text" class="form-control" name="phone_number" id="number" placeholder="+4523898989">
                        </div>
                        <div class="input-group-lg mb-4">
                            <label for="email" class="form-label">E-mail *</label>
                            <input type="email" class="form-control" id="email" placeholder="hn@heloonline.com" required="required" name="email">
                        </div>
                        <div class="input-group-lg mb-4">
                            <label for="title" class="form-label">Title</label>
                            <textarea class="form-control" id="title" rows="2" name="title" placeholder="Influent- saerlig radgiver- Political Advisor- foredragsholder- Ivaerksaetter- livsnyder- businessmentor- bestyrelsesmedlem"></textarea>
                        </div>     
                    </div>
                    <div class="col-6">
                        <div class="input-group-lg">
                            <label for="resume" class="form-label">Resume</label>
                            <textarea class="form-control" id="resume" rows="10" name="resume"></textarea>
                        </div>    
                    </div> 
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    <!--<div class="col-12 mt-1 text-center linkedIn-autofill fs-5 d-flex justify-content-center align-items-center">
                        <a href="#"><i class="fa fa-linkedin-square rounded"></i></a>
                        <a href="#" class="stretched-link ps-3">Autoudfyld med din linkedIn-profil</a>
                    </div>-->   
                    <div class="col-md-12 mt-1">
                        <hr class="solid-divider">
                    </div>
                    <div class="col-12 mt-1">
                        <div class="input-group-lg">
                            <label for="title" class="form-label">Tilføj yderligere til dit resume for dette netvaerk</label>
                            <textarea class="form-control rounded" id="title" rows="4" name="add_more_profile_network"></textarea>
                        </div>  
                    </div>
<<<<<<< HEAD
                    <div class="row">
                        <div class="col-6 mt-3">
                            <lable class="form-label">Mødefrekvens *</label>
                            <div class="border border-2 rounded p-4 rounded-2 mb-4 mt-2">
                                <div class="form-check fw-normal">
                                    <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption1" required="required" value="En gang om ugen">
                                    <label class="form-check-label" for="meetingFrequencyOption1">En gang om ugen</label>
                                </div>
                            </div>
                            <div class="border border-2 rounded p-4 rounded-2 my-4">
                                <div class="form-check fw-normal">
                                    <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption2" required="required" value="Hver anden uge">
                                    <label class="form-check-label" for="meetingFrequencyOption2">Hver anden uge</label>
                                </div>
                            </div>
                            <div class="border border-2 rounded p-4 my-4">
                                <div class="form-check fw-normal">
                                    <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption3" required="required" value="En gang om måneden">
                                    <label class="form-check-label" for="meetingFrequencyOption3">En gang om måneden</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label">Mødeformer *</label>
                            <div class="border border-2 rounded p-4 mb-4 mt-2">
                                <div class="form-check fw-normal">
                                    <input class="form-check-input" type="radio" name="virtual_meeting" id="virtualMeeting" value="Virtuelle møder" required="required">
                                    <label class="form-check-label" for="virtualMeeting">Virtuelle møder</label>
                                </div>
                            </div>

                            <div class="border border-2 rounded p-4 mb-4 mt-2">
                                <div class="form-check fw-normal">
                                    <input class="form-check-input" type="radio" name="virtual_meeting" id="physicalMeeting" value="Fysiske møder" required="required">
                                    <label class="form-check-label" for="physicalMeeting">Fysiske møder</label>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <select class="forms_of_meeting" style="width: 100%" id="physicalMeeting" name="physical_meeting[]" multiple="true">
                                    <option value="Region Hovedstaden">Region Hovedstaden</option>
                                </select>
                            </div>-->
                        </div>
=======
                    <div class="col-6 mt-3">
                        <lable class="form-label">Mødefrekvens *</label>
                        <div class="border border-2 rounded p-4 rounded-2 mb-4 mt-2">
                            <div class="form-check fw-normal">
                                <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption1" required="required" value="En gang om ugen">
                                <label class="form-check-label" for="meetingFrequencyOption1">En gang om ugen</label>
                            </div>
                        </div>
                        <div class="border border-2 rounded p-4 rounded-2 my-4">
                            <div class="form-check fw-normal">
                                <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption2" required="required" value="Hver anden uge" disabled>
                                <label class="form-check-label" for="meetingFrequencyOption2">Hver anden uge</label>
                            </div>
                        </div>
                        <div class="border border-2 rounded p-4 my-4">
                            <div class="form-check fw-normal">
                                <input class="form-check-input" type="radio" name="meeting_frequency" id="meetingFrequencyOption3" required="required" value="En gang om måneden">
                                <label class="form-check-label" for="meetingFrequencyOption3">En gang om måneden</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <lable class="form-label">Mødeformer *</label>
                        <div class="border border-2 rounded p-4 mb-4 mt-2">
                            <div class="form-check fw-normal">
                                <input class="form-check-input" type="radio" name="virtual_meeting" id="virtualMeeting" value="Virtuelle møder">
                                <label class="form-check-label" for="virtualMeeting">Virtuelle møder</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="forms_of_meeting" style="width: 100%" id="physicalMeeting" name="physical_meeting" multiple="true">
                                <option value="Region Hovedstaden">Region Hovedstaden</option>
                            </select>
                        </div>   
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    </div>
                    <div class="col-6 info-link mt-3 mb-4">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="ps-3 fs-5 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                    </div>
                    <div class="col-md-12 mt-1">
                        <hr class="solid-divider">
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="mySelect">Hvad kan jeg gøre for netvaerket *</label>
                                <div class="form-group">
<<<<<<< HEAD
                                    <select class="multiselect" style="width: 100%" id="canDoForNetwork" name="can_do_for_network[]" required="required" multiple="true">
=======
                                    <select class="multiselect" style="width: 100%" id="canDoForNetwork" name="can_do_for_network" required="required" multiple="true">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                        <option value="Bestyrelsesarbejde">Bestyrelsesarbejde</option>
                                        <option value="Bestyrelsesformand">Bestyrelsesformand</option>
                                        <option value="Konceptudvikling og forrentningsmodeller">Konceptudvikling og forrentningsmodeller</option>
                                        <option value="Lobbyisme">Lobbyisme</option>
                                        <option value="Netværksledelse">Netværksledelse</option>
                                        <option value="Politik">Politik</option>
                                        <option value="Public Affairs">Public Affairs</option>
                                        <option value="Public Relation (PR)">Public Relation (PR)</option>
                                        <option value="Salgsledelse">Salgsledelse</option>
                                    </select>
                                </div>   
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="mySelect">Mine Interesser *</label>
                                <div class="form-group">
<<<<<<< HEAD
                                    <select class="multiselect" style="width: 100%" id="myInterest" name="my_interest[]" required="required" multiple="true">
=======
                                    <select class="multiselect" style="width: 100%" id="myInterest" name="my_interest" required="required" multiple="true">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                        <option value="Amerikansk fodbold">Amerikansk fodbold</option>
                                        <option value="Dykning">Dykning</option>
                                    </select>
                                </div>   
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="mySelect">Hvad kan netvaerket gøre for mig *</label>
                                <div class="form-group">
<<<<<<< HEAD
                                    <select class="multiselect" style="width: 100%" id="canNetworkDoForMe" name="can_network_do_for_me[]" required="required" multiple="true">
=======
                                    <select class="multiselect" style="width: 100%" id="canNetworkDoForMe" name="can_network_do_for_me" required="required" multiple="true">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                        <option value="Kommunikation">Kommunikation</option>
                                        <option value="Konceptudvikling og forretningsmodeller">Konceptudvikling og forretningsmodeller</option>
                                        <option value="Netværksledelse">Netværksledelse</option>
                                        <option value="Politik">Politik</option>
                                        <option value="Public Affairs">Public Affairs</option>
                                        <option value="Salgsstrategi">Salgsstrategi</option>
                                        <option value="Økonomi">Økonomi</option>
                                    </select>
                                </div>   
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="mySelect">Det vigtigste emne for mig lige nu *</label>
                                <div class="form-group">
<<<<<<< HEAD
                                    <select class="multiselect" style="width: 100%" id="importantTopic" name="important_topic[]" required="required" multiple="true">
=======
                                    <select class="multiselect" style="width: 100%" id="importantTopic" id="importantTopic" name="important_topic" required="required" multiple="true">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                        <option value="Kommunikation">Kommunikation</option>
                                        <option value="Politik">Politik</option>
                                        <option value="Public Affairs">Public Affairs</option>
                                        <option value="Public Relation (PR)">Public Relation (PR)</option>
                                    </select>
                                </div>   
                            </div>
                        </div>   
                        <div class="row mt-5">
                            <div class="col-6 info-link">
                                <p fs-5>Mangler du et fagemne eller interesseord?</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="ps-3 fs-5 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</span>
                            </div>
                            <div class="col-6">
                                <div class="input-group-lg">
                                    <textarea class="form-control" id="businessArea" name="business_area" rows="3" placeholder="Indtast forretningsområde eller interesse"></textarea>
                                </div>  
                                <div class="text-end tilmelding-send mb-5 mt-4">
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-outline-warning fs-5 px-4 py-3">
                                        Send<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
=======
                                    <a href="javascript:;" class="next btn btn-outline-warning fs-5 px-4 py-3">
                                        Send<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
                                    </a>
                                </div> 
                            </div>
                        </div>  
                        
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    </div>
                    <div class="col-md-12 mt-5">
                        <hr class="solid-divider">
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <h2 class="mb-4">Kontaktoplysninger</h2>
                            <div class="col-6"> 
                                <div class="input-group-lg mb-4">
<<<<<<< HEAD
                                    <label for="companyName" class="form-label">Virksomhedsnavn</label>
                                    <input type="text" name="company_name" class="form-control" id="companyName" placeholder="">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="companyAddress" class="form-label">Adresse</label>
                                    <input type="text" name="company_address" class="form-control" id="companyAddress" placeholder="">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="companyAddress2" class="form-label">Adresse 2</label>
                                    <input type="text" name="company_address_2" class="form-control" id="companyAddress2" placeholder="">
=======
                                    <label for="number" class="form-label">Virksomhedsnavn</label>
                                    <input type="text" class="form-control" id="number" placeholder="HELO Group">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="email" class="form-label">Adresse</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ostergade 1, 2">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="email" class="form-label">Adresse 2</label>
                                    <input type="email" class="form-control" id="email" placeholder="Indtast din adresse 2">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                </div>      
                            </div>
                            <div class="col-6">
                                <div class="input-group-lg mb-4">
<<<<<<< HEAD
                                    <label for="zipCode" class="form-label">Postnummer</label>
                                    <input type="text" name="zip_code" class="form-control" id="zipCode" placeholder="">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="town" class="form-label">By</label>
                                    <input type="text" name="town" class="form-control" id="town" placeholder="">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="dropdown" class="form-label">Land *</label>
                                    <select class="form-control" name="country" required="required">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
=======
                                    <label for="number" class="form-label">Postnummer</label>
                                    <input type="text" class="form-control" id="number" placeholder="1100">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="email" class="form-label">By</label>
                                    <input type="email" class="form-control" id="email" placeholder="Kobenhavn">
                                </div>
                                <div class="input-group-lg mb-4">
                                    <label for="dropdown" class="form-label">Land *</label>
                                    <select class="form-control" name="land" required="required">
                                        <option value="Danmark">Danmark</option>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                    </select>
                                </div>     
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-4 info-link">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <p class="ps-3 fs-5 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-12 text-center tilmelding-send mt-4">
<<<<<<< HEAD
                            <button id="viewProfile" class="btn btn-outline-warning fs-5 px-4 py-3">
                                Vis min Meet over coffee profil<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
=======
                            <button type="submit" class="btn btn-outline-warning fs-5 px-4 py-3">
                                Se din coffeeprofil<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                            </button>
                        </div> 
                    </div>
                    <div class="row justify-content-center align-items-center h-100">
<<<<<<< HEAD
                </form>
=======
                </div>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </div>
        </div>
    </div>
</section>