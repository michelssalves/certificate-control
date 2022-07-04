function abreJanela(id) {
		var x = parseInt(screen.width / 2) - 400;
		nova = window.open('visualizaRegistro.php?id_registro=' + id, 'HistoricoEvento', 'status=0,scrollbars=1,toolbar=0,resizable=0,location=1,width=850,height=600,left=' + x + ',top=50');
		nova.focus();
}