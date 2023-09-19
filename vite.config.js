import { defineConfig } from "vite";
import tailwindcss from "tailwindcss";
import autoprefixer from 'autoprefixer'
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            postcss: [tailwindcss(), autoprefixer()],
        }),
    ],
});
