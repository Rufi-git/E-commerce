import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'public/build/assets/create-793219b8.css',
        'https://e-commerce-3pkerg3mg-rufi-git.vercel.app/resources/js/app.js',
        'public/build/assets/main-e3b314ba.css'   
      ],
      refresh: true,
    }),
  ],
});