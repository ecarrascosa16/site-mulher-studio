import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
            'studio-golden': '#E3C29D',
            'studio-pink': '#E6A4B4',
            'studio-purple': '#a576a5',
            'studio-wine': '#822659',
            'studio-gray': '#3E3E3E',
            },
        fontFamily: {
        marcellus: ['Marcellus', 'serif'],
        playfair: ['Playfair Display', 'serif'],
        poppins: ['Poppins', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
        },
  },
},

    plugins: [forms],
};




