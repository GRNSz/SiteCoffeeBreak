<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4a2c2a;
        }

        .menu a {
            text-decoration: none;
            color: #4a2c2a;
            margin: 0 1rem;
        }

        .auth-buttons button {
            padding: 0.5rem 1rem;
            margin-left: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login {
            background-color: transparent;
            color: #4a2c2a;
        }

        .cadastro {
            background-color: #4a2c2a;
            color: white;
        }

        .categorias {
            background-color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .categorias ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .categorias a {
            text-decoration: none;
            color: #4a2c2a;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 4rem 2rem;
            background-color: #fff8f3;
        }

        .hero h1 {
            color: #4a2c2a;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            color: #666;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Coffee Break</div>
        <div class="menu">
            <a href="#inicio">Início</a>
            <a href="#produtos">Produtos</a>
            <a href="#sobre">Sobre</a>
            <a href="#contato">Contato</a>
        </div>
        <div class="auth-buttons">
            <button class="login">Login</button>
            <button class="cadastro">Cadastre-se</button>
        </div>
    </nav>

    <div class="categorias">
        <ul>
            <a href="#cafe"><li>Café em Grãos</li></a>
            <a href="#acessorios"><li>Acessórios</li></a>
            <a href="#maquinas"><li>Máquinas</li></a>
            <a href="#kits"><li>Kits Especiais</li></a>
            <a href="#presentes"><li>Presentes</li></a>
        </ul>
    </div>

    <div class="hero">
        <h1>Descubra o Melhor do Café</h1>
        <p>Explore nossa seleção premium de cafés e acessórios para uma experiência única</p>
    </div>
</body>
</html>
