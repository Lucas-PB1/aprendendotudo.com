function verify(){
	try{
		let ok = document.getElementById('teste').value;
		if (ok.length < 5) {
			return document.getElementById('erro').innerText = "erro";
		}else{
			document.getElementById('erro').innerText = " ";
			window.location.href = "test.php";
		}

	}catch(err){
		document.getElementById('erro').innerText = err;
	}
}