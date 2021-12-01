class Carousel {
  constructor (htmlElementId) {
    // criando as variáveis
    this.slider = document.getElementById(htmlElementId);
    this.elements = document.querySelectorAll("#" + htmlElementId + " > div");
    this.currentElementIndex = 0;
    this.canSlide = true;

    // organizando o slider e os banners
    this.slider.classList.add('slider-container-d4d');

    for (var i = 0; i <= this.elements.length - 1; i++) {
      this.elements[i].classList.add('slider_div-d4d');
      this.elements[i].style.left = "-100%";

      this.elements[i].querySelector(':first-child').style = "width: 100%; height: 100%";

    }
    this.elements[0].style.left = "0%";
  }

  next() {
    // trazendo as variáveis necessárias
    let elements = this.elements;
    let currentElementIndex = this.currentElementIndex;

    // obtendo o próximo índice
    if (currentElementIndex != elements.length - 1)
      this.currentElementIndex += 1;
    else
      this.currentElementIndex = 0;

    console.log("the current element index has been changed to " + this.currentElementIndex);
    return (this.currentElementIndex);
  }

  preview() {
    // trazendo as variáveis necessárias
    let elements = this.elements;
    let currentElementIndex = this.currentElementIndex;

    // obtendo o índice anterior
    if (currentElementIndex > 0 && currentElementIndex < elements.length)
      this.currentElementIndex -= 1;
    else if (currentElementIndex === 0)
      this.currentElementIndex = elements.length - 1;

    
    console.log("the current element index has been changed to " + this.currentElementIndex);
    return (this.currentElementIndex);
  }

  slideCarouselRightToLeft(delay=450) {
    if (this.canSlide == true) {
      // enquanto isto estiver rodando, canSlide = false
      this.canSlide = false;

      console.log("slide to the left");

      // trazendo as variáveis necessárias
      let currentElementIndex = this.currentElementIndex;
      let nextElementIndex = this.next();
      let elements = this.elements;

      // reposicionando os demais elementos
      for (var n=0; n < elements.length; n++) {
        if (n != currentElementIndex) {
          this.elements[n].style.transition = "none";
          this.elements[n].style.left = "100%";

        }
      }

      // mudando o transition
      setTimeout(() => {
        elements[currentElementIndex].style.transition = "0.5s linear left";
        elements[nextElementIndex].style.transition = "0.5s linear left";

      });

      // fazendo transição
      setTimeout(() => {
        elements[currentElementIndex].style.left = "-100%";
        elements[nextElementIndex].style.left = "0%";

      });

      // atualizar o indíce do elemento atual
      this.currentElementIndex = nextElementIndex;

      // canSlide = true
      setTimeout(() => {
        this.canSlide = true
      }, delay);
      
    } else console.log("coudn't slide")
    
  }

  slideCarouselLeftToRight(delay=450) {
    if (this.canSlide == true) {
      // enquanto isto estiver rodando, canSlide = false
      this.canSlide = false;

      console.log("slide to the right");

      // trazendo as variáveis necessárias
      let currentElementIndex = this.currentElementIndex;
      let nextElementIndex = this.next();
      let elements = this.elements;

      // reposicionando os demais elementos
      for (var n=0; n < elements.length; n++) {
        if (n != currentElementIndex) {
          this.elements[n].style.transition = "none";
          this.elements[n].style.left = "-100%";

        }
      }

      // mudando o transition
      setTimeout(() => {
        elements[currentElementIndex].style.transition = "0.5s linear left";
        elements[nextElementIndex].style.transition = "0.5s linear left";

      });

      // fazendo transição
      setTimeout(() => {
        elements[currentElementIndex].style.left = "100%";
        elements[nextElementIndex].style.left = "0%";

      });

      // atualizar o indíce do elemento atual
      this.currentElementIndex = nextElementIndex;

      // canSlide = true
      setTimeout(() => {
        this.canSlide = true
      }, delay);

    } else console.log("coudn't slide")

  }

  slide(delay=5000) {
    setInterval(() => {
      this.slideCarouselRightToLeft();
    }, delay);
  }

}
