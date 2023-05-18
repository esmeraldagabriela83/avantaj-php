console.log("hello from toastAntibiotics.js");

const toastTriggerAntibiotics = document.getElementById('liveToastBtnAntibiotics')
const toastLiveExampleAntibiotics = document.getElementById('liveToastAntibiotics')
if (toastTriggerAntibiotics) {
    toastTriggerAntibiotics.addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExampleAntibiotics)

    toast.show()
  })
}

























