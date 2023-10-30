//----------------------------------------------
//                  Import                    
//----------------------------------------------

import './bootstrap';


//--------------------- Navbar data -------------------------

Alpine.data('navBar', () => ({

    app: document.getElementById("app").classList,

    show: false,

    showProfile: false,

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
    }

}))


















