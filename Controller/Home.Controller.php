<?php 
class Home 
{
   public function Inicio()
   {
     echo "en clase home y metodo inicio";

   }

   public function User()
   {
     $user=new Usuarios();
     $user->BuscarUsuario();

   }


}
 




 ?>