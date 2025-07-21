/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
    "./*.php",
    "./src/**/*.php",
    "./src/**/*.html",
    "./components/**/*.php",
    "./includes/**/*.php",
    "./assets/js/**/*.js",
    // Add other specific paths as needed
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Avenir LT Std", "sans-serif"],
        serif: ["Bembo MT Pro", "serif"],
      },

      letterSpacing: {
      tightest: '-0.040625em', // -0.65px / 16
    },

    colors: {
      "dark-green": "#0F2C1B",
      primary: "#0F2C1B",
      secondary: "#646464",
      "forest-green": "#1B5633",
      "kelly-green": "#006937",
      moss: "#69A82E",
      yellow: "#E7DD75",
      blue: "#34657F",
      sky: "#CFE0D8",
      brick: "#AF7C58",
      sand: "#DEC9A2",
      tan: "#F0EFE6",
      lightgray: "#AEB9B4",
      mediumgray: "#C4C4C4",
    },

    fontSize: {
        // Desktop sizes
      "size-h1": ["65px", { lineHeight: "1" }],
      "size-h2": ["48px", { lineHeight: "1.15" }],
      "size-h3": ["38px", { lineHeight: "1.17" }],
      "size-h4": ["32px", { lineHeight: "1.15" }],
      "size-h5": ["26px", { lineHeight: "1.15" }],
      "size-h6": ["12px", { lineHeight: "1.15" }],

        // Mobile sizes
      "size-m-h1": ["42px", { lineHeight: "1.04" }],
      "size-m-h2": ["40px", { lineHeight: "1.15" }],
      "size-m-h3": ["32px", { lineHeight: "1.17" }],
      "size-m-h4": ["28px", { lineHeight: "1.15" }],
      "size-m-h5": ["22px", { lineHeight: "1.2" }],
      "size-m-h6": ["12px", { lineHeight: "1.2" }],

        // Paragraph sizes
      "p-base": ["18px", { lineHeight: "1.5" }],
      "p-sm": ["14px", { lineHeight: "1.5" }],
      "p-xs": ["12px", { lineHeight: "1.5" }],
      "p-m-base": ["16px", { lineHeight: "1.5" }],
      "p-m-sm": ["14px", { lineHeight: "1.5" }],
    },

    boxShadow: {
      'lg': '0px 5px 12px 0px rgba(0, 0, 0, 0.25)',
    },

    transitionDuration: {
      'fast': '150ms',   // For quick animations like underlines
      'normal': '500ms', // Your existing easy class timing
    },

    typography: (theme) => ({
      DEFAULT: {
        css: {
          maxWidth: "none",
          color: theme('colors.dark-green'),
          fontFamily: theme('fontFamily.sans'),
          fontSize: theme('fontSize.p-base')[0],
          lineHeight: theme('fontSize.p-base')[1].lineHeight,
          
          // Headings - match our existing site styles
          'h1': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h1')[0],
            lineHeight: theme('fontSize.size-h1')[1].lineHeight,
            letterSpacing: theme('letterSpacing.tightest'),
            fontWeight: '400',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h1')[0],
              lineHeight: theme('fontSize.size-m-h1')[1].lineHeight,
            },
          },
          'h2': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h2')[0],
            lineHeight: theme('fontSize.size-h2')[1].lineHeight,
            fontWeight: '400',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h2')[0],
              lineHeight: theme('fontSize.size-m-h2')[1].lineHeight,
            },
          },
          'h3': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h3')[0],
            lineHeight: theme('fontSize.size-h3')[1].lineHeight,
            fontWeight: '400',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h3')[0],
              lineHeight: theme('fontSize.size-m-h3')[1].lineHeight,
            },
          },
          'h4': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h4')[0],
            lineHeight: theme('fontSize.size-h4')[1].lineHeight,
            fontWeight: '400',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h4')[0],
              lineHeight: theme('fontSize.size-m-h4')[1].lineHeight,
            },
          },
          'h5': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h5')[0],
            lineHeight: theme('fontSize.size-h5')[1].lineHeight,
            fontWeight: '400',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h5')[0],
              lineHeight: theme('fontSize.size-m-h5')[1].lineHeight,
            },
          },
          'h6': {
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.sans'),
            fontSize: theme('fontSize.size-h6')[0],
            lineHeight: theme('fontSize.size-h6')[1].lineHeight,
            fontWeight: '600',
            textTransform: 'uppercase',
            letterSpacing: '1px',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h6')[0],
              lineHeight: theme('fontSize.size-m-h6')[1].lineHeight,
            },
          },

          // Paragraphs - match our existing styles
          'p': {
            color: theme('colors.secondary'),
            fontFamily: theme('fontFamily.sans'),
            fontSize: theme('fontSize.p-base')[0],
            lineHeight: theme('fontSize.p-base')[1].lineHeight,
            fontWeight: '500',
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.p-m-base')[0],
              lineHeight: theme('fontSize.p-m-base')[1].lineHeight,
            },
          },

          // Lists
          'ul': {
            marginBottom: theme('spacing.8'),
          },
          'ol': {
            marginBottom: theme('spacing.8'),
          },
          'li': {
            fontSize: theme('fontSize.p-base')[0],
            lineHeight: theme('fontSize.p-base')[1].lineHeight,
            fontWeight: '400',
            color: theme('colors.dark-green'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.p-m-base')[0],
              lineHeight: theme('fontSize.p-m-base')[1].lineHeight,
            },
          },

          // Links - match our site styling
          'a': {
            color: theme('colors.moss'),
            textDecoration: 'underline',
            fontWeight: '500',
            '&:hover': {
              color: theme('colors.kelly-green'),
            },
          },

          // Strong/Bold
          'strong': {
            color: theme('colors.dark-green'),
            fontWeight: '600',
          },

          // Emphasis/Italic
          'em': {
            fontStyle: 'italic',
            color: theme('colors.dark-green'),
          },

          // Blockquotes
          'blockquote': {
            borderLeftColor: theme('colors.moss'),
            color: theme('colors.dark-green'),
            fontFamily: theme('fontFamily.serif'),
            fontSize: theme('fontSize.size-h5')[0],
            lineHeight: theme('fontSize.size-h5')[1].lineHeight,
            fontStyle: 'normal',
            fontWeight: '400',
            paddingLeft: theme('spacing.6'),
            marginBottom: theme('spacing.8'),
            '@media (max-width: 1024px)': {
              fontSize: theme('fontSize.size-m-h5')[0],
              lineHeight: theme('fontSize.size-m-h5')[1].lineHeight,
            },
          },

          // Blockquote paragraphs
          'blockquote p': {
            color: 'inherit',
            fontSize: 'inherit',
            lineHeight: 'inherit',
            fontFamily: 'inherit',
            fontWeight: 'inherit',
          },

          // Citations
          'cite': {
            fontSize: theme('fontSize.p-sm')[0],
            color: theme('colors.secondary'),
            fontStyle: 'normal',
            fontWeight: '500',
          },
        },
      },
    }),
  },
},
plugins: [
  require("@tailwindcss/typography")
],
};
