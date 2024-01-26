export default function dropdown() {
    const dropdownBtn = document.getElementById("user-dropdown-activator");
    const dropdown = document.getElementById("user-dropdown");
    
    dropdownBtn.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
    });
}
