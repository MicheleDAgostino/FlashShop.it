/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'cursive': ['Kaushan Script', 'cursive'],
      },
    },
  },
  plugins: [require("daisyui")],
}

