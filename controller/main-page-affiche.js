$(document).ready(function () {
	$('#main-affichage').load('vue/accueil.php');


	 $("#accueil").click(function(){
    	$('#main-affichage').load('vue/accueil.php');
	 });
	$("#inserer-nouveau-client-side").click(function(){
    	$('#main-affichage').load('vue/form-client.php');
	 });

	$("#afficher-list-client-side").click(function(){
    	$('#main-affichage').load('vue/list-client.php');
	 });
	
    $('#dtBasicExample').DataTable({
      "pagingType": "simple_numbers",
      "searching": true 
    });
    $('.dataTables_length').addClass('bs-select');
    
});

