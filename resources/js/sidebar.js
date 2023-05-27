let body = document.getElementsByTagName('body')[0],
    sidebar = document.getElementById('sidebar'),
    headerContent = document.getElementById('user-settings'),
    sizeScroll = window.innerWidth - document.body.offsetWidth,
    hideSidebarToggle = document.getElementById('hide-sidebar-toggle'),
    pcHeader = document.getElementsByClassName('@headerclass')[0],
    pageHeader = document.getElementsByClassName('page-header')[0],
    pcContainer = document.getElementsByClassName('pc-container')[0],
    adaptiveItems = document.getElementsByClassName('pc-mtext'),
    adaptiveContent = document.getElementsByClassName('adaptive-content')
;

const timeTransition = 'all 0.6s ease',
    sizeMinSidebar = '60px',
    sizeMaxSidebar = '280px'
;

// обработчик отключения скролла страницы, когда скролится меню
sidebar.onmouseover = function () {
    body.style.overflow = 'hidden';
    body.style.paddingRight = `${sizeScroll}px`;
    headerContent.style.paddingRight = `${sizeScroll}px`;
}

sidebar.onmouseout = function () {
    body.style.paddingRight = `${body.style.paddingRight.match(/\d+/)[0] - sizeScroll}px`;
    headerContent.style.paddingRight = `0`;
    body.style.overflow = 'auto';
}

hideSidebarToggle.onmouseover = function () {
    hideSidebarToggle.style.cursor = 'pointer';
}

const sidebarSizeHandler = {
    hideSidebar() {
        sidebar.style.width = sizeMinSidebar;
        hideSidebarToggle.classList.add('fa-rotate-180');
        hideSidebarToggle.style.position = 'absolute';
        hideSidebarToggle.style.right = '10px';
        hideSidebarToggle.style.top = sizeMinSidebar;
        pcHeader.style.left = sizeMinSidebar;
        pageHeader.style.left = sizeMinSidebar;
        pcContainer.style.marginLeft = 'calc(13vh - 60px)';
        for (let i of adaptiveItems) {
            i.classList.add('d-none')
        }
        for (let i of adaptiveContent) {
            i.classList.add('d-none')
        }
        localStorage.setItem('fullSidebar', 'false');
    }, showSidebar() {
        hideSidebarToggle.classList.remove('fa-rotate-180');
        sidebar.style.width = sizeMaxSidebar;
        hideSidebarToggle.style.position = '';
        hideSidebarToggle.style.right = '';
        hideSidebarToggle.style.top = '';
        pcHeader.style.left = sizeMaxSidebar;
        pageHeader.style.left = sizeMaxSidebar;
        pcContainer.style.marginLeft = sizeMaxSidebar;
        for (let i of adaptiveItems) {
            i.classList.remove('d-none')
        }
        for (let i of adaptiveContent) {
            i.classList.remove('d-none')
        }
        localStorage.setItem('fullSidebar', 'true');
    }, onLoad() {
        sidebar.style.transition = '';
        pcContainer.style.transition = '';
        pcHeader.style.transition = '';
        pageHeader.style.transition = '';
        if (localStorage.getItem('fullSidebar') === 'false') {
            sidebarSizeHandler.hideSidebar()
        } else {
            sidebarSizeHandler.showSidebar()
        }
    }, onClick() {
        sidebar.style.transition = timeTransition;
        pcContainer.style.transition = timeTransition;
        pcHeader.style.transition = timeTransition;
        pageHeader.style.transition = timeTransition;
        if (localStorage.getItem('fullSidebar') === 'false') {
            sidebarSizeHandler.showSidebar()
        } else {
            sidebarSizeHandler.hideSidebar()
        }
    }
}

window.addEventListener('load', () => {
    // восстановительный метод после перезагрузки
    //sidebarSizeHandler.onLoad()
});

hideSidebarToggle.onclick = function () {
    //sidebarSizeHandler.onClick()
}
