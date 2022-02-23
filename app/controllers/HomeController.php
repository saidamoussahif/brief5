
<!-- afficher la page d'acceuil // choisi un page qui vous voulez afficher  -->

<?php 

class HomeController {

public function index($page){
    include('views/'.$page.'.php');
}


}
?>
