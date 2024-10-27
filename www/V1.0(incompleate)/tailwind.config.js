/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./web/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    screens: {
      'sm': '300px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }
    },
    scale: {
      '175': '1.75',
      '200': '2',
    },
    extend: {
      colors: {
        main: '#212936',
        principal: '#74c8cc',
        secundaria :'#A8E3E5',
        'custom-gray': '#EDEFF4'
      },
    },
  },
  mode: 'jit',
  plugins: [
    require('flowbite/plugin')({
      datatables: true,
    }),
    // ... other plugins
  ]
}

