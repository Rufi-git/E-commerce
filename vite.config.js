import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/main.scss','resources/css/main.css', 'resources/js/app.js', 'resources/sass/create.scss'],
            refresh: true,
        }),
    ],
});
