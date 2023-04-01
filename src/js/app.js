/*
!(i) 
Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
Или когда импортирован весь файл, например import "files/script.js";
Неиспользуемый (не вызванный) код в итоговый файл не попадает.

Если мы хотим добавить модуль следует его расскоментировать
*/
import {
  isWebp,
  headerFixed,
  togglePopupWindows,
  addTouchClass,
  addLoadedClass,
  menuInit,
} from './modules'
/* Раскомментировать для использования */
import { MousePRLX } from './libs/parallaxMouse'

/* Раскомментировать для использования */
// import AOS from 'aos'

/* Раскомментировать для использования */
// import Swiper, { Navigation, Pagination } from 'swiper'

// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = true

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML
! (i) необходимо для корректного отображения webp из css 
*/
isWebp()
/* Добавление класса touch для HTML если браузер мобильный */
/* Раскомментировать для использования */
// addTouchClass();
/* Добавление loaded для HTML после полной загрузки страницы */
/* Раскомментировать для использования */
// addLoadedClass();
/* Модуль для работы с меню (Бургер) */
/* Раскомментировать для использования */
// menuInit()

/* Библиотека для анимаций ===============================================================================
 *  документация: https://michalsnik.github.io/aos
 */
// AOS.init();
// =======================================================================================================

// Паралакс мышей ========================================================================================
const mousePrlx = new MousePRLX({})
// =======================================================================================================

// Фиксированный header ==================================================================================
// headerFixed()
// =======================================================================================================

/* Открытие/закрытие модальных окон ======================================================================
* Чтобы модальное окно открывалось и закрывалось
* На окно повешай атрибут data-type="<название окна>"
* И на кнопку, которая вызывает окно так же повешай атрибут data-type="<название окна>"

* На обертку(враппер) окна добавь класс _overlay-bg
* На кнопку для закрытия окна добавь класс button-close
*/
/* Раскомментировать для использования */
// togglePopupWindows()
// =======================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  const skillsBoxs = document.querySelectorAll('.skills__circles'),
    slillsLevel = document.querySelectorAll('.skills__circle'),
    bannerItems = document.querySelectorAll('.banner__item');

  function getRandomArbitrary(start, end) {
    return Math.floor(Math.random() * (end - start + 1)) + start;
  }


  let activeBox = setTimeout(function boxRandom() {
    skillsBoxs.forEach(item => {
      item.classList.remove('active');
    });
    const randomItem = getRandomArbitrary(0, skillsBoxs.length - 1);
    skillsBoxs[randomItem].classList.add('active');
    activeBox = setTimeout(boxRandom, 4000); // (*)
  }, 4000);

  slillsLevel.forEach(item => {
    item.addEventListener('click', () => {
      const randomItem = getRandomArbitrary(1, bannerItems.length);
      bannerItems[randomItem].classList.toggle('hidden')
    });
  })
})

