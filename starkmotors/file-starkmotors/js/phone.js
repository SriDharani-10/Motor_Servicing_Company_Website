// console.log("helo");
// alert("hi");

let phone_input=document.getElementById("phoneinput");

phone_input.addEventListener('keydown',function(event){
	// if(phone_input.value.typeof===typeof("1")){
	// 	alert("You have entered a number")
	// 	if(phone_input.value.length>10){
	// 		alert("You are entering more than 10 Digits");
	// 	}
	// }

	if(event.key==="Enter"){
		if(phone_input.value.length>10){
	 		alert("You are entering more than 10 Digits");
	 	}
	 	else if(phone_input.value.length<10){
	 		alert("You are entering less than 10 Digits");
	 	}
	}
});