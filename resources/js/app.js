//----------------------------------------------
//                  Import                    
//----------------------------------------------

import './bootstrap';
import Alpine from 'alpinejs'
window.Alpine = Alpine
 


//--------------------- Navbar data -------------------------

Alpine.data('navBar', () => ({

    app: document.getElementById("app").classList,

    htm: document.querySelector('[data-theme]').dataset,

    show: false,

    showProfile: false,

    themeMode: "dark",

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

Alpine.start()
















