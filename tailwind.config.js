/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        screens: {
            'sm': '600px',
            // => @media (min-width: 640px) { ... }

            'md': '850px',
            // => @media (min-width: 768px) { ... }

            'lg': '1100px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1300px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1500px',
            // => @media (min-width: 1536px) { ... }
        }
    },
    plugins: [require("daisyui")],
}

