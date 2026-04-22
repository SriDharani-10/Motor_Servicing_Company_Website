// // var h=document.getElementById("head");
// // h.innerHTML="Hai";

// // h.classList.add("text-danger");
// // h.classList.remove("text-danger");


// // var b=document.getElementsByClassName("h");
// // b.[0].innerHTML="Head2";


// //var t1=document.getElementById("t1");
// //var t2=document.getElementById("t2");

// //function add(){
// /*	let v1=parseInt(t1.value);
// 	let v2=parseInt(t2.value);
// 	let ans=v1+v2;
// 	//console.log(ans);

// 	var a=document.getElementById('ans');
// 	a.innerHTML=ans;
// }
// */



function message(){

	let input=document.getElementById("textbox");
	let addbtn=document.getElementById("add");
	var msg=document.getElementById("msg");

//	console.log(input);

	let ul=document.getElementById("ulist");
	let li=document.createElement("li");
	li.textContent=input.value;
	

	let btn=document.createElement("button");
	btn.textContent="delete";
	btn.classList.add("button-style");
	li.appendChild(btn);
	li.classList.add("list-style");
	ul.appendChild(li);
	input.value="";
	msg.innerHTML="";


	btn.addEventListener("click",function(){
		ul.removeChild(li);
	});

}







