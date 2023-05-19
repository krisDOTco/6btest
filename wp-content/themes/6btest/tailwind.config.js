/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.{html,js,css}"],
    theme: {
        fontFamily: {
            sans: [
                "Inter var, sans-serif",
                {
                    fontFeatureSettings: '"cv11", "ss01"',
                    fontVariationSettings: '"opsz" 32'
                },
            ],
        },
        colors: {
            'basePurple': '#6941C6'
        }
    },
    plugins: [],
}