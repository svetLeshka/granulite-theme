import Swiper from "swiper/bundle";

export default function() {
    console.log('script init');

    const delay = 300;
    let animationTimer = null;

    //Swiper

    const lab = document.querySelector('.lab');
    if(lab) {
        const prev = lab.querySelector('.lab__prev');
        const next = lab.querySelector('.lab__next');
        const swiper = new Swiper(lab, {
            speed: 300,
            effect: 'fade',
            autoHeight: true,
            allowTouchMove: false,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
        });
    }

    const prod = document.querySelector('.prod-swiper__swiper');
    if(prod) {
        const prev = prod.querySelector('.prod-swiper__prev');
        const next = prod.querySelector('.prod-swiper__next');
        const swiper = new Swiper(prod, {
            speed: 300,
            allowTouchMove: false,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
        });
    }

    const app = document.querySelector('.app');
    if(app) {
        const prev = app.querySelector('.app__prev');
        const next = app.querySelector('.app__next');
        const swiper = new Swiper(app, {
            speed: 300,
            effect: 'fade',
            autoHeight: true,
            allowTouchMove: false,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
        });
    }

    //Handle tabs
    const granTabs = document.querySelectorAll('.gran-tabs__wrapper');
    const tabsBtns = document.querySelectorAll('.gran-tab__btns > button');
    const tabsOffset = [];
    
    const initTabs = () => {
        granTabs.forEach((item, order) => {
            item.children[0].classList.add('active');
            tabsOffset.push(Array(item.children.length).fill(0));
            const comp = item.getBoundingClientRect();
            Array.from(item.children).forEach((child, index) => {
                const diff = child.getBoundingClientRect().left - comp.left;
                child.style.transform = `translateX(-${diff}px)`;
                tabsOffset[order][index] = diff;
            });
        })
    }
    const handleTabs = (event) => {
        if(animationTimer != null) return;
        const e = event.target.closest('button');
        const wrapper = e.closest('.gran-tabs__wrapper');
        const index = Array.from(e.closest('.gran-tab__btns').children).findIndex(elem => elem == e);
        if(index == wrapper.dataset.slide) return;
        const next = wrapper.children[index];
        const cur = wrapper.children[Number(wrapper.dataset.slide)];
        next.classList.add('active');
        cur.classList.remove('active');
        wrapper.dataset.slide = index;
        wrapper.style.transition = 'height 0.3s ease-in';
        wrapper.style.height = cur.scrollHeight + 'px';
        setTimeout(() => wrapper.style.height = next.scrollHeight + 'px', 0);
        animationTimer = setTimeout(() => {
            animationTimer = null;
            wrapper.style.transition = '';
        }, delay);
    }
    if(tabsBtns.length) {
        initTabs();
        tabsBtns.forEach(item => item.addEventListener('click', handleTabs));
    }

    //Observable objects

    const prevTabWidth = Array(granTabs.length).fill(0);
    const changeTabText = () => {
        granTabs.forEach((item, order) => {
            let activeBtn = 0;
            Array.from(item.children).forEach(child => {
                const header = child.querySelector('.gran-tab__header');
                const tabs = child.querySelector('.gran-tab__btns');
                if(header.getBoundingClientRect().right < tabs.getBoundingClientRect().right - prevTabWidth[order]
                    && prevTabWidth[order] != 0 && document.body.clientWidth > 576) {
                        prevTabWidth[order] = tabs.clientWidth;
                    Array.from(tabs.children).forEach((btn, index) => {
                            btn.querySelector('span:nth-child(1)').style.display = '';
                            btn.querySelector('span:nth-child(2)').style.paddingLeft = '';
                    })
                } else if(header.getBoundingClientRect().right > tabs.getBoundingClientRect().left
                    && document.body.clientWidth > 576) {
                    prevTabWidth[order] = tabs.clientWidth;
                    Array.from(tabs.children).forEach((btn, index) => {
                        if(index != activeBtn) {
                            btn.querySelector('span:nth-child(1)').style.display = 'none';
                            btn.querySelector('span:nth-child(2)').style.paddingLeft = '0px';
                        }
                    })
                }
                activeBtn++;
            })
        })
    }
    const translateTabs = () => {
        granTabs.forEach((item, order) => {
            const comp = item.getBoundingClientRect();
            Array.from(item.children).forEach((child, index) => {
                const compChild = child.getBoundingClientRect();
                const diff = tabsOffset[order][index] + (compChild.left - comp.left);
                child.style.transform = `translateX(-${diff}px)`;
                tabsOffset[order][index] = diff;
            });
        })
    }
    const changeTabsHeight = () => {
        granTabs.forEach(item => {
            const index = item.dataset.slide;
            item.style.height = item.children[index].scrollHeight + 'px';
        })
    }
    if(granTabs.length) {
        changeTabText();
        translateTabs();
        changeTabsHeight();
        window.addEventListener('resize', () => {
            translateTabs();
            changeTabText();
            changeTabsHeight();
        });
    }

    //Accordion

    const ads = document.querySelectorAll('.ads__list > li');

    const handleAccordion = (event) => {
        if(document.body.clientWidth > 576 || animationTimer) return;
        const e = event.target.closest('li');
        const curIndex = Array.from(ads).findIndex(elem => elem.classList.contains('active'));
        if(curIndex != -1) {
            const curE = ads[curIndex].querySelector('div > div');
            curE.style.height = curE.scrollHeight + 'px';
            ads[curIndex].classList.remove('active');
            animationTimer = setTimeout(() => {
                curE.style.height = '0px';
            }, 0);
            setTimeout(() => {
                animationTimer = null;
                curE.style.height = '';
            }, delay);
            if(ads[curIndex] == e) return;
        }
        const div = e.querySelector('div > div');
        div.style.height = '0px';
        e.classList.add('active');
        animationTimer = setTimeout(() => div.style.height = div.scrollHeight + 'px', 0);
        setTimeout(() => {
            animationTimer = null;
            div.style.height = '';
        }, delay);
    }
    if(ads.length) {
        ads.forEach(item => item.addEventListener('click', handleAccordion));
    }
    
    console.log('script fin');
}