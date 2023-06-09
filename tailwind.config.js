/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors : {  
        'logo-color':'#2CB0B9',
        'for-landing-blue':'#44A4DA',
        'for-stakeholder-button':'#4CC9F0',
        'carker-color':'#90E0EF',
        'for-sidebar':'#03045E'
      },
      fontFamily:{
        'Roboto':['Roboto','sans-serif'],
        'RobotoSlab':['Roboto Slab','serif'],
        'source-sans-pro':['Source Sans Pro','sans-serif'],
        'Inter': ['Inter','sans-serif']
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  darkMode:'class',
}

