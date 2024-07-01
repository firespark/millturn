document.addEventListener("DOMContentLoaded", () => {
    // menu
    //if (window.screen.width >= 1230) {
        // menu-header
        const body = document.querySelector('body')
        const menuBgs = document.querySelectorAll('.menu-bg')

        menuBgs.forEach(menu => {
            // menu.addEventListener('click', (e) => {
            //     if ( event.target.className != 'menu-bg' ) {
            //         // menu.classList.remove('active')
            //         hideBg()
            //         menuChilds.forEach(child => {
                
            //             child.parentElement.querySelector('.menu__item__collapse-list__child').classList.remove('active');
            //             child.parentElement.classList.remove('active');
            //         })
            //     };
            // })
            menu.querySelector('.close-menu').addEventListener('click', (e) => {
                menu.classList.remove('active')
                hideBg()
            })
        })

        const menuItems = document.querySelectorAll('.menu__item_link__wrapper svg')

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.menu-bg').forEach(e => e.classList.remove('active'))

                if(item.parentElement.parentElement.querySelector('.menu-bg') != null ) {
                    item.parentElement.parentElement.querySelector('.menu-bg').classList.add('active');

                    showBg()
                    document.querySelector('.menu-overlay').addEventListener('click', (e) => {
                        menuBgs.forEach(menu => {
                            menu.classList.remove('active')
                            hideBg()
                        })
                    })
                    document.querySelector('.header-content__top').addEventListener('click', (e) => {
                        menuBgs.forEach(menu => {
                            menu.classList.remove('active')
                            hideBg()
                        })
                    })
                }
            })
        })

        const menuFirstChilds = document.querySelectorAll('.menu__item_link__child__first > svg')
        const menuChilds = document.querySelectorAll('.menu__item_link__child__child > svg')

        let num = 1000;
        menuFirstChilds.forEach(child => {
            child.addEventListener('click', () => {
                num++;
                menuFirstChilds.forEach(e => {
                    e.parentElement.classList.remove('active');
                })
                menuChilds.forEach(e => {
                    e.parentElement.classList.remove('active');
                    e.parentElement.querySelector('.menu__item__collapse-list__child').classList.remove('active')
                })
                if(child.parentElement.querySelector('.menu__item__collapse-list__child') != null ) {
                    child.parentElement.querySelector('.menu__item__collapse-list__child').classList.add('active');
                    child.parentElement.querySelector('.menu__item__collapse-list__child').style.zIndex = num;
                    child.parentElement.classList.add('active');
                }
            })
        })
        menuChilds.forEach(child => {
            child.addEventListener('mouseover', () => {
                num++;
                if(child.parentElement.querySelector('.menu__item__collapse-list__child') != null ) {
                    child.parentElement.querySelector('.menu__item__collapse-list__child').classList.add('active');
                    child.parentElement.querySelector('.menu__item__collapse-list__child').style.zIndex = num;
                    child.parentElement.classList.add('active');
                }
            })
        })
        let opacity = 0;
        function showBg() {
            document.querySelector('header').style.zIndex = '10000'
            document.querySelector('.menu-overlay').style.display = 'block'
            document.querySelector('.menu-overlay').style.backgroundColor = 'rgb(136, 136, 136)'
            // document.querySelector('.menu-overlay').style.opacity = '.6'
            fadeFunction()
        }

        function hideBg() {
            document.querySelector('header').style.zIndex = '0'
            document.querySelector('.menu-overlay').style.display = 'none'
            document.querySelector('.menu-overlay').style.backgroundColor = 'none'
            opacity = 0;
        }

        function fadeFunction() {
            if (opacity<.6) {
            opacity += .01;
            setTimeout(function(){fadeFunction()},10);
            }
            document.querySelector('.menu-overlay').style.opacity = opacity;
        }

    //} else {
        // menu-mobile
        const mobileMenu = document.querySelector('#mobile-menu')
        const closeHamburger = document.querySelector('#hamburger-close')
        const openHamburger = document.querySelector('#hamburger-open')

        openHamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active')
            document.querySelector('body').classList.add('active')
            createMobileMenu();
        })
        closeHamburger.addEventListener('click', () => {
            mobileMenu.classList.remove('active')
            document.querySelector('body').classList.remove('active')
        })

        function createMobileMenu() {
            const menu = document.querySelector('.menu-categories').innerHTML;

            document.querySelector('#mobile-menu-categories').innerHTML = menu;

            const menuItemsMobile = document.querySelectorAll('#mobile-menu-categories .menu__item__collapse')

            menuItemsMobile.forEach(item => {
                item.addEventListener('click', () => {
                    menuItemsMobile.forEach(e => {e.classList.remove('active')})
                    item.querySelector('.menu-bg').classList.add('active-mobile')
                })
            })

            const menuChildsMobile = document.querySelectorAll('#mobile-menu-categories .menu__item_link__child > .has-child');
            
            menuChildsMobile.forEach(child => {
                child.parentElement.addEventListener('click', () => {
                    child.classList.add('active-mobile')
                    child.parentElement.querySelector('svg').classList.add('active-mobile')
                    child.parentElement.querySelector('.menu__item__collapse-list__child').classList.add('active-mobile')
                })
            })
        }
        // footer
        const footerCollapseItems = document.querySelectorAll('.footer-list__title');

        footerCollapseItems.forEach((item) => {
            item.addEventListener('click', () => {
                item.nextElementSibling.classList.toggle('collapse')
            })
        })
    //}
    // placeholder
    // const customPlaceHolderContainers = document.querySelectorAll('label.required');
    // customPlaceHolderContainers.forEach((container) => {
    //     const input = container.querySelector("input");
    //     const label = container.querySelector(".placeholder");

    //     input.addEventListener("input", () => {
    //         if (input.value.length > 0) {
    //             label.style.display = "none";
    //         } else {
    //             label.style.display = "flex";
    //         }
    //     });
    // });

    // anchor in product
    if(document.getElementById('view-tab-title-tekhnicheskie-kharakteristiki') != null ) {
        document.getElementById('view-tab-title-tekhnicheskie-kharakteristiki').addEventListener('click', (e) => {
            document.querySelectorAll('li[role="tab"]').forEach(e => e.classList.remove('active'))
            document.querySelectorAll('.wc-tab').forEach(tab => tab.style.display = "none")
            document.getElementById('tab-title-tekhnicheskie-kharakteristiki').classList.add('active')
            document.getElementById('tab-tekhnicheskie-kharakteristiki').style.display = 'block'
        })
    }
    // if no products to compare
    window.location.href.split('/').forEach(e => {
        if(e == 'compare' && document.querySelector('.br_new_compare_block_wrap') == null) {
            document.querySelector('.l-section').innerHTML = '<span style="font-size: 28px;">Добавьте <a class="orange" href="/metalloobrabatyvayuschie/">товар</a> к сравнению</span>'
        }
    })

    const catalogBlock = document.querySelectorAll('.catalog__item__category')
    const catalogDrop = document.querySelectorAll('.subcategories-list-dropbox')
    if(catalogBlock != null && catalogDrop != null){
        catalogBlock.forEach((el) =>{
            el.addEventListener('click', (e) => {
               
                if(e.target.classList.contains('chevr-catalog') || e.target.classList.contains('chevr-catalog-open')){
                        e.preventDefault()                     
                       e.target.closest('.subcategories-item-drop').querySelector('.subcategories-list-dropbox').classList.toggle('is-hidden')
            
                       
                    }
            })
        })
    }

    const searchMobile = document.querySelector('.search-mobile');
    const searchInput = document.querySelector('.search-container');

    if(searchMobile != null && searchInput != null){

        searchMobile.addEventListener('click', () =>{
            searchInput.classList.toggle('active');
        })
    }

    const btnDownloadCatalog = document.querySelector('.btn-download-catalog');
    const downloadCatalog = document.querySelector('.product-main__drop-list');

    if(btnDownloadCatalog != null && downloadCatalog != null){
        btnDownloadCatalog.addEventListener('click', () => {
            downloadCatalog.classList.toggle('active');
        })
    }


})


$(document).ready(function() {
    $(".blocks-gallery-item").each(function() {
        $(this).attr("data-fancybox", "gallery")
        $(this).attr("data-src", $(this).find("img").attr("src"))
    })
})

// const searchMobile = document.querySelector('.search-mobile')
// const searchInput = document.querySelector('.search-container-mobile')

// searchMobile.addEventListener('click', () =>{
//     searchInput.classList.toggle('active')
// })
// const btnDownloadCatalog = document.querySelector('.btn-download-catalog')
// const downloadCatalog = document.querySelector('.product-main__drop-list')

// btnDownloadCatalog.addEventListener('click', () => {
//     downloadCatalog.classList.toggle('active')
// })

