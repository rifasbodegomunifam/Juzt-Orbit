import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  
  plugins: [tailwindcss({
    content: [
      './**/*.{php,twig}',
      './frontend/**/*.js',
    ]
  })],

  server: {
    cors: true,
    hmr: true,
    port: 5174
  },
  
  build: {
    outDir: 'assets',
    cssCodeSplit: true,
    
    // ✅ Importante: Generar manifest
    manifest: true,
    
    rollupOptions: {
      input: {
        // ✅ CSS como entrada separada
        style: 'frontend/css/index.css',
        script: 'frontend/js/index.js',
      },

      output: {
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.endsWith('.css')) {
            return 'css/[name].[ext]'; 
          }
          return '[name].[ext]';
        },
        chunkFileNames: 'js/[name].js',
        entryFileNames: 'js/[name].js'
      },
    },
  },
});