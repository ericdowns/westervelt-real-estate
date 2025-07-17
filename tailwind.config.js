/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
    "./*.php",
    "./src/**/*.php",
    "./src/**/*.html",
    "./components/**/*.php",
    "./includes/**/*.php",
    // Add other specific paths as needed
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Avenir LT Std', 'sans-serif'],
        'serif': ['Bembo MT Pro', 'serif'],
      },

      colors: {
        'dark-green': '#0F2C1B',
        'primary': '#0F2C1B',
        'secondary': '#646464',
        'forest-green': '#1B5633',
        'kelly-green': '#006937',
        'moss': '#69A82E',
        'yellow': '#E7DD75',
        'blue': '#34657F',
        'sky': '#CFE0D8',
        'brick': '#AF7C58',
        'sand': '#DEC9A2',
        'tan': '#F0EFE6',
        'lightgray': '#AEB9B4',
        'mediumgray': '#C4C4C4',

      },

      fontSize: {
        // Desktop sizes
        'size-h1': ['65px', { lineHeight: '1.1' }], 
        'size-h2': ['48px', { lineHeight: '1.1' }],
        'size-h3': ['38px', { lineHeight: '1.2' }],
        'size-h4': ['32px', { lineHeight: '1.2' }],
        'size-h5': ['26px', { lineHeight: '1.2' }],
        'size-h6': ['12px', { lineHeight: '1.2' }],

        // Mobile sizes
        'size-m-h1': ['42px', { lineHeight: '1.1' }],
        'size-m-h2': ['40px', { lineHeight: '1.1' }],
        'size-m-h3': ['25px', { lineHeight: '1.2' }],
        'size-m-h4': ['28px', { lineHeight: '1.2' }],
        'size-m-h5': ['22px', { lineHeight: '1.2' }],
        'size-m-h6': ['12px', { lineHeight: '1.2' }],

        // Paragraph sizes
        'p-base': ['18px', { lineHeight: '1.8' }],
        'p-sm': ['14px', { lineHeight: '1.8' }],
        'p-xs': ['12px', { lineHeight: '1.8' }],
        'p-m-base': ['16px', { lineHeight: '1.8' }],
        'p-m-sm': ['14px', { lineHeight: '1.8' }],
      },

      typography: (theme) => ({
        DEFAULT: {
          css: {
            maxWidth: 'none',
          },
        },
      }),
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
