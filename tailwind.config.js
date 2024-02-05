/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
                "3xl": "8rem",
            },
        },
        extend: {
            screens: {
                max: { max: "3456px" },
                retina: { max: "3024px" },
                ultra: { max: "2880px" },
                full: { max: "2560px" },
                wide: { max: "1920px" },
                laptop: { max: "1536px" },
                tablet: { max: "1024px" },
                mobile: { max: "640px" },
            },
            colors: {
                primary: "#04151F",
                secondary: "#3f3f46",
            },
            ringColor: {
                focus: "#111",
            },
        },
    },
    plugins: [],
};
