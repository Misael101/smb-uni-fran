<?php 
	class vistasModelo{

		/*---------- Modelo obtener vistas ----------*/
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["dashboard","cashier-new","category-new","category-list","product-category","provider-new","provider-list","provider-search","client-new","client-list","client-search","client-update","shop-list","shop-search","shop-detail","kardex","kardex-search","kardex-product","kardex-detail"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vistas=="login" || $vistas=="index"){
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
		}

	}