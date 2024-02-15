export default function dropdown() {
    const dropdownBtn = document.getElementById("user-dropdown-activator");
    const dropdown = document.getElementById("user-dropdown");

    dropdownBtn.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
        if (!dropdown.classList.contains("hidden")) {
            setTimeout(() => {
                document.addEventListener(
                    "click",
                    (e) => {
                        if (!dropdown.contains(e.target)) {
                            dropdown.classList.add("hidden");
                        }
                    },
                    { once: true }
                );
            }, 200);
        }
    });
}
