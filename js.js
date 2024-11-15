

    //PHAN Trang
 function imgSlide() {
                    index++;
                    if (index >= imgNumber) {
                        index = 0;
                    }

                    slider(index);
                }
                function slider(index) {
                    imgContainer.style.left = "-" + index * 100 + "%";
                    const dotActive = document.querySelector(".active");
                    dotActive.classList.remove("active");
                    dotItem[index].classList.add("active");
                }





            // MENU ITEM
            const header = document.querySelector("header");
                window.addEventListener("scroll", function(){
                      x = window.pageYOffset;
                    if(x > 0) {
                          header.classList.add("sticky");
                    }
                    else {
                        header.classList.remove("sticky");
                    }
                })
      

                const imgPosition = document.querySelectorAll('.aspect-ratio-169 img');
                const imgContainer = document.querySelector('.aspect-ratio-169');
                const dotItem = document.querySelectorAll('.dot');
                let imgNumber = imgPosition.length;
                let index = 0;

                imgPosition.forEach(function (image, index) {
                    image.style.left = index * 100 + "%";
                    dotItem[index].addEventListener("click", function () {
                        slider(index);
                    })
                });

                function imgSlide() {
                    index++;
                    if (index >= imgNumber) {
                        index = 0;
                    }

                    slider(index);
                }
                function slider(index) {
                    imgContainer.style.left = "-" + index * 100 + "%";
                    const dotActive = document.querySelector(".active");
                    dotActive.classList.remove("active");
                    dotItem[index].classList.add("active");
                }

                setInterval(imgSlide, 5000);

        //    MENU SLDEBAR CATEGORY 

    const itemSlidebar  = document.querySelectorAll(".cartegory-left-li");
     itemSlidebar.forEach(function(menu , index) {
        menu.addEventListener("click" , function(){
             menu.classList.toggle("block")
        })
        
        
        });

const bigImg = document.querySelector(".product-content-left-big-img img");
const smallImg = document.querySelectorAll(".product-content-left-small-img img");

smallImg.forEach(function(imgItem , x){
    imgItem.addEventListener("click", function() {
        bigImg.src = imgItem.src;
    })
})





//-------------------------Products------------------------
const gioithieu = document.querySelector(".product-content-right-bottom-content-title-item-gioithieu");
const chitiet = document.querySelector(".product-content-right-bottom-content-title-item-chitiet");
const baoquan = document.querySelector(".product-content-right-bottom-content-title-item-baoquan");

if(gioithieu) {
      gioithieu.addEventListener("click",function() {
         document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block";
          document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none";
           document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none";
      });
}

if(chitiet) {
      chitiet.addEventListener("click",function() {
         document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none";
          document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block";
           document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none";
      });
}

if(baoquan) {
      baoquan.addEventListener("click",function() {
         document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none";
          document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none";
           document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block";
      });
}


const button = document.querySelector(".product-content-right-bottom-top");
if(button) {
    button.addEventListener("click",function(){
       document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB");
    });
}

