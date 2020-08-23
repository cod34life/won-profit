function isValid(){
var pwd = document.getElementById('password').value;
let lower = /[a-z]/
let upper = /[A-Z]/
let num = /[0-9]/

if(pwd.length<10) {
  alert("Password needs to be at least 10 characters")
}
if(!pwd.test(lower)) {
  alert("Password must contain at least one lowercase letter")
  return false
}
if(!pwd.test(upper)) {
  alert("Password must contain at least one uppercase letter")
  return false
}
if(!pwd.test(num)) {
  alert("Password must contain at least one digit")
  return false
}

function checkCheck(group, max){
  for (let i=0; i<group.length; i++){
    group[i].addEventListener('click',function(){
      let count=0
      for (let i=0; i<group.length; i++)
      {
        count+=(group[i].checked)? 1 : 0
        if (count>max)
        {
          alert("Can only pick up to" + max + "choices")
          this.checked=false
        }
      }
    })
  }
}

 checkCheck(document.forms.checklist.interests, 3)
