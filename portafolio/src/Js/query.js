
var menuDeskot = document.getElementById('menu-desktop');


items = document.getElementsByClassName('result');

button = document.getElementById('button-search');

query = document.getElementById('query');



Divmsm = document.querySelector('.show-msm');


query.addEventListener("keyup",function(e){
	if(e.keyCode == 13){
		e.preventDefault()
		button.click()
	}
})



button.addEventListener("click",Query);



function Query(){


var contador = 0;

var filter = query.value;

	for (var i = 0; i < items.length; i++) {
		
		var content = items[i].children[1].children[0].textContent;

		if(content.toUpperCase().indexOf(filter.toUpperCase()) > -1 ){

			contador = contador + 1;
			items[i].style.display = "";
			items[i].style.width = "234px";

		}else{
			items[i].style.display = "none";
		}
	}


if(Divmsm.style.display == "none"){
	Divmsm.style.display = "block";

}

if(contador > 0){

		Divmsm.innerHTML = "Resultados : "+ contador
}else{

		Divmsm.innerHTML = "Sin resultados";
}

	query.value = "";


}




var list = menuDeskot.children[0];


	var home = list.children[0].children[0].textContent;

	switch(home){

		case 'Home': 

		for (var i = 0; i < items.length; i++) {
		
				items[i].style.display = "";
				items[i].style.width = "";
		}

		break;


	}



for (var i = 0; i < list.children.length; i++) {

		list.children[i].addEventListener("click",function(e){
		

			switch(e.currentTarget.textContent){

				
				case 'Home' : 

							AccesAllItems()
				break;				

				case 'Blog' : 

							AccesItems(3)
				break;

				case 'Food' : 

							AccesItems(0)
				break;

				case 'Informativas' : 

							AccesItemsdoble(1,4,6,5)
				break;

				case 'Templates' : 

							AccesItems(2,4,7)
				break;


			}

		})
}


function  AccesAllItems(){
	


	for (var i = 0; i < items.length; i++) {

		items[i].style.display = "";
		items[i].style.width = "";			
	}


	Divmsm.style.display = "none";


}


function AccesItems(iT1,iT2, iT3){


	for (var i = 0; i < items.length; i++) {
		
		if(items[i] == items[iT1] || items[i] == items[iT2] || items[i] == items[iT3]  ){

			items[i].style.display = "";
			items[i].style.width = "234px";

		}else{

			items[i].style.display = "none";

		}
	}

		Divmsm.style.display = "none";
}

function AccesItemsdoble(iT1,iT2,iT3,iT4){


	for (var i = 0; i < items.length; i++) {
		
		if( items[i] == items[iT1] || items[i] == items[iT2] || items[i] == items[iT3] || items[i] == items[iT4]){

			items[i].style.display = "";
			items[i].style.width = "234px";

		}else{

			items[i].style.display = "none";

		}
	}

		Divmsm.style.display = "none";

}









































