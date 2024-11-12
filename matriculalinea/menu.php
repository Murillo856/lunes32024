<?php
session_start();

if(!empty($_SESSION)){
   if($_SESSION["rol"] == "admin"){
    $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "#"],
        ["label" => "Matricula", "url" => "#"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Login", "url" => " login.php"],
    ];
   } else {
        $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "#"],
        ["label" => "Matricula", "url" => "#"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Login", "url" => " login.php"],
    ];
   }
} else {
    $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "#"],
        ["label" => "Matricula", "url" => "#"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Login", "url" => " login.php"],
    ];
    
}

?>
<nav>
    <ul class="menu">
        <?php
        foreach ($menu  as $item) { ?>
            <li class="menu-item"><a href="<?php echo $item["url"] ?>"><?php echo $item["label"] ?></a></li>
        <?php } ?>
    </ul>
</nav>