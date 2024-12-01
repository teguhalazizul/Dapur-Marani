import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; // Jika menggunakan Vue.js, sesuaikan dengan framework frontend yang kamu pakai

export default defineConfig({
  plugins: [vue()],  // Sesuaikan dengan plugin yang kamu butuhkan (misalnya Vue, React, dll)
  build: {
    outDir: 'public/build',  // Output build akan disimpan di public/build
    manifest: true,          // Aktifkan manifest.json
    rollupOptions: {
      input: 'resources/js/app.js',  // File entry point untuk JS
    },
  },
});
