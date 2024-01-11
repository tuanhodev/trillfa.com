//----------------------------------------------
//                  Import                    
//----------------------------------------------

import './bootstrap';
import Alpine from 'alpinejs'
window.Alpine = Alpine

//--------------------- Navbar data -------------------------

Alpine.data('navBar', () => ({

    app: document.getElementById("app"),

    appClassList: document.getElementById("app").classList,

    htm: document.querySelector('[data-theme]').dataset,

    localStorageTheme: localStorage.getItem("theme"),

    systemSettingDark: window.matchMedia("(prefers-color-scheme: dark)"),

    show: false,

    showProfile: false,

    themeMode: "dark",

    // lastScrollTopPosition: 0,

    init() {

        if (this.localStorageTheme) {
            this.themeMode = this.localStorageTheme;
        }
        else if (this.systemSettingDark) {
            this.themeMode = 'dark';
        }

        this.htm.theme = this.themeMode;

        // this.lastScrollTopPosition = window.scrollY;
        // window.scrollTop(this.lastScrollTopPosition);

    },

    toggle(isShow) {

        // this.lastScrollTopPosition = window.scrollY;

        if (isShow == 'open') {

            // this.app.style.height = "100vh";
            this.appClassList.add('overflow-right-hidden');
            this.show = true;
            // this.app.scrollTop(this.lastScrollTopPosition)

        }
        else {

            this.app.style.height = "auto";
            this.appClassList.remove('overflow-right-hidden');
            this.show = false;
            // window.scrollTop(this.lastScrollTopPosition);

        }
    },

    switchTheme(mode) {

        this.htm.theme = mode;

        this.themeMode = mode;

        localStorage.setItem("theme", this.themeMode);



    }


}))

Alpine.start()
















