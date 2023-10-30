import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({

            input: [
                'resources/css/theme/theme.css',
                'resources/css/styles.css',
                'resources/js/app.js',
            ],

            publicDirectory: 'public_html/',

            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
