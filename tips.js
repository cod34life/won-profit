<button oneclick="one()">1</button>
<button oneclick="two()">2</button>
<button oneclick="four()">4</button>

<script>
var elements= document.getElementsByTagName('col');

var i;

function one(){
	for (i=0;i<elements.length;i++) {
		elements[i].style.flex="100%";
	}
} 

function two(){
	for (i=0;i<elements.length;i++) {
		elements[i].style.flex="50%";
	}
} 

function four(){
	for (i=0;i<elements.length;i++) {
		elements[i].style.flex="25%";
	}
} 

</script>