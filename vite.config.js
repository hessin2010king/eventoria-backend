import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'node_modules/bootstrap/dist/css/bootstrap.min.css', // Use Bootstrap from node_modules
                'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', // Add Bootstrap JS here
                'node_modules/admin-lte/dist/css/adminlte.min.css', // AdminLTE CSS
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
    }
});
