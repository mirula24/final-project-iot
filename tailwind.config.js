/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        primarybg : "#18123a",
        primaryText : "#f9fafa",
        green : '#00c0d4',
        primary :'#0284c7',
        dark : '#020617',
        darkgray :'#475569'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
]
}

