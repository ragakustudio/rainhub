/** @type {import('@tailwindcss/cli').Config} */
module.exports = {
  content: [
    "./application/views/**/*.php",
    "./application/views/**/*.html",
    "./application/views/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#272727",
        secondary: "#CEC06F"
      }
    },
  },
  plugins: [],
};
