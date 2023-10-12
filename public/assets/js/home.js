const listVoucher = document.querySelector('.list_voucher');
        const next = document.querySelector('.negation_voucher-right');
        const prev = document.querySelector('.negation_voucher-left');
        const widthVoucher = 342;
        let translateValue = 0;
        next.addEventListener('click', () => {
            if (translateValue > -((listVoucher.children.length - 1) * widthVoucher)) {
                translateValue -= widthVoucher;
                listVoucher.style.transform = `translateX(${translateValue}px)`;
            } else {
                listVoucher.style.transform = `translateX(0px)`;
                translateValue = 0;
            }
        })

        prev.addEventListener('click', () => {
            if (translateValue < 0) {
                translateValue += widthVoucher;
                listVoucher.style.transform = `translateX(${translateValue}px)`;
            }
        })

        const slides = document.querySelectorAll('.slider_img');
        const listSlider = document.querySelector('.slider_list');
        const listDot = document.querySelector('.list_dot');
        const dots = document.querySelectorAll('.list_dot-item');
        const navigationLeft = document.querySelector('.negation-left')
        const navigationRight = document.querySelector('.negation-right')

        const interval = 3000;
        let slideInterval;
        let currentIndex = 0;

        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlide();
        }

        const prevSlide = () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide();
        }

        const updateSlide = () => {
            listSlider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        const startSlide = () => {
            slideInterval = setInterval(nextSlide, interval);
        }
        navigationLeft.addEventListener('click', prevSlide())
        navigationRight.addEventListener('click', () => nextSlide())
        startSlide();