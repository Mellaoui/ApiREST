const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                transparent: 'transparent',
                current: 'currentColor',

                black: colors.black,
                white: colors.white,
                gray: colors.trueGray,
                'gray-background':'#f7f8fc',
                'blue':'#328af1',
                'blue-hover':'#2879db',
                'bg-green-900': '#011d26',
                'blue-50':'#a3b6e5',
                'yellow': '#ffc73C',
                'red-100':'#fee2e2',
                'red-50':'#FEF2F2',
                'red':'#ec454f',
                'green': '#1aab8b',
                'purple': '#8b60ed'
            },
            spacing: {
                22: '5.5rem',
                70: '17.5rem',
                175: '43.7rem'
            },
            maxWidth:{
                custom: '68.5rem'
            },
            boxShadow:{
                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)'
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize:{
                xxs:['0.625rem',{lineHeight:'1rem'}],
            },
            keyframes: {
                'reveal': {
                  '0%, 100%': {
                    opacity: 0,
                  },
                  '10%': {
                    'background-size': '0% 100%',
                    opacity: 0,
                  },
                  '15%': {
                    opacity: 1,
                  },
                  '30%': {
                    'background-size': '200% 100%',
                  },
                  '90%': {
                    'background-size': '200% 100%',
                    opacity: 1,
                  },
                },
              },
            animation: {
                'reveal': 'reveal 8s ease-in-out infinite',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
    ],
};
