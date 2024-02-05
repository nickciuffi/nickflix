export default function movieInput() {
    const input = document.getElementById("movie-input-file");
    const label = document.getElementById("movie-input-file-name-shower");
    input.addEventListener("change", () => {
        if (!input.files[0]) return;
        let name = input.files[0].name;
        if (name.length > 10) {
            name = name.substring(0, 10);
        }
        label.innerHTML = name;
    });
}
