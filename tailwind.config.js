const colors = require('tailwindcss/colors')
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {

                "light": {
                    "primary": "#7bc916",
                    "primary-content": "#122101",
                    "secondary": "#651fc1",
                    "secondary-content": "#f5f3ff",
                    "accent": "#a3f7ee",
                    "accent-content": "#232F2D",
                    "neutral": "#2c2234",
                    "neutral-content": "#f9fafb",
                    "base-100": "#e7e8e9",
                    "base-content": "#333c4d",
                    "info": "#a1afe8",
                    "info-content": "#23252E",
                    "success": "#147b65",
                    "success-content": "#69AA9B",
                    "warning": "#f6982c",
                    "warning-content": "#955E1E",
                    "error": "#e32b37",
                    "error-content": "#FCBFBC",
                },
            }
        },
    },

    plugins: [forms, typography],

};
