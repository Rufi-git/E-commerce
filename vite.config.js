import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'https://e-commerce-3pkerg3mg-rufi-git.vercel.app/resources/sass/main.css'        ,
        'https://e-commerce-3pkerg3mg-rufi-git.vercel.app/resources/js/app.js',
        'https://e-commerce-3pkerg3mg-rufi-git.vercel.app/resources/sass/create.css'
      ],
      refresh: true,
    }),
  ],
});