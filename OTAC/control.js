
const sw = document.getElementById('switch');
const sw2 = document.getElementById('switch-back');
const signin = document.getElementById('signin');
const signup = document.getElementById('signup');
const testBtn = document.getElementById('test');
const testerId = document.getElementById('testerId');

let codeSlot = [0,0,0,0];

signup.classList.toggle("hide");

function swt(){
	signin.classList.toggle("hide");
	signup.classList.toggle("hide");
}

function test(){
	const nd = document.createElement("div");
	const para = document.createElement("p");
	const txt = document.createTextNode("tester");

	nd.className = "nd";

	para.appendChild(txt);
	nd.appendChild(para);
	testerId.appendChild(nd);
}

function genCode(){
	for(let i=0; i<=1000; i++){
		codeSlot[3] = codeSlot[3] + 1;
		if(codeSlot[3] == 10){
			codeSlot[2] = codeSlot[2] + 1;
			codeSlot[3] = 0;
			if(codeSlot[2] == 10){
				codeSlot[1] = codeSlot[1] + 1;
				codeSlot[2] = 0;
				if(codeSlot[1] == 10){
					codeSlot[0] = codeSlot[0] + 1;
					codeSlot[1] = 0;
				}
			}
		}

		console.log(codeSlot[0] + "." + codeSlot[1] + "." + codeSlot[2] + "." + codeSlot[3]);
	}
}

sw.addEventListener('click', swt);
sw2.addEventListener('click', swt);
testBtn.addEventListener('click', genCode);