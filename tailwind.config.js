/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors : {  
        'logo-color':'#2CB0B9',
        'for-landing-blue':'#44A4DA'
      },
      fontFamily:{
        'Roboto':['Roboto','sans-serif'],
        'RobotoSlab':['Roboto Slab','serif'],
        'source-sans-pro':['Source Sans Pro','sans-serif'],
      }
    },
  },
  plugins: [],
}

