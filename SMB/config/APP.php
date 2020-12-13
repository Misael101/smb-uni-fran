<?php
	const SERVERURL="http://localhost/SMB/";
	const COMPANY="SISTEMA MEDICO";
	const MONEDA_SIMBOLO="$";
	const MONEDA_NOMBRE="Bs";
	const MONEDA_DECIMALES="2";
	const MONEDA_SEPARADOR_MILLAR=",";
	const MONEDA_SEPARADOR_DECIMAL=".";
	const DOCUMENTOS_USUARIOS=["Cedula","Licencia","Pasaporte","Otro"];
	const DOCUMENTOS_PROVEEDORES=["Cedula","NIT","Otro"];
	const DOCUMENTOS_EMPRESA=["Cedula","NIT","Otro"];
	const GARANTIA_TIEMPO=["N/A","Dias","Semanas","Mes","Meses","Año","Años"];
	const CAMPO_OBLIGATORIO='&nbsp; <i style="color: orange;" class="fas fa-exclamation"></i> &nbsp;';
	const BARCODE_FORMAT="CODE128";
	const BARCODE_TEXT_ALIGN="center";
	const BARCODE_TEXT_POSITION="bottom";
	const THERMAL_PRINT_SIZE="80";
	date_default_timezone_set("America/La_Paz");