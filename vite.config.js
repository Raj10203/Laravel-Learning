import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '127.0.0.1', // or true to listen on all interfaces
        port: 5174,
        cors: true, // enables CORS
        origin: 'http://127.0.0.1:5174',
        headers: {
            'Access-Control-Allow-Origin': '*',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
