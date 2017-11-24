function addProduct(id){
	var amount = document.getElementById(id).value;
	window.location.href = 'index.php?action=add&id='+id+'&amount='+amount;
}
function deleteProduct(id){
	window.location.href = 'index.php?action=remove&id='+id;
}