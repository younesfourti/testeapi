<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Multi Step Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <header>Signup Form</header>
        <span id="demo1">texte qui va changer </span>
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

        <span id="demo">1.400</span>

        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="formquestion">Combien d&#x27;enfants avez-vous ? (seulement ceux ayant moins de 15
                        ans)<span class="textred">*</span><br></div>
                    <input onclick="myFunction1()" type="radio" data-name="enfant" value="1" name="enfant"
                        id="node-1"><span for="node-3">1</span>

                    <input onclick="myFunction2()" type="radio" data-name="enfant" value="2" name="enfant"
                        id="node-2"><span for="node-2">2</span>
                    <input onclick="myFunction3()" type="radio" data-name="enfant" value="3" name="enfant"
                        id="node-3"><span for="node-3">3</span>

                    <input onclick="myFunction4()"type="radio" data-name="enfant" value="4" name="enfant"
                        id="node-4"><span for="node-4">4</span>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <!-- parti de la page -->
                    <div class="block-form">
                        <div class="formquestion">Avez-vous fait de longues études ?<span class="textred">* </span>(Vous
                            et
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

    <script>
    var enfant;

    function myFunction1() {
        //    calcule
        enfant = document.getElementById("node-1").value;
        // console.log(enfant);
        i = +enfant + 6;
        document.getElementById("demo").innerHTML = i;
          //    changer de texet
        document.getElementById("demo1").innerHTML = "ta clic2 et le texte a changer pour t expliquer ce que t ea si tu as 1 enfant ";
    }

    function myFunction2() {
        enfant = document.getElementById("node-2").value;
        i = +enfant + 6;
        document.getElementById("demo").innerHTML = i;
          //    changer de texet
        document.getElementById("demo1").innerHTML = "ta clic2 et le texte a changer pour t expliquer ce que t ea si tu as 2 enfant ";
    }

    function myFunction3() {
       //    calcule
       enfant = document.getElementById("node-3").value;
        // console.log(enfant);
        i = +enfant + 6;
        document.getElementById("demo").innerHTML =i;
          //    changer de texet
        document.getElementById("demo1").innerHTML = "ta clic2 et le texte a changer pour t expliquer ce que t ea si tu as 3 enfant ";
    }

    function myFunction4() {
        //    calcule
        enfant = document.getElementById("node-4").value;
        // console.log(enfant);
        i = +enfant + 6;
        document.getElementById("demo").innerHTML =i;
        //    changer de texet
        document.getElementById("demo1").innerHTML = "ta clic2 et le texte a changer pour t expliquer ce que t ea si tu as 4 enfant ";

    }
    </script>

    <script src="script.js"></script>
    <script src="webflow.js"></script>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="webflow.css" rel="stylesheet" type="text/css">

    <link href="v2.3.css" rel="stylesheet" type="text/css">
</body>

</html>