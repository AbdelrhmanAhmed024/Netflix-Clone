const faqList = document.getElementsByClassName('question');

for (let i = 0; i < faqList.length; i++) {
  faqList[i].addEventListener('click', function () {
    let answer = this.nextElementSibling;
    let icon = this.querySelector('.fa');

    this.classList.toggle('active-q');
    answer.classList.toggle('active-a');

    if (icon.classList.contains('fa-plus')) {
      icon.classList.remove('fa-plus');
      icon.classList.add('fa-times');
    } else {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-plus');
    }

    for (let j = 0; j < faqList.length; j++) {
      if (faqList[j] !== this) {
        let otherAnswer = faqList[j].nextElementSibling;
        let otherIcon = faqList[j].querySelector('.fa');

        if (otherAnswer.classList.contains('active-a')) {
          faqList[j].classList.remove('active-q');
          otherAnswer.classList.remove('active-a');
          otherIcon.classList.remove('fa-times');
          otherIcon.classList.add('fa-plus');
        }
      }
    }
  });
}


window.addEventListener('load', () =>{
  setTimeout(()=>{
      document.getElementById('pre-load').style.display = 'none';
      document.getElementById('container').style.display = 'block';
  },10600);
});