import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', // Your main JavaScript file
                'resources/css/app.css', // Your main CSS file
                'node_modules/admin-lte/dist/css/adminlte.min.css', // AdminLTE CSS
                // Removed FullCalendar CSS and JS as they're loaded from CDN
                'node_modules/admin-lte/plugins/jquery/jquery.min.js', // jQuery
                'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', // Bootstrap JS
                'node_modules/admin-lte/dist/js/adminlte.min.js', // AdminLTE JS
            ],
            output: 'public/build', // Ensure this path is correct

            refresh: true,
        }),
    ],
});
