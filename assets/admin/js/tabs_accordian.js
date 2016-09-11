$(document).ready(function() {	
	//Accordians
	$('.panel-group').collapse({
		toggle: false
	});

/***** Tabs *****/
	//Normal Tabs - Positions are controlled by CSS classes
    $('#infos_personnelles a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#fiche_infos_personnelles a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#scolarite a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#personnels a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#taux a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#gestion_ecoles a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#patrimoines a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#periodes a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#classepedagogiques a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

$('#matierepedagogiques a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
$('#planningdev a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

$('#absences a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});


$('#emploidutemps a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#docAD a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#Compta_inscription a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
    $('#tab-2 a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#tab-2 li:eq(1) a').tab('show'); 
	  
	$('#tab-3 a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#tab-3 li:eq(2) a').tab('show'); 
	  
	
	  
	$('#tab-5 a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	  
	});