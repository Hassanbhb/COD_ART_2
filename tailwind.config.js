/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        xs: '480px',
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
      },
      colors: {
        gray: {
          50: '#F7F8F7',
          100: '#EEF1EF',
          200: '#E3E8E5',
          300: '#D2DAD5',
          400: '#9CABA2',
          500: '#6C7F73',
          600: '#4B5563',
          700: '#3B5444',
          800: '#19251D',
          900: '#041109',
        },
  
        yellowGreen: {
          50: '#FDFEFB',
          100: '#F7FCED',
          200: '#EFFADB',
          300: '#E2F6C0',
          400: '#D1F19C',
          500: '#BCEB70',
          600: '#A3E33A',
          700: '#85C51C',
          800: '#70A617',
          900: '#588212',
        },
  
        teal: {
          50: '#F9FBF9',
          100: '#F2F8F4',
          200: '#DEEDE3',
          300: '#C4DECC',
          400: '#A3CCAF',
          500: '#7CB68D',
          600: '#579E6C',
          700: '#417751',
          800: '#2B4F36',
          900: '#073517',
        },
  
        green: {
          50: '#FBFEFC',
          100: '#F4FDF7',
          200: '#EAFAF0',
          300: '#CAF4D9',
          400: '#AAEDC3',
          500: '#6ADF95',
          600: '#2AD168',
          700: '#26BC5E',
          800: '#209D4E',
          900: '#197D3E',
        },
  
        cyan: {
          50: '#e9f6f5',
          100: '#bde6e2',
          200: '#a7ddd9',
          300: '#92d5cf',
          400: '#7ccdc6',
          500: '#66c4bc',
          600: '#50bcb3',
          700: '#3ab4a9',
          800: '#25aca0',
          900: '#1d8980',
        },
  
        cyanGreen: {
          50: '#eef9da',
          100: '#e6f6c8',
          200: '#ddf3b5',
          300: '#d5f1a3',
          400: '#cdee91',
          500: '#c4eb7e',
          600: '#bce86c',
          700: '#b4e55a',
          800: '#ace348',
          900: '#9acc40',
        },
  
        red: {
          50: '#FEFBFB',
          100: '#FDF3F1',
          200: '#FDEEEC',
          300: '#FBD6D0',
          400: '#F9BDB4',
          500: '#F48B7C',
          600: '#EF5944',
          700: '#D7503D',
          800: '#B34333',
          900: '#8F3529',
        },
  
        yellow: {
          50: '#FFFCF5',
          100: '#FFFAEB',
          200: '#FEF0C7',
          300: '#FEDF89',
          400: '#FEC84B',
          500: '#FDB022',
          600: '#F79009',
          700: '#DC6803',
          800: '#B54708',
          900: '#93370D',
        },
  
        blue: {
          50: '#F5FAFF',
          100: '#EFF8FF',
          200: '#D1E9FF',
          300: '#B2DDFF',
          400: '#84CAFF',
          500: '#53B1FD',
          600: '#2E90FA',
          700: '#1570EF',
          800: '#175CD3',
          900: '#1849A9',
        },           
      },
      backgroundImage: {
        none: 'none',
        'gradient-to-t': 'linear-gradient(to top, var(--tw-gradient-stops))',
        'gradient-to-tr': 'linear-gradient(to top right, var(--tw-gradient-stops))',
        'gradient-to-r': 'linear-gradient(to right, var(--tw-gradient-stops))',
        'gradient-to-br': 'linear-gradient(to bottom right, var(--tw-gradient-stops))',
        'gradient-to-b': 'linear-gradient(to bottom, var(--tw-gradient-stops))',
        'gradient-to-bl': 'linear-gradient(to bottom left, var(--tw-gradient-stops))',
        'gradient-to-l': 'linear-gradient(to left, var(--tw-gradient-stops))',
        'gradient-to-tl': 'linear-gradient(to top left, var(--tw-gradient-stops))',
        'radial': 'radial-gradient(var(--tw-gradient-stops))',
        'radial-dark-green': 'radial-gradient(446.50% 301.92% at 50.09% 3.49%, #052410 13.21%, #75A274 27.92%, #A0CAAC 34.17%)'
      },
      animation: {
        none: 'none',
        spin: 'spin 1s linear infinite',
        ping: 'ping 1s cubic-bezier(0, 0, 0.2, 1) infinite',
        pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
        bounce: 'bounce 1s infinite',
        movingLeft: 'movingLeft 35s linear infinite',
        movingRight: 'movingRight 35s linear infinite',
        pulseText: 'pulseText 10s ease-in-out infinite',
        pulseTextDark: 'pulseTextDark 10s ease-in-out infinite',
        pulseTextGreen: 'pulseTextGreen 10s ease-in-out infinite',
        showLine: 'showLine 5s linear infinite',
        searchInput: 'showSearchInput 1s linear',
        fill: 'animFill 500ms linear both',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
}

