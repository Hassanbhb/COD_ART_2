/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        'vermilion': {
          '50': '#fff4ed',
          '100': '#ffe6d4',
          '200': '#ffc8a8',
          '300': '#ffa270',
          '400': '#ff6f37',
          '500': '#ff460c',
          '600': '#f02e06',
          '700': '#c71e07',
          '800': '#9e190e',
          '900': '#7f190f',
          '950': '#450805',
        },          
      },
    },
  },
  plugins: [],
}

