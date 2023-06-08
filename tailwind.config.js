/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors:{
        gradient: "red"
      }
    },
    screens:{
      '1440': {'max': '1440px'},
      '1024': {'max': '1024px'},
      '1500': {'max': '1500px'},
      '1200': {'max': '1200px'},
      '666': {'max': '666px'},
      '1300': {'max': '1300px'}
    }
  },
  plugins: ['@tailwindcss/forms'],
}

