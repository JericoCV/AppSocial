window.addEventListener("load", () => {

    //localStorage.setItem('active', '');
    let activeTab = localStorage.getItem('active');
    let btn = document.querySelectorAll('#pills-tab li .nav-link')
    let tabContent = document.querySelectorAll('.tab-content .tab-pane')

    // read active tab from storage
    if ( activeTab ) {

        // show active tab
        tabSelected = document.querySelector(activeTab+'-tab')
        tabSelected.className += ' active'

        // show active content
        contentSelected = document.querySelector(activeTab)
        contentSelected.className += ' active show'

    } else {

        // default tab
        btn[0].className += ' active'
        tabContent[0].className += ' active show'
    }

    //btn = document.querySelectorAll('#pills-tab li .nav-link')
    btn.forEach( tab => {

        // read selected tab from EventListener (bootstrap)
        tab.addEventListener('show.bs.tab', (e) => {
            dataTarget = tab.getAttribute('data-bs-target')
            localStorage.setItem('active', dataTarget);
        })

    })

})
