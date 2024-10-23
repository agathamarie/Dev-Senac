<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Header</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;;
        }

        /* ------ Parte do Header ------ */
        #header-site {
            padding: 10px 10px;
            background-color: #7D1010;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            position: relative;
        }

        /* logo*/
        #header-site #img-header {
            width: auto;
            height: 35px;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        #header-site #img-header img{
            height: 35px;
            width: auto;
            object-fit: cover;
            object-position: center;
        }

        /* nav bar */
        #header-site #nav-header {
            padding: 5px 0;
            height: 40px;
            display: flex;
            justify-content: center;
        }

        #header-site #nav-header ul {
            list-style: none;
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            text-decoration: none;
        }

        #header-site #nav-header ul .item-nav-header a {
            padding: 2px 15px;
            display: inline-block;
            color: #ffff;
            font-size: 10px;
            text-decoration: none;
        }

        #header-site #nav-header ul .item-nav-header a:hover {
            box-shadow: 0 1px 0 #ffff;
        }
    </style>
</head>
<body>
    
<header  id="header-site">
        <div id="img-header">
            <img src="biblioteca.png" alt="Logo Biblioteca">
        </div>

        <nav id="nav-header">
            <ul>
                <li class="item-nav-header">
                    <a href="#">Inicio</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Registrar Livros</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Registar Clientes</a>
                </li>
                <li class="item-nav-header">
                    <a href="#">Outros</a>
                </li>
            </ul>
        </nav>
    </header>