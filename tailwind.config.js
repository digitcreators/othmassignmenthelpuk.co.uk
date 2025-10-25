/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'herobg': "url('../../imgs/slider.jpg')",
        'writersInUAE-bgimg': "url('../../imgs/b22eeF.jpg')",
        'writeMyEssay-bgimg': "url('../../imgs/b2.jpg')",
    }),

    colors: {
    
      'primary-one': '#34bda8', //blue

    },

    keyframes: {
      wave: {
          '0%': { transform: 'rotate(0.0deg)' },
          '15%': { transform: 'rotate(14.0deg)' },
          '30%': { transform: 'rotate(-8.0deg)' },
          '40%': { transform: 'rotate(14.0deg)' },
          '50%': { transform: 'rotate(-4.0deg)' },
          '60%': { transform: 'rotate(10.0deg)' },
          '70%': { transform: 'rotate(0.0deg)' },
          '100%': { transform: 'rotate(0.0deg)' },
      }
  },
  animation: {
    'bounce': 'bounce 3s linear infinite',
    'pulse': 'pulse 3s linear infinite',
    'wave': 'wave 3s linear infinite',
  }
  },
  },
  plugins: [],
}
