module.exports = {
    // mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: {
                    light: "#39cfdf",
                    DEFAULT: "#1e94a1",
                    dark: "#1e94a1"
                },
                secondary: {
                    light: "#e97888",
                    DEFAULT: "#9a1f5f",
                    dark: "#971023"
                }
            },
            transitionProperty: {
                width: "width"
            }
        }
    },
    variants: {
        extend: {
            width: ["group-hover"]
        }
    },
    plugins: [
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms")
    ]
};
