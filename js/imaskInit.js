$(document).ready(() => {
    document.querySelectorAll('[type="tel"]').forEach(item => {
        IMask(item, {mask: '+{7}(000)000-00-00'});
    })
})
console.log('Imask inited');