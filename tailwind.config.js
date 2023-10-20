// const colors = require('tailwindcss/colors')
// import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        colors: {

            "white"               : "#FFF",
            "black"               : "#000",
            "primary"             : "#7bc916",
            "primary-light"        : "#85c930",
            "primary-dark"        : "#57a40b",
            "primary-content"     : "#122101",
            "secondary"           : "#651fc1",
            "secondary-light"     : "#6b41cd",
            "secondary-dark"      : "#5806b0",
            "secondary-content"   : "#f5f3ff",
            "middle"              : "#CED0E0",
            "middle-content"      : "#333C4D",
            "accent"              : "#a3f7ee",
            "accent-content"      : "#232F2D",
            "neutral"             : "#2c2234",
            "neutral-content"     : "#f9fafb",
            "base"                : "#EFEFEF",
            "base-content"        : "#333c4d",
            "info"                : "#a1afe8",
            "info-content"        : "#23252E",
            "success"             : "#147b65",
            "success-content"     : "#69AA9B",
            "warning"             : "#f6982c",
            "warning-content"     : "#955E1E",
            "error"               : "#e32b37",
            "error-content"       : "#FCBFBC",
        },

        extend: {
            screens: {

                tablet   : '960px',
                desktop  : '1248px',

            },
            fontFamily: {
                // sans            : ['', ...defaultTheme.fontFamily.sans],
                // font-family: 'Barlow Semi Condensed', sans-serif;
                // font-family: 'Big Shoulders Text', sans-serif;
                // font-family: 'Dosis', sans-serif;
                // font-family: 'Nunito', sans-serif;
                appfont: ['Barlow Semi Condensed', 'sans-serif'],
                design: ['Big Shoulders Text', 'sans-serif'], //app font,
            },
        },
    },

    plugins: [forms, typography],

};
