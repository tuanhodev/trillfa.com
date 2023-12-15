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

    localStorageTheme: localStorage.getItem("theme"),

    systemSettingDark: window.matchMedia("(prefers-color-scheme: dark)"),

    show: false,

    showProfile: false,

    themeMode: "dark",

    init() {

        if (this.localStorageTheme) {
            this.themeMode = this.localStorageTheme;
        }
        else if (this.systemSettingDark) {
            this.themeMode = 'dark';
        }

        this.htm.theme = this.themeMode;

    },

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

        this.themeMode = mode;

        localStorage.setItem("theme", this.themeMode);



    }


}))

Alpine.start()
















