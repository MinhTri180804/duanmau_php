const navigationLeft = document.querySelector('.navigation_voucher-left');
        const navigationRight = document.querySelector('.navigation_voucher-right');
        const listVoucher = document.querySelector('.list_voucher');
        const vouchers = document.querySelectorAll('.list_voucher-item');
        const voucher = document.querySelector('.list_voucher-item');
        const gapVoucher = 10;
        const widthVoucher = voucher.offsetWidth + gapVoucher;
        let transformX = 0

        navigationLeft.addEventListener('click', () => {
            if (transformX < 0) {
                transformX += widthVoucher;
                listVoucher.style.transform = `translateX(${transformX}px)`;
            }
        });

        navigationRight.addEventListener('click', () => {
            if (transformX > (-(vouchers.length - 1) * widthVoucher)) {
                transformX -= widthVoucher;
                listVoucher.style.transform = `translateX(${transformX}px)`;
            } else {
                transformX = 0;
                listVoucher.style.transform = `translateX(${transformX}px)`;
            }
        })

        // select img product demo

        const listImgDemo = document.querySelectorAll('.list_img-demo-item img');
        const imgSelect = document.querySelector('.img_select img');

        listImgDemo.forEach(imgDemo => {
            imgDemo.addEventListener('click', () => {
                const src = imgDemo.getAttribute('src');
                imgSelect.setAttribute('src', src);
                document.querySelector('.list_img-demo-item img.active').classList.remove('active');
                imgDemo.classList.add('active');
                console.log(1);
            })
        })

        // select color
        const listColor = document.querySelectorAll('.list_color-item');
        const colorAbout = document.querySelector('.color_about-value');

        listColor.forEach(color => {
            color.addEventListener('click', () => {
                document.querySelector('.list_color-item.active').classList.remove('active');
                color.classList.add('active');
                const value = color.getAttribute('value');
                colorAbout.innerHTML = value;
            })
        })

        // select size

        const listSize = document.querySelectorAll('.list_size-item');
        const sizeAbout = document.querySelector('.size_about-value');

        listSize.forEach(size => {
            size.addEventListener('click', () => {
                document.querySelector('.list_size-item.active').classList.remove('active');
                size.classList.add('active');
                const value = size.getAttribute('value');
                sizeAbout.innerHTML = value;
            })
        })

        // change quality product
        const buttonUp = document.querySelector('.quality_option-up');
        const buttonDown = document.querySelector('.quality_option-down');
        const inputQuality = document.querySelector('.quality_product-input');

        buttonUp.addEventListener('click', () => {
            let value = parseInt(inputQuality.value);
            value++;
            inputQuality.value = value;
        })

        buttonDown.addEventListener('click', () => {
            let value = parseInt(inputQuality.value);
            if (value > 1) {
                value--;
                inputQuality.value = value;
            }
        })
        inputQuality.addEventListener('change', (e) => {
            const value = e.target.value;
            if (value < 1 || isString(value)) {
                inputQuality.value = 1;
            } else {
                inputQuality.value = value;
            }
        })

        // accordion about product
        const buttonAccordion = document.querySelectorAll('.accordion_item-button');
        const accordionContent = document.querySelectorAll('.accordion_item-content');
        const iconShowAccordion = document.querySelectorAll('.icon_show-accordion i');

        buttonAccordion.forEach((button, index) => {
            button.addEventListener('click', () => {
                accordionContent[index].classList.toggle('active');
                iconShowAccordion[index].classList.toggle('active');
            })
        })