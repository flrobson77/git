<?php
  //funcoes aqui

function branch_teste(){
   return TRUE;
}

function branch_funcao1(){
   return FALSE;
}

function branch_funcao2($id){
   if($id>=0) return FALSE;
   return TRUE;
}
