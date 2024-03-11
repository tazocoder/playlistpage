<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoaulas</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        
        <div class="sidebar">
            <h2>Conteúdo do Curso</h2>
            <ul class="course-content">
                
            <li class="section">
                    <button class="section-toggle">Seção 1 <span>&#9662;</span></button>
                    <ul class="section-videos list-group list-group-numbered">
                        <li class="list-group-item"><a href="#">Vídeo 1</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 2</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 3</a></li>
                    </ul>
            </li>
                    <li class="section">
                    <button class="section-toggle">Seção 2 <span>&#9662;</span></button>
                    <ul class="section-videos list-group list-group-numbered">
                        <li class="list-group-item"><a href="#">Vídeo 1</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 2</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 3</a></li>
                    </ul>
                </li>
                <li class="section">
                    <button class="section-toggle">Seção 3 <span>&#9662;</span></button>
                    <ul class="section-videos list-group list-group-numbered">
                        <li class="list-group-item"><a href="#">Vídeo 1</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 2</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 3</a></li>
                    </ul>
                </li>
                <li class="section">
                    <button class="section-toggle">Seção 4 <span>&#9662;</span></button>
                    <ul class="section-videos list-group list-group-numbered">
                        <li class="list-group-item"><a href="#">Vídeo 1</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 2</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 3</a></li>
                    </ul>
                </li>
                <li class="section">
                    <button class="section-toggle">Seção 5 <span>&#9662;</span></button>
                    <ul class="section-videos list-group list-group-numbered">
                        <li class="list-group-item"><a href="#">Vídeo 1</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 2</a></li>
                        <li class="list-group-item"><a href="#">Vídeo 3</a></li>
                    </ul>
                </li>
              
            </ul>
        </div>
        <div class="content">
            <h2>Reproduzindo: Vídeo 1</h2>
            <div class="video-player">
            <video width="100%" height="400px" controls>
  <source src="teste.mp4" type="video/mp4">
</video> 
            </div>
            <div class="video-info">
                <p>Descrição do vídeo: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis consequat, vehicula ex id, tincidunt risus.</p>
            </div>
        </div>
    </div>

<script src="scripts.js"></script>

</body>
</html>