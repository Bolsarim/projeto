function abrirsalame() {
    // Abrir a página queijo.html em uma nova janela ou guia
    window.open('salame.php', '_blank');
    // Fechar a janela ou guia atual (pode não funcionar em alguns navegadores devido a restrições de segurança)
    window.close();
}
function abrirqueijo() {
    window.open('queijo.php', '_blank');
    window.close();
}
function abrirpimenta() {
    window.open('pimenta.html', '_blank');
}

function search() {
    var searchTerm = document.getElementById('searchInput').value;
    // Aqui você pode realizar a lógica de busca, como por exemplo uma busca em uma lista de itens
    
    // Por simplicidade, vamos apenas exibir uma mensagem com o termo buscado
    var searchResultsDiv = document.getElementById('searchResults');
    searchResultsDiv.innerHTML = '<p>Search results for: ' + searchTerm + '</p>';
}