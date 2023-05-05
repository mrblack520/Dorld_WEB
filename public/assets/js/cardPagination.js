console.log("CardPagination");
const cardDiv = document.getElementById("project-gallery");

console.log(cardDiv);

const cardArr = [
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/1.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/2.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/web/Snas.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/3.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/4.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/5.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/web/Dorld.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/6.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/7.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/8.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/9.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/10.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/11.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/12.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/13.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/14.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/15.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/16.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/17.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/18.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/19.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/20.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/21.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/22.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/23.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/24.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/25.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/26.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/27.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/28.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/29.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art/30.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/1.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/2.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/4.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/5.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/6.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/7.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/8.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/9.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/10.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/11.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/12.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/13.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/14.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/15.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/16.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/17.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/18.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/19.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/20.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/21.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/22.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/23.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/24.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/25.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/26.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/27.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/art2/28.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/banner/2.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/banner/3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/banner/4.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/1.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/2.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/3.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/4.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/5.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/6.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/8.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/9.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/10.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/11.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/logo/12.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/1.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/2.png",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/3.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/4.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/5.jpeg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/shirt/6.jpeg",
    },
];
let page = 0;
const showCardWithPagination = () => {
    cardArr.slice(page, page + 3).map((item) => {
        cardDiv.innerHTML += `
    <div class="grid-item col-md-4 col-sm-6 col-xs-12 mockup">
        <figure>
            <img src=${item.imagePath} alt="img04">
            <figcaption class="fig-caption">
                <i class="fa fa-search"></i>
                <h5 class="title">${item.name}</h5>
                <span class="sub-title">${item.type}</span>
                <a href=${item.imagePath} data-fancybox data-src="#s1"></a>
            </figcaption>
        </figure>
    </div>`;
    });
    page += 3;
};
showCardWithPagination();

