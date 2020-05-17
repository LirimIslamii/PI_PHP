function showAjax(str) {
  if (str=="") {
    document.getElementById("apple").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("apple").innerHTML=this.responseText;
      document.getElementById("apple").style.border =  "3px solid black";
    }
  }
  xmlhttp.open("GET","ordered.php?q="+str,true);
  xmlhttp.send();
}