import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
	plugins: [
		laravel({
			input: 'resources/js/app.tsx',
			refresh: true,
		}),
		react(),
	],
	watch: {
		usePolling: true,
		origin: 'http://lcoalhost'
	},
	server: {
		hmr: {
			host: 'localhost'
		},
		host: true,
		port: 3000,
		watch: {
			usePolling: true
		}
	}
});
