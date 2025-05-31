module.exports = {
    content: ['./src/**/*.{js,jsx,ts,tsx}'],
     theme: {
    extend: {
      keyframes: {
        floatY: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-20px)' },
        },
      },
      animation: {
        floatY: 'floatY 3s ease-in-out infinite',
      },
    },
    },
    plugins: [require('@tailwindcss/forms')],
}
