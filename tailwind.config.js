/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
    "./application/views/**/*.php",
    "./application/views/**/**/*.php",
    "./application/**/*.php",
    "./public/**/*.html",
    "./assets/**/*.js",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Public Sans", "sans-serif"],
      },

      /* ----------------------------------------------------------
         TYPOGRAPHY TOKENS (named sizes)
      ---------------------------------------------------------- */
      fontSize: {
        xs: ['0.75rem', { lineHeight: '1rem' }],   // 12px
        sm: ['0.875rem', { lineHeight: '1.25rem' }], // 14px
        base: ['1rem', { lineHeight: '1.5rem' }],    // 16px
        lg: ['1.125rem', { lineHeight: '1.75rem' }], // 18px
        xl: ['1.25rem', { lineHeight: '1.75rem' }],  // 20px
        '2xl': ['1.5rem', { lineHeight: '2rem' }],   // 24px
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
      },

      /* ----------------------------------------------------------
         COLOR SYSTEM — RAGAKU DESIGN TOKEN
      ---------------------------------------------------------- */
      colors: {
        primary: {
          50:  "#E8F0F8",
          100: "#C9DDF0",
          200: "#9EC2E3",
          300: "#73A7D4",
          400: "#4A89C0",
          500: "#13487F",  // BRAND MAIN
          600: "#0F3A66",
          700: "#0B2D4F",
          800: "#081F38",
          900: "#041225",
        },

        accent: {
          50:  "#FFF8E6",
          100: "#FDEEBF",
          200: "#FBDF96",
          300: "#F8D36E",
          400: "#F6C746",
          500: "#F3B41B", // BRAND MAIN
          600: "#D99F17",
          700: "#B08212",
          800: "#87650D",
          900: "#5E4809",
        },

        secondary: {
          50:  "#FFFFFF",
          100: "#FAFBFD",
          200: "#F4F6FB",   // BRAND SECONDARY
          300: "#E8ECF5",
          400: "#D8DDE6",
          500: "#C6CBD7",
        },

        neutral: {
          50:  "#EDEDED",
          100: "#D9D9D9",
          200: "#BFBFBF",
          300: "#A6A6A6",
          400: "#8C8C8C",
          500: "#6F6F6F",
          600: "#4D4D4D",
          700: "#1E1E1E",  // BRAND NEUTRAL DARK
          800: "#141414",
          900: "#0A0A0A",
        },

        gray: {
          50:  "#F5F5F5",
          100: "#EAEAEA",
          200: "#D6D6D6",
          300: "#B8B8B8",
          400: "#7A7A7A",  // BRAND GRAY
          500: "#696969",
          600: "#555555",
          700: "#3F3F3F",
          800: "#2C2C2C",
          900: "#1A1A1A",
        },
      },

      /* ----------------------------------------------------------
         RADIUS
      ---------------------------------------------------------- */
      borderRadius: {
        sm: "4px",
        md: "8px",
        lg: "12px",
        xl: "16px",
        "2xl": "32px",
        "3xl": "48px",
        full: "9999px",
      },

      /* ----------------------------------------------------------
         SHADOW SYSTEM
      ---------------------------------------------------------- */
      boxShadow: {
        sm: "0 1px 2px rgba(0,0,0,0.05)",
        md: "0 3px 6px rgba(0,0,0,0.08)",
        lg: "0 8px 16px rgba(0,0,0,0.10)",
      },

      /* ----------------------------------------------------------
         SPACING
      ---------------------------------------------------------- */
      spacing: {
        1: "4px",
        2: "8px",
        3: "12px",
        4: "16px",
        5: "20px",
        6: "24px",
        8: "32px",
        10: "40px",
        12: "48px",
        16: "64px",
      },
    },
  },

  plugins: [],
};
