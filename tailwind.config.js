import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './storage/framework/views/*.php',
        ],


    theme: {
        extend: {
            colors: {
            'studio-golden': '#E3C29D',
            'studio-pink-white': '#E7DAE7',
            'studio-pink': '#D6BDD6',
            'studio-pink-black': "#C8A2C8",
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






