/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./web/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        main: '#212936',
      },
    },
  },
  mode: 'jit',
  plugins: [],
}

