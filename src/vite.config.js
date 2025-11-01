import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'; 
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js', 
        },
    },
    server: {
        host: '0.0.0.0',
        port: 5173,
        watch: {
            usePolling: true, 
            interval: 1000,
            ignored: ['**/node_modules/**', '**/vendor/**', '**/storage/**'],
        },
        hmr: {
            host: 'localhost', // если заходим с локалки
            protocol: 'ws'
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
});
