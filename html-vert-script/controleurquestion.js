

// on save le code 
var scripthtml = $("#scriptenhtlm").text();
// on l affiche 
console.log(scripthtml);
// on cree la blaise script et on la met dans la variable scriptjs
var scriptjs = document.createElement("script"); // Create with DOM
// on met l un dans l autre et bof du js 
scriptjs.innerHTML = scripthtml;
// onn sup le html
$("#scriptenhtlm").remove();
// et on met notre melange apres le repere
$("#script").after(scriptjs);
// resulta final 
console.log(scriptjs);
console.log(question);
if(question = 1 ){

    var request = new XMLHttpRequest()

    // Open a new connection, using the GET request on the URL endpoint
    request.open('GET', 'https://coda.io/apis/v1/docs', true)
    
    request.onload = function () {
        // Begin accessing JSON data here
      }
      // Send request
request.send()

// Setup and global variables

// CodaAPI.authenticate('5b83e309-e856-489e-973d-0c1a8f8fcdeb');  // Replace with your token.


// // Functions

// function newdoc() {
//   var me = CodaAPI.whoami();
//   Logger.log('Hello World! This code is running on behalf of %s', me.name);
// }
}