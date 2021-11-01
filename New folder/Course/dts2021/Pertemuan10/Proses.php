<?php 

	$menu = array( 
        "Gurami Bakar", 
        "Ayam Bakar", 
        "Cumi Bakar", 
        "Lobster Bakar", 
        "Jus Alpukat", 
        "Jus Jambu", 
        "Jus Mangga", 
        "Jus Jeruk", 
    ); 
    $pilihan = $_GET["no_menu"]; 
    if ($pilihan <= 4) { 
        echo "Makanan yang anda pilih adalah "; 
    } else { 
        echo "Minuman yang anda pilih adalah "; 
    } 
    switch ($pilihan) {
    	case 1: 
            echo $menu[0]; 
            break; 
        case 2: 
            echo $menu[1]; 
            break; 
        case 3: 
            echo $menu[2]; 
            break; 
        case 4: 
            echo $menu[3]; 
            break; 
        case 5: 
            echo $menu[4]; 
            break; 
        case 6: 
            echo $menu[5]; 
            break; 
        case 7: 
            echo $menu[6]; 
            break; 
        case 8: 
            echo $menu[7]; 
            break; 
        default: 
            echo "Anda salah tulis menu bosku"; 
            break; 
    }

 ?>