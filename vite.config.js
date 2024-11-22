import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        manifest: true, // Ensure the manifest is generated
    },
    server: {
        cors:{
            origin: "*",
            methods: "GET,HEAD,PUT,PATCH,POST,DELETE",
        },
        host: "0.0.0.0",  // Tashqi ulanish uchun barcha IP-larni ruxsatlang
        port: 5173,       // Portni Docker-compose'da xaritalangan portga moslang
        strictPort: true, // Portning qat'iy ishlatilishini o'rnating
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
