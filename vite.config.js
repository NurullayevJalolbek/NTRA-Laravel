import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        manifest: true, // Manifest faylini yaratish, Laravel uchun kerak
        outDir: 'public', // Fayllar public papkaga chiqadi
    },
    server: {
        host: '0.0.0.0',       // Barcha IP-larni tinglash
        port: 5173,            // Vite serverining porti
        strictPort: true,      // Portni qat'iy belgilash
        origin: 'http://143.110.179.250:5173', // Asosiy domeningiz yoki IP manzili
        proxy: {
            '/app.js': 'http://localhost:5173',  // Proxy serverga yo‘llash
            '/css/app.css': 'http://localhost:5173',
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',  // Sass faylini kiritish
                'resources/js/app.js',      // JavaScript faylini kiritish
            ],
            refresh: true,  // Faylni yangilash
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,  // URL bazasini `null` qilish
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js', // Vue ning eslab qolingan versiyasi
        },
    },
});
