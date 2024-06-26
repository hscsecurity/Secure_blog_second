// Obtém o idioma salvo no localStorage
let language = localStorage.getItem('language');

// Obtém o elemento de seleção de idioma
const select = document.getElementById('language-select');

// Adiciona um listener para detectar mudanças na seleção de idioma
select.addEventListener('change', (e) => {
    // Salva o novo idioma no localStorage
    localStorage.setItem('language', e.target.value);
    // Recarrega a página com o novo parâmetro de idioma
    location.href = updateURLParameter(window.location.href, 'lang', e.target.value);
});

// Se o idioma está definido no localStorage, atualiza o valor do seletor
if (language !== undefined) {
    select.value = language;
}

// Função para atualizar ou adicionar um parâmetro na URL
function updateURLParameter(url, param, paramVal) {
    const newAdditionalURL = url.split('?')[0];
    let additionalURL = '';
    const tempArray = url.split('?')[1] ? url.split('?')[1].split('&') : [];
    let temp = '';
    for (let i = 0; i < tempArray.length; i++) {
        const key = tempArray[i].split('=')[0];
        if (key !== param) {
            additionalURL += temp + key + '=' + tempArray[i].split('=')[1];
            temp = '&';
        }
    }

    const rowsTxt = temp + '' + param + '=' + paramVal;
    return newAdditionalURL + '?' + additionalURL + rowsTxt;
}

// Verifica se a URL já possui o parâmetro de idioma
const urlParams = new URLSearchParams(window.location.search);
if (!urlParams.has('lang') && language !== undefined) {
    // Redireciona a página para incluir o parâmetro de idioma na URL
    window.location.href = updateURLParameter(window.location.href, 'lang', language);
}