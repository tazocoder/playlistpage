<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoaulas - Udemy Style</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>NortePlay</h1>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <h2>Bem-vindo à NortePlay</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis consequat, vehicula ex id, tincidunt risus.</p>
        </div>
    </section>

    <section id="courses">
        <div class="container">
            <h2>Cursos em Destaque</h2>
            <div class="course-grid">
                <?php
                // Aqui você pode incluir o código PHP para recuperar e exibir os cursos em destaque!
                ?>
                <div class="course-card">
                    <img src="course1.jpg" alt="Course 1">
                    <h3>Nome do Curso 1</h3>
                    <p>Descrição breve do curso.</p>
                    <a href="curso.php" class="btn">Ver Curso</a>
                </div>
                <div class="course-card">
                    <img src="course2.jpg" alt="Course 2">
                    <h3>Nome do Curso 2</h3>
                    <p>Descrição breve do curso.</p>
                    <a href="#" class="btn">Ver Curso</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Aqui você pode adicionar mais seções, como seção de categorias, depoimentos, etc. -->

    <footer>
        <div class="container">
            <p>&copy; 2024 Videoaulas. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>