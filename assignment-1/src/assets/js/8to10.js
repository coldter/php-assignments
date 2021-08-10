function squ_ajax(arg){
  if(arg.length == 0){
    document.getElementById("echospan").innerHTML = "";
    return;
  }else{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "Enter Numeric Values only"){
          document.getElementById("echospan").innerHTML = "<hr>" + this.responseText;
        }
        else
          document.getElementById("echospan").innerHTML = "<hr>" + "Area = " +this.responseText;
      }
    }
    
    xmlhttp.open("GET","response.php?opp=" + document.querySelector('input[name="opp"]:checked').value + "&side=" + arg , true);
    xmlhttp.send();
  }
}

function tri_ajax(){
  if(document.getElementById("base").value.length == 0 || document.getElementById("height").value.length == 0){
    document.getElementById("echospan").innerHTML = "";
    return;
  }else{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "Enter Numeric Values only"){
          document.getElementById("echospan").innerHTML = "<hr>" + this.responseText;
        }
        else
          document.getElementById("echospan").innerHTML = "<hr>" + "Area = " +this.responseText;
      }
    }
    
    xmlhttp.open("GET","response.php?opp=" + document.querySelector('input[name="opp"]:checked').value + "&base=" + document.getElementById("base").value + "&height=" + document.getElementById("height").value, true);
    xmlhttp.send();
  }
}

function rec_ajax(){
  if(document.getElementById("width").value.length == 0 || document.getElementById("length").value.length == 0){
    document.getElementById("echospan").innerHTML = "";
    return;
  }else{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        if(this.responseText == "Enter Numeric Values only"){
          document.getElementById("echospan").innerHTML = "<hr>" + this.responseText;
        }
        else
          document.getElementById("echospan").innerHTML = "<hr>" + "Area = " +this.responseText;
      }
    }
    
    xmlhttp.open("GET","response.php?opp=" + document.querySelector('input[name="opp"]:checked').value + "&width=" + document.getElementById("width").value + "&length=" + document.getElementById("length").value, true);
    xmlhttp.send();
  }
}



function show_squ(){
  document.getElementById('square').style.display = 'block';
  document.getElementById('triangle').style.display = 'none';
  document.getElementById('rectangle').style.display = 'none';

  document.getElementById('side').value = '';
  document.getElementById('base').value = '';
  document.getElementById('height').value = '';
  document.getElementById('width').value = '';
  document.getElementById('length').value = '';
}

function show_tri(){
  document.getElementById('square').style.display = 'none';
  document.getElementById('triangle').style.display = 'block';
  document.getElementById('rectangle').style.display = 'none';

  document.getElementById('side').value = '';
  document.getElementById('base').value = '';
  document.getElementById('height').value = '';
  document.getElementById('width').value = '';
  document.getElementById('length').value = '';
}

function show_rec(){
  document.getElementById('square').style.display = 'none';
  document.getElementById('triangle').style.display = 'none';
  document.getElementById('rectangle').style.display = 'block';

  document.getElementById('side').value = '';
  document.getElementById('base').value = '';
  document.getElementById('height').value = '';
  document.getElementById('width').value = '';
  document.getElementById('length').value = '';
}