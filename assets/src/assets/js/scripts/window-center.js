export default function () {
    function windowCenter() {
        const number = `${document.documentElement.clientWidth / 2}px`;
        document.documentElement.style.setProperty('--window-center', number);
    }

    windowCenter();
    window.onresize = windowCenter;
}
