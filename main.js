const btn_menu = document.querySelector(".btn_show_menu");
const show_menu = document.querySelector(".show_menu");
const banner = document.querySelector(".banner");
const bannerImg = document.querySelectorAll(".banner_img")
const backBanner = document.querySelector(".banner_back");
const nextBanner = document.querySelector(".banner_next");
const productSlideContain = document.querySelectorAll(".contain_product_slide")
function slideInfoProduct(slide) {
    const infoProduct = document.querySelectorAll(".info_product");
    const activeInfoProduct = document.querySelector(".info_product.active_info");

    activeInfoProduct.classList.remove("active_info");

    infoProduct[slide].classList.add("active_info");
}
function choseInfoProduct() {


    const infoProduct = document.querySelectorAll(".info_product");
    infoProduct.forEach((info, index) => {
        info.addEventListener("click", function () {

            const activeInfoProduct = document.querySelector(".info_product.active_info");
            activeInfoProduct.classList.remove("active_info");
            infoProduct[index].classList.add("active_info");

            banner.style.transform = `translateX(-${index * 100}%)`;

            return slideImg(index)
        })

    })

}





btn_menu.addEventListener("click", function () {
    show_menu.classList.toggle("active_menu");
    btn_menu.classList.toggle("active");
})
var slide = 0;
function slideNextBanner() {
    slide++;
    if (slide > bannerImg.length - 1) {
        slide = 0;
    }


    return slideImg()
}
function slideBackBanner() {
    slide--;
    if (slide < 0) {
        slide = bannerImg.length - 1;
    }
    return slideImg()
}
function slideImg(index) {
    if (index || index === 0) {
        slide = index;
        return slide;
    }

    return banner.style.transform = `translateX(-${slide * 100}%)`;

}
var timerId;
function autoSlide() {
    timerId = setInterval(function () {
        slideNextBanner();
        slideInfoProduct(slide);

    }, 6000);

}
backBanner.addEventListener("click", () => {

    slideBackBanner();
    slideInfoProduct(slide);

})
nextBanner.addEventListener("click", () => {

    slideNextBanner();
    slideInfoProduct(slide);

})
backBanner.addEventListener("mouseover", () => {
    clearInterval(timerId);

})
backBanner.addEventListener("mouseout", () => {
    autoSlide()
})
nextBanner.addEventListener("mouseover", () => {
    clearInterval(timerId);
})
nextBanner.addEventListener("mouseout", () => {
    autoSlide();

})
choseInfoProduct()

autoSlide();



// slideProduct.offsetLeft = 120 + "px";
// console.log(slideProduct.offsetLeft);
// console.dir(slideProduct);



const productArr = [

    {
        image: "img/637835361843548009_samsung-galax.jpg",
        name: "Samsung Galaxy A13",
        price: "32,990,000",
        before_price: "35,990,000",
    },
    {
        image: "img/638071496079965111_oppo-reno8-z.jpg",
        name: "OPPO Reno8 Z 5G 8GB - 256GB",
        price: "9.490.000",
        before_price: "10.490.000",
    },
    {
        image: "img/638028873543676599_samsung-galax.jpg",
        name: "Samsung Galaxy S22 Ultra 5G 128GB",
        price: "22.990.000",
        before_price: "30.990.000",
    },


    {
        image: "img/638018700298075854_lenovo-gaming.jpg",
        name: "Lenovo Gaming Legion 5 15ARH7 R5 6600H/82RE002VVN",
        price: "25.590.000",
        before_price: "31.990.000",
    },
    {
        image: "img/638007285202545738_iphone-14-dd.jpg",
        name: "iPhone 14 Pro Max 128GB",
        price: "32,990,000",
        before_price: "35,990,000",
    },
    {
        image: "img/638007285202545738_iphone-14-pro.jpg",
        name: "iPhone 14 Pro Max 128GB",
        price: "32,990,000",
        before_price: "35,990,000",
    },


    {
        image: "img/vivo.jpg",
        name: "Vivo Y35 8GB-128GB",
        price: "6.590.000",
        before_price: "6.990.000",
    },
    {
        image: "img/lenovo2.jpg",
        name: "Lenovo Gaming IdeaPad 3 15IAH7 i5 12500H/82S900H2VN",
        price: "17.990.000",
        before_price: "20.990.000",
    },
    {
        image: "img/637703258653853689_tai-nghe-airp.jpg",
        name: "Tai nghe AirPods Pro 2021",
        price: "4.999.000",
        before_price: "5.999.000",
    },






]
function renderProduct(productArr) {
    const divCreate = document.createElement("div");
    const contain_product = document.querySelector(".contain_product");
    divCreate.classList.add("products");


    const htmls = productArr.map((item, index) => {
        return `<div class="contain_product_slide">

        <!-- -----product---- -->
        <div class="product d-f f-d">
            <div class="product_img d-f jf-c al-c">
                <a href="#">
                    <img src="${item.image}" alt="">
                </a>
            </div>
            <div class="product_info d-f f-d">
                <span class="product_name">${item.name}</span>
                <div class="contain_product_price d-f al-c">
                    <span class="product_price">${item.price}đ</span>
                    <span class="product_before_product"><del>${item.before_price}đ</del></span>
                </div>
            </div>
        </div>
       

    </div>`
    })


    divCreate.innerHTML = htmls.join("");
    contain_product.appendChild(divCreate);


}
renderProduct(productArr);
let isDown = false;
let startX;
let scrollLeft;
const slideProduct = document.querySelector(".products");

slideProduct.addEventListener("mousedown", function (e) {
    isDown = true;
    startX = e.pageX - slideProduct.offsetLeft;
    scrollLeft = slideProduct.scrollLeft;
    console.log("e.pageX up,", e.pageX)

})
slideProduct.addEventListener("mouseleave", function (e) {
    isDown = false;
})
slideProduct.addEventListener("mouseup", function (e) {
    isDown = false;
})
slideProduct.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slideProduct.offsetLeft;
    const walk = (x - startX) * 3;
    slideProduct.scrollLeft = scrollLeft - walk;
    console.log("startX,", startX);

    console.log("e.pageX,", e.pageX);
    console.log("x,", x);
    console.log("walk,", walk);
    console.log("scrollLeft,", scrollLeft);
    console.log(" slideProduct.scrollLeft,", slideProduct.scrollLeft);
    // console.log(slideProduct.scrollLeft)
    // console.log(walk)
})



