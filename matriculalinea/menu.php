<?php
session_start();

if(!empty($_SESSION)){
   if($_SESSION["rol"] == "admin"){
    $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "information.php"],
        ["url" => "listRegistration.php", "label" => "Listado de estudiantes"],
        ["url" => "listTeacher.php", "label" => "Listado de profesores"],
        ["url" => "registration.php", "label" => "Matricula"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Materiales", "url" => "util.php"],
        ["label" => "Login", "url" => " login.php"],
        ["url" => "logout.php", "label" => "Salir"]
    ];
   } else {
        $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "information.php"],
        ["url" => "registration.php", "title" => "Matricula"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Materiales", "url" => "util.php"],
        ["label" => "Login", "url" => " login.php"],
        ["url" => "logout.php", "label" => "Salir"]
    ];
   }
} else {
    $menu = [
        ["label" => "Inicio", "url" => "index.php"],
        ["label" => "Informacion", "url" => "information.php"],
        ["label" => "Matricula", "url" => "#"],
        ["url" => "registration.php", "label" => "Matricula"],
        ["label" => "Contactos", "url" => "contact.php"],
        ["label" => "Materiales", "url" => "util.php"],
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