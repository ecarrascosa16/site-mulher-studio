// MENU HEADER
document.addEventListener('DOMContentLoaded', () => {
    const menu = document.getElementById('menu');
    const simboloMenuH = document.getElementById('simboloMenuH');
    const simboloMenuX = document.getElementById('simboloMenuX');

    if (!menu || !simboloMenuH || !simboloMenuX) return;

    simboloMenuX.style.display = 'none';
    menu.style.display = 'none';

     window.openMenu = () => {
        simboloMenuX.style.display = 'block';
        simboloMenuH.style.display = 'none';
        menu.style.display = 'block';
    }

     window.closeMenu = () => {
        simboloMenuX.style.display = 'none';
        simboloMenuH.style.display = 'block';
        menu.style.display = 'none';
        
    }
})


//MENSAGEM DE SUCESSO OU ERRO
document.addEventListener('DOMContentLoaded', () => {
    const $mensagem = document.getElementById('mensagem')
        window.closeMensagem = () => {
            mensagem.style.display = 'none';
        }
})