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
            figtree: ["Figtree", "sans-serif"],
        },
        colors: {
            primary: "#375878",
            grey: "#9EB5CB",
            "primary-black": "#26343B",
        },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

