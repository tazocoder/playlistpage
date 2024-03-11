    document.addEventListener("DOMContentLoaded", function() {
    // Oculta todas as seções de vídeo no início
    var sections = document.querySelectorAll('.section-videos');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // Seleciona todos os botões .section-toggle
    var toggles = document.querySelectorAll('.section-toggle');

    // Adiciona um evento de clique a cada botão .section-toggle
    toggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            // Seleciona a lista de vídeos associada ao botão clicado
            var videos = toggle.nextElementSibling;

            // Alterna a visibilidade da lista de vídeos
            if (videos.style.display === 'none' || videos.style.display === '') {
                videos.style.display = 'block';
                toggle.classList.add('active'); // Adiciona a classe "active" ao botão
            } else {
                videos.style.display = 'none';
                toggle.classList.remove('active'); // Remove a classe "active" do botão
            }
        });
    });
});