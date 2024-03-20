/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./Public/ts/*.ts",
    "./Views/**/*.php"
  ],
  theme: {
    extend: {
      margin: {
        '1/4': '25%',
      },
    },
  },
  plugins: [],
}

