import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import cssnanoPlugin from "cssnano";
import postcss from "postcss";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        cssnanoPlugin({
            preset: "default",
            refresh:true,
            
        }),
    ],
});
