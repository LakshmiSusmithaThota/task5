document.getElementById("search").onkeyup=function(){

fetch("search.php?q="+this.value)
.then(res=>res.text())
.then(data=>document.getElementById("result").innerHTML=data);

}