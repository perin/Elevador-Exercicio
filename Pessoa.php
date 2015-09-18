<?php
class Pessoa extends Elevador{
	
	
	
	protected $andarAtualPessoa;

	public function __construct(){
			
			$this->andarAtualPessoa = 3;
	}
	
	public function entrarNoElevador(){
	
		$elevador = new Elevador();
		$elevador->qtdPessoas++;
			
	}
	
	public function sairElevador(){
		$elevador = new Elevador();
		$elevador->qtdPessoas--;
	}
	
	
	
	public function chamaElevador(){
			
		$elevador = new Elevador();
		
		if($this->andarAtualPessoa < $elevador->andarAtualElevador){
			$elevador->desce($this->andarAtualPessoa);
		}else{
			$elevador->sobe($this->andarAtualPessoa);
		}
			
	}
		
}

?>