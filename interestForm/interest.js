
let message = document.getElementById("password");
showMessage.onfocus = function() { document.getElementById("message").style.display ="block";
}

function validate() { 
   let good; 
   let str=document.getElementById("password").value; 
    if (str.length>= 10 && str.match(/[a-zA-Z]/g) && str.match(/[0-9]/g) {
    good = true
    }
else {
  good = false
  console.log("Password must contain\n
              "•At least ten characters\n"
              "•One capital letter\n"
              "•One lowercase letter\n
              "•One number")
}

function checkCheck(group, max){
	let group = group
	var max = max
	for (let i=0; i<group.length; i++){
		checkgroup[i].onclick=function(){
		let count=0
		for (let i=0; i<group.length; i++)
			count+=(group[i].checked)?1:0
		if (count>max){
			alert("Only select up to "+ max+ " checkboxes.")
			this.checked=false
			}
		}
	}
}
 document.getElementById("SUBMIT").onclick = function () {
   location.href = "nonprofits.php";
  };
