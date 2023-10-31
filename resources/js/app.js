//----------------------------------------------
//                  Import                    
//----------------------------------------------

import './bootstrap';


//--------------------- Navbar data -------------------------

Alpine.data('navBar', () => ({

    app: document.getElementById("app").classList,

    linkActive: document.getElementById("navbar-link").classList,

    htm: document.querySelector('[data-theme]').dataset,

    show: false,

    showProfile: false,

    themeMode: "dark",

    init() {

        this.themeMode="dark";

    },

    // Bat tat slide menu
    toggle(isShow) {

        if (isShow == 'open') {

            this.app.add('overflow-right-hidden');
            this.show = true;

        }
        else {

            this.app.remove('overflow-right-hidden');
            this.show = false;

        }
    },

    switchTheme(mode) {

        this.htm.theme = mode;

        this.themeMode = this.htm.theme;

    }


}))


















