import scrollToNextSection from "../util/scroll-to-next-section";
import swiper from "../util/merch-swiper";

export default {
  init() {
    console.log('home');
  },
  finalize() {
    scrollToNextSection();
    swiper.init();
  },
};
