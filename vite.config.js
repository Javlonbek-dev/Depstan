import { defineConfig   } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/wp-content/css/e-swiper.min.css',
                'resources/css/wp-content/css/font-icons.min.css',
                'resources/css/wp-content/css/global.css',
                'resources/css/wp-content/css/mobile.min.css',
                'resources/css/wp-content/css/elementor-icons.min.css',
                'resources/css/wp-content/css/navigation-branding.min.css',
                'resources/css/wp-content/css/post-12.css',
                'resources/css/wp-content/css/post-41.css',
                'resources/css/wp-content/css/style.min.css',
                'resources/css/wp-content/css/style-min.css',
                'resources/css/wp-content/css/frontend.min.css',
                'resources/css/wp-content/css/post-40.css',
                'resources/css/wp-content/css/unsemantic-grid.min.css',
                'resources/css/wp-content/css/widget-google_maps.min.css',
                'resources/css/wp-content/css/widget-heading.min.css',
                'resources/css/wp-content/css/widget-image-box.min.css',
                'resources/css/wp-content/css/eael.min.css',
                'resources/css/wp-content/css/eael-post-2.min.css',
                'resources/css/wp-content/css/eael-post-36.min.css',
                'resources/css/wp-content/css/elementor-icons.min.css',
                'resources/css/wp-content/css/widget-text-editor.min.css',
                'resources/css/wp-content/css/post-192.css',

                //js
                'resources/js/assets/core.min.js',
                'resources/js/assets/frontend.min.js',
                'resources/js/assets/frontend-modules.min.js',
                'resources/js/assets/menu.min.js',
                'resources/js/assets/navigation-search.min.js',
                'resources/js/assets/sticky.min.js',
                'resources/js/assets/webpack.runtime.min.js',
            ],
            refresh: true,
        }),
    ],
});
