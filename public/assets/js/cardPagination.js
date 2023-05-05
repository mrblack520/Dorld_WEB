console.log("CardPagination");
const cardDiv = document.getElementById("project-gallery");

console.log(cardDiv);

const cardArr = [
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img1.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img2.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img4.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img5.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img6.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img7.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img8.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img9.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
    },
    {
        name: "Creative Design",
        type: "Photograpy",
        imagePath: "assets/images/gal/img3.jpg",
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

