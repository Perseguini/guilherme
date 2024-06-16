<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perseguini Downloads</title>
    
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/painel.css">

</head>

<body>
    <div class="sidebar">
        <nav class="sidebar__navigation">
            <div class="logo">
                <a href="">
                    <img src="./assets/icons/logogui.png" alt="Logo" />
                </a>
            </div>
            <ul>
                <li>
                    <a href="">
                        <img src="images/inicio.png" width="30" height="22" />
                        <span>Início</span>
                        
                    </a>
                    
                </li>
               
                <h1><a href="logout.php">Sair</a></h1>
            </ul>
        </nav>
		
		
        <div class="library">
            <div class="library__content">
                <img src="images/down.png" width="30" height="30">
                    <span>Downloads</span>
                </button>
            </div>  
			
			<ul>
                <li>
            <a href="https://www.mediafire.com/file/cq28vtohwl74hyh/Windows.iso/file" target="_blank" download>Windows 10</a>
			
			 </a>
                </li>
				
				<ul>
                <li>
			<a href="https://www.mediafire.com/file/mzqnzvrynj44k23/Ativar_Windows_10.txt/file" target="_blank" download>Ativador Windows 10</a>
          </a>   
                </li>

    
</body>


</html>