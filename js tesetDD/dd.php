<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>teste</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <header>Form plan A</header>
        <div class="progress-bar">
            <div class="step">
                <p>
                    Name</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Contact</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Birth</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
            <div class="step">
                <p>
                    Submit</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check">
                </div>
            </div>
        </div>

        <script>
        var i;

        function myFunction1() {
            i = 5 + 6;
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

            document.getElementById("demo").innerHTML = "ta clic4 ";

        }

        function myFunction5() {

            document.getElementById("demo").innerHTML = "ta clic 5";

        }
        </script>

        <span id="demo">1.400</span>

        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="block-form personnes">
                        <input onclick="myFunction1()" type="radio" data-name="personnes" id="node-13" name="personnes"
                            value="6"><span>1+</span>


                        <input onclick="myFunction2()" type="radio" data-name="personnes" id="node-13" name="personnes"
                            value="6"><span>2+</span>


                        <input onclick="myFunction3()" type="radio" data-name="personnes" id="node-13" name="personnes"
                            value="6"><span>3+</span>


                        <input onclick="myFunction4()" type="radio" data-name="personnes" id="node-13" name="personnes"
                            value="6"><span>4+</span>


                        <input onclick="myFunction5()" type="radio" data-name="personnes" id="node-13" name="personnes"
                            value="6"><span>5+</span>




                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="block-form enfant-unique">
                        <div class="formquestion">Quel est l&#x27;âge de votre enfant ? (seulement celui ayant moins de
                            15 ans)<span class="textred">*</span></div><select id="age-enfant" name="age-enfant-1"
                            data-name="age-enfant-1" required="" class="select-field w-select">
                            <option value="">Choisir</option>
                            <option value="1">1 an</option>
                            <option value="2">2 ans</option>
                            <option value="3">3 ans</option>
                            <option value="4">4 ans</option>
                            <option value="5">5 ans</option>
                            <option value="6">6 ans</option>
                            <option value="7">7 ans</option>
                            <option value="8">8 ans</option>
                            <option value="9">9 ans</option>
                            <option value="10">10 ans</option>
                            <option value="11">11 ans</option>
                            <option value="12">12 ans</option>
                            <option value="13">13 ans</option>
                            <option value="14">14 ans</option>
                            <option value="15">15 ans</option>
                        </select>
                    </div>
                    <div class="text list-text"><br>Votre famille<span
                            class="plan-a-colored text-span-12"><strong></strong></span></div>
                    <div class="block-form">
                        <div class="formquestion">Habitez-vous dans une grande ville étudiante ?<span class="textred">*
                            </span>(ou banlieue proche)<br></div>
                        <div class="radio-horizontal-container">
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="grande-ville" id="node-8" name="grande-ville"
                                        value="-1" style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                        class="radio-label horizontal w-form-label">Non, très éloigné</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="grande-ville" id="node-6" name="grande-ville"
                                        value="0" style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                        class="radio-label horizontal w-form-label">Moyenne ville</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="grande-ville" id="node-7" name="grande-ville"
                                        value="1" required="" style="opacity:0;position:absolute;z-index:-1"><span
                                        for="node-9" class="radio-label horizontal w-form-label">Oui, Paris, Lille,
                                        Lyon, etc.</span>
                                </label></div>
                        </div>
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="block-form">
                        <div class="formquestion">Avez-vous fait de longues études ?<span class="textred">* </span>(Vous
                            et votre conjoint)<br></div>
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
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="text list-text"><br>Potentielles allocations et bourses étudiantes<span
                            class="plan-a-colored text-span-12"><strong></strong></span></div>
                    <div class="block-form personnes">
                        <div class="formquestion">Combien y-a-t-il de personnes dans votre famille ? (Parents et
                            enfants)<span class="textred">*</span><br></div>
                        <div class="radio-horizontal-container">
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="personnes" id="node-9" name="personnes"
                                        value="2" style="opacity:0;position:absolute;z-index:-1"><span for="node-9"
                                        class="radio-label horizontal w-form-label">2</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="personnes" id="node-10" name="personnes"
                                        value="3" style="opacity:0;position:absolute;z-index:-1"><span for="node-10"
                                        class="radio-label horizontal w-form-label">3</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="personnes" id="node-11" name="personnes"
                                        value="4" style="opacity:0;position:absolute;z-index:-1"><span for="node-11"
                                        class="radio-label horizontal w-form-label">4</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="personnes" id="node-12" name="personnes"
                                        value="5" style="opacity:0;position:absolute;z-index:-1"><span for="node-12"
                                        class="radio-label horizontal w-form-label">5</span>
                                </label></div>
                            <div class="radio-item"><label class="radio-vertical-item w-radio">
                                    <div
                                        class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button horizontal w-radio-input">
                                    </div><input type="radio" data-name="personnes" id="node-13" name="personnes"
                                        value="6" style="opacity:0;position:absolute;z-index:-1"><span for="node-13"
                                        class="radio-label horizontal w-form-label">6+</span>
                                </label></div>
                        </div>
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
    <script src="webflow.js"></script>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="webflow.css" rel="stylesheet" type="text/css">
    <link href="plan-a-v2.webflow.css" rel="stylesheet" type="text/css">
    <link href="v2.3.css" rel="stylesheet" type="text/css">
</body>

</html>