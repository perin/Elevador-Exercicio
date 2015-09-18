<?php
class Elevador {
	
	protected $andarAtualElevador;
	protected $qtdPessoas;
	protected $andarDesejado;
	
	
	public function __construct(){
		$this->andarAtualElevador = 5;
	}
	
	
	
	public function sobe($andarDesejado){

		for($i = $this->andarAtualElevador; $i <= $andarDesejado; $i++ ){
					echo "O Elevador esta no andar: ".$i."<br>";
				}
				
				return $this->andarAtualElevador = $i;
				
			}
	
	public function desce($andarDesejado){
		
	
		
		for($i = $this->andarAtualElevador; $i >= $andarDesejado; $i-- ){
			echo "O Elevador esta no andar: ".$i."<br>";
		}
		
		return $this->andarAtualElevador = $i;
	}
	
	
}

?>