import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  
  plugins: [tailwindcss({
    content: [
      './**/*.{php,twig}',
      './src/**/*.js',
    ]
  })],

  server: {
    cors: true,
    hmr: true,
    port: 5174
  },
  
  build: {
    
    outDir: 'assets',

   
    rollupOptions: {
      
      input: {
        script: 'frontend/js/index.js', 
        style: 'frontend/css/index.css',
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