// phần details
let listDivImg = document.querySelectorAll('.list-img div')
let next = document.querySelector('.next')
let prev = document.querySelector('.prev')
let imgWrap = document.querySelector('.img-wrap img')

let currentIndex = 0

setCurrent(currentIndex)

function setCurrent(index) {
	currentIndex = index
	imgWrap.src = listDivImg[currentIndex].querySelector('img').src

	// remove all active img
	listDivImg.forEach((item) => {
		item.classList.remove('active')
	})

	// set active
	listDivImg[currentIndex].classList.add('active')
}

listDivImg.forEach((img, index) => {
	img.addEventListener('click', (e) => {
		setCurrent(index)
	})
})

next.addEventListener('click', () => {
	if (currentIndex == listDivImg.length - 1) {
		currentIndex = 0
	} else currentIndex++

	setCurrent(currentIndex)
})

prev.addEventListener('click', () => {
	if (currentIndex == 0) currentIndex = listDivImg.length - 1
	else currentIndex--

	setCurrent(currentIndex)
})

//phần mô ta nguyên liệu và bảo quản
const menuTab = document.querySelector(".tab-list");
menuTab.addEventListener('click',function(e){
      if(e.target.classList.contains('tab-item')){
      const target = e.target.getAttribute("data-target")
      console.log(target);
      menuTab.querySelector(".active").classList.remove('active');
      e.target.classList.add('active');

      const tab = document.querySelector('.product-tap')
      tab.querySelector(".tab-content.active").classList.remove('active');
      tab.querySelector(target).classList.add('active');
      }
  })