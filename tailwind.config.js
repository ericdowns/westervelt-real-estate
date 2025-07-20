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

    typography: (theme) => ({
      DEFAULT: {
        css: {
          maxWidth: "none",
        },
      },
    }),
  },
},
plugins: [
  require("@tailwindcss/typography")
],
};
