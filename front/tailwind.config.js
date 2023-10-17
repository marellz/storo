/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./app.vue",
    "./error.vue",
  ],
  theme: {
    fontFamily: {
      sans: ["Outfit", "sans-serif"],
    },
    extend: {
      colors: {
        "prussian-blue": "#273043ff",
        "cool-gray": "#9197aeff",
        "mint-cream": "#eff6eeff",
        "tufts-blue": "#298cd6ff",
        "pink-lavender": "#f2bae4ff",
      },
    },
  },
  plugins: [],
};
