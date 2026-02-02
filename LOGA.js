
const paths = document.querySelectorAll('path')
document.querySelector('#Licence1').addEventListener("click",even =>
    paths.forEach(p => {
        p.classList.remove('master');
        p.classList.add('licence');
    })
)
document.querySelector('#Master1').addEventListener("click",even =>
    paths.forEach(p => {
        p.classList.remove('licence');
        p.classList.add('master');
    })
)







