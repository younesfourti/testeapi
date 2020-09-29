<div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="block-form">
                        <div class="formquestion">Combien d&#x27;enfants avez-vous ? (seulement ceux ayant moins de 15
                            ans)<span class="textred">*</span><br></div>
                        <input   onclick="myFunction1()" type="radio" data-name="enfant" value="1" name="enfant" id="node-1"><span
                            for="node-3">1</span>

                        <input   onclick="myFunction2()" type="radio" data-name="enfant" value="2" name="enfant" id="node-2"><span
                            for="node-2">2</span>
                            <input   onclick="myFunction3()" type="radio" data-name="enfant" value="1" name="enfant" id="node-3"><span
                            for="node-3">3</span>

                        <input   onclick="myFunction4()" type="radio" data-name="enfant" value="2" name="enfant" id="node-4"><span
                            for="node-2">4</span> 


                        

                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">


                <!-- parti de la page -->
                <div class="block-form">
                    <div class="formquestion">Avez-vous fait de longues études ?<span class="textred">* </span>(Vous et
                        votre conjoint)<br></div>
                    <div class="radio-horizontal-container">
                        <div class="radio-item"><label class="radio-vertical-item w-radio">
                                <div
                                    class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                </div><input type="radio" data-name="etudes-longues-parent" id="node-8"
                                    name="etudes-longues-parent" value="-1"
                                    style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                    class="radio-label horizontal w-form-label">Plutôt non</span>
                            </label></div>
                        <div class="radio-item"><label class="radio-vertical-item w-radio">
                                <div
                                    class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                </div><input type="radio" data-name="etudes-longues-parent" id="node-6"
                                    name="etudes-longues-parent" value="0"
                                    style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                    class="radio-label horizontal w-form-label">Moyen</span>
                            </label></div>
                        <div class="radio-item"><label class="radio-vertical-item w-radio">
                                <div
                                    class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                </div><input type="radio" data-name="etudes-longues-parent" id="node-7"
                                    name="etudes-longues-parent" value="1" required=""
                                    style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                    class="radio-label horizontal w-form-label">Oui, Bac +5 ou plus</span>
                            </label></div>
                            
                    </div>
                </div>
                       <!-- fin  -->
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                 
                </div>
                <div class="page">
                      <!-- parti de la page -->
                    <div class="title">
                        Date of Birth:</div>
                    <div class="field">
                        <div class="label">
                            Date</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">
                            Gender</div>
                        <select>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                          <!-- fin  -->
                    </div>
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Login Details:</div>
                    <div class="field">
                        <div class="label">
                            Username</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">
                            Password</div>
                        <input type="password">
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>

</body>
<script>
 var i ;
        function myFunction1() {
        //    calcule
           
            i = 5+6 ;
            document.getElementById("demo").innerHTML = i;

        }

        function myFunction2() {
          i = i + 5;
            document.getElementById("demo").innerHTML = i;

        }

        function myFunction3() {
            i = i + 5;
            document.getElementById("demo").innerHTML = "ta clic3";

        }

        function myFunction4() {
        //    changer de texet
            document.getElementById("demo1").innerHTML = "ta clic4 ";

        }
</script>


<link href="normalize.css" rel="stylesheet" type="text/css">
<link href="webflow.css" rel="stylesheet" type="text/css">
<link href="plan-a-v3.webflow.css" rel="stylesheet" type="text/css">