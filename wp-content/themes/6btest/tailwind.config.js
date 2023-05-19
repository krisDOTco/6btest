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
    },
    plugins: [],
}