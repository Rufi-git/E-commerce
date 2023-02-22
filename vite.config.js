import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'public/build/assets/create-793219b8-793219b8.css',
        'public/build/assets/app-575acb37-859fc5d0.js',
        'public/build/assets/main-e3b314ba-e3b314ba.css'   
      ],
      refresh: true,
    }),
  ],
});