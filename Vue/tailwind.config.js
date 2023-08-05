/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      container: {
        // center: true,
        padding: {
          default: "20px",
          md: "50px",
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")
  ],
};
