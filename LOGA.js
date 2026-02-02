
const paths = document.querySelectorAll('path')
document.querySelector('#Licence1').addEventListener("click",even =>
    paths.forEach(p => {
        p.style.fill = '#82c46c';  // vert
    })
)
document.querySelector('#Master1').addEventListener("click",even =>
    paths.forEach(p => {
        p.style.fill = 'red';      // rouge
    })
)







