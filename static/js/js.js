
  // Função para rolar até a seção de contato
  function scrollParaContato() {
    const contatoSection = document.getElementById('contato');
    contatoSection.scrollIntoView({ behavior: 'smooth' });
  }

  // Verifica se a URL contém um parâmetro de sucesso
  const sucesso = "{{ success }}";
  
  // Se o parâmetro de sucesso estiver presente, rola até a seção de contato
  if (sucesso === 'True') {
    scrollParaContato();
  }

