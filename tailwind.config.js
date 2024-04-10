const { addDynamicIconSelectors } = require("@iconify/tailwind");

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        "roboto-mono": ["Roboto Mono", "monospace"],
      },
    },
  },
  plugins: [addDynamicIconSelectors()],
};
