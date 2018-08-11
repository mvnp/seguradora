/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.5.5
*/

var l = window.location;
var base_url = l.protocol + "//" + l.host + "/";

(function($) {

	'use strict';

	var datatableInit = function() {
		$('#datatable-default').dataTable({
			language: {
				search: "",
				searchPlaceholder: "Pesquisar..." ,
				url: base_url+"assets/javascripts/tables/examples.datatables.default.pt_BR.json",
			}
		});
	};

	$(function() {
		datatableInit();
	});

}).apply(this, [jQuery]);