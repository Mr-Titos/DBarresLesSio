function fonctionpanier(trace) {
	var httpRequest = new XMLHttpRequest();

	httpRequest.onreadystatechange = function(){
			if (httpRequest.readyState === 4){
				var tab=httpRequest.responseText;
				console.log(typeof tab);
				console.log(tab);
						if(tab.toLowerCase() === " false"){
							 window.alert("vous avez déja enregistré ce produit!");
						}
	                   
						else
							{
							 //window.alert(tab);
							
							document.querySelector("#total").innerText=tab;
							
							}
							
	                    
	                   
	                   //location.reload();

			}
	};

	httpRequest.open('GET',trace,true);
	httpRequest.send();
	
	
		  
}

function effacerpanier(trace,url1,url2){
	var httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = function(){
		if (httpRequest.readyState === 4){						 					
						document.querySelector("#"+trace).innerHTML="";	
						
						var b=0.0;
						var a = document.querySelectorAll(".prix");
							for(var i=0;i<a.length; i++){		 
								  b+=parseFloat(a[i].innerText);
							}
						document.querySelector("#total_prix1").innerText=b;

		}
};

httpRequest.open('GET',url1,true);
httpRequest.send();

fonctionpanier(url2);




}

function verification(){
	window.alert("ok");
}