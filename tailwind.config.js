/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
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

