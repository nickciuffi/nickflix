const alertTrigger = document.querySelectorAll(".alert-trigger");
const alert = document.getElementById("alert");
const titleEl = alert.querySelector("#title");
const descriptionEl = alert.querySelector("#description");
const cancelBtn = alert.querySelector("#cancel");
const confirmBtn = alert.querySelector("#confirm");

function showAlert() {
    alert.style.zIndex = "30";
    alert.style.opacity = "1";
}

function hideAlert() {
    alert.style.zIndex = "0";
    alert.style.opacity = "0";
}

function handleCancelClick(trigger) {
    hideAlert();
    trigger.addEventListener("click", handleTriggerClick, { once: true });
}

function handleConfirmBtn(trigger) {
    hideAlert();
    trigger.click();
}

function handleAllClicks(event, trigger) {
    if (!alert.contains(event.target)) {
        handleCancelClick(trigger);
    } else if (event.target !== cancelBtn && event.target !== confirmBtn) {
        document.addEventListener("click", (e) => handleAllClicks(e, trigger), {
            once: true,
        });
    }
}

function handleTriggerClick(event) {
    event.preventDefault();
    const button = event.target;
    const title = button.dataset.title;
    const description = button.dataset.description;
    titleEl.innerHTML = title;
    descriptionEl.innerHTML = description;
    showAlert();
    setTimeout(() => {
        document.addEventListener(
            "click",
            (e) => handleAllClicks(e, event.target),
            { once: true }
        );
    }, 200);

    cancelBtn.addEventListener("click", () => handleCancelClick(event.target), {
        once: true,
    });
    confirmBtn.addEventListener("click", () => handleConfirmBtn(event.target), {
        once: true,
    });
}

export function initAlert() {
    if (alertTrigger.length === 0 || !alert) return;

    alertTrigger.forEach((trigger) => {
        trigger.addEventListener("click", handleTriggerClick, { once: true });
    });
}
