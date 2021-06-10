window.addEventListener("load", init);

function init() {
  displayData();
}

function displayData(){
  fetch("../controller.php").then(function(response){
    return response.json();
  }).then(function(data){
    console.log(data);
  }).catch(function(error){
    console.log(error);
  })
}