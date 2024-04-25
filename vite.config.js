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
		origin: 'http://equipeescudobjj.com.br'
	},
	server: {
		hmr: {
			host: '165.227.181.214'
		},
		host: true,
		port: 3000,
		watch: {
			usePolling: true
		}
	}
});
